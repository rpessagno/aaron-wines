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
// $('.js-modal-cart').on('click', function() {
//   var cartVisible = $(".v65-widgetModalCart-dropdown").is(':visible');
//   if(cartVisible == true) {
//     vin65remote.cart.hideCart();      
//   } else {
//     vin65remote.cart.showCart();  
//   }
//   return false;
// });


// Cart counter
// $(window).on('load', function() {
//   var cartCountElm = $('.v65-widgetModalCart-itemCount');
//   var cartCountWdElm = $('#v65-toggleModalCart strong:first-child');

//   if (cartCountElm.length) {
//     var cartCount = parseInt(cartCountElm.html());
//     $('.header-shop-cart-count').html(cartCount);

//     if (cartCount > 0) {
//       $('.header-shop-cart-count').removeClass('hide');
//     }
//   }

//   if (cartCountWdElm.length) {
//     var cartCountWd = parseInt(cartCountWdElm.html());
//     $('.header-shop-cart-count').html(cartCountWd);
  
//     if (cartCountWd > 0) {
//       $('.header-shop-cart-count').removeClass('hide');
//     }
//   }

//   $('.v65-widgetProduct-addToCart-button .add-to-cart').on('click', function() {
//     var cartButton = $(this);
//     var cartQty = parseInt(cartButton.parent().prev().find('input').val());
//     var cartCount = parseInt($('.header-shop-cart-count').html());
//     $('.header-shop-cart-count').html(cartQty + cartCount);
//     $('.header-shop-cart-count').removeClass('hide');
//   });

//   $('.v65-product-addToCart-button .add-to-cart').on('click', function() {
//     var cartButton = $(this);
//     var cartQty = parseInt(cartButton.parent().prev().find('input').val());
//     var cartCount = parseInt($('.header-shop-cart-count').html());
//     $('.header-shop-cart-count').html(cartQty + cartCount);
//     $('.header-shop-cart-count').removeClass('hide');
//   });
// });


$('.header-shop-cart').click(function() {
  window.c7action.showSideCart();
  return false;
});


