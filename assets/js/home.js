$(document).ready(function() {

	// show success message after form submit
	$(document).ready(function() {
		if (window.location.href.indexOf("contact-success") > -1) {
			$.fancybox.open($("#contact-success"));
		};
	});

	// animated numbers
	/*
	var waypoint = new Waypoint({
		element: $('.purple-box'),
		handler: function(direction) {
			$('.counter').each(function () {
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
	*/

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
			delay: 2000,
		},
		breakpoints: {
			576: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
			768: {
				slidesPerView: 4,
				spaceBetween: 20,
			},
			993: {
				slidesPerView: 5,
				spaceBetween: 25,
			},
			1201: {
				slidesPerView: 6,
				spaceBetween: 30,
			}
		}
	});

	// testimonials slider
	var testimonials_slider = new Swiper ('.testimonials-slider', {
		slidesPerView: 1,
		//loop: true,
		centeredSlides: true,
		simulateTouch: true,
		allowTouchMove: true,
		effect: 'slide',
		spaceBetween: 15,
		slideToClickedSlide: true,
		autoplay: {
			delay: 9000,
		},
		breakpoints: {
			576: {
				spaceBetween: 20,
				slidesPerView: 2,
			},
			1201: {
				spaceBetween: 30,
				slidesPerView: 3,
			}
		}
	});

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