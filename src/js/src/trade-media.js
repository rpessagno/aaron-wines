//==============================
// Trade & Media
//==============================

// Modal
$('.js-trade-modal-link').click(function() {
  var link = $(this);
  var linkLoc = link.attr('href').replace('#', '');
  // console.log(linkLoc);
  $('.trade-assets[data-trade="' + linkLoc + '"]').addClass('show');
  setTimeout(function() {
    $('.trade-assets[data-trade="' + linkLoc + '"]').focus();
  }, 100);
  $('.trade-assets-overlay').addClass('show');

  return false;
});


$('.js-trade-assets-close, .trade-assets-overlay').click(function() {
  
  var assetsLoc = $('.trade-assets.show').attr('data-trade');
  // console.log(assetsLoc);
  setTimeout(function() {
    $('.js-trade-modal-link[href="#' + assetsLoc + '"]').focus();
  }, 10);

  $('.trade-assets').removeClass('show');
  $('.trade-assets-overlay').removeClass('show');

  return false;
});


// Accordion
$('.trade-assets-section .h4').click(function() {
  var itemsTitle = $(this);
  var itemsAssets = itemsTitle.next('.trade-assets-items');
  var itemsAssetsHeight = itemsAssets.height() + 70;
  var itemsSection = itemsTitle.parent('.trade-assets-section');

  $('.trade-assets-section').css({
    'height' : '50px'
  });

  if (itemsTitle.hasClass('active')) {
    itemsTitle.removeClass('active');
  }
  else {
    $('.trade-assets-section .h4').removeClass('active');
    itemsTitle.addClass('active');
    itemsSection.css({
      'height' : '' + itemsAssetsHeight + 'px'
    });
  }
  
});