$(document).ready(function() {
	var indicator = false;
	var active_span = 0;
	var time_delay = 300;
	var timer_flicker;
	$(".mobile_btn").on("click", function() {
		
		if(indicator === false) {
			$(".top_nav_level_1").slideDown("slow");
			indicator = true;
		} else {
			$(".top_nav_level_1").slideUp("slow");
			indicator = false;
			
		}
	});
	
	
	$(".mobile_btn").hover(
		function() {
			clearTimeout(timer_flicker);
			$(".mobile_btn").find("span").eq(0).css({"background": "rgba(255,255,255,1)"});
			$(".mobile_btn").find("span").eq(1).css({"background": "rgba(255,255,255,1)"});
			$(".mobile_btn").find("span").eq(2).css({"background": "rgba(255,255,255,1)"});
			$(this).css({"border-color": "rgba(255,255,255,1)"});
		},
		function() {
			$(".mobile_btn").find("span").eq(1).css({"backgroundColor": "rgba(255,255,255,0.5)"});
			$(".mobile_btn").find("span").eq(2).css({"backgroundColor": "rgba(255,255,255,0.5)"});
			$(".mobile_btn").find("span").eq(3).css({"backgroundColor": "rgba(255,255,255,0.5)"});
			$(this).css({"border-color": "rgba(255,255,255,0.5)"});
			timer_flicker = setTimeout(flicker, time_delay);
		}
	);
	
	function flicker() {
		$(".mobile_btn").find("span").eq(active_span).css({"backgroundColor": "rgba(255,255,255,1)"});
		if(active_span == 0) {
			$(".mobile_btn").find("span").eq(2).css({"backgroundColor": "rgba(255,255,255,0.5)"});
		} else {
			$(".mobile_btn").find("span").eq(active_span-1).css({"backgroundColor": "rgba(255,255,255,0.5)"});
		}
		active_span = active_span + 1;
		if(active_span == 3) active_span = 0;
		
		timer_flicker = setTimeout(flicker, time_delay);
	}
	flicker();
});