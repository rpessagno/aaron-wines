//==============================
// Hero
//==============================

var heroSlider = $('.pb-hero-slider');

heroSlider.slick({
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 800,
  slidesToShow: 1,
  swipeToSlide: true,
  dots: false,
  arrows: true,
  pauseOnHover: false
});

var overviewHeroSlider = $('.overview-hero-slider');

overviewHeroSlider.slick({
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 800,
  slidesToShow: 1,
  swipeToSlide: true,
  fade: true,
  dots: false,
  arrows: false,
  pauseOnHover: false
});

$('.pb-hero-scroll').click(function() {
  var heroScroll = $(this);
  var nextElement = heroScroll.parent('.pb-hero').next().offset().top;
  var headerHeight = $('.header').height();
  $('html, body').animate({ scrollTop: nextElement - headerHeight }, 800);
  return false;
});
