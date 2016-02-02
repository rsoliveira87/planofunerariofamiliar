var $j = jQuery.noConflict();
/* ---------------------------------------------------- */
/*	PARALLAX											*/
/* ---------------------------------------------------- */
jQuery.fn.parallax = function(xpos, speedFactor) {
'use strict';
var firstTop, methods = {};
return this.each(function(idx, value) {
var $this = jQuery(value), firstTop = $this.offset().top;
if (arguments.length < 1 || xpos === null)
xpos = "50%";
if (arguments.length < 2 || speedFactor === null)
speedFactor = 0.1;
methods = {
update: function() {
var pos = jQuery(window).scrollTop();
$this.each(function() {
$this.css('backgroundPosition', xpos + " " + Math.round((firstTop - pos) * speedFactor) + "px");
});
},
init: function() {
this.update();
jQuery(window).on('scroll', methods.update);
}
}
return methods.init();
});
};

// -----------------------------------------------------
// MOBILE MENU
// -----------------------------------------------------

// This jquery initializes the toggle of the menu
jQuery(document).ready(function(){
'use strict';
	jQuery('#menu-main').sktmobilemenu();
    jQuery('#tel-main').sktmobiletel();
    
});

// This jquery initializes the drodown menus
jQuery(document).ready(function(){
	'use strict';
	jQuery('#menu-main, #tel-main').superfish();
	jQuery('#menu-main li.current-menu-item,#menu-main li.current_page_item,#menu-main li.current-menu-parent,#menu-main li.current-menu-ancestor,#menu-main li.current_page_ancestor').each(function(){
		jQuery(this).prepend('<span class="item_selected"></span>');
	});
});

// sktmobilemenu is for the menus
(function( $ ) {
'use strict';
	$.fn.sktmobilemenu = function(options) { 
	var defaults = {
		'fwidth': 1025
	};

		//call in the default otions
		var options = $.extend(defaults, options);
		var obj = $(this);
		return this.each(function() {
			if($(window).width() < options.fwidth) {
				sktMobileRes();
			}

			$(window).resize(function() {
				if($(window).width() < options.fwidth) {
					sktMobileRes();
				}else{
					sktDeskRes();
				}
			});
			function sktMobileRes() {
				jQuery('#menu-main').superfish('destroy');
				obj.addClass('whiterogue-mob-menu').hide();
				obj.parent().css('position','relative');
					if(obj.prev('.sktmenu-toggle').length === 0) {
						obj.before('<div class="sktmenu-toggle" id="responsive-nav-button"></div>');
					}
				obj.parent().find('.sktmenu-toggle').removeClass('active');
			}

			function sktDeskRes() {
				jQuery('#menu-main').superfish('init');
				obj.removeClass('whiterogue-mob-menu').show();
				if(obj.prev('.sktmenu-toggle').length) {
					obj.prev('.sktmenu-toggle').remove();
				}
			}

			obj.parent().on('click','.sktmenu-toggle',function() {
				if(!$(this).hasClass('active')){
					$(this).addClass('active');
					$(this).next('ul').stop(true,true).slideDown();
				}
				else{
					$(this).removeClass('active');
					$(this).next('ul').stop(true,true).slideUp();
				}
			});
		});
};
})( jQuery );

// sktmobiletel is for the telefones
(function( $ ) {
'use strict';
	$.fn.sktmobiletel = function(options) { 
	var defaults = {
		'fwidth': 1025
	};

		//call in the default otions
		var options = $.extend(defaults, options);
		var obj = $(this);
		return this.each(function() {
			if($(window).width() < options.fwidth) {
				sktMobileRes();
			}

			$(window).resize(function() {
				if($(window).width() < options.fwidth) {
					sktMobileRes();
				}else{
					sktDeskRes();
				}
			});
			function sktMobileRes() {
				jQuery('#tel-main').superfish('destroy');
				obj.addClass('whiterogue-mob-menu whiterogue-mob-tel').hide();
				obj.parent().css('position','relative');
					if(obj.prev('.skttel-toggle').length === 0) {
						obj.before('<div class="skttel-toggle" id="responsive-nav-button"></div>');
					}
				obj.parent().find('.skttel-toggle').removeClass('active');
			}

			function sktDeskRes() {
				jQuery('#tel-main').superfish('init');
				obj.removeClass('whiterogue-mob-menu whiterogue-mob-tel').show();
				if(obj.prev('.skttel-toggle').length) {
					obj.prev('.skttel-toggle').remove();
				}
			}

			obj.parent().on('click','.skttel-toggle',function() {
				if(!$(this).hasClass('active')){
					$(this).addClass('active');
					$(this).next('ul').stop(true,true).slideDown();
				}
				else{
					$(this).removeClass('active');
					$(this).next('ul').stop(true,true).slideUp();
				}
			});
		});
};
})( jQuery );

