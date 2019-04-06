/*************************************************
Smartphone Slideout Navigation
**************************************************/

$(document).ready(function(){
    $(".nav-toggle").click(function(){
        $("nav").slideDown(300);
    });
    $(".closeBtn").click(function(){
        $("nav").slideUp(300);
    });
});

/************************************************* 
Change class of selected navigation 
**************************************************/

//if (window.location.href.indexOf('index') > -1){
    //$('.homeBtn').addClass("selected");

if(window.location.href.indexOf('about') > -1){
    $('.aboutBtn').addClass("selected");

}else if(window.location.href.indexOf('services') > -1){
    $('.servicesBtn').addClass("selected");

}else if(window.location.href.indexOf('contact') > -1){
    $('.contactBtn').addClass("selected");

}else{
    $('.homeBtn').addClass("selected");
}

/*******************************************************
Slide Header Up on Scroll (Desktop only)
*******************************************************/
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("tel-bar").style.top = "0";
    } else {
        document.getElementById("tel-bar").style.top = "-40px";
    }
    prevScrollpos = currentScrollPos;
}

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("header").style.top = "0";
    } else if(window.innerWidth >= 701) {
        document.getElementById("header").style.top = "-40px";
    }
    prevScrollpos = currentScrollPos;
}

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