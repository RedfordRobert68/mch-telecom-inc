<?php
    include "includes/head-inc.php";
?>


<!--***********************************************
Javascript Libraries
*************************************************-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="scripts/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
<script>
// envelope animation
window.onload = function(){
  var tl = new TimelineLite({delay: 1}),
    firstBg = document.querySelectorAll('.text__first-bg'),
    secBg = document.querySelectorAll('.text__second-bg'),
    triBg = document.querySelectorAll('.text__third-bg'),
    word  = document.querySelectorAll('.text__word');
  
  tl
    .to(firstBg, 0.2, {scaleX:1})
    .to(secBg, 0.2, {scaleX:1})
    .to(triBg, 0.2, {scaleX:1})
    .to(word, 0.1, {opacity:1}, "-=0.1")  
    .to(firstBg, 0.2, {scaleX:0})
    .to(secBg, 0.2, {scaleX:0})
    .to(triBg, 0.2, {scaleX:0});
  
  document.querySelector('.restart').onclick = function() {tl.restart()};
}
</script>
</body>



