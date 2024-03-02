// JavaScript Document

/*--------Sticky-header-----------*/

$(document).ready(function(){
  $('.sticky').stickMe(); 
})


/*-------newsevent-carousel-slider-----------*/

$('.newsevent-slider.owl-carousel').owlCarousel({
	loop: true,
	margin: 30,
	responsiveClass: true,
	nav: false,
	responsive: {
	  0: {
		items: 1,
	  },
	  480: {
		items: 1,
		
	  },
	  576: {
		items: 2,
		
	  },
	  
	  768: {
		items: 2,
		
	  },
	  992: {
		items: 3,
	  },
	  
	  1170: {
		items: 3,
	  }
	}
});


/*-------blog-carousel-slider-----------*/

$('.blog-slider.owl-carousel').owlCarousel({
	loop: false,
	margin:0,
	responsiveClass: true,
	nav: true,
	autoHeight:true,
	dots: false,
	responsive: {
	  0: {
		items: 1,
	  },
	  
	}
});


/*--------parallax-slider-----------*/

(function(){
  var parallax = document.querySelectorAll(".parallax"),
      speed = 0.05;
  window.onscroll = function(){
    [].slice.call(parallax).forEach(function(el,i){
      var windowYOffset = window.pageYOffset,
          elBackgrounPos = "0" + (-windowYOffset * speed) + "px";
      el.style.backgroundPosition = elBackgrounPos;
    });
  };
})();


/*--------tab-gallery-----------*/

$(document).ready(function(){
$(".filter-button").click(function(){
	var value = $(this).attr('data-filter');
	if(value == "all")
	{
		$('.filter').show('1000');
	}
	else
	{
		$(".filter").not('.'+value).hide('3000');
		$('.filter').filter('.'+value).show('3000');
	}
});
if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");
});


/*--------page-scroll-----------*/

$(document).ready(function() {
  var scrollLink = $('.scroll');
  scrollLink.click(function(e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000 );
  });
  // Active link switching
  $(window).scroll(function() {
    var scrollbarLocation = $(this).scrollTop();
    scrollLink.each(function() {
      var sectionOffset = $(this.hash).offset().top - 20;
      if ( sectionOffset <= scrollbarLocation ) {
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
      }
    })
  })
})


/*--------navebar-showhide-----------*/

$('#menutoggle').click(function() {
    $(this).toggleClass('toggle-active');
    $('#menunavoverlay').toggleClass('nav-active');
});
$('#menunavoverlay ul li a').click(function() {
	$("#menutoggle").trigger("click")
});

/*--------animation-wow-----------*/

wow = new WOW(
{
	animateClass: 'animated',
	offset:       100,
   callback:     function(box) {
   }
  }
);
wow.init();
			
