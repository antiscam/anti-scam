///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
////////////////////////// Ready ///////////////////////////////
///////////////////////////////////////////////////////////////
$(document).ready(function(){
   $('#scrollbar1').tinyscrollbar();
   $('#postScrollbar').tinyscrollbar();
   $('#scrollbar_user_posts').tinyscrollbar();
   $('#scrollbar_email_password').tinyscrollbar();
   
});






///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
////////////////////////// AJAX ///////////////////////////////
///////////////////////////////////////////////////////////////
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}















$("#honestyReport").click( $('#scrollbar2').tinyscrollbar());

/*
$("#terms").click(function(){	
	$(".about").load("./about/terms1.txt");
	$('#scrollbar1').tinyscrollbar();

});

$("#privacy-policy").click(function(){
	
	$(".about").load("./about/privacy_policy.txt");
	$('#scrollbar1').tinyscrollbar();
});

<<<<<<< HEAD
$("#footer_privacy_policy").click(function(){
	 window.location = "aboutus.php";	
	$(window).load(function(){
		 alert("window is loaded");
		 $(".about").load("./about/privacy_policy.txt");
	});
});
$("#footer_term_conditions").click(function(){
	 window.location = "aboutus.php";		 
	$(window).load(function(){
		 alert("window is loaded");
		 $(".about").load("./about/terms1.txt");
	});
});
*/
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
=======




var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");








>>>>>>> 8fa0c35e615feddb7b09b5053764e35b51d92163
