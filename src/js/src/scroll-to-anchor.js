//==============================
// Scroll to Anchor
//==============================

var offsetHeight = 50;
var animationDuration = 1000;
var timeoutDuration = 100;

// on page load
var urlHash = window.location.hash;
var urlTarget = urlHash.replace('#', '');

$(window).on('load', function() {
  if (urlHash) {
    var getPos = $('[data-scroll-target="'+urlTarget+'"]').offset().top;
    setTimeout(function() {
      $('html, body').animate({ scrollTop: getPos - offsetHeight}, animationDuration);
    }, timeoutDuration);
  }
});

// on click
$('.js-scroll-to-anchor').click(function() {

  var windowPathname = '//' + window.location.host + window.location.pathname;
  var windowPathnameHttp = 'http://' + window.location.host + window.location.pathname;
  var windowPathnameHttps = 'https://' + window.location.host + window.location.pathname;
  var thisPathname = $(this).attr('href').split('#')[0];
  var thisPathnameHome = thisPathname + '/';
  // console.log(windowPathname, thisPathname, thisPathnameHome);  

  if (
    windowPathname === thisPathname ||
    windowPathnameHttp === thisPathname ||
    windowPathnameHttps === thisPathname ||
    windowPathname === thisPathnameHome ||
    windowPathnameHttp === thisPathnameHome ||
    windowPathnameHttps === thisPathnameHome
  ) {
    var thisHash = $(this).attr('href').split('#')[1];
    var hashElement = $('[data-scroll-target="'+thisHash+'"]');
    var linkPos = hashElement.offset().top;

    closeNav();

    setTimeout(function() {
      $('html, body').animate({ scrollTop: linkPos - offsetHeight}, animationDuration, function() {
        hashElement.attr('tabindex', '0').focus();
        $('html, body').scrollTop(linkPos - offsetHeight);
      });
    }, timeoutDuration);

    return false;
  }
  else {
    var getLocAnchor = $(this).attr('href').replace('#','');
    var anchorElement = $('[data-scroll-target="'+getLocAnchor+'"]');
    var getPosAnchor = anchorElement.offset().top;
    setTimeout(function() {
      $('html, body').animate({ scrollTop: getPosAnchor - offsetHeight}, animationDuration, function() {
        anchorElement.attr('tabindex', '0').focus();
        $('html, body').scrollTop(getPosAnchor - offsetHeight);
      });
    }, timeoutDuration);
    return false;
  }

});
