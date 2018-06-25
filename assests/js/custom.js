(function($) {
'use strict';
var cattle = $(window);
    /*--------------------------
	 preloader js active
	---------------------------- */
	cattle.on("load", function() {
        $(".preloader").addClass('out');
    })
    /*-------- slick nav js active --------*/
    $('#menu').slicknav();
    /*--------------------------
	 banar slide active
	---------------------------- */
	$('.banar_slide_active').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
	navText:["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
	animateIn: 'fadeIn',
	animateOut: 'fadeOut',
	autoplay:false,
	mouseDrag:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
    });
    //this is for banar slide text animation in out on slide
    $(".banar_slide_active").on('translate.owl.carousel',function(){
        $('.banar_text h1').removeClass('slideInUp animated').hide();
        $('.banar_text h3').removeClass('slideInUp animated').hide();
        $('.banar_text h2').removeClass('slideInUp animated').hide();
        $('.banar_text a').removeClass('slideInUp animated').hide();
   })
    
    $(".owl-carousel").on('translated.owl.carousel',function(){
        $('.owl-item.active .banar_text h1').addClass('slideInUp animated').show();
        $('.owl-item.active .banar_text h3').addClass('slideInUp animated').show();
        $('.owl-item.active .banar_text h2').addClass('slideInUp animated').show();
        $('.owl-item.active .banar_text a').addClass('slideInUp animated').show();
    })
    /*--------------------------
	 about slide active
	---------------------------- */
	$('.about_img_slide').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
	animateIn: 'flipInX',
	animateOut: 'flipOutX',
	autoplay:true,
	mouseDrag:false,
    smartSpeed:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
    })
    /*--------------------------
	 hot item slide active
	---------------------------- */
	$('.hot_slide_active').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
	animateIn: 'flipInX',
	animateOut: 'flipOutX',
	autoplay:false,
	mouseDrag:false,
    smartSpeed:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
    })
    /*--------------------------
	 isotop active
	---------------------------- */
    $('#portfolio').imagesLoaded( function() {
    $(".food_item_filter").isotope({
        itemSelector: '.singal_item',
        layoutMode: 'fitRows',
    });
    // Add isotope click function
    $('.menu_filter_btn button').on('click', function(){
        $(".menu_filter_btn button").removeClass("active");
        $(this).addClass("active");
 
        var selector = $(this).attr('data-filter');
        $(".food_item_filter").isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: 1,
            }
        });
        return false;
    });
    })
    /*--------------------------
	 fast food slide left active
	---------------------------- */
    $('.hot_slide_left').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    navText:["<i class='fa fa-long-arrow-left' aria-hidden='true'></i>","<i class='fa fa-long-arrow-right' aria-hidden='true'></i>"],
	autoplay:false,
	mouseDrag:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
    })
    /*--------------------------
	counter active
	---------------------------- */
    $('.count_number').counterUp({
	  delay: 10,
	  time: 3000
	})
    $('.testmonial_active').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
	autoplay:false,
	mouseDrag:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
    })
    /*--------------------------
	 brand slide active
	---------------------------- */
    $('.brand_slide_active').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
	autoplay:true,
	mouseDrag:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
            items:6
        }
    }
    })
    /*--------------------------
	acroll to top active
	---------------------------- */
	$("#scroll_top").on('click', function(){
		$("html,body").animate({
			scrollTop:0
		}, 2000)
    });
    /*--------------------------
	 event slide active
	---------------------------- */
    $('.event-slide').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
	autoplay:false,
	mouseDrag:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
    })
    /*--------------------------
	blog-details slide active
	---------------------------- */
    $('.blog_details_slide').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    navText:["<i class='fa fa-long-arrow-left' aria-hidden='true'></i>","<i class='fa fa-long-arrow-right' aria-hidden='true'></i>"],
	autoplay:false,
	mouseDrag:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
    })
    /*--------------------------
	shope-details slide active
	---------------------------- */
    $('.shope_slide_active').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    navText:["<i class='fa fa-long-arrow-left' aria-hidden='true'></i>","<i class='fa fa-long-arrow-right' aria-hidden='true'></i>"],
	autoplay:true,
	mouseDrag:false,
        smartSpeed:1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
    })
    /*--------------------------
	details_product_slide_active
	---------------------------- */
    $('.details_product_slide_active').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
	autoplay:true,
	mouseDrag:false,
        smartSpeed:1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
    })
    /*--------------------------
	 galary active
	---------------------------- */
    $('#galary').imagesLoaded( function() {
    $(".galary_item").isotope({
        itemSelector: '.singal_item',
        layoutMode: 'fitRows',
    });
    // Add isotope click function
    $('.portfolio-filter li').on('click', function(){
        $(".portfolio-filter li").removeClass("active");
        $(this).addClass("active");
 
        var selector = $(this).attr('data-filter');
        $(".galary_item").isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: 1,
            }
        });
        return false;
    });
    });
})(jQuery);