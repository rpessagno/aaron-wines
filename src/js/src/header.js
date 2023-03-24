//==============================
// Header
//==============================

var header = $('.header');
var button = $('.header-nav-button');
var nav = $('.header-nav');

// button
button.click(function() {
  header.toggleClass('open');
  button.toggleClass('open');
  nav.toggleClass('open');
});

// scroll
function headerNotTop() {
  header.addClass('scroll');
}
function headerAtTop() {
  header.removeClass('scroll');
}
function headerScroll() {
  var scrollPos = $(window).scrollTop();
  if (scrollPos<=1) {
    headerAtTop();
  }
  else {
    headerNotTop();
  }
}

headerScroll();

$(window).scroll(function() {
  headerScroll();
});

// hide header on scroll
// http://www.jquerybyexample.net/2013/07/jquery-detect-scroll-position-up-down.html
// var scrollPos = 0;
// $(window).scroll(function () {
//   var currentScrollPos = $(this).scrollTop();
//   if (currentScrollPos > scrollPos && currentScrollPos > 150 && header.is(':hover') == false) {
//     header.addClass('hidden');
//   } else {
//     header.removeClass('hidden');
//   }
//   scrollPos = currentScrollPos;
// });

// Modal cart
$('.js-modal-cart').on('click', function() {
  var cartVisible = $(".v65-widgetModalCart-dropdown").is(':visible');
  if(cartVisible == true) {
    vin65remote.cart.hideCart();      
  } else {
    vin65remote.cart.showCart();  
  }
  return false;
});