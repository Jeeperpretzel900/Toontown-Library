
<html>
<head>
  <title>Toontown.com, screenShots</title>
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

</script>  </head>
<body bgcolor="#4477ff" text=#000000 link=#4477ff vlink=#4455bb alink=#ff5555
    leftmargin=0 topmargin=0 marginwidth=0 marginheight=0  >
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

function DoAccount()
{
	window.open("https://account.toontown.com/frame1.html","","height=480,width=640,resizable=no,scrollbars=yes,menubar=no");

}

function playClick() {
  var agt=navigator.userAgent.toLowerCase();
  var is_major = parseInt(navigator.appVersion);
  var is_ie     = ((agt.indexOf("msie") != -1) && (agt.indexOf("opera") == -1));
  var is_ie4up  = (is_ie && (is_major >= 4));

  if(is_ie4up) {
      navigate("play.php");
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

  button_fanclub_on = new Image();
  button_fanclub_on.src = "images/button_fanclub_on.gif";
  button_fanclub_off = new Image();
  button_fanclub_off.src = "images/button_fanclub.gif";

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
<img border=0 src="images/button_account.gif" name="button_account"
    onMouseOver="imgOn('button_account')"
    onMouseOut="imgOff('button_account')"
    onClick="DoAccount()"><br>
<a href="news.php"
    onMouseOver="imgOn('button_news')"
    onMouseOut="imgOff('button_news')">
    <img border=0 src="images/button_news.gif" name="button_news"></a><br>
<a href="about.php"
    onMouseOver="imgOn('button_about')"
    onMouseOut="imgOff('button_about')">
    <img border=0 src="images/button_about.gif" name="button_about"></a><br>
<img border=0 src="images/button_screenshots_disabled.gif"><br>
<a href="faq.php"
    onMouseOver="imgOn('button_faq')"
    onMouseOut="imgOff('button_faq')">
    <img border=0 src="images/button_faq.gif" name="button_faq"></a><br>
<a href="launchReportBug.php"
    onMouseOver="imgOn('button_reportbug')"
    onMouseOut="imgOff('button_reportbug')">
    <img border=0 src="images/button_reportbug.gif" name="button_reportbug"></a><br>
<table border=0 cellspacing=0><tr><td height=5></td></tr></table>
<img border=0 onClick="playClick()" onMouseOver="imgOn('play')" onMouseOut="imgOff('play')"
        src="images/button_play.gif" name="play"><br>
</td></tr>
  <tr><td valign=top><img width=121 height=57 src="images/vrstudio_logo.gif"></td></tr>
</table></td>
<td align=left valign=top><img border=0 width=42 height=438 src="images/cloud_leftTrim2.jpg"></td>
<td align=left valign=top><img border=0 width=434 height=38 src="images/cloud_headerTrim2.jpg"><br>
<table width=434 border=0 cellpadding=0 cellspacing=0 align=center><tr><td>
<h3>Screen Shots</h3>
<div align="center">
<a href="screenShots.php?currImage=-1">Previous</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="screenShots.php?currImage=1">Next</a>
<img border=0 width=400 height=300 src="images/potpic-big.jpg" border=0>
<p><b>Click screen shots (below) to enlarge</b></p>
  <table border="0" cellpadding=2 cellspacing=0>
    <tr></tr><tr>      <td>
        <div align="center"><a href="screenShots.php?currImage=0">
        <img src="images/potpic-small.jpg" width="120" height="90" border="0"></a></div>
      </td>
          <td>
        <div align="center"><a href="screenShots.php?currImage=1">
        <img src="images/tag-small.jpg" width="120" height="90" border="0"></a></div>
      </td>
          <td>
        <div align="center"><a href="screenShots.php?currImage=2">
        <img src="images/4nMick-small.jpg" width="120" height="90" border="0"></a></div>
      </td>
    </tr><tr>      <td>
        <div align="center"><a href="screenShots.php?currImage=3">
        <img src="images/defeat-small.jpg" width="120" height="90" border="0"></a></div>
      </td>
          <td>
        <div align="center"><a href="screenShots.php?currImage=4">
        <img src="images/trolley-small.jpg" width="120" height="90" border="0"></a></div>
      </td>
          <td>
        <div align="center"><a href="screenShots.php?currImage=5">
        <img src="images/potshot-small.jpg" width="120" height="90" border="0"></a></div>
      </td>
    </tr><tr>      <td>
        <div align="center"><a href="screenShots.php?currImage=6">
        <img src="images/rubout-small.jpg" width="120" height="90" border="0"></a></div>
      </td>
          <td>
        <div align="center"><a href="screenShots.php?currImage=7">
        <img src="images/BRpals-small.jpg" width="120" height="90" border="0"></a></div>
      </td>
    </tr>
  </table>
</div>
</td></tr></table>
If you want to take
your own screen shots, just hit the "F9" key while playing. It will save an
image in your Toontown installation directory.
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
<!-- Copyright 2001, Walt Disney Imagineering, all rights reserved. -->
</div>
</td>
<td valign=top align=left><img border=0 width=47 height=438 src="images/cloud_rightTrim2.jpg"></td>
<td valign=top align=left><img border=0 width=74 height=438 src="images/cloud_rightBar.jpg"></td>

</tr>

</table>
</font>
</body>
  </html>
