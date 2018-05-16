!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){function i(){var b,c,d={height:f.innerHeight,width:f.innerWidth};return d.height||(b=e.compatMode,(b||!a.support.boxModel)&&(c="CSS1Compat"===b?g:e.body,d={height:c.clientHeight,width:c.clientWidth})),d}function j(){return{top:f.pageYOffset||g.scrollTop||e.body.scrollTop,left:f.pageXOffset||g.scrollLeft||e.body.scrollLeft}}function k(){if(b.length){var e=0,f=a.map(b,function(a){var b=a.data.selector,c=a.$element;return b?c.find(b):c});for(c=c||i(),d=d||j();e<b.length;e++)if(a.contains(g,f[e][0])){var h=a(f[e]),k={height:h[0].offsetHeight,width:h[0].offsetWidth},l=h.offset(),m=h.data("inview");if(!d||!c)return;l.top+k.height>d.top&&l.top<d.top+c.height&&l.left+k.width>d.left&&l.left<d.left+c.width?m||h.data("inview",!0).trigger("inview",[!0]):m&&h.data("inview",!1).trigger("inview",[!1])}}}var c,d,h,b=[],e=document,f=window,g=e.documentElement;a.event.special.inview={add:function(c){b.push({data:c,$element:a(this),element:this}),!h&&b.length&&(h=setInterval(k,250))},remove:function(a){for(var c=0;c<b.length;c++){var d=b[c];if(d.element===this&&d.data.guid===a.guid){b.splice(c,1);break}}b.length||(clearInterval(h),h=null)}},a(f).on("scroll resize scrollstop",function(){c=d=null}),!g.addEventListener&&g.attachEvent&&g.attachEvent("onfocusin",function(){d=null})});


var c = document.getElementById("grain");
if (c != null) {
	var canvas = document.getElementById('grain'),
	ctx = canvas.getContext('2d');

	function resize() {
		canvas.width = window.innerWidth;
		canvas.height = window.innerHeight;
	}
	resize();
	window.onresize = resize;

	function noise(ctx) {

		var w = ctx.canvas.width,
		    h = ctx.canvas.height,
		    idata = ctx.createImageData(w, h),
		    buffer32 = new Uint32Array(idata.data.buffer),
		    len = buffer32.length,
		    i = 0;

		for(; i < len;)
		    buffer32[i++] = ((255 * Math.random())|0) << 24;

		ctx.putImageData(idata, 0, 0);
	}

	var toggle = true;

	// added toggle to get 30 FPS instead of 60 FPS
	(function loop() {
		toggle = !toggle;
		if (toggle) {
		    requestAnimationFrame(loop);
		    return;
		}
		noise(ctx);
		requestAnimationFrame(loop);
	})();
}

(function($) {

	$('#grain').on('inview', function(event, isInView) {
		if (isInView) {
			$(this).addClass('hide');
		} else {
			$(this).removeClass('hide');
		}
	});

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

	$('.slides').slick({
		dots: false,
		arrows: false,
		infinite: true,
		autoplay: true,
		fade: true,
		slide: 'div',
		cssEase: 'linear',
		autoplaySpeed: 3500,
		onAfterChange: function(slide, index){
			if(index == 3){
				$('.slides').slickPause();
			}
		}
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

		if (scroll > 0) {
			$("#header").addClass("change");
		} else {
			$("#header").removeClass("change");
		}
	});

	$('.navTrigger').click(function(){
		$(this).toggleClass('active');
		$('#primary-menu').toggleClass('active');
	});


	$('.parallax-window').parallax({
		naturalWidth: 1920,
		naturalHeight: 1280
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




window['cookieconsent_example_util'] = {

  // Fill a select element with options (html can be configured using `cb`)
  fillSelect: function (select, options, selected, cb) {
    var html = '';
    if (typeof cb != 'function') {
      cb = this.getSimpleOption;
    }
    for (var prop in options) {
      html += cb(options[prop], prop, prop == selected);
    }
    select.innerHTML = html;
  },

  getSimpleOption: function (label, value, selected) {
    return '<option ' + (selected ? 'selected="selected"' : '') + ' value="' + value + '">' + label + '</option>';
  },

  tabularObject: function (obj, formatVal, formatKey) {
    var html = '<ul>';
    var defaultFn = function() { return arguments[0] };

    if (typeof formatKey != 'function') formatKey = defaultFn;
    if (typeof formatVal != 'function') formatVal = defaultFn;

    for (var prop in obj) {
      html += '<li><em>' + formatKey(prop, obj[prop]) + '</em> ' + formatVal(obj[prop], prop) + '</li>';
    }
    return html + '</ul>';
  },

  initialisePopupSelector: function (options) {
    var examples = Object.keys(options.popups);
    var itemOpen = '<li><span>';
    var itemClose = '</span></li>';
    var instances = [];

    options.selector.innerHTML = itemOpen + Object.keys(options.popups).join(itemClose+itemOpen) + itemClose;

    options.selector.onclick = function (e) {
      var targ = e.target, item;

      // if the target is the container, exit
      if (targ.isEqualNode(options.selector)) return;

      // from this point, only the child elements of opts.selector will get through.
      // out of these child elements, we want to find the closest direct decendant <li>
      while (targ.tagName != 'LI' && targ.parentNode) {
        targ = targ.parentNode;
      }

      if (!targ.parentNode.isEqualNode(options.selector)) return;

      // from this point, 'targ' will be a direct decendant of opts.selector
      var idx = Array.prototype.indexOf.call(options.selector.children, targ);

      if (idx >= 0 && instances[idx]) {
        instances[idx].clearStatus();

        // We could remember the popup that's currently open, but it gets complicated when we consider
        // the revoke button. Therefore, simply close them all regardless
        instances.forEach(function (popup) {
          if (popup.isOpen()) {
            popup.close()
          }
          popup.toggleRevokeButton(false);
        });

        instances[idx].open();
      }
    };

    for (var i = 0, l = examples.length; i < l; ++i) {
      options.popups[examples[i]].onPopupOpen = function(options) {
        return function(){
          var codediv = document.getElementById('options');
          if(codediv) {
            codediv.innerHTML = JSON.stringify(options, null, 2);
          }
        };
      } (options.popups[examples[i]]);

      var myOpts = options.popups[examples[i]];

      myOpts.autoOpen = false;

      options.cookieconsent.initialise(myOpts, function(idx, popup){
        instances[idx] = popup;
      }.bind(null, i), function(idx, err, popup) {
        instances[idx] = popup;
        console.error(err);
      }.bind(null, i));
    }

    return instances;
  },

};

  function timeStamp() {
    var now = new Date();
    var time = [ now.getHours(), now.getMinutes(), now.getSeconds() ];
    for ( var i = 1; i < 3; i++ ) {
      if ( time[i] < 10 ) {
        time[i] = "0" + time[i];
      }
    }
    return '['+time.join(":")+'] ';
  }

