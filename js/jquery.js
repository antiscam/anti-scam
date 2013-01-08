$(document).ready(function(){
    // simple jScrollbar plugin call
    $('.jScrollbar').jScrollbar();
    // more complex jScrollbar plugin call
    $('.jScrollbar').jScrollbar({
        scrollStep : 25,
        position : 'left',
        showOnHover : true
    });
});




$("#terms").click(function(){
	$(".about").load("./about/terms.txt");
});

$("#privacy-policy").click(function(){
	$(".about").load("./about/privacy-policy.txt");
});