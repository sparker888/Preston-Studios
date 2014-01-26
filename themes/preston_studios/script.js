// Script code for language
	(function($) {
	   $.extend($.fn,{ 
	                                delay: function(time) { 
	                                        var obj = this; 
	                                        this.queue(function(){ 
	                                                window.setTimeout(function(){ 
	                                                        obj.dequeue(); 
	                                                },time); 
	                                        }); 
	                                        return this; 
	                                } 
	                        }); 
	                 
	                        $(document).ready(function() { 
	                                $(".drop-down-menu li.expandable").hover(function() { 
	                                        $(this).find("ul:first").stop(true,true).slideDown("fast"); 
	                                },function() { 
	                                                $(this).find("ul:first").delay(500).slideUp("fast"); 
	                                }); 
	                        });
	                                })(jQuery);
	
	// Script code for Jcarousel
	$(document).ready(function() { 
	
	        $(".view-main-section-carousel li:first").addClass("active");
	        $(".preview .field-item:first").css("display","block");
		
		$(".field-items div").css("display","none");
		$(".field-items div:first").css("display","block");
	        $(".thumbs ul li a").click(function(){
	        if($(this).parents("li").is(".active")) return false;
		$(".field-items").css("display","block");
	        $(".field-item").css("display", "none");
	        $(".preview").find("a[href="+$(this).attr("href")+"]").parent(".field-item").fadeIn("slow").css("display", "block");
	        $(".thumbs ul li").removeClass('active');
	        $(this).parents("li").addClass('active');
	        return false;
	        }); 
	});
