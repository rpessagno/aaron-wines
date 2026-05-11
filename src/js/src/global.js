//==============================
// Global
//==============================

// Global variables
var w = $(window);
var ww = w.width();
var wh = w.height();
var html = $('html');
var body = $('body');

FastClick.attach(document.body);

$.Scrollax();

// datepicker
$('.datepicker input, input.datepicker').datepicker({
  inline: true,
  dateFormat: "MM d, yy",
  minDate: 1
});

// Add placeholder and required attributes to footer newsletter input
$(window).on('load', function() {
  var newsletterInput = $('.newsletter input#Email');
  newsletterInput.attr('placeholder', 'Email Address').attr('required', 'required').attr('pattern', '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$');  
});

// FitVids
$('.video-gallery-item, .video, .post-content p, .wp-block-embed__wrapper, .home-videos-item').fitVids();
