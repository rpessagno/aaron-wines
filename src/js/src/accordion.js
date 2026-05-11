//==============================
// Accordion
//==============================

var accSpacing = 20;

// Accordion
$('.accordion-header').click(function() {
  var accTitle = $(this);
  var accContent = accTitle.next('.accordion-content');
  var accInner = accContent.find('.accordion-content-inner');
  var accContentHeight = accInner.height() + accSpacing;

  if (accTitle.hasClass('active')) {
    accTitle.removeClass('active');
    accContent.removeClass('active').css({
      'height' : '0'
    });
  }
  else {
    $('.accordion-header').removeClass('active');
    accTitle.addClass('active');
    $('.accordion-content').css({
      'height' : '0'
    });
    $('.accordion-content').removeClass('active');
    accContent.addClass('active').css({
      'height' : '' + accContentHeight + 'px'
    });
  }
  
});

$(window).resize(function() {
  $('.accordion-content.active .accordion-content-inner').each(function() {
    var thisAcc = $(this);
    var thisHeight = thisAcc.height() + accSpacing;
    thisAcc.parent('.accordion-content').css({
      'height' : '' + thisHeight + 'px'
    });
  });
});