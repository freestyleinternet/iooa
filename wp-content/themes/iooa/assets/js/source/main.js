(function($) {
	
	// Navigation responsive
	$('nav').meanmenu();
	
	//ipad and iphone fix hover fix	
	/* if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
		var flag = false;
		 $("article").bind('touchstart click', function(){
		  if (!flag) {
			flag = true;
			setTimeout(function(){ flag = false; }, 100);
			// do something
			
		  }
		  return false
		});
	} */

	/*if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
		$("article").bind('touchstart', function(){
			console.log("touch started");
		});
	
		$(".menu li a").bind('touchend', function(){
			console.log("touch ended");
		});
	}*/

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
