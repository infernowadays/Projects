$(function(){$.fn.scrollToTop=function(){$(this).hide().removeAttr("href");if($(window).scrollTop()>="300"){$(this).fadeIn("slow")}var scrollDiv=$(this);$(window).scroll(function(){if($(window).scrollTop()<="350"){$(scrollDiv).fadeOut("slow")}else{$(scrollDiv).fadeIn("slow")}});
$(this).click(function(){$("html, body").animate({scrollTop:0},"slow")})}});
$(function() { $("#go_up").scrollToTop(); });
$(function(){$.fn.scrollToTop=function(){$(this).hide().removeAttr("href");if($(window).scrollTop()>="300"){$(this).fadeIn("slow")}var scrollDiv=$(this);$(window).scroll(function(){if($(window).scrollTop()<="350"){$(scrollDiv).fadeOut("slow")}else{$(scrollDiv).fadeIn("slow")}});
$(this).click(function(){$("html, body").animate({scrollTop:0},"slow")})}});
$(function() { $("#go_up").scrollToTop(); });