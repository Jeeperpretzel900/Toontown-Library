


<html>
<head>
  <title>Toontown.com, handleEulaResponse</title>
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


<HEAD> 
<!--START BREADCRUMB JAVASCRIPT--> 
<SCRIPT LANGUAGE="JavaScript"> 

<!--
var space = "&nbsp;";
var space2 = "&gt;";
var breadCrumb = "<font color=#ffffff face=arial,helvetica size=-2>" + space + space + space2 + space + space + "</font><a href='http://transfer.go.com/cgi/transfer.dll?srvc=dis&goto=http://disney.go.com/kids/&name=mchrome_kids'><font color='#ffffff' face='arial,helvetica' size='-2'>Kids Island</font></a><font color=#ffffff face=arial,helvetica size=-2>" + space + space + space2 + space + space + "</font><a href='http://disney.go.com/preview/toontown/special_offer/'><font color='#ffffff' face='arial,helvetica' size='-2'>Disney's Toontown Online</font></a>";
//-->

</SCRIPT> 
<!--END BREADCRUMB--> 
</HEAD> 




<table width="770" cellspacing="0" cellpadding="0" border="0" align="center"> 
        <tr><td> 
<!-- START CHROME --> 
<SCRIPT language="JavaScript" src="http://disney.go.com/globalmedia/chrome/blueMicroChromeWide.js"></SCRIPT> 
<!-- END CHROME --> 
        </td></tr> 
</table> 





<body bgcolor= text=#000000 link=#4477ff vlink=#4455bb alink=#ff5555
    leftmargin=0 topmargin=0 marginwidth=0 marginheight=0  >
<font face="verdana, arial, helvetica, sans-serif" size="1">
<table width="718" align=center border=0 cellpadding="0" cellspacing=0 bgcolor=#ffffff>
<tr>

<td valign=top align=left><table width=718 height=151 border=0 cellpadding=0 cellspacing=0 align=left valign=top>
  <tr><td valign=top align=right background="/cloud_header_left.jpg">
  <font size=-2></font>
  
<script>

if (document.images) {
  button_postcard_on = new Image();
  button_postcard_on.src = "/button_postcard_on.gif";
  button_postcard_off = new Image();
  button_postcard_off.src = "/button_postcard.gif";
}
</script>
    <a href="http://disney.go.com/dcards/toontown/index.html"
    onMouseOver="imgOn('button_postcard')"
    onMouseOut="imgOff('button_postcard')">
    <img border=0 src="/button_postcard.gif" name="button_postcard"></a><br>
  </td>

<td colspan="4" align=right valign=top><a href="main.php">
<img border=0 width=597 height=151 src="/cloud_header_right.jpg"></a></td>


</tr>
<tr>

<td valign=top align=left><table width=121 height=536 border=0 cellpadding=0 cellspacing=0 align=left valign=top>
  <tr><td valign=top align=right background="/cloud_leftBar.jpg">
  <font size=-2><br></font>
  
<script>

function DoAccount() {
  window.open("https://account.toontown.com/frame1.html","","height=480,width=640,resizable=no,scrollbars=yes,menubar=no");
}

function playClick() {
  var agt=navigator.userAgent.toLowerCase();
  var is_major = parseInt(navigator.appVersion);
  var is_ie     = ((agt.indexOf("msie") != -1) && (agt.indexOf("opera") == -1));
  var is_ie4up  = (is_ie && (is_major >= 4));

  if(is_ie4up) {
      navigate("play.php?source=toontownDotComPlayButton");
      //openToontown();
   } else {
    alert("Toontown does not currently support this web browser.  Please launch Toontown\nusing a recent version of Microsoft Internet Explorer (5 or newer).");
   }
}

