


<html>
<head>
  <title>Toontown.com, ActiveXproblem.php</title>
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





<body bgcolor=#4477ff text=#000000 link=#4477ff vlink=#4455bb alink=#ff5555
    leftmargin=0 topmargin=0 marginwidth=0 marginheight=0  >
<font face="verdana, arial, helvetica, sans-serif" size="1">
<table width="718" align=center border=0 cellpadding="0" cellspacing=0 bgcolor=#ffffff>
<tr>

<td colspan="5" align=left valign=top><a href="http://play.toontown.com/main.php">
<img border=0 width=718 height=151 src="http://media.toontown.com/toontown/sv1.4.11/images/cloud_header.jpg"></a></td>

</tr>
<tr>

<td valign=top align=left><table width=121 height=538 border=0 cellpadding=0 cellspacing=0 align=left valign=top>
  <tr><td valign=top align=right background="http://media.toontown.com/toontown/sv1.4.11/images/cloud_leftBar.jpg">
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
      navigate("http://play.toontown.com/play.php?source=toontownDotComPlayButton");
   } else {
    alert("Toontown does not currently support this web browser.  Please launch Toontown\nusing a recent version of Microsoft Internet Explorer (5 or newer).");
   }
}

if (document.images) {
  button_about_on = new Image();
  button_about_on.src = "http://media.toontown.com/toontown/sv1.4.11/images/button_about_on.gif";
  button_about_off = new Image();
  button_about_off.src = "http://media.toontown.com/toontown/sv1.4.11/images/button_about.gif";

  button_screenshots_on = new Image();
  button_screenshots_on.src = "http://media.toontown.com/toontown/sv1.4.11/images/button_screenshots_on.gif";
  button_screenshots_off = new Image();
  button_screenshots_off.src = "http://media.toontown.com/toontown/sv1.4.11/images/button_screenshots.gif";

  button_faq_on = new Image();
  button_faq_on.src = "http://media.toontown.com/toontown/sv1.4.11/images/button_faq_on.gif";
  button_faq_off = new Image();
  button_faq_off.src = "http://media.toontown.com/toontown/sv1.4.11/images/button_faq.gif";

  button_news_on = new Image();
  button_news_on.src = "http://media.toontown.com/toontown/sv1.4.11/images/button_news_on.gif";
  button_news_off = new Image();
  button_news_off.src = "http://media.toontown.com/toontown/sv1.4.11/images/button_news.gif";

  button_reportbug_on = new Image();
  button_reportbug_on.src = "http://media.toontown.com/toontown/sv1.4.11/images/button_reportbug_on.gif";
  button_reportbug_off = new Image();
  button_reportbug_off.src = "http://media.toontown.com/toontown/sv1.4.11/images/button_reportbug.gif";

  button_account_on = new Image();
  button_account_on.src = "http://media.toontown.com/toontown/sv1.4.11/images/button_account_on.gif";
  button_account_off = new Image();
  button_account_off.src = "http://media.toontown.com/toontown/sv1.4.11/images/button_account.gif";


  play_on = new Image();
  play_on.src = "http://media.toontown.com/toontown/sv1.4.11/images/button_play_on.gif";
  play_off = new Image();
  play_off.src = "http://media.toontown.com/toontown/sv1.4.11/images/button_play.gif";
}
</script>
    <img border=0 src="http://media.toontown.com/toontown/sv1.4.11/images/button_account.gif" name="button_account"
    onMouseOver="imgOn('button_account')"
    onMouseOut="imgOff('button_account')"
    onClick="DoAccount()"><br>
  <a href="http://play.toontown.com/news.php"
    onMouseOver="imgOn('button_news')"
    onMouseOut="imgOff('button_news')">
    <img border=0 src="http://media.toontown.com/toontown/sv1.4.11/images/button_news.gif" name="button_news"></a><br>
  <a href="http://play.toontown.com/about.php"
    onMouseOver="imgOn('button_about')"
    onMouseOut="imgOff('button_about')">
    <img border=0 src="http://media.toontown.com/toontown/sv1.4.11/images/button_about.gif" name="button_about"></a><br>
  <a href="http://play.toontown.com/screenShots.php"
    onMouseOver="imgOn('button_screenshots')"
    onMouseOut="imgOff('button_screenshots')">
    <img border=0 src="http://media.toontown.com/toontown/sv1.4.11/images/button_screenshots.gif" name="button_screenshots"></a><br>
  <a href="http://play.toontown.com/faq.php"
    onMouseOver="imgOn('button_faq')"
    onMouseOut="imgOff('button_faq')">
    <img border=0 src="http://media.toontown.com/toontown/sv1.4.11/images/button_faq.gif" name="button_faq"></a><br>
  <a href="http://play.toontown.com/launchReportBug.php"
    onMouseOver="imgOn('button_reportbug')"
    onMouseOut="imgOff('button_reportbug')">
    <img border=0 src="http://media.toontown.com/toontown/sv1.4.11/images/button_reportbug.gif" name="button_reportbug"></a><br>
  <table border=0 cellspacing=0><tr><td height=5></td></tr></table>
  <img border=0 onClick="playClick()" onMouseOver="imgOn('play')" onMouseOut="imgOff('play')"
        src="http://media.toontown.com/toontown/sv1.4.11/images/button_play.gif" name="play"><br>
  </td></tr>
  <tr><td valign=top><img width=121 height=57 src="http://media.toontown.com/toontown/sv1.4.11/images/vrstudio_logo.gif"></td></tr>
