
<html>
<head>
  <title>Toontown.com, fanClub</title>
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
<img border=0 src="images/button_fanclub_disabled.gif"><br>
<img border=0 width=102 height=26 src="images/blank.gif" name=""><br>
<font size=-8><br></font>
<img border=0 width=102 height=53 src="images/blank.gif" name=""><br>
</td></tr>
  <tr><td valign=top><img width=121 height=57 src="images/vrstudio_logo.gif"></td></tr>
</table></td>
<td align=left valign=top><img border=0 width=42 height=438 src="images/cloud_leftTrim2.jpg"></td>
<td align=left valign=top><img border=0 width=434 height=38 src="images/cloud_headerTrim2.jpg"><br>
<table border=0 cellpadding=0 width=434 align=center><tr><td>
<h3>Fan Club</h3>
<form action="signUpThankYou.php" method="post">
By giving us your e-mail address, we can notify you of new things happening with toontown.com.
You must be 13 years old or older to sign up.  Parents may
sign up for their children.
<p>
All of the fields are optional.  If there is some piece of information you 
do not wish to give, just leave it blank (this is preferred over giving incorrect
information).
<p>
<table border=0 cellpadding=4>
<tr><td align=right>
E-Mail Address:</td><td><input type=text name="userEmail" size=30 value=""/>
</td></tr><tr><td align=right>
Name:</td><td><input type=text name="userName" size=30 value=""/>
</td></tr><tr><td align=right>
Account Name:</td><td><input type=text name="userAccount" size=30 value=""/>
</td></tr><tr><td align=right>
Age:</td><td><input type=text name="userAge" size=30 value=""/>
</td></tr><tr><td align=right>
Gender:</td><td><input type=radio name="userGender" value="f" />Female
<input type=radio name="userGender" value="m" />Male
</td></tr><tr><td align=right>
Country:</td><td><input type=text name="userCountry" size=30 value="United States"/>
</td></tr><tr><td align=right>
State/Region:</td><td><input type=text name="userState" size=30 value=""/>
</td></tr><tr><td align=right>
How did you<br>hear about<br>Toontown Online:</td><td><textarea name="userHeardFrom" rows=3 cols=22></textarea>
</td></tr><tr><td>
&nbsp;</td><td><input type="submit" value="Send">
</td></tr></table>
</td></tr></table>
<p/>
<div align="CENTER">
<table border=0 cellpadding=0 cellspacing=0>
    <tr>
      <td>
        <div align="center"><font face="verdana, arial, helvetica, sans-serif" size="1">
          <div align="CENTER" style="margin-top:3px; font-size:10pt;"><a href="mailto:toontown@disney.com">
            Contact Us</a>
&nbsp;&nbsp;|&nbsp;&nbsp; 
            <a href="http://disney.go.com/legal/privacy_policy.html" target="_top">
            Privacy Policy</a>
&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="http://disney.go.com/legal/internet_safety.html">Internet
            Safety</a>
</div>
            <div align="CENTER" style="margin-top:5px; font-size:8pt;">Use
            of this site signifies your agreement to the 
            <a href="http://disney.go.com/legal/conditions_of_use.html">terms
            of use</a>.</div>
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


