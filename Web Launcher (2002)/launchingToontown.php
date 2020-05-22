


<html>
<head>
  <title>Toontown.com, launchingToontown</title>
  <script>
function submitForm(id) {
  document.forms[id].submit();
}

function imgOn(imageName) {
if (document.images) {
    document.images[imageName].src = eval(imageName + "_on.src");
  }
}

function imgOff(imageName) {
  if (document.images) {
    document.images[imageName].src = eval(imageName + "_off.src");
  }
}

</script>  <META HTTP-EQUIV="Pragma" CONTENT="no-cache"></head>
<font face="verdana, arial, helvetica, sans-serif" size="1">
<table width="100%" border=0 bgcolor=#ffaa88 cellpadding=0><tr>

</tr>
<tr>
</tr></table>


<body bgcolor=#4477ff text=#000000 link=#4477ff vlink=#4455bb alink=#ff5555
    leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 onload="return openToontown()" >
<font face="verdana, arial, helvetica, sans-serif" size="1">
<table width="718" align=center border=0 cellpadding="0" cellspacing=0 bgcolor=#ffffff>
<tr>

<td colspan="5" align=left valign=top><a href="main.php">
<img border=0 width=718 height=151 src="images/cloud_header.jpg"></a></td>

</tr>
<tr>

<td valign=top align=left><table width=121 height=538 border=0 cellpadding=0 cellspacing=0 align=left valign=top>
  <tr><td valign=top align=right background="images/cloud_leftBar.jpg">
  <font size=-2><br></font>
  
<script>

function DoAccount() {
  window.open("https://account.test.toontown.com/frame1.html","","height=480,width=640,resizable=no,scrollbars=yes,menubar=no");
}

function playClick() {
  var agt=navigator.userAgent.toLowerCase();
  var is_major = parseInt(navigator.appVersion);
  var is_ie     = ((agt.indexOf("msie") != -1) && (agt.indexOf("opera") == -1));
  var is_ie4up  = (is_ie && (is_major >= 4));

  if(is_ie4up) {
      navigate("play.php?source=toontownDotComPlayButton");
   } else {
    alert("Toontown does not currently support this web browser.  Please launch Toontown\nusing a recent version of Microsoft Internet Explorer (5 or newer).");
   }
}

if (document.images) {
  button_about_on = new Image();
  button_about_on.src = "images/button_about_on.gif";
  button_about_off = new Image();
  button_about_off.src = "images/button_about.gif";

  button_screenshots_on = new Image();
  button_screenshots_on.src = "images/button_screenshots_on.gif";
  button_screenshots_off = new Image();
  button_screenshots_off.src = "images/button_screenshots.gif";

  button_faq_on = new Image();
  button_faq_on.src = "images/button_faq_on.gif";
  button_faq_off = new Image();
  button_faq_off.src = "images/button_faq.gif";

  button_news_on = new Image();
  button_news_on.src = "images/button_news_on.gif";
  button_news_off = new Image();
  button_news_off.src = "images/button_news.gif";

  button_comingsoon_on = new Image();
  button_comingsoon_on.src = "images/button_comingsoon_on.gif";
  button_comingsoon_off = new Image();
  button_comingsoon_off.src = "images/button_comingsoon.gif";

  button_backstage_on = new Image();
  button_backstage_on.src = "images/button_backstage_on.gif";
  button_backstage_off = new Image();
  button_backstage_off.src = "images/button_backstage.gif";

  button_reportbug_on = new Image();
  button_reportbug_on.src = "images/button_reportbug_on.gif";
  button_reportbug_off = new Image();
  button_reportbug_off.src = "images/button_reportbug.gif";

  button_account_on = new Image();
  button_account_on.src = "images/button_account_on.gif";
  button_account_off = new Image();
  button_account_off.src = "images/button_account.gif";


  play_on = new Image();
  play_on.src = "images/button_play_on.gif";
  play_off = new Image();
  play_off.src = "images/button_play.gif";
}
</script>
<a href="about.php"
    onMouseOver="imgOn('button_about')"
    onMouseOut="imgOff('button_about')">
    <img border=0 src="images/button_about.gif" name="button_about"></a><br>
<a href="screenShots.php"
    onMouseOver="imgOn('button_screenshots')"
    onMouseOut="imgOff('button_screenshots')">
    <img border=0 src="images/button_screenshots.gif" name="button_screenshots"></a><br>
<a href="faq.php"
    onMouseOver="imgOn('button_faq')"
    onMouseOut="imgOff('button_faq')">
    <img border=0 src="images/button_faq.gif" name="button_faq"></a><br>
<a href="news.php"
    onMouseOver="imgOn('button_news')"
    onMouseOut="imgOff('button_news')">
    <img border=0 src="images/button_news.gif" name="button_news"></a><br>
<a href="signUp.php"
    onMouseOver="imgOn('button_fanclub')"
    onMouseOut="imgOff('button_fanclub')">
    <img border=0 src="images/button_fanclub.gif" name="button_fanclub"></a><br>
  <table border=0 cellspacing=0><tr><td height=5></td></tr></table>
  <img border=0 onClick="playClick()" onMouseOver="imgOn('play')" onMouseOut="imgOff('play')"
        src="images/button_play.gif" name="play"><br>
  </td></tr>
  <tr><td valign=top><img width=121 height=57 src="images/vrstudio_logo.gif"></td></tr>
