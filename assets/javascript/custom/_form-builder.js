
(function($) {
	// var controls = $('#form-hide-until-focus');
	// controls.hide();
	$('#select2-form').submit(function(e){	
		return validateSelect2Form( $(this).serializeArray() );
	});
	// $('form.js-check-form').submit(function(e){	
	// 	return validateForm( $(this).serializeArray() );
	// });
	// $('form.js-check-form-file').submit(function(e){	
	// 	return validateFileUploadForm( $(this).serializeArray() );
	// });
	$('#request-form').submit(function(e){	
		e.preventDefault();
		var valid = validateForm( $(this).serializeArray() );
		var form = $(this);
		var submit = form.find(":submit");
		submit.prop('disabled', true);
		valid = true;
		if (valid) {
			data.whatever = 10;
			data.action = "submit_request_form";
			data.form = $(this).serializeArray();
			console.log(data);
			$.post(MyAjax.ajaxurl, data, function(response) {
				var serverResponse = JSON.parse(response);
				console.log(serverResponse);
				if (!serverResponse.error_class) {
					$('#form-results-modal-content').html(serverResponse.confirmation_output);
					var $modal = $('#form-results-modal');
					$modal.foundation('open');
					form.find("input[type=text], input[type=email], textarea").val("");
					form.find("input[type=checkbox]").attr('checked', false);
					// grecaptcha.reset();
					// controls.slideUp();
				}
				else {
					alert(serverResponse.response_msg);
				}
				submit.prop('disabled', false);			
			});			
		}
		else {
			alert("Please fill in the required fields!");
			submit.prop('disabled', false);
		} 

		return false;
	});
	var validateForm = function(form) {
		var errors_in_form = 0;
		errors_in_form = showErrors(form, errors_in_form);
		return showErrorMsg(errors_in_form);
	};

	var validateSelect2Form = function(form) {
		var errors_in_form = 0;
		for (var i = 0; i < form.length; i++) {
			var input = new FormInput(form[i]);
			if(!input.isValid()) {
				$(input.id+'-form-group').addClass('has-error');
				errors_in_form++;
			}
			else {
				$(input.id+'-form-group').removeClass('has-error');
			}
		}

		if( !validateSelect2()) {
			errors_in_form++;
		}
		return showErrorMsg(errors_in_form);
	};

	var validateFileUploadForm = function(form) {
		var errors_in_form = 0;
		errors_in_form = showErrors(form, errors_in_form);

		// Get all inputs that are type file
		var file_uploads = document.getElementsByClassName('js-form-control-file-upload');
		if(file_uploads) {
			// Validate each file input
			Array.prototype.forEach.call(file_uploads, function(file_upload) {
			    if(!file_upload.value) {
			    	$('#'+file_upload.id+'-form-group').addClass('has-error');
			    	errors_in_form++;
			    }
			});				
		}
		return showErrorMsg(errors_in_form);
	};

	var showErrors = function(form, errors_in_form){
		for (var i = 0; i < form.length; i++) {
			var input = new FormInput(form[i]);
			if(!input.isValid()) {
				$(input.id+'-form-group').addClass('has-error');
				errors_in_form++;
			}
			else {
				$(input.id+'-form-group').removeClass('has-error');
			}
		}
		return errors_in_form;
	};
	var showErrorMsg = function(errors_in_form){
		if(errors_in_form>0) {
			$("#form-error-msg").addClass('error');
			$("#form-error-msg > p").html("We're sorry, there has been an error with the form inputs. <br> Please rectify the "+ errors_in_form +" errors below and resubmit.");
			var element_to_scroll_to = document.getElementById('form-error-link');
			if(element_to_scroll_to) {
				element_to_scroll_to.scrollIntoView();
			}
			return false;
		}
		else {
			return true;
		}
	};

	//When an form input is in focus
	$('.js-form-control').focus(function(e){	
		// var input = new FormInput($(this).serializeArray()[0]);
		$('#'+this.id+'-form-group').removeClass('has-error').removeClass('has-success');	
	});
	$('.js-form-control-file-upload').focus(function(e){	
		$('#'+$(this)[0].id+'-form-group').removeClass('has-error').removeClass('has-success');
	});
	$('.js-form-control-file-upload').blur(function(e){	
		if(!$($(this)).val()) {
			$('#'+$(this)[0].id+'-form-group').addClass('has-error');
		}
	});	

	// When a user leaves a form input
	$('.js-form-control').blur(function(e){	
		var input = new FormInput($(this).serializeArray()[0]);
		if(!input.isValid()) {
			$(input.id+'-form-group').addClass('has-error');
			// if (controls.is(':visible')) {
	  //           controls.slideUp();
	  //       }
		}
		else {
			$(input.id+'-form-group').addClass('has-success');
			// if (controls.is(':hidden')) {
			//     controls.slideDown();
			// }			
		}
	});


	//Form Input Object
	var FormInput = function FormInput(input) {
		this.name = input.name;
		this.value = input.value;
		this.id = '#'+(this.name.replace(/[\[\]']+/g,''));
		this.required = $(this.id).prop('required');
		this.type = $(this.id).prop('type');
	};

	// Instance methods
	FormInput.prototype = {
	  isValid: function isValid() {
	  	var re;
	  	if(this.required && this.value==='') {
	  		return false;
	  	}
		switch (this.type) {
			case 'number':
			console.log('this.value', this.value);
			console.log('isNaN(this.value)', isNaN(this.value));
				// if (isNaN(this.value)) {
				    // console.log('Must input numbers');
				    return !isNaN(this.value);
				// }
		    case 'url':
		        re = /^(http(?:s)?\:\/\/[a-zA-Z0-9]+(?:(?:\.|\-)[a-zA-Z0-9]+)+(?:\:\d+)?(?:\/[\w\-]+)*(?:\/?|\/\w+\.[a-zA-Z]{2,4}(?:\?[\w]+\=[\w\-]+)?)?(?:\&[\w]+\=[\w\-]+)*)$/i;
		        return re.test(this.value);
		        // break;
		  	case 'email':
		      	re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		      	return re.test(this.value);
		        // break;    
		}
		return true;
	  }
	};

}) (jQuery);