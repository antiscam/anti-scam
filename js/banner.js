var translideshow1=new translideshow({
	wrapperid: "banner", //ID of blank DIV on page to house Slideshow
	dimensions: [920, 160], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["images/banner1.png"], //["image_path", "optional_link", "optional_target"]
		["images/banner2.png", "contactus.php"],
		["images/banner3.png","report.php"]//<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:4000, cycles:2, pauseonmouseover:true},
	orientation: "h", //Valid values: "h" or "v"
	persist: true, //remember last viewed slide and recall within same session?
	slideduration: 400 //transition duration (milliseconds)
})