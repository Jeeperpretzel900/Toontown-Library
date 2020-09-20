  <!--

var flashVer = 0;
var shockVer = 0;
var javaVer = 1;

// Read Cookie
function cookieVal(cookieName) {
	thisCookie = document.cookie.split("; ")
    	for (i=0; i<thisCookie.length; i++) {
        	if (cookieName == thisCookie[i].split("=")[0]) {
        		return thisCookie[i].split("=")[1]
        	}
    	}
	return "Direct" //default value
}

//	var javaPlatform = cookieVal("blast_platform").toLowerCase();

function chkPlugs(cookiename){
var result = null;
var myCookie = " " + document.cookie + ";";
var searchName = " " + cookiename + "=";
var startOfCookie = myCookie.indexOf(searchName);
var endOfCookie;
if (startOfCookie != -1){
startOfCookie += searchName.length;
var endOfCookie = myCookie.indexOf(";", startOfCookie);
var result = unescape(myCookie.substring(startOfCookie, endOfCookie));
flashVer = result.substring(result.indexOf("flash")+5, result.indexOf("flash")+8);
shockVer = result.substring(result.indexOf("shock")+5, result.indexOf("shock")+8);
}
}
chkPlugs("blast_plugins");

// main navigational function
  
function navToApp(appReq, appTyp, appUrl){
	if (appTyp == "flash"){
	  	if (flashVer>=appReq) {
  			window.location = appUrl;
 		} else {
			if (cookieVal("blast_platform") == "PC,IE"){
			window.location = "http://www.disneyblast.go.com/v2/setup/needflash.html"
			}else{
			window.location = "http://www.disneyblast.go.com/v2/setup/getflash.html"
			}
		}

	} else if (appTyp == "shockwave"){
	shockNum = new Number(shockVer)
	  	if (shockNum>=appReq) {
  			window.location = appUrl;
 		} else {
			window.location = "http://www.disneyblast.go.com/v2/setup/getshockwave.html"
		}
	} else if (appTyp == "japplet"){	
		if (cookieVal("blast_platform").toLowerCase()!="mac,ie") {
  			window.location = appUrl;
 		} else {
			window.location = "http://www.disneyblast.go.com/v2/setup/maciejava.html"
		}
	}
}

function changeUser(){
	if (typeof(window.opener) == "object") {
		window.opener.reLogin();
	}
	window.close();
}

function setBlastOptions(optionString){
document.cookie = "blast_options=" + optionString + ";path=/;domain=.disneyblast.go.com; expires=Tuesday, 01-Dec-2020 08:00:00 GMT;"
}
  // -->