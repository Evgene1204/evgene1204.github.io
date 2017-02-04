$(document).ready(function(){
    $("form input[name=phone]").mask("+7-(99)-9999999");
	$("#top").click(function(){
		var body= $("body");
		var top = body.scrollTop();
var target = $("#scroll");
		if(top!=0)
		{
		  body.animate({scrollTop: $(target).offset().top}, 1000);
return false;
		}
	});

	$('a[href^="#"]').click(function(){
        var el = $(this).attr('href');
        $('body').animate({
            scrollTop: $(el).offset().top}, 2000);
        return false; 
	});

	$('.punkt ul li').click(function(){
        var el = $(this).find("a").attr('href');
        $('body').animate({
            scrollTop: $(el).offset().top}, 2000);
        return false; 
	});

$('.owl-carousel').owlCarousel({
    ltr:true,
    loop:true,
    autoplay: true,
    autoplaySpeed: 3000,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    navSpeed: 3000,
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
var owl = $('.owl-carousel');

$('.my-owl-prev').click(function() {
	$('.owl-carousel').owlCarousel({
    ltr:true,
    loop:true,
    autoplay: true,
    autoplaySpeed: 3000,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    navSpeed: 3000,
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
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [2000]);
})
$('.my-owl-next').click(function() {
	$('.owl-carousel').owlCarousel({
    ltr:true,
    loop:true,
    //autoplay: true,
    autoplaySpeed: 3000,
    navSpeed: 3000,
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
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('next.owl.carousel', [2000]);
});
$('#callback').submit(function( event ){
      event.preventDefault();
      var form = $(this);
      $("#send").attr('disabled', true);
      var data = form.serialize();
        var url = form.attr('action');
        $.ajax({
          type: 'POST',
          url: url,
          data: data,
          success: function(text){;
          form.find('input:not(#send)').each(function(){
                $(this).val(''); 
            });
             $("#send").attr('disabled', false);
             swal("Спасибо!", "Мы свяжемся с Вами в самое ближайшее время!", "success")
          },
          error: function() {
                alert("error");  
          }
        });
    });

$(".card-light").hover(function(){
    $(this).find(".yel-oval").html("");
    
    $(".card-light .main-oval").animate({
        width:"46%"
        
    },100);
    
    $(".card-light .yel-oval").animate({
        width:"75%"
    },100);
    
    
    //$(this).find(".yel-oval").html("<p class='podr'>УЗНАТЬ ПОДРОБНЕЕ</p>");
    
    $(".card-light .main-main").animate({
        marginLeft:"11.55%",
        opacity:0
        
    },10);
    
    $(this).find(".yel-oval").html("<p class='podr'><a href='/standart'>УЗНАТЬ ПОДРОБНЕЕ</a></p>");
    $(".card-light .yel-oval .podr").animate({
        lineHeight:"37px",
        fontSize:"0.8em"
    },10);
    $(".card-light .main-main").animate({
        opacity:1
        
    },500);
}, function(){
    $(".card-light .main-oval").animate({
        width:"59%"
        
    });
    $(".card-light .yel-oval").animate({
        width:"53%"
        
    });
    $(".card-light .main-main").animate({
        marginLeft:"6.55%"
        
    });
    $(this).find(".yel-oval").html("<p>32 000</p><p class='upper'>прямо сейчас</p>")
});

$(".card-standart").hover(function(){
    $(this).find(".yel-oval").html("");
    $(".card-standart .main-main").animate({
        marginLeft:"9.55%",
        opacity:0
        
    },1);
    $(".card-standart .main-oval").animate({
        width:"46%"
        
    },100);
    
    $(".card-standart .yel-oval").animate({
        width:"86%"
    },100);
    
    
    //$(this).find(".yel-oval").html("<p class='podr'>УЗНАТЬ ПОДРОБНЕЕ</p>");
    
    
    
    $(this).find(".yel-oval").html("<p class='podr'><a href='/standart'>УЗНАТЬ ПОДРОБНЕЕ</a></p>");
    $(".card-standart .yel-oval .podr a").animate({
        lineHeight:"37px",
        fontSize:"1em"
    },10);
    $(".card-standart .main-main").animate({
        opacity:1
        
    },500);
    $(".card-standart .main-main").fadeIn();
}, function(){
    $(".card-standart .main-oval").animate({
        width:"59%"
        
    });
    $(".card-standart .yel-oval").animate({
        width:"53%"
        
    });
    $(".card-standart .main-main").animate({
        marginLeft:"6.55%"
        
    });
    $(this).find(".yel-oval").html("<p>32 000</p><p class='upper'>прямо сейчас</p>")
});



$(".card-yoga").hover(function(){
    $(this).find(".yel-oval").html("");
    
    $(".card-yoga .main-oval").animate({
        width:"46%"
        
    },100);
    
    $(".card-yoga .yel-oval").animate({
        width:"75%"
    },100);
    
    
    //$(this).find(".yel-oval").html("<p class='podr'>УЗНАТЬ ПОДРОБНЕЕ</p>");
    
    $(".card-yoga .main-main").animate({
        marginLeft:"11.55%",
        opacity:0
        
    },10);
    
    $(this).find(".yel-oval").html("<p class='podr'><a href='/standart'>УЗНАТЬ ПОДРОБНЕЕ</a></p>");
    $(".card-yoga .yel-oval .podr").animate({
        lineHeight:"37px",
        fontSize:"0.8em"
    },10);
    $(".card-yoga .main-main").animate({
        opacity:1
        
    },500);
}, function(){
    $(".card-yoga .main-oval").animate({
        width:"59%"
        
    });
    $(".card-yoga .yel-oval").animate({
        width:"53%"
        
    });
    $(".card-yoga .main-main").animate({
        marginLeft:"6.55%"
        
    });
    $(this).find(".yel-oval").html("<p>32 000</p><p class='upper'>прямо сейчас</p>")
});

});

