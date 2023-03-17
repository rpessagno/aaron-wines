//==============================
// Animations
//==============================


$('.home-shop').waypoint(function(direction) {
  var thisItem = $(this);
  thisItem.addClass('animate');
}, {
  offset: '99%'
});

$('.home-shop-content-items').waypoint(function(direction) {
  var thisItem = $(this);
  thisItem.addClass('animate');
}, {
  offset: '70%'
});

$('.about-labels-main-items').waypoint(function(direction) {
  var thisItem = $(this);
  thisItem.addClass('animate');
}, {
  offset: '70%'
});
