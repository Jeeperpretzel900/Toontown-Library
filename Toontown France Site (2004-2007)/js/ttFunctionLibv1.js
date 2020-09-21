// Retrieve USER AGENT from the browser
var agt=navigator.userAgent.toLowerCase();

// *** BROWSER VERSION ***
// Note: On IE5, these return 4, so use is_ie5up to detect IE5.
var is_major = parseInt(navigator.appVersion);
var is_minor = parseFloat(navigator.appVersion);

// Note: Opera and WebTV spoof Navigator.  We do strict client detection.
// If you want to allow spoofing, take out the tests for opera and webtv.
var is_nav  = ((agt.indexOf('mozilla')!=-1) && (agt.indexOf('spoofer')==-1)
            && (agt.indexOf('compatible') == -1) && (agt.indexOf('opera')==-1)
            && (agt.indexOf('webtv')==-1) && (agt.indexOf('hotjava')==-1));
            
var is_nav6up = (is_nav && (is_major >= 5));

var is_ie     = ((agt.indexOf("msie") != -1) && (agt.indexOf("opera") == -1));
var is_ie4up  = (is_ie && (is_major >= 4));

// *** PLATFORM ***
var is_win   = ( (agt.indexOf("win")!=-1) || (agt.indexOf("16bit")!=-1) );

// is this a 16 bit compiled version?
var is_win16 = ((agt.indexOf("win16")!=-1) ||
           (agt.indexOf("16bit")!=-1) || (agt.indexOf("windows 3.1")!=-1) ||
           (agt.indexOf("windows 16-bit")!=-1) );
// end browser/OS detection code

function goa_check_browser() {
  valid = 1;
  if(!is_ie4up)
      valid = 0;
  return valid;
}

if (!goa_check_browser()) 
  document.location.href="error_browser.html";
  
function getURLParameters() {

  var sURL = window.document.URL.toString();

  if (sURL.indexOf("?") > 0) {
    var arrParams = sURL.split("?");
    return arrParams[1];
  } else {
    return '';
  }
}
var sParameters = getURLParameters();

function open_cga(url) {
	settings = "toolbar=no,resizable=no,width=500,height=400";
	window.open(url, "cga", settings);
}

function open_screen(screen_id) {
	settings = "toolbar=yes,resizable=no,width=800,height=700";
	window.open('screen.html?screen_id='+screen_id, "screen", settings);
}

function open_wall(wall_id) {
	settings = "toolbar=yes,scrollbars=no,resizable=no,width=800,height=700";
	window.open('wallpaper.html?wall_id='+wall_id, "wallpaper", settings);
}

function open_manuel(url) {
	settings = "toolbar=yes,scrollbars=yes,resizable=no,width=800,height=700";
  window.open(url, "manuel", settings);
}

function open_comm(url) {
	settings = "toolbar=yes,scrollbars=yes,resizable=no,width=800,height=700";
  window.open(url, "", settings);
}

// Get domain
var sURL = window.document.URL.toString();
var domain = sURL.split("/");

// E-stat
function myStats(mypage, myclass) {
  var iframeID = document.getElementById("stat");
  iframeID.src = 'mystats.html?p='+mypage+'&c='+myclass;
}
//-->