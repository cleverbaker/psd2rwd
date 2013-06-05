// general functionality

jQuery(function($){


//placeholder support
if(!Modernizr.input.placeholder){

	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
		input.val('');
		input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
		input.addClass('placeholder');
		input.val(input.attr('placeholder'));
	  }
	}).blur();
}




		$.validator.addMethod("defaultInvalid", function(value, element){
		    return !(element.value == element.defaultValue || element.value == element.getAttribute("placeholder"));
		});
		
		// validate contact form on keyup and submit
		$("#contact_form").validate({
			//set the rules for the fild names
			rules: {
				name: {
					required: true,
					defaultInvalid: true,
					minlength: 2
				},
				email: {
					required: true,
					defaultInvalid: true,
					email: true
				},
				phone: {
					required: true,
					defaultInvalid: true,
					minlength: 2
				},
				call: {
					required: true,
					defaultInvalid: true,
					minlength: 2
				},				
				message: {
					required: true,
					defaultInvalid: true,
					minlength: 2
				}
			
			},
			//set messages to appear inline
			messages: {
				name: "Please enter your name",
				email: "Please enter a valid email address",				
				phone: "Please enter your phone number or Skype ID",
				call: "Please let us know when to schedule a call",
				message: "Please enter your message"
			},
			errorContainer: $('#errorContainer'),
	    	errorLabelContainer: $('#errorContainer ul'),
	    	wrapper: 'li'
		});
		
		
//scroll to element
	$.fn.scrollView = function () {
  return this.each(function () {
    $('html, body').animate({
      scrollTop: $(this).offset().top - $("#header").outerHeight()
    }, 1000);
  });
}


$('#nav').on("click", "a[href^='#']", function (event) {
	event.preventDefault();	
	$(this).parent().addClass("current").siblings().removeClass("current");
	var target = $(this).attr("href");
	$(target).scrollView();
});
		



});//end jQuery

