var userInfo = [];

$(document).ready(function() {
	
	centerViewPort();
	
	$(".screen-three input:last-child").css('margin-bottom','20px');

	$('.form-header img.right').click(function(){
		if($('.form-holder').hasClass('minimised')) {
			$('.form-holder').removeClass('minimised');
			$('.form-content-area').slideDown(500, function() {
				centerViewPort();
			});
		} else {
			$('.form-holder').addClass('minimised');
			$('.form-content-area').slideUp(0);
		}
	});
	
	$('.accept_button').click(function() {
		$('.screen-one').fadeTo(100,0, function() {
			$('.screen-two').show();
			$('.screen-one').remove();
		});
	});
	
	$('.email_submit_button').click(function() {
		$('.error-message').empty();
		$('#emailSubmitForm').submit();
	});
	
	$(window).resize(function () {
		centerViewPort();
	});
	
	$('#emailSubmitForm').validate({
    	messages: {
        	userEmailAddress: "The information you entered is not a valid email format, try again or contact press@ubisoft.com, if the problem presists."
		},
		errorElement: "p",
		errorPlacement: function(error, element) {
			error.appendTo(".error-message");
			centerViewPort();
		},
		invalidHandler: function() {
	  	},
	  	highlight: function(element, errorClass) {
		  	
		},
		unhighlight: function(element, errorClass) {
			
		},
		submitHandler: function (form) {
			$.post('validation.php', $(form).serialize(), function () {
				$('.error-message').empty();
				$('.screen-two').fadeTo(0,0);
        	}).done(function(data) {
        		userInfo = $.parseJSON(data);
        		if(userInfo.status === "success") {
        			$('#userFirstName').val(userInfo.response.first_name);
        			$('#userLastName').val(userInfo.response.last_name);
        			$('#userCompany').val(userInfo.response.company);
        			$('#userKnownEmailAddress').val(userInfo.response.email_address);
        			$('#replyTo').val(userInfo.response.reply_to);
	        		$('.screen-three').fadeTo(0,1);
	        		$('.screen-two').remove();
	        		centerViewPort();
        		} else if(userInfo.status === "registered") {
					$('.error-message').empty().html("<p>You appear to already registered for this event, if this is a mistake, please contact press@ubisoft.com</p>");
					$('.screen-two').fadeTo(0,1);
					centerViewPort();
				} else if(userInfo.status === "error") {
					$('.error-message').empty().html("<p>The information you entered does not match our records, try again or contact press@ubisoft.com, if the problem presists.</p>");
					$('.screen-two').fadeTo(0,1);
					centerViewPort();
				}
        	}).fail(function() {
        		$('.error-message').empty().html("<p>A server error has occured, if this error persists, please contact press@ubisoft.com</p>");
				$('.screen-two').fadeTo(0,1);
				centerViewPort();
        	});
		}
	});
});

function centerViewPort() {
	var winH = $(window).height();
	var targetH = $('.form-holder').height();
	
	var padder = (winH / 2) - (targetH / 2);
	if(padder > 0) {
		$('.form-holder').css('margin-top',padder+'px');
	} else {
		$('.form-holder').css('margin-top','0px');
	}
	$('.form-holder').delay(500).fadeIn(400);
}