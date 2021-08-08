jQuery(document).ready(function(){

	var yWidgetSettings = {
	    buttonColor : '#1c84c6',
	    buttonPosition : 'bottom right',
	    buttonAutoShow : true,
	    buttonText : 'Онлайн запись',
	    formPosition : 'right'
	};

	jQuery('.scrollTop').click(function () {
		jQuery('html, body').animate({
			scrollTop: 0
		}, 600);
		return false;
	});

	jQuery('.scroll, .menu-item.scroll a').click(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = jQuery(this.hash);
			target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				jQuery('html,body').animate({
					scrollTop: (target.offset().top - 40)
				}, 600);
				return false;
			}
		}
	});

	jQuery('.nav-open').click(function(){
		jQuery(this).toggleClass('nav-open_current');
		jQuery('.nav').toggleClass('nav_current');
		jQuery('html').toggleClass('no-scroll');
	});

	jQuery('.js-tabs-a').click(function(){
		jQuery(this).parents('.js-tabs').find('.js-tabs-body').removeClass('current');
		jQuery(this).parents('.js-tabs').find('.js-tabs-a.current').removeClass('current');
		jQuery(this).addClass('current').parents('.js-tabs').find('.js-tabs-body[data-id="'+jQuery(this).attr('data-id')+'"]').addClass('current');

		return false;
	});

	jQuery('.about-more a').click(function(){
	  var link = $(this);
    jQuery('.about-collapse').slideToggle('slow', function() {
      if (jQuery(this).is(':visible')) {
        link.text('Скрыть');
      } else {
        link.text('Подробнее');
      }
    });
  });

	jQuery('.carousel-about .about-item').click(function(){
		jQuery('#iconpic a:first-child').click();
	});

/*	jQuery('.catalog-tabs').each(function(){
		jQuery('.id1').addClass('current')
	});
*/


	jQuery('.js-carousel').each(function(index, element){
		var jQuerythis = jQuery(this);
		jQuerythis.addClass('instance-' + index);
		jQuerythis.parent().parent().find('.carousel-prev').addClass('carousel-prev-' + index);
		jQuerythis.parent().parent().find('.carousel-next').addClass('carousel-next-' + index);
		var swiper = new Swiper('.instance-' + index, {
			autoplay: {
			    delay: 5000,
			  },
			effect: 'fade',
			loop: true,
			observer: true,
      			observeParents: true,
			simulateTouch: false,
			nextButton: '.carousel-next-' + index,
			prevButton: '.carousel-prev-' + index
		});
	});

	jQuery('.js-icons').each(function(index, element){
		var jQuerythis = jQuery(this);
		jQuerythis.addClass('ci-' + index);
		jQuerythis.parent().parent().find('.icons-prev').addClass('icons-prev-' + index);
		jQuerythis.parent().parent().find('.icons-next').addClass('icons-next-' + index);
		var swiper = new Swiper('.ci-' + index, {
			slidesPerView: 6,
	  		spaceBetween: 50,
	  		loop: false,
			observer: true,
			observeParents: true,
			simulateTouch: false,
			nextButton: '.icons-next-' + index,
			prevButton: '.icons-prev-' + index,
			breakpoints: {
  			1300: {
  				slidesPerView: 4,
  				spaceBetween: 10
  			},
  			767: {
  				slidesPerView: 2,
  				spaceBetween: 10
  			}
  		}
		});
	});

	jQuery('.js-about').swiper({
		simulateTouch: false,
		slidesPerView: 3,
    slidesPerColumn: 1,
		loop: false,
		autoResize: true,
		nextButton: '.a1.carousel-next',
		prevButton: '.a1.carousel-prev',
		breakpoints: {
		  2999: {
  		  slidesPerView: 3,
		  },
			1300: {
				slidesPerView: 4,
				spaceBetween: 50,
			},
			767: {
				slidesPerView: 1,
				spaceBetween: 50,
			}
		}
	});

	var swiper = new Swiper('.js-kitchen', {
		simulateTouch: false,
		nextButton: '.kitchen-next',
		prevButton: '.kitchen-prev',
		slidesPerView: 3,
		slidesPerColumn: 1,
		loop: false,
		breakpoints: {
			1300: {
			  slidesPerView: 3,
				spaceBetween: 50
			},
			767: {
				slidesPerView: 1,
				spaceBetween: 10
			}
		}
	});

	var swiper = new Swiper('.js-area', {
		simulateTouch: false,
		nextButton: '.area-next',
		prevButton: '.area-prev',
		slidesPerView: 4,
		loop: false,
		breakpoints: {
			1300: {
				slidesPerView: 4,
				spaceBetween: 20
			},
			767: {
				slidesPerView: 2,
				spaceBetween: 20
			}
		}
	});

	$(window).load(function(){
  	jQuery('.js-api').click(function(){
    	jQuery('.yButton').click()
    });
  })

	// sticky menu:

	let last_known_scroll_position = 0;
	let isScrollListener = false;
	let isSticky = false;
	const headerHeaight = document.querySelector('.wrap-promo').clientHeight;
	const body = document.querySelector('body');




	console.log('### headerHeaight client: ', headerHeaight);

	const scrollListener = () => {

		if ( ( window.scrollY > headerHeaight + 200 ) && isSticky === false ) {
			body.classList.add('--js-sticky-on')
			isSticky = true;
			console.log('### this is sticky!!!');
		} else if ( window.scrollY <= headerHeaight + 200 && isSticky ) {
			// todo:  setTimeout() and animationed close
			body.classList.add('--js-sticky-animation-out')
			setTimeout(() => {
				body.classList.remove('--js-sticky-on', '--js-sticky-animation-out')
				isSticky = false;
				console.log('### this is static!!!');
			}, 600);
		}
	}



	window.addEventListener( 'resize', function() {

		if ( window.innerWidth >= 768 && !isScrollListener ) {

			isScrollListener = true
			window.addEventListener('scroll', scrollListener, false );

		} else if (window.innerWidth < 768 && isScrollListener ) {

			isScrollListener = false
			window.removeEventListener('scroll', scrollListener, false )

		}
	}  ,false);

	if ( window.innerWidth >= 768 && !isScrollListener ) {

		isScrollListener = true
		window.addEventListener('scroll', scrollListener, false );

	}


	// window.addEventListener('resize', resize);

});
