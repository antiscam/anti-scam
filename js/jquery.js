$(document).ready(function(){
   $('#scrollbar1').tinyscrollbar();
});


$("#honestyReport").click( $('#scrollbar2').tinyscrollbar());

$("#terms").click(function(){
	$(".about").load("./about/terms.txt");
});

$("#privacy-policy").click(function(){
	$(".about").load("./about/privacy-policy.txt");
});

var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");