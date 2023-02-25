//==============================
// Global
//==============================

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



