// Reset all header background color when back to top is clicked
$("nav a").click(function() {
    $("nav a").removeClass("navselected");
    $(this).addClass("navselected");
});


$("#menu").on("click", function() {
  $("#navTarget").toggleClass("openMenu");
});


$(".nav-link").on("click", function() {
  $("#navTarget").removeClass("openMenu");
});