</table></td>
<td align=left valign=top><img border=0 width=42 height=438 src="http://media.toontown.com/toontown/sv1.4.11/images/cloud_leftTrim2.jpg"></td>
<td align=left valign=top><img border=0 width=434 height=38 src="http://media.toontown.com/toontown/sv1.4.11/images/cloud_headerTrim2.jpg"><br>
<table width=434 border=0 cellpadding=0 cellspacing=0 align=center><tr><td>

<SCRIPT LANGUAGE=javascript>
function window_onload() {
  var agt=navigator.userAgent.toLowerCase();
  var is_winnt = ((agt.indexOf("winnt")!=-1) || (agt.indexOf("windows nt")!=-1));
  if(is_winnt) {
      NTadminMsg.style.display = "inline";
  }
}
</SCRIPT>

<BODY onLoad="javascript:window_onload()"><h3>Problem Downloading Flash Player</h3>

To continue playing Toontown, a new Macromedia Flash Player ActiveX control must be allowed to download and run.  If you
were not prompted to download the control before seeing this page, check the following issues:

<DIV ID=NTadminMsg STYLE="display:none">
<BR><BR>
 <u><B>On Windows XP or Windows 2000</B><BR></U>
<span style="font-size:x-small">
 Toontown must be installed or updated by a machine administrator.  Once an account with administrator privileges
 has successfully started the game, limited-access accounts should be able to play.  On Windows XP, you can
 determine if your account has administrator privileges by clicking <div><B>Start Menu->Control Panel->User Accounts</B></div>and
 seeing if your account name is listed as <I>Computer Administrator</I> or <I>Limited Account</I>.
</span>
 </DIV>
<BR>
<BR>
<u><B>Internet Security Settings Problem</B></u><BR>
<span style="font-size:x-small">
The Browser Security Zone labeled <I>Internet</I> must allow browser "cookies", so it cannot be set to the <I>High</I> level.

To fix this:
<TABLE style="font-size:x-small">
<TR><TD WIDTH=30></TD><TD>1)</TD> <TD> Click <B>Start Menu->Control Panel->Internet Options</B></TD> </TR>
<TR><TD></TD><TD>2)</TD><TD> Click the <B>Security</B> tab. </TD> </TR>
<TR><TD></TD><TD>3)</TD><TD> Make sure the <I>Internet</I> icon is highlighted, and click the <B>Custom Level</B> button.</TD> </TR>
<TR><TD></TD><TD>4)</TD><TD> Under <B>Reset custom settings</B>, select <I>Medium</I> and click <B>Reset</B>.</TD> </TR>
</TABLE>
<BR>
<DIV width=200>
 Setting the security level to <I>Medium</I> will let the browser prompt you with 'Do you want to install and run the
 Toontown Installer?'.   Click yes to continue Toontown installation.
 <BR><BR>
 If do not you wish to change the overall <I>Internet</I>-zone browser security setting,
 the specific Internet Explorer security options that must be enabled to install Toontown are:
</DIV>

 <TABLE style="font-size:x-small">
 <TR><TD WIDTH=30></TD><TD>Download signed ActiveX controls</TD><TD WIDTH=40></TD><TD><B>Enable</B> or <B>Prompt</B></TD></TR>
 <TR><TD></TD><TD>Run ActiveX controls</TD><TD></TD><TD><B>Enable</B> or <B>Prompt</B></TD></TR>
 <TR><TD></TD><TD>Script ActiveX controls</TD><TD></TD><TD><B>Enable</B></TD></TR>
 <TR><TD></TD><TD>File download</TD><TD></TD><TD><B>Enable</B></TD></TR>
 <TR><TD></TD><TD>Allow cookies to be stored</TD><TD></TD><TD><B>Enable</B></TD><TD><I>(IE 4.0/5.0 only)</I></TD></TR>
 <TR><TD></TD><TD>Allow per-session cookies</TD><TD></TD><TD><B>Enable</B></TD><TD><I>(IE 4.0/5.0 only)</I></TD></TR>
</TABLE>
</span>
<br>
If you have any questions, please send them to <a href="mailto:toontown@disneyonline.com">toontown@disneyonline.com</a>.
<p>


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
<td valign=top align=left><img border=0 width=47 height=438 src="http://media.toontown.com/toontown/sv1.4.11/images/cloud_rightTrim2.jpg"></td>
<td valign=top align=left><img border=0 width=74 height=438 src="http://media.toontown.com/toontown/sv1.4.11/images/cloud_rightBar.jpg"></td>

</tr>

</table>
</font>
<img 
  src="http://ehg-dig2.hitbox.com/HG?hc=we19&cd=1&hv=6&ce=u&hb=DM510717H8BB38EN3&n=ActiveXproblem.php&vcon=/toontown/play&seg=&cp=&gp="
  border='0'
  width='1'
  height='1'
  ></body>
  </html>
