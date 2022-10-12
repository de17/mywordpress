$(window).on("load", function () {
    if ($(window).width() > 767) {
        AOS.init({
            disable:"mobile,tablet,phone",
            duration:1000,
            once: true
        });
    }
});

$(function(){

	$('.banner-carousel').carousel({
	    interval: 3000,
	    pause: false
	});

	// Insight Tabs
		$('.ins-tab01').click(function(){
			$(".ins-tab").removeClass("active");
			$(this).addClass("active");
			$(".ins-content").hide();
			$(".ins-content01").fadeIn();
		});

		$('.ins-tab02').click(function(){
			$(".ins-tab").removeClass("active");
			$(this).addClass("active");
			$(".ins-content").hide();
			$(".ins-content02").fadeIn();
		});

		$('.ins-tab03').click(function(){
			$(".ins-tab").removeClass("active");
			$(this).addClass("active");
			$(".ins-content").hide();
			$(".ins-content03").fadeIn();
		});

		$('.ins-tab04').click(function(){
			$(".ins-tab").removeClass("active");
			$(this).addClass("active");
			$(".ins-content").hide();
			$(".ins-content04").fadeIn();
		});
	// End

	// show and hide list
		$('.show-more-list').click(function() {
		    $(this).hide();
		    $(this).parent().find(".atab-list-view").fadeIn();
		});
		$('.show-less-list').click(function() {
		    $(this).parent().parent().find(".show-more-list").fadeIn();
		    $(this).parent().parent().find(".atab-list-view").hide();
		});
	// end

	// Owl Carousel
		$('.accelerator-carousel').owlCarousel({
			loop:true,
			mouseDrag:true,
			margin:30,
		    nav:true,
		    dots:false,
		    autoWidth:true,
		    smartSpeed:800,
		    navText: [
		    "<img class='poster-arrow' src='img/arrow-right.png' alt='arrow'>",
		    "<img class='poster-arrow' src='img/arrow-right.png' alt='arrow'>"
		      ],
		    responsiveClass: true,
		    responsive:{
		        0:{
		        	items:1,
		        	dots:true
		        },
		        1024:{
		            items:3
		        },
		        1280:{
		            items:4
		        }
		    }
		});

		$('.insights-carousel').owlCarousel({
			loop:false,
			mouseDrag:false,
			margin:10,
		    nav:true,
		    dots:false,
		    autoWidth:false,
		    smartSpeed:800,
		    navText: [
		    "<img class='poster-arrow' src='img/arrow-left-red.png' alt='arrow'>",
		    "<img class='poster-arrow' src='img/arrow-right-red.png' alt='arrow'>"
		      ],
		    responsiveClass: true,
		    responsive:{
		        0:{
		        	items:1,
		        	dots:true,
		            nav:false
		        },
		        550:{
		            items:2,
		            dots:true,
		            nav:false
		        },
		        1024:{
		            items:3
		        },
		        1280:{
		            items:3
		        }
		    }
		});


	// End

	// Form label animation
	    $('.input-group input').focus(function(){
	        me = $(this) ;
	        $("label[for='"+me.attr('id')+"']").addClass("animate-label");
	    });
	    $('.input-group input').blur(function(){
	        me = $(this) ;
	        if ( me.val() == ""){
	            $("label[for='"+me.attr('id')+"']").removeClass("animate-label");
	        }
	    });
	// end

	// scroll center
		$("#insight-tabs li").on("click", function() {
		  	$("#insight-tabs li").removeClass("active");
		  	$(this).addClass("active");
		  	$("#insight-tabs").scrollCenter(".active", 300);
		});

		jQuery.fn.scrollCenter = function(elem, speed) {
		  	var active = jQuery(this).find(elem); 
		  	var activeWidth = active.width()/2; 
		  	var pos = active.position().left+activeWidth; 
		  	var currentscroll = jQuery(this).scrollLeft(); 
		  	var divwidth = jQuery(this).width(); 
		  	pos = pos + currentscroll - divwidth / 2; 

		  	jQuery(this).animate({
		    	scrollLeft: pos
		  	}, speed == undefined ? 1000 : speed);
		  	return this;
		};

		jQuery.fn.scrollCenterORI = function(elem, speed) {
		    jQuery(this).animate({
		        scrollLeft: jQuery(this).scrollLeft() - jQuery(this).offset().left + jQuery(elem).offset().left
		    }, speed == undefined ? 1000 : speed);
		    return this;
		};
	// end

	// form thank you message
		$('.book-assessment').click(function(){
			$(".form-block").hide();
			$(".ty-block").fadeIn();
		});

});


/*------ disable carourel inner shadow and arrow -------*/
/*$(document).ready(function() {
	$(".section7 .owl-carousel .owl-nav button.owl-next").on("click", function() {
	  	$(".section7 .owl-carousel .owl-nav button.owl-next.disabled").parent().parent().parent().addClass("ins-content-after-shadow-hide");
	});
});
$(document).ready(function() {
	$(".section7 .owl-carousel .owl-nav button.owl-prev").on("click", function() {
	  	$(".section7 .owl-carousel .owl-nav button.owl-next").parent().parent().parent().removeClass("ins-content-after-shadow-hide");
	});
});*/