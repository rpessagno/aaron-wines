//==============================
// Vineyards
//==============================

$('.feature-img-slider').slick({
  fade: true,
  arrows: false,
  dots: false,
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 800,
  asNavFor: '.feature-content-slider',
  draggable: false,
  afterChange: function() {
    $('.coordinate').countTo('restart');
  }
});

$('.feature-content-slider').slick({
  fade: true,
  arrows: false,
  dots: true,
  // dotsClass: 'derp',
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 800,
  asNavFor: '.feature-img-slider',
  draggable: false
});

$('.feature-img').click(function() {
  $('.feature-content-slider').slick('slickNext');
});