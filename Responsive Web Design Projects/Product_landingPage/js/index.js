/* onload function*/
(function(){

var element = document.getElementsByClassName("slidein-box");
var length  = element.length;
var j = 0;

 /* loop for slide in animation*/
function featureLoop(i) {
    element[j].className += " " + "slidein";
    if (++j < i) {
      setTimeout(function () { featureLoop(i); }, 500);
    }
}
featureLoop(length);
})();

/* keep navigation highlighted */

$(".nav-wrap a").click(function(){
    $(".nav-wrap > a").removeClass("buttonpress");
    $(this).addClass('buttonpress');
})