jQuery(document).ready(function ($) {
	'use strict';
	document.getElementById('s') && document.getElementById('s').focus();
});
jQuery(document).ready(function(){
	'use strict';
	jQuery( ".sf-with-ul" ).append( '<span class="fa fa-caret-down"></span>' );
});

jQuery(window).load(function(){ 
	if(jQuery('#skenav .whiterogue-mob-menu').length > 0){		
		jQuery('#skenav .whiterogue-mob-menu').css('width',jQuery('.row-fluid').width());
	}
});


jQuery(window).load(function(){
	'use strict';
	jQuery('#full-division-box').parallax("center", 0.2);
	jQuery('#full-subscription-box').parallax("center", 0.2);
});



//------------------------------------------------------------
 
// jQuery for header flags

jQuery(document).ready(function($) {
    'use strict';
    jQuery('#header-top .dropdown-toggle').on('click', function(){
        jQuery('#header-top .dropdown-menu.langs').fadeToggle( "fast", "linear" );
    });
});

// Logo First Word Bold js
jQuery(document).ready(function($) {
	jQuery(function() {
	    jQuery('#logo #site-title a').each(function() {
	        var text = this.innerHTML;
	        var firstSpaceIndex = text.indexOf(" ");
	        if (firstSpaceIndex > 0) {
	            var substrBefore = text.substring(0,firstSpaceIndex);
	            var substrAfter = text.substring(firstSpaceIndex, text.length)
	            var newText = '<span class="firstlogoWord">' + substrBefore + '</span>' + substrAfter;
	            this.innerHTML = newText;
	        } else {
	            this.innerHTML = '<span class="firstlogoWord">' + text + '</span>';
	        }
	    });
	});
});

/**
 * SiteOrigin Slider Javascript.
 *
 * Copyright 2014, Greg Priday
 * Released under GPL 2.0 - see http://www.gnu.org/licenses/gpl-2.0.html
 */

var siteoriginSlider = {};
jQuery( function($){

    $('.sow-slider-images').each(function(){
        var $$ = $(this);
        var $slides = $$.find('.sow-slider-image');

        var setupSlider = function(){
            // Setup each of the slider frames
            $$.find('.sow-slider-image').each( function(){
                var $i = $(this);

                $(window)
                    .resize(function(){
                        $i.css( 'height', $i.find('.sow-slider-image-wrapper').outerHeight() );
                    })
                    .resize();
            } );

        };

        var images = $$.find('img');
        var imagesLoaded = 0;
        var sliderLoaded = false;

        // Preload all the images, when they're loaded, then display the slider
        images.each( function(){
            var $i = $(this);
            if( this.complete ) {
                imagesLoaded++;
            }
            else {
                $(this).one('load', function(){
                    imagesLoaded++;

                    if(imagesLoaded === images.length && !sliderLoaded) {
                        setupSlider();
                        sliderLoaded = true;
                    }
                })
                // Reset src attribute to force 'load' event for cached images in IE9 and IE10.
                .attr('src', $(this).attr('src'));
            }

            if(imagesLoaded === images.length && !sliderLoaded) {
                setupSlider();
                sliderLoaded = true;
            }
        } );

        if(images.length === 0) {
            setupSlider();
        }
    });
} );


//-----------------------------------------------------------
//  BOOTSTRAP TOOLTIP
//-----------------------------------------------------------
jQuery(document).ready(function(){
    jQuery('[data-toggle="tooltip"]').tooltip();   
});
