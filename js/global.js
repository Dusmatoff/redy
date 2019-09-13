/*###############################*/
/* TABLE OF CONTENTS:            */
/*###############################*/
/* 01 VARIABLES                  */
/*===============================*/
/* 02 PAGE CALCULATIONS          */
/*===============================*/
/* 03 FUNCTION ON DOCUMENT READY */
/*===============================*/
/* 04 FUNCTIONS ON PAGE RESIZE   */
/*===============================*/
/* 05 FUNCTION ON PAGE SCROLL    */
/*===============================*/
/* 06 BUTTONS, CLICKS, HOVER     */
/*===============================*/
/* 07 ANIMATIONS                 */
/*###############################*/

var _functions = {};

$(function() {
	"use strict";
	/*##############*/
	/* 01 VARIABLES */
	/*##############*/
	var winW,
		winH,
		winScr,
		_isresponsive,
		_ismobile = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i);
	/*######################*/
	/* 02 PAGE CALCULATIONS */
	/*######################*/
	_functions.pageCalculations = function() {
		winW = $(window).width();
		winH = $(window).height();
	};
	/*###############################*/
	/* 03 FUNCTION ON DOCUMENT READY */
	/*###############################*/
	if(_ismobile) $('body').addClass('mobile');

	setTimeout(function() {
		$('#loader-wrapper').fadeOut();
	}, 100);

	_functions.pageCalculations();
	
	if (navigator.userAgent.indexOf("Firefox") >= 0) {
		$('body').addClass('firefox');
	}
	if (navigator.userAgent.indexOf('Edge') >= 0) {
		$('body').addClass('edge');
	}
	if (navigator.userAgent.indexOf("Trident") >= 0) {
		$('body').addClass('ie');
	}
	if (navigator.userAgent.indexOf('Safari') >= 0 && navigator.userAgent.indexOf('Chrome') < 0) {
		$('body').addClass('safari');
	}
	if (navigator.userAgent.indexOf('Chrome') >= 0 && navigator.userAgent.indexOf('Edge') < 0) {
		$('body').addClass('chrome');
	}
	// all animations
	headerScrolled();
	// Lazy loads for images and backgrounds
	setTimeout(function(){
		lazyLoadImg();
		lazyLoadBg();
	}, 100);

	function lazyLoadImg() {
		if ($('.lazy-load-img').length) {
			$('.lazy-load-img').each(function(){
				var dataSrc = $(this).data('img-src');
				$(this).find('img').attr('src', dataSrc);
			});
		}
	}

	function lazyLoadBg() {
		if ($('.lazy-load-bg').length) {
			$('.lazy-load-bg').each(function(){
				var dataBg = $(this).data('bg');
				$(this).css({'background-image':'url('+ dataBg +')'});
			});
		}
	}

	if ($('#card-number').length) {

		$('#card-number').on('focus', function() {
	        Inputmask({"mask": "9999 9999 9999 9999"}).mask('#card-number');
	    });
	}
	/*#############################*/
	/* 04 FUNCTIONS ON PAGE RESIZE */
	/*#############################*/
	_functions.resizeCall = function() {
		_functions.pageCalculations();
	};
	if(!_ismobile) {
		$(window).resize(function() {
			_functions.resizeCall();
		});
	} else{
		window.addEventListener("orientationchange", function() {
			_functions.resizeCall();
		}, false);
	}
	/*############################*/
	/* 05 FUNCTION ON PAGE SCROLL */
	/*############################*/
	$(window).on('scroll', function() {
		_functions.scrollCall();
	});

	_functions.scrollCall = function() {
		winScr = $(window).scrollTop();
		headerScrolled();
	};
	/*##################################*/
	/* 06 BUTTONS, CLICKS, HOVER, FOCUS */
	/*##################################*/
	// Burger button click
	$('.burger').on('click', function() {
		$(this).toggleClass('active');
		$('.menu').toggleClass('active');
		$('html').toggleClass('overflow-hidden');
	});
	// Shopping cart open / close
	$('.cart').on('click', function() {
		$('.shopping-cart, .shopping-cart-close-layer').toggleClass('active');
	});

	$('.shopping-cart-close-layer, .shopping-cart > .button-close').on('click', function() {
		$('.shopping-cart, .shopping-cart-close-layer').removeClass('active');
		/*$('body').removeClass('overflow-hidden');*/
	});
	// Step pages checkbox click (allow click "next step page" buttons)
	$('.step-select-radio').on('click', function() {
		$('.step-page .button, .swiper-pagination-bullet-active + .swiper-pagination-bullet').removeClass('no-clickable');
	});
	// Edit popup radio button click
	$('.icon-radio-button').on('click', function() {
		$(this).addClass('active');
		$(this).next().find('.checkbox-dropdown').slideDown(420);
		$(this).parent().siblings().find('.icon-radio-button').removeClass('active');
		$(this).parent().siblings().find('.checkbox-dropdown').slideUp(420);
	});
	// Accordeon
	$('.accordeon-title').on('click', function() {
		$(this).parent().toggleClass('active');
		$('html, body').animate({
			scrollTop: $('#logo').offset().top + $('#logo').outerHeight()
		}, 600);
	});
	if ($(window).width() >= 768) {
		// Thumbs open dropdown on desktop
		$('.thumb .read-more-button').on('click', function() {
			var thumbIndex = $(this).parent().parent().index();

			$('.thumb').removeClass('active');
			$(this).parent().addClass('active');
			$('.thumb-dropdown[data-index="' + thumbIndex + '"]').slideDown(420).siblings().slideUp(420);
		});
		// Thumbs close dropdown on desktop
		$('.thumb-dropdown .read-more-button').on('click', function () {
			var thumbDropdownIndex = $(this).parent().data('index');
			
			$(this).parent().slideUp(420);
			$('.thumb').removeClass('active');
		});
	}

	if ($(window).width() <= 767) {
		// Thumbs open dropdown on mobile
		$('.thumb .read-more-button').on('click', function() {
			$(this).parent().addClass('active');
			$(this).prev().slideDown(420);
		});
		// Thumbs close dropdown on mobile
		$('.thumb-dropdown-mobile .read-more-button').on('click', function() {
			$(this).parent().parent().removeClass('active');
			$(this).parent().slideUp(420);
		});
	}
	// Smooth scroll to anchor link
	$('.ancor-link').on('click', function() {
		var ancorLink = $(this).attr('href')
		$('html, body').animate({
			scrollTop: $(ancorLink).offset().top - $('header').outerHeight()
		}, 600);
		return false;
	});
	// Open popup
	$(document).on('click', '.open-popup', function() {
		$('.popup-content').removeClass('active');
		$('.popup-wrapper, .popup-content[data-rel="'+$(this).data('rel')+'"]').addClass('active');
		$('html').addClass('overflow-hidden');
		return false;
	});
	// Close popup
	$(document).on('click', '.popup-wrapper .button-close, .popup-wrapper .layer-close, .close-popup', function() {
		$('.popup-wrapper, .popup-content, .open-menu-layer, .menu, .burger').removeClass('active');
		$('html').removeClass('overflow-hidden');
		setTimeout(function() {
			$('.popup-content[data-rel="video-popup"] .popup-video-wrapper').html('');
		}, 300);
		return false;
	});

	$(document).on('click', '.open-video', function() {
		var video = '<iframe class="video" src="' + $(this).data('video') + '" style="width: 100%; height: 100%;" frameborder="0" allow="autoplay" allowfullscreen></iframe>';
		$('html').addClass('overflow-hidden');
		$('.popup-content[data-rel="video-popup"] .popup-video-wrapper').html(video);
		$('.popup-wrapper, .popup-content[data-rel="video-popup"]').addClass('active');

		return false;
	});
	// Tabs
	$('.tab-menu').on('click', function() {
		var $tabMenuWrap = $('.tab-header'),
			$tabsWrapper = $('.tabs'),
			$tabsMenu = $tabMenuWrap.find('.tab-menu'),
			$tabsItem = $tabsWrapper.find('.tab-entry'),
			$index = $tabsMenu.index(this);
		
		$($tabsItem).eq($index).addClass('active').siblings().removeClass('active');
		$(this).addClass('active').siblings().removeClass('active');
	});
	/*###############*/
	/* 07 ANIMATIONS */
	/*###############*/
	function headerScrolled() {
		if (winScr >= $('header').outerHeight()) {
			$('header').addClass('scrolled');
		} else {
			$('header').removeClass('scrolled');
		}

		if (winScr >= 1 && $('.step-page').length) {
			$('.step-page').addClass('scrolled');
		} else {
			$('.step-page').removeClass('scrolled');
		}
	}
});