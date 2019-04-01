// JavaScript Document
/*********************************************************
Slide Out Menu Script
***********************************************************/
$(document).ready(function () {
	$('.slideout-menu-toggle').on('click', function(event){
		event.preventDefault();
		// create menu variables
		var slideoutMenu = $('.slideout-menu');
		var slideoutMenuWidth = $('.slideout-menu').width();
		
		// toggle open class
		slideoutMenu.toggleClass("open");
		
		// slide menu
		if (slideoutMenu.hasClass("open")) {
			slideoutMenu.animate({
				right: "0px"
			});	
		} else {
			slideoutMenu.animate({
				right: -slideoutMenuWidth
			}, 250);	
		}
	});
});

$(".slideout").click(function() {
	$(".bgCover").fadeIn(500)
});

$(".closeBtn").click(function() {
	$(".bgCover").fadeOut(500)
});

$('.collectionDD').click(function() {
	$('.collection-sub').toggle();
	$(".openToggleCollection").toggleClass("active");
});

// Mitigate IE/Edge bug showing bullets on lists which are hidden when loading the page
$(document).ready(function(){
    if (document.documentMode || /Edge/.test(navigator.userAgent)) {
        $('ul:hidden').each(function(){
            $(this).parent().append($(this).detach());
        });
    }
});

/*************************************************
Back To Top
**************************************************/
jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 800,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});

/***********************************************************************
Email Newsletter Signup
*************************************************************************/
/*setTimeout(function() {
	$('#emailHeader').delay(200).slideUp('fast');
}, 1000);*/
$('#openSignUp').click(function(){
	$('#emailHeader').slideDown(400);
	//$('#openSignUp').hide();	
});

$('#closeSignUp').click(function(){
	$('#emailHeader').slideUp(400);
	//$('#openSignUp').fadeIn(500);	
});

/**************************************************
Jquery Validate
***************************************************/
 $("#emailForm").validate({
	submitHandler: function(form) {
		form.submit();
	}
 });
 
  $("#conciergeForm").validate({
	submitHandler: function(form) {
		form.submit();
	}
 });
 
 $("#form1").validate({
	submitHandler: function(form) {
		form.submit();
	}
 });

/*************************************************************
Navigation Dropdown
***********************************************************/

/*$('.collectionHover').on("click touchstart", function() {
	$('.collectionDD').slideDown(400); 
});

$('.collectionHover').mouseenter(function(){
	$('.collectionDD').slideDown(400); 
});

$('.collectionDD').mouseleave(function(){
	$('.collectionDD').slideUp(400); 
});

$('nav').mouseleave(function(){
	$('.collectionDD').slideUp(400); 
});

$('body').click(function(){
	$('.collectionDD').slideUp(400); 
});*/

