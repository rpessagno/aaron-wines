//==============================
// Vineyards
//==============================

$('.feature-img-slider').slick({
  fade: true,
  arrows: false,
  dots: false,
  autoplay: true,
  autoplaySpeed: 10000,
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
  autoplay: true,
  autoplaySpeed: 10000,
  speed: 800,
  asNavFor: '.feature-img-slider',
  draggable: false
});

$('.feature-img').click(function() {
  $('.feature-content-slider').slick('slickNext');
});