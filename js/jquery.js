$(document).ready(function(){
	$("#scrollTest").scrollbars();
});





$("#terms").click(function(){
	$(".about").load("./about/terms.txt");
});

$("#privacy-policy").click(function(){
	$(".about").load("./about/privacy-policy.txt");
});