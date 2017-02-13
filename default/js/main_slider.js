$(document).ready(function() {
	var parameters = {};
	parameters.count_img = $(".content_slider").find("ul").find("li").length;
	parameters.number_active_li = 0;
	
	function bg() {
		for(var i = 0; i < parameters.count_img; i++) {
			var el = $(".content_slider").find("li").eq(i);
			if(el.hasClass("item_active")) {
				el.removeClass("item_active");
				if(i + 1 >= parameters.count_img) {
					parameters.number_active_li = 0;
				} else {
					parameters.number_active_li = i + 1;
				}
			}
			$(".item_description_slider").eq(i).css({"display": "none"});
		}
		var new_el = $(".content_slider").find("li").eq(parameters.number_active_li);
		new_el.addClass("item_active");
		
		var src_bg = new_el.attr("data-src");
		
		$(".main_slider").css({"backgroundImage": "url('" + src_bg + "')"});
		$(".item_description_slider").eq(parameters.number_active_li).css({"display": "block"});
		parameters.timer = setTimeout(bg, 5000);
	}
	
	$(".content_slider").find("li").on("click", function() {
		clearTimeout(parameters.timer);
		for(var i = 0; i < parameters.count_img; i++) {
			var el = $(".content_slider").find("li").eq(i);
			if(el.hasClass("item_active")) {
				el.removeClass("item_active");
				if(i + 1 >= parameters.count_img) {
					parameters.number_active_li = 0;
				} else {
					parameters.number_active_li = i + 1;
				}
			}
			$(".item_description_slider").eq(i).css({"display": "none"});
		}
		$(this).addClass("item_active");
		parameters.number_active_li = $(this).attr("rel");
		
		var src_bg = $(this).attr("data-src");
		
		$(".main_slider").css({"backgroundImage": "url('" + src_bg + "')"});
		$(".item_description_slider").eq(parameters.number_active_li).css({"display": "block"});
		
		parameters.timer = setTimeout(bg, 5000);
	});
	
	bg();
});	