//==============================
// Image Gallery
//==============================

var imageGallery = $('.image-gallery').masonry({
  itemSelector: '.image-gallery-item',
  percentPosition: true,
  gutter: 10
});

imageGallery.imagesLoaded().progress( function() {
  imageGallery.masonry('layout');
  setTimeout(function() {
    $('.image-gallery-item').addClass('show');
  }, 500);
});
