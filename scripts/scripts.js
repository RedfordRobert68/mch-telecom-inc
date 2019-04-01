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

if (window.location.href.indexOf('index') > -1){
    $('.homeBtn').addClass("selected");

}else if(window.location.href.indexOf('about') > -1){
    $('.aboutBtn').addClass("selected");

}else if(window.location.href.indexOf('services') > -1){
    $('.servicesBtn').addClass("selected");

}else if(window.location.href.indexOf('contact') > -1){
    $('.contactBtn').addClass("selected");
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