</table></td>
<td align=left valign=top><img border=0 width=42 height=438 src="images/cloud_leftTrim2.jpg"></td>
<td align=left valign=top><img border=0 width=434 height=38 src="images/cloud_headerTrim2.jpg"><br>
<SCRIPT LANGUAGE="JavaScript">
<!--
var InternetExplorer = navigator.appName.indexOf("Microsoft") != -1;
var goFullscreen = 1;
var toontownHasBeenLaunched=0;

// removes everything after the last "/"
function stripFilename(p) {
  index = p.lastIndexOf("/");
  if ((index == -1) || (index == 0)) return "";
  return p.substring(0,index+1);
}

// make sure the string does not start with "/"
function unPreSlashify(p) {
  while ((p.length > 0) && (p.charAt(0) == "/")) {
    p = p.substring(1, p.length);
  }
  return p;
}

function getWebServerURL() {
  // determine download server URL from this page's URL;
  // assume that this page came from base directory of
  // download server
  var dlServerURL =
    location.protocol + "//" +
    location.host + "/" +
    unPreSlashify(stripFilename(location.pathname));
  return dlServerURL;
}

function removeURLParam(url, paramName) {
  if(!url) return url;
  begin = url.indexOf(paramName);
  if (begin == -1) return url;
  end = url.indexOf('&', begin);
  if ((begin > 0) && (url.charAt(begin-1) == '&'))
    begin--; // kill the preceeding '&'
  if (end == -1) {
    url = url.substring(0, begin);
  } else {
    url = url.substring(0, begin) + url.substring(end, url.length);
  }
  if (url.charAt(url.length-1) == '?')
    url = url.substring(0, url.length-1);
  return url;
}

function openToontown() {
  var url = getWebServerURL() + "installer.php" + location.search;
  url = removeURLParam(url, "fromEula");
  var newWindow;
  if (toontownHasBeenLaunched) {
    return;
  }
  toontownHasBeenLaunched=1;

  if (goFullscreen) {
    if (InternetExplorer) {
      newWindow = window.open(url,"Toontown_Installer","fullscreen=0,scrollbars=1");
    } else {
      newWindow = window.open(url, "Toontown_Installer", "innerWidth="+screen.width+",innerHeight="+(screen.height)+
        ",top=0,left=0,toolbar=no,titlebar=no,scrollbars=no,resizable=no,hotkeys=no,location=no,menubar=no,status=no");
    }
  } else {
    newWindow = window.open(url,"");
  }
  if (newWindow) {
    if (!newWindow.opener) {
      newWindow.opener = self;
    }
  } else {
    alert("The Toontown launcher could not open a new window.  Please check that any browser popup window blocking software is disabled!");
  }

  // go to the "back to toontown" page
  url = getWebServerURL() + "thanksForPlaying.php" + location.search;
  url = removeURLParam(url, "fromEula");
  location.href = url;
}
//-->
</SCRIPT>

<h3>Starting Disney's Toontown Online...</h3>
<CENTER>
<FORM><INPUT TYPE="button" NAME="Button" VALUE="Click here to go to Toontown" onClick="openToontown()"></FORM>
</CENTER>
<p/>
<div align="CENTER">
<table border=0 cellpadding=0 cellspacing=0>
    <tr>
      <td>
        <div align="center"><font face="verdana, arial, helvetica, sans-serif" size="1">
          <div align="CENTER" style="margin-top:3px; font-size:10pt;">
            <a href="http://apps.disneyblast.go.com/cgi-bin/mail/generic_mail.cgi?template=toontown/toonhelp.tpl" target=_blank>
            Contact Us</a>
&nbsp;&nbsp;|&nbsp;&nbsp; 
            <a href="http://disney.go.com/legal/privacy_policy.html" target="_top">
            <b>Privacy Policy</b></a>
&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="http://disney.go.com/legal/internet_safety.html">Internet
            Safety</a>
</div>
            <div align="CENTER" style="margin-top:5px; font-size:8pt;">Use
            of this site signifies your agreement to the 
            <a href="http://disney.go.com/legal/conditions_of_use.html">terms
            of use</a>.</div>
            <div align="CENTER" style="margin-top:3px; font-size:8pt;">
            <a href="\memberAgreement.php">Member Agreement</a>&nbsp|&nbsp
            <a href="http://disney.go.com/guestservices/netiquette.html">House Rules</a>
</div>
            <div align="CENTER" style="margin-top:3px; font-size:8pt;">&copy;
            Disney. All rights reserved.</div>
          </font></div>
      </td>
    </tr>
  </table>
  <p/>
<!-- Copyright 2002, Walt Disney Imagineering, all rights reserved. -->
</div>
</td>
<td valign=top align=left><img border=0 width=47 height=438 src="images/cloud_rightTrim2.jpg"></td>
<td valign=top align=left><img border=0 width=74 height=438 src="images/cloud_rightBar.jpg"></td>

</tr>

</table>
</font>
<img 
  src="http://ehg-dig2.hitbox.com/HG?hc=we19&cd=1&hv=6&ce=u&hb=DM510717H8BB38EN3&n=launchingToontown&vcon=/toontown/play&seg=&cp=&gp="
  border='0'
  width='1'
  height='1'
  ></body>
  <head>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    </head></html>
