(function($) {

	$('.multiple-items').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		infinite: true,
		responsive: [
			{
				breakpoint: 1160,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
	});

	$('.messages').slick({
		dots: false,
		arrows: true,
		infinite: true,
		autoplay: false,
		autoplaySpeed: 3500
	});

	var item_length = $('.slides > div').length - 1;
	var slider = $('.slides').slick({
		autoplay: true,
		autoplaySpeed: 3500,
		dots: false,
		arrows: false,
		infinite: false,
		fade: true,
		slide: 'div',
		cssEase: 'linear'
	});

	// On before slide change
	slider.on('afterChange', function(event, slick, currentSlide, nextSlide){
		//check the length of total items in .slide container
		//if that number is the same with the number of the last slider
		//Then pause the slider
		if( item_length === slider.slick('slickCurrentSlide') ){
			//this should do the same thing -> slider.slickPause();
			slider.slickSetOption("autoplay",false,false)
		};
	});

	// $(".owl-carousel").owlCarousel({
	// 	loop:true,
	// 	margin:10,
	// 	nav:true,
	// 	responsive:{
	// 	    0:{
	// 	        items:1
	// 	    },
	// 	    600:{
	// 	        items:1
	// 	    },
	// 	    1000:{
	// 	        items:2
	// 	    }
	// 	}
	// });

    /*
     * Replace all SVG images with inline SVG
     */
	$('img[src$="svg"]').each(function(){
		var $img = jQuery(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');

		$.get(imgURL, function(data) {
			// Get the SVG tag, ignore the rest
			var $svg = jQuery(data).find('svg');

			// Add replaced image's ID to the new SVG
			if(typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
			}
			// Add replaced image's classes to the new SVG
			if(typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass+' replaced-svg');
			}

			// Remove any invalid XML tags as per http://validator.w3.org
			$svg = $svg.removeAttr('xmlns:a');

			// Replace image with new SVG
			$img.replaceWith($svg);

		}, 'xml');

	});

	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();

		if (scroll > 200) {
			$("#header").addClass("change");
		} else {
			$("#header").removeClass("change");
		}
	});

	$('.navTrigger').click(function(){
		$(this).toggleClass('active');
		$('#primary-menu').toggleClass('active');
	});

})(jQuery);