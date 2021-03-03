var textWrapper = document.querySelector('.ml9 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml9 .letter',
    scale: [0, 1],
    duration: 3000,
    elasticity: 800,
    delay: (el, i) => 45 * (i+1)
  }).add({
    targets: '.ml9',
    opacity: 0,
    duration:500,
    easing: "easeOutExpo",
    delay: 1000
  });

  $(document).ready(function(){
  $("#toggle").click(function(){
    $("#nav").slideToggle(500);
    var x = document.getElementById("toggle");
    if(x.innerHTML=="Menu"){
      x.innerHTML = "Close";
      x.style.color = "crimson";
    } else {
      x.innerHTML = "Menu";
      x.style.color = "white";
    }
  });

});

$( window ).resize(function() {
    if($( window ).width() >= 750) {
        $("#nav").show();
    }
    else {
        $("#nav").hide();
        document.getElementById("toggle").innerHTML = "Menu";
        document.getElementById("toggle").style.color = "white";
   }
});
﻿
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});

AOS.init();