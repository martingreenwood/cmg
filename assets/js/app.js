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

	// // On before slide change
	// slider.on('afterChange', function(event, slick, currentSlide, nextSlide){
	// 	//check the length of total items in .slide container
	// 	//if that number is the same with the number of the last slider
	// 	//Then pause the slider
	// 	if( item_length === slider.slick('slickCurrentSlide') ){
	// 		//this should do the same thing -> slider.slickPause();
	// 		slider.slickSetOption("autoplay",false,false)
	// 	};
	// });

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


(function($) {
    
    /*
     * The below example uses Slick Carousel, however this can be
     * extended into any type of carousel, provided it lets you
     * bind events when the slide changes. This will only work
     * if all framed videos have the JS API parameters enabled.
     */
    
    //bind our event here, it gets the current slide and pauses the video before each slide changes.
    $(".phoneslider").on("beforeChange", function(event, slick) {
      var currentSlide, slideType, player, command;
      
      //find the current slide element and decide which player API we need to use.
      currentSlide = $(slick.$slider).find(".slick-current");
      
      //determine which type of slide this, via a class on the slide container. This reads the second class, you could change this to get a data attribute or something similar if you don't want to use classes.
      slideType = currentSlide.attr("class").split(" ")[1];
      
      //get the iframe inside this slide.
      player = currentSlide.find("iframe").get(0);
      
      if (slideType == "vimeo") {
        command = {
          "method": "pause",
          "value": "true"
        };
      } else {
        command = {
          "event": "command",
          "func": "pauseVideo"
        };
      }
      
      //check if the player exists.
      if (player != undefined) {
        //post our command to the iframe.
        player.contentWindow.postMessage(JSON.stringify(command), "*");
      }
    });
    
    //start the slider
	$('.phoneslider').slick({
		dots: false,
		arrows: true,
		infinite: true,
		autoplay: false,
	});
    
    //run the fitVids jQuery plugin to ensure the iframes stay within the item.
    // $('.item').fitVids();

})(jQuery);