

/////////////Silder

		jQuery(document).ready(function($) {
			$('.my-slider').unslider({
        autoplay: true,
        delay: 5000,
        arrows: {
						//  Unslider default behaviour
						prev: '<a class="unslider-arrow prev"><i class="fa fa-angle-left fa-3x"></i></a>',
						next: '<a class="unslider-arrow next"><i class="fa fa-angle-right fa-3x"></i></a>',
					},
          
					autoplay: true

			});

		});

		jQuery(document).ready(function($) {
			$('.my-slider').unslider({
        autoplay: true,
        delay: 5000,
        arrows: {
						//  Unslider default behaviour
						prev: '<a class="unslider-arrow prev"><i class="fa fa-angle-left fa-3x"></i></a>',
						next: '<a class="unslider-arrow next"><i class="fa fa-angle-right fa-3x"></i></a>',
					},
          
					autoplay: true

			});

		});

		    $(document).ready(function(){
      $('.your-class').slick({
      	slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
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
  ],
    });
      });


$(document).ready(function(){
  	$('.mini-slider').slick({
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 2000,
	    });
	  });