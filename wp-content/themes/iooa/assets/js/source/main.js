(function($) {
	
	// Navigation responsive
	$('nav').meanmenu();
	
	// Gallery
	$('.slideshow').cycle();
	var slideshows = $('.cycle-slideshow').on('cycle-next cycle-prev', function(e, opts) {
		slideshows.not(this).cycle('goto', opts.currSlide);
	});
	$('#cycle-2 div').click(function(){
		var index = $('#cycle-2').data('cycle.API').getSlideIndex(this);
		slideshows.cycle('goto', index);
	});
	
	$('select').customSelect();


	// Home page wall
	equalheight = function(container){
	var currentTallest = 0,
		 currentRowStart = 0,
		 rowDivs = new Array(),
		 $el,
		 topPosition = 0;
	 $(container).each(function() {
	
	   $el = $(this);
	   $($el).height('auto')
	   topPostion = $el.position().top;
	
	   if (currentRowStart != topPostion) {
		 for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
		   rowDivs[currentDiv].height(currentTallest);
		 }
		 rowDivs.length = 0; // empty the array
		 currentRowStart = topPostion;
		 currentTallest = $el.height();
		 rowDivs.push($el);
	   } else {
		 rowDivs.push($el);
		 currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
	  }
	   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
		 rowDivs[currentDiv].height(currentTallest);
	   }
	 });
	}
	
	$(window).load(function() {
	  equalheight('#main article');
	});
	
	$(window).resize(function(){
	  equalheight('#main article');
	});	

})(jQuery);
