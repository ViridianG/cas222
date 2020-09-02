
/* Hamburger Menu */
       
$( document ).ready(function() {

$( ".cross" ).hide();
$( ".menu" ).hide();
$( ".hamburger" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".hamburger" ).hide();
$( ".cross" ).show();
});
});

$( ".cross" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".cross" ).hide();
$( ".hamburger" ).show();
});
});

// FAQ
// Add minus icon for collapse element which is open by default
$(".collapse.show").each(function(){
    $(this).prev(".card-header").find(".material-icons").text("expand_less");
});
// Toggle plus minus icon on show hide of collapse element
$(".collapse").on('show.bs.collapse', function(){
    $(this).prev(".card-header").find(".material-icons").text("expand_less");
}).on('hide.bs.collapse', function(){
    $(this).prev(".card-header").find(".material-icons").text("expand_more");
});

});
