//==============================
// Header
//==============================

$('.header-nav-button').click(function() {
  $('.header-nav-items').addClass('open');
  $('.header-nav-close').addClass('open');
});

$('.header-nav-close').click(function() {
  $('.header-nav-items').removeClass('open');
  $('.header-nav-close').removeClass('open');
});