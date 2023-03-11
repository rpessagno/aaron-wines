//========================================
// Gulpfile
//========================================

const { src, dest, watch, series } = require('gulp');

//----------------------------------------
// Plugins
//----------------------------------------

const sass = require('gulp-sass')(require('sass'))
const autoprefixer  = require('gulp-autoprefixer');
const cssnano = require('gulp-cssnano');
const jshint = require('gulp-jshint');
const stylish = require('jshint-stylish');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const browsersync = require('browser-sync').create();

//----------------------------------------
// Variables
//----------------------------------------

var domainName   = 'aaronwines';
var themeFolder = './target/wp-content/themes/aaron-wines/';
var wineDirectFolder = 'winedirect-template/';

//----------------------------------------
// CSS
//----------------------------------------

function styles() {
  return src('src/scss/style.scss', { sourcemaps: true })
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(cssnano({
      zindex: false
    }))
    .pipe(dest(themeFolder, { sourcemaps: '.' } ));
}

function stylesWd() {
  return src('src/scss/winedirect.scss', { sourcemaps: true })
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(cssnano({
      zindex: false
    }))
    .pipe(dest(wineDirectFolder, { sourcemaps: '.' } ));
}

//----------------------------------------
// JS
//----------------------------------------

function jsConcat() {
  return src([ './src/js/lib/*.js', './src/js/src/global.js', './src/js/src/*.js' ], { sourcemaps: true })
    .pipe(concat('main.js'))
    .pipe(uglify())
    .pipe(dest(themeFolder + 'assets/js', { sourcemaps: '.' } ));
}

function jsConcatWd() {
  return src([ './src/js/lib/*.js', './src/js/src/global.js', './src/js/src/*.js' ], { sourcemaps: true })
    .pipe(concat('main.js'))
    .pipe(uglify())
    .pipe(dest(wineDirectFolder, { sourcemaps: '.' } ));
}

function jsLint() {
  return src('./src/js/src/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter(stylish));
}


//----------------------------------------
// Browsersync
//----------------------------------------

function browsersyncServe(cb) {
  browsersync.init({
    // MAMP
    proxy: 'local.' + domainName + '.com'
    // No MAMP
    // server: {
    //   baseDir: 'target'
    // }
  });
  cb();
}

function browersyncReload(cb) {
  browsersync.reload();
  cb();
}

//----------------------------------------
// Watch
//----------------------------------------

function watchTask() {
  watch(themeFolder + '**/*.php', browersyncReload);
  watch('src/scss/**/*.scss', series(styles, browersyncReload));
  watch('src/scss/**/*.scss', series(stylesWd, browersyncReload));
  watch('src/js/**/*.js', series(jsConcat, jsLint, browersyncReload));
  watch('src/js/**/*.js', series(jsConcatWd, jsLint, browersyncReload));
}

//----------------------------------------
// Tasks
//----------------------------------------

exports.default = series(
  styles,
  stylesWd,
  jsConcat,
  jsConcatWd,
  jsLint,
  browsersyncServe,
  watchTask
);

