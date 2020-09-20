<!--
var backAttempted = false;
function backMe() {
	if (backAttempted){
		window.location = "http://www.disneyblast.go.com/v3/homepage/index.html";
	}else{
		backAttempted = true;
		if (window.history.length > 1){
 			if(cookieVal("insideBlast") == "true"){
 				window.history.back();
 			}else{
	 			window.location = "http://www.disneyblast.go.com/v3/homepage/index.html";
 			}
		}else{
		window.location = "http://www.disneyblast.go.com/v3/homepage/index.html";
		}
	}
}


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

function chkIsp(){
	if(cookieVal("blast_isp") == "aol") {
		document.body.style.overflow='scroll';
	}else{
		document.body.style.overflow='hidden';
	}
}
// -->