require('./bootstrap');

$(document).ready(function() {
	var SPMaskBehavior = function (val) {
	  return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	},
	spOptions = {
	  onKeyPress: function(val, e, field, options) {
	      field.mask(SPMaskBehavior.apply({}, arguments), options);
	    }
	};

	$('.sp_celphones').mask(SPMaskBehavior, spOptions);	

	$('.products-carousel').owlCarousel({
		dots: true,
		responsive: {
			0: {
				items: 1,
			 	margin: 10
			},
			576: {
				items:2
			},
			768: {
				items: 3
			},
			992: {
				items: 3,
				nav: true,
				dots: false,
				margin: 25,
				navText: ['<img src="images/min/arrow-left.svg" />', '<img src="images/min/arrow-right.svg" />']
			}
		}
	});

	$('#brands-carousel').owlCarousel({
		dots: false,
		autoplay: true,
		autoplayTimeout: 3000,
		loop: true,
		margin: 10,
		responsive: {
			0: {
				items: 3
			},
			576: {
				items: 4
			},
			768: {
				items: 6
			},
			992: {
				items: 7
			},
			1200: {
				items: 9
			}
		}
	});

	$('.menu-link').bigSlide({
		menuWidth: '100%',
		side: 'right'
	});

	$('[data-toggle="tooltip"]').tooltip()

});
