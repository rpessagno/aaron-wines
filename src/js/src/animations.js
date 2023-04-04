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
  offset: '90%'
});

$('.about-labels-main-items').waypoint(function(direction) {
  var thisItem = $(this);
  thisItem.addClass('animate');
}, {
  offset: '70%'
});

$('.club-benefits-items').waypoint(function(direction) {
  var thisItem = $(this);
  thisItem.addClass('animate');
}, {
  offset: '90%'
});

$('.club-cta').waypoint(function(direction) {
  var thisItem = $(this);
  thisItem.addClass('animate');
}, {
  offset: '80%'
});

$('.club-events-items').waypoint(function(direction) {
  var thisItem = $(this);
  thisItem.addClass('animate');
}, {
  offset: '90%'
});