if (document.images) {
  button_about_on = new Image();
  button_about_on.src = "/button_about_on.gif";
  button_about_off = new Image();
  button_about_off.src = "/button_about.gif";

  button_screenshots_on = new Image();
  button_screenshots_on.src = "/button_screenshots_on.gif";
  button_screenshots_off = new Image();
  button_screenshots_off.src = "/button_screenshots.gif";

  button_faq_on = new Image();
  button_faq_on.src = "/button_faq_on.gif";
  button_faq_off = new Image();
  button_faq_off.src = "/button_faq.gif";

  button_news_on = new Image();
  button_news_on.src = "/button_news_on.gif";
  button_news_off = new Image();
  button_news_off.src = "/button_news.gif";

  button_comingsoon_on = new Image();
  button_comingsoon_on.src = "/button_comingsoon_on.gif";
  button_comingsoon_off = new Image();
  button_comingsoon_off.src = "/button_comingsoon.gif";

  button_backstage_on = new Image();
  button_backstage_on.src = "/button_backstage_on.gif";
  button_backstage_off = new Image();
  button_backstage_off.src = "/button_backstage.gif";

  button_reportbug_on = new Image();
  button_reportbug_on.src = "/button_reportbug_on.gif";
  button_reportbug_off = new Image();
  button_reportbug_off.src = "/button_reportbug.gif";

  button_account_on = new Image();
  button_account_on.src = "/button_account_on.gif";
  button_account_off = new Image();
  button_account_off.src = "/button_account.gif";


  play_on = new Image();
  play_on.src = "/button_play_on.gif";
  play_off = new Image();
  play_off.src = "/button_play.gif";
}
</script>
    <a href="about.php"
    onMouseOver="imgOn('button_about')"
    onMouseOut="imgOff('button_about')">
    <img border=0 src="/button_about.gif" name="button_about"></a><br>
  <a href="comingSoon.php"
    onMouseOver="imgOn('button_comingsoon')"
    onMouseOut="imgOff('button_comingsoon')">
    <img border=0 src="/button_comingsoon.gif" name="button_comingsoon"></a><br>
  <a href="backStage.php"
    onMouseOver="imgOn('button_backstage')"
    onMouseOut="imgOff('button_backstage')">
    <img border=0 src="/button_backstage.gif" name="button_backstage"></a><br>
  <a href="news.php"
    onMouseOver="imgOn('button_news')"
    onMouseOut="imgOff('button_news')">
    <img border=0 src="/button_news.gif" name="button_news"></a><br>
  <img border=0 src="/button_account.gif" name="button_account"
    onMouseOver="imgOn('button_account')"
    onMouseOut="imgOff('button_account')"
    onClick="DoAccount()"><br>
  <a href="faq.php"
    onMouseOver="imgOn('button_faq')"
    onMouseOut="imgOff('button_faq')">
    <img border=0 src="/button_faq.gif" name="button_faq"></a><br>
  <a href="problem.php"
    onMouseOver="imgOn('button_reportbug')"
    onMouseOut="imgOff('button_reportbug')">
    <img border=0 src="/button_reportbug.gif" name="button_reportbug"></a><br>
  <table border=0 cellspacing=0><tr><td height=5></td></tr></table>
  <img border=0 onClick="playClick()" onMouseOver="imgOn('play')" onMouseOut="imgOff('play')"
        src="/button_play.gif" name="play"><br>
  </td></tr>
  <tr><td valign=top><img width=121 height=57 src="/vrstudio_logo.gif"></td></tr>
</table></td>
<td align=left valign=top><img border=0 width=42 height=438 src="/cloud_leftTrim2.jpg"></td>
<td align=left valign=top><img border=0 width=434 height=38 src="/cloud_headerTrim2.jpg"><br>
<table width=434 border=0 cellpadding=0 cellspacing=0 align=center><tr><td>
<h3>Are you sure?</h3>
You must agree to the End User License Agreement in order to play Disney's Toontown Online.
<p>
If you would like to reconsider, please press the play button,
and review the End User License Agreement.
<p>
Thanks!
</td></tr></table>
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
<td valign=top align=left><img border=0 width=47 height=438 src="/cloud_rightTrim2.jpg"></td>
<td valign=top align=left><img border=0 width=74 height=438 src="/cloud_rightBar.jpg"></td>

</tr>

</table>
</font>
<img
  src="http://ehg-dig2.hitbox.com/HG?hc=we19&cd=1&hv=6&ce=u&hb=DM510717H8BB38EN3&n=handleEulaResponse&vcon=/toontown/play&seg=&cp=&gp="
  border='0'
  width='1'
  height='1'
  ></body>
  <head>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    </head></html>

