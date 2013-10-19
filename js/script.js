/* socials fade in when loading */
$(document).ready(function() {
	$('.soc').fadeIn(900);
});

/* animations */
$(document).ready(function(){
	$('.title h1').slideDown('slow')
	});
	
/* current page highlight */
$(document).ready(function(){
var str=location.href.toLowerCase();
$("nav a").each(function() {
if (str.indexOf(this.href.toLowerCase()) > -1) {
 $(".active").removeClass("active");
$(this).parent().addClass("active");
}})});
