$(function() {
// Begin Document Ready


$(document).ready(function(){
  window.vinespringReady = function (config) {

    // Update cart count
    var $count = $('#vs2-accountLinks-cart-count');
    vinespring.api('getCartCount', null, function (cartCount){
      if (cartCount) {
        $count.text(cartCount);
      } else {
        $count.text('0');
      }
    });
    config.onAfterAddToCart = function (d){
      $count.text(d.cartCount);

      $('#vs2-cart-confirmation').addClass('show');

      setTimeout(function() {
        $('#vs2-cart-confirmation').removeClass('show');
      }, 4000);

    };

  };
});


// End Document Ready
});