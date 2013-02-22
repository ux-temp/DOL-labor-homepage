$(document).ready(function() {
	//select all anchor tags in the persona-tab class and binding the following function
	$(".persona-tab a").click(function(event) {
		//Overiding the anchor tags default event/function
		event.preventDefault();
		
		//selecting elements and removing the selected-tab class.
		$(".persona-tab").removeClass("selected-tab");
		
		//Based on the anchor tag clicked adds the selected-tab class to it's parent.
		$(this).parent().addClass("selected-tab");
		
		//Selecting the elements with the class of persona-container and hiding the containers.
		$(".persona-container").hide();
		
		//Creates variable href and saving the attribute of href from the clicked anchor. The href represents the coraponding container by id. 
		var tab = $(this).attr("data-tab");
		
		//showing the corasponding container based on the id.
		$('#' + tab + "-container").show();
		
		//create/reseting the cookie persona corasponding containers id for 365 days.
		setCookie("persona",tab,365);
	});

	//$(".gov-widget").hide();
	//fadeInGovWidget();
	$('#govMessageBox').ready( function () {
		fadeInGovWidget();
	});
});

// ** Author W3Schools.com PAGE: http://www.w3schools.com/js/js_cookies.asp ** 
function setCookie(c_name,value,exdays) {
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}

function getCookie(c_name) {
	var i,x,y,ARRcookies=document.cookie.split(";");
	for (i=0;i<ARRcookies.length;i++) {
		x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
		y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
		x=x.replace(/^\s+|\s+$/g,"");
		if (x==c_name) {
			return unescape(y);
		}
	}
}


// **Gov Widget Hides then gracefully fades into page **//
function fadeInGovWidget(){
	
	//$("#govMessageBox").attr( 'src', 'http://www.governor.ny.gov/sites/default/themes/governor/govwidget.php' );
	$("#govWidgetLoad").delay(1000).fadeOut(1000)
	
};