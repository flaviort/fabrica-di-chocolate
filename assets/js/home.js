$(document).ready(function() {

	// show success message after form submit
	$(document).ready(function() {
		if (window.location.href.indexOf("contact-success") > -1) {
			$.fancybox.open($("#contact-success"));
		};
	});

	// top banner slider
	var top_banner_slider = new Swiper ('.top-banner-slider', {
		slidesPerView: 1,
		allowTouchMove: true,
		disableOnInteraction: true,
		autoHeight: false,
		calculateHeight: false,
		loop: true,
		effect: 'fade',
		fadeEffect: {
			crossFade: true
		},
		autoplay: {
			delay: 3000,
		},
		speed: 600,
		pagination: {
			el: '#banner .top-banner-nav',
			type: 'bullets',
			clickable: true,
		},
	});

	// animated numbers
	var waypoint = new Waypoint({
		element: $('#numbers .box'),
		handler: function(direction) {
			$('#numbers .box .text-bigger span').each(function () {
				$(this).prop('Counter', 0).animate({
						Counter: $(this).data('value')
					}, {
					duration: 5000,
					easing: 'swing',
					step: function (now) {                      
						$(this).text(this.Counter.toFixed(0));
					}
				});
				waypoint.disable();
			});
		},
		offset: '90%'
	});

	// cards slider
	var cards_slider = new Swiper ('.cards-slider', {
		slidesPerView: 1.5,
		loop: true,
		centeredSlides: true,
		simulateTouch: true,
		allowTouchMove: true,
		effect: 'slide',
		spaceBetween: 15,
		slideToClickedSlide: true,
		autoplay: {
			delay: 2100,
		},
		breakpoints: {
			576: {
				slidesPerView: 2,
				spaceBetween: 15,
				centeredSlides: true,
			},
			768: {
				slidesPerView: 3,
				spaceBetween: 20,
				centeredSlides: true,
			},
			993: {
				slidesPerView: 4,
				spaceBetween: 20,
				centeredSlides: false,
			},
			1360: {
				slidesPerView: 4,
				spaceBetween: 20,
				centeredSlides: false,
			}
		}
	});

	// testimonials slider
	var testimonials_slider = new Swiper ('.testimonials-slider', {
		slidesPerView: 'auto',
		loop: true,
		centeredSlides: true,
		observeParents: true,
		watchSlidesProgress: true,
		simulateTouch: true,
		allowTouchMove: true,
		spaceBetween: 15,
		slideToClickedSlide: true,
		autoplay: {
			delay: 9000,
		},
		breakpoints: {
			576: {
				spaceBetween: 20,
				slidesPerView: 1.25,
				loopedSlides: 2,
				centeredSlides: true,
			},
			768: {
				spaceBetween: 20,
				slidesPerView: 2,
				loopedSlides: 3,
				centeredSlides: true,
			},
			993: {
				spaceBetween: 20,
				slidesPerView: 2.75,
				loopedSlides: 3,
				centeredSlides: false,
			},
			1201: {
				spaceBetween: 20,
				slidesPerView: 3.5,
				loopedSlides: 4,
				centeredSlides: false,
			}
		}
	});

	// show / hide map list
	$('#map .toggle .open').click(function(){
		$(this).fadeOut(function(){
			$('#map .toggle .close').fadeIn();
		});

		$('#map .hidden').slideDown();
	})

	$('#map .toggle .close').click(function(){
		$(this).fadeOut(function(){
			$('#map .toggle .open').fadeIn();
		});
		
		$('#map .hidden').slideUp();
	})

	// mask for the phone number
	var cleave = new Cleave("input[type='tel']", {
		blocks: [0, 2, 5, 4],
		delimiters: ['(', ') ', '-',' '],
		numericOnly: true,
		delimiterLazyShow: true
	});

	// validate form
	$("#contact-form").validate({
		highlight: function (element){
			$(element).closest(".form-line").addClass("error");
		},
		unhighlight: function (element){
			$(element).closest(".form-line").removeClass("error");
		}
	});

});