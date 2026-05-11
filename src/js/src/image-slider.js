//==============================
// Image Slider
//==============================

var imageSlider = $('.image-slider-items');

imageSlider.slick({
  autoplay: false,
  speed: 600,
  slidesToShow: 1,
  swipeToSlide: true,
  dots: true,
  arrows: true,
  centerMode: true,
  centerPadding: '10%',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        centerPadding: '5%'
      }
    }
  ]
});
