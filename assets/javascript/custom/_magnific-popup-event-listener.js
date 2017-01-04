/** ref: http://dimsemenov.com/plugins/magnific-popup/ */
jQuery(document).ready(function ($) {
	$('.lightbox-gallery').each(function() { // the containers for all your galleries
	    $(this).magnificPopup({
	        delegate: 'a.lightbox', // the selector for gallery item
	        type: 'image',
	        gallery: {
	          enabled:true
	        },
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function(item) {
					return item.el.attr('title') + '<small>The Window Surgeon</small>';
				}
			}        
	    });
	});
	$('.image-popup-vertical-fit').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true,
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>Featured Image</small>';
			}
		}
	});
});
