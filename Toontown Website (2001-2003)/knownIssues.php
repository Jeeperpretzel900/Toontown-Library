
<html>
<head>
  <title>Toontown.com, knownIssues</title>
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

<td colspan="5" align=left valign=top><a href="http://www.toontown.com/main.php">
<img border=0 width=718 height=151 src="http://www.toontown.com/images/cloud_header.jpg"></a></td>

</tr>
<tr>

<td valign=top align=left><table width=121 height=538 border=0 cellpadding=0 cellspacing=0 align=left valign=top>
  <tr><td valign=top align=right background="http://www.toontown.com/images/cloud_leftBar.jpg">
  <font size=-2><br></font>
<script>
if (document.images) {
  button_about_on = new Image();
  button_about_on.src = "http://www.toontown.com/images/button_about_on.gif";
  button_about_off = new Image();
  button_about_off.src = "http://www.toontown.com/images/button_about.gif";

  button_screenshots_on = new Image();
  button_screenshots_on.src = "http://www.toontown.com/images/button_screenshots_on.gif";
  button_screenshots_off = new Image();
  button_screenshots_off.src = "http://www.toontown.com/images/button_screenshots.gif";

  button_faq_on = new Image();
  button_faq_on.src = "http://www.toontown.com/images/button_faq_on.gif";
  button_faq_off = new Image();
  button_faq_off.src = "http://www.toontown.com/images/button_faq.gif";

  button_news_on = new Image();
  button_news_on.src = "http://www.toontown.com/images/button_news_on.gif";
  button_news_off = new Image();
  button_news_off.src = "http://www.toontown.com/images/button_news.gif";

  button_fanclub_on = new Image();
  button_fanclub_on.src = "http://www.toontown.com/images/button_fanclub_on.gif";
  button_fanclub_off = new Image();
  button_fanclub_off.src = "http://www.toontown.com/images/button_fanclub.gif";

  button_reportbug_on = new Image();
  button_reportbug_on.src = "http://www.toontown.com/images/button_reportbug_on.gif";
  button_reportbug_off = new Image();
  button_reportbug_off.src = "http://www.toontown.com/images/button_reportbug.gif";

  play_on = new Image();
  play_on.src = "http://www.toontown.com/images/button_play_on.gif";
  play_off = new Image();
  play_off.src = "http://www.toontown.com/images/button_play.gif";
}
</script>

<a href="http://www.toontown.com/about.php"
    onMouseOver="imgOn('button_about')"
    onMouseOut="imgOff('button_about')">
    <img border=0 src="http://www.toontown.com/images/button_about.gif" name="button_about"></a><br>
<a href="http://www.toontown.com/screenShots.php"
    onMouseOver="imgOn('button_screenshots')"
    onMouseOut="imgOff('button_screenshots')">
    <img border=0 src="http://www.toontown.com/images/button_screenshots.gif" name="button_screenshots"></a><br>
<a href="http://www.toontown.com/faq.php"
    onMouseOver="imgOn('button_faq')"
    onMouseOut="imgOff('button_faq')">
    <img border=0 src="http://www.toontown.com/images/button_faq.gif" name="button_faq"></a><br>
<a href="http://www.toontown.com/news.php"
    onMouseOver="imgOn('button_news')"
    onMouseOut="imgOff('button_news')">
    <img border=0 src="http://www.toontown.com/images/button_news.gif" name="button_news"></a><br>
<a href="http://www.toontown.com/signUp.php"
    onMouseOver="imgOn('button_fanclub')"
    onMouseOut="imgOff('button_fanclub')">
    <img border=0 src="http://www.toontown.com/images/button_fanclub.gif" name="button_fanclub"></a><br>
<img border=0 width=102 height=26 src="http://www.toontown.com/images/blank.gif" name=""><br>
<font size=-8><br></font>
<img border=0 width=102 height=53 src="http://www.toontown.com/images/blank.gif" name=""><br>
</td></tr>
  <tr><td valign=top><img width=121 height=57 src="http://www.toontown.com/images/vrstudio_logo.gif"></td></tr>
</table></td>
<td align=left valign=top><img border=0 width=42 height=438 src="http://www.toontown.com/images/cloud_leftTrim2.jpg"></td>
<td align=left valign=top><img border=0 width=434 height=38 src="http://www.toontown.com/images/cloud_headerTrim2.jpg"><br>
<table width=434 border=0 cellpadding=0 cellspacing=0 align=center><tr><td>
<h3>Known Issues</h3>
Here are a few issues (bugs) that we have enough information about.
<p>
If you find one of these problems, please understand that the issue is being
addressed.  Further bug reports for these topics are not necessary.
<p>
<i>(<b>Thank you</b> for all the great bug reports so far!  The beta test response has
been overwhelming).</i>
<p><ul>

<li>
<b>Memory Leak</b>
<p>
After playing for an extended period you may notice that the hard disk drive is being accessed often
("thrashing"), and the game gets slower and slower.  Toontown currently has a problem "leaking" memory,
which causes it to use progressively more memory over time, which eventually causes the OS to 'swap' RAM to disk
in an attempt to allocate more.  If you experience signs of this, we suggest you exit and restart the game immediately
(using Alt-F4 if necessary).  This will be fixed before the final release.
<p>

<li>
<b>Toon Tag Minigame</b>
<p>
If you get tagged as the clock runs out, sometimes your head will remain large after the game is over.
Also, sometimes the treasures stop appearing during the course of the game.
<p>

<li>
<b>Game graphics horribly screwed up</b>
<p>
If you see many polygons being drawn in completely random places turning Toontown into an inscrutable collage,
first check with your graphics driver manufacturer's website to make sure you have their latest video driver installed.
<B>Windows 2000 users, please install ServicePack 2</B> (available <a href="http://windowsupdate.microsoft.com">here</a>).
Your graphics will very likely be messed up without it, especially if you own an Nvidia card.
If installing all of these fails to correct your problem, please run C:\windows\system\dxdiag.exe (or c:\winnt\system32\dxdiag.exe),
click 'save all info',and send the resulting text file along with screen capture images (make these using F9) 
demonstrating the problem to <a href="mailto:toontown@disney.com">toontown@disney.com</a>.
<p>

<li>
<b>Mouse Cursor Problems</b>
<p>
If you have a 3DFX Voodoo1 or Voodoo2, you will not have a mouse cursor.  This problem is due to limitations
of the hardware and may be addressed in a future release.  If you have an ATI card, are running Win2000 or WinXP,
and see a black square instead of a cursor, this is due to an ATI driver problem.  Please contact them about a fix.
<p>

<li>
<b>Transparency Problems</b>
<p>
Sometimes you will notice a 'black' background behind items such as the snowflake, or things like mist clouds
will partially disappear when you get close to them or look at them from certain angles.
<p>

<li>
<b>Camera Shaking</B>
<p>
In certain locations the viewpoint will bounce back and forth between 2 positions, causing an 'earthquake'
effect on the screen.
<p>

<li>
<b>Alt-F4</b>
<p>
Pressing Alt-F4 to get out of Toontown Online results in getting the
report a bug page, with the message, "The game exited with an unknown error".
Nothing is actually wrong in this instance.
<p>

</ul></td></tr></table>
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
<td valign=top align=left><img border=0 width=47 height=438 src="http://www.toontown.com/images/cloud_rightTrim2.jpg"></td>
<td valign=top align=left><img border=0 width=74 height=438 src="http://www.toontown.com/images/cloud_rightBar.jpg"></td>

</tr>

</table>
</font>
</body>
  </html>
