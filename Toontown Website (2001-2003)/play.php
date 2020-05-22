
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

</script>

<html>
<head>
  <title>Toontown.com, play</title>
</head>
<body bgcolor="#4477ff" text=#000000 link=#4477ff vlink=#4455bb alink=#ff5555
    leftmargin=0 topmargin=0 marginwidth=0 marginheight=0  >
<font face="verdana, arial, helvetica, sans-serif" size="1">
<table width="718" align=center border="0" cellpadding="0" cellspacing=0 bgcolor=#ffffff>
<tr>

<td colspan="5" align=left valign=top><a href="index.php">
<img border=0 width=718 height=151 src="images/cloud_header.jpg"></a></td>

</tr>
<tr>

<td valign=top align=left><table width=121 height=438 border=0 cellpadding=0 cellspacing=0 align=left valign=top>
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
<font size=-8><br></font>
<img border=0 src="images/button_play_disabled.gif" name="play"><br>
</td></tr>
</table></td>
<td align=left valign=top><img border=0 width=42 height=438 src="images/cloud_leftTrim2.jpg"></td>
<td align=left valign=top><img border=0 width=434 height=38 src="images/cloud_headerTrim2.jpg"><br>
<table width=434 border=0 cellpadding=0 cellspacing=0 align=center><tr><td>
<h3>By the Way</h3>
The first time you play, the software to run Toontown
will automatically be downloaded and installed to your computer.  This
initial download may take as long as 10 to 20 minutes, or possibly
less, depending on the speed of your internet connection.
<p>
After you have downloaded Toontown once, you will not need to download
it again, so the next time you press the "Play" button the game will
begin immediately (after a quick check for updates).  Every once and a
while, you may need to download a little bit more to get the latest
changes we have made to the game, but this will be much faster than
the original download, and it will happen automatically.
<p>
Oh, and you'll need to agree to the End User License Agreement to play.
<p>
<table border=0 cellpadding=4 cellspacing=0 bgcolor=#cccccc><tr><td>
PLEASE READ THIS LICENSE CAREFULLY BEFORE USING THIS SOFTWARE.
<p>
By using this software, you are agreeing to be bound by all terms
of this License. If you do not agree to the terms of this License, please
click &quot;I Disagree&quot;.</font></p>
<center>
<h4>End User License Agreement</h4>
<textarea readonly name="eula" rows=9 cols=35 wrap="VIRTUAL">BEFORE YOU USE OR DOWNLOAD OR INSTALL THIS SOFTWARE (THE "SOFTWARE"), CAREFULLY READ THESE TERMS AND CONDITIONS.  BY USING THE SOFTWARE YOU AGREE TO BE BOUND BY THESE TERMS AND CONDITIONS.  IF YOU DO NOT AGREE, DO NOT USE THE SOFTWARE.

The Software is protected by the copyright laws of the United States and international copyright treaty provisions.  The Software is owned by Buena Vista Internet Group d/b/a Disney Online ("Disney") or its licensors. Disney grants you, free of charge, a nonexclusive license to use the Software on your computer.

Disney does not transfer title to the Software to you. You own the medium on which the Software is recorded, but Disney and its licensors retain full and complete title to the Software, and all intellectual property rights therein. You may not redistribute or sell the Software.  You may not modify, translate or create derivative works based on the Software or attempt to decompile, reverse engineer, disassemble or otherwise reduce the Software to a human-readable form, except to the extent applicable laws specifically prohibit such restriction.

The Disney's Toontown Onlinesm service and all related or successor services (the "Service") is controlled and operated by Disney from its offices within the State of California, United States of America.  Disney makes no representation that materials in the Service are appropriate or available for use in other locations. Those who choose to access the Service from other locations do so on their own initiative and are responsible for compliance with local laws, if and to the extent local laws are applicable.

The Software is subject to United States export controls. The Software may not be downloaded, installed or otherwise exported or re-exported (i) into (or to a national or resident of) Cuba, Iraq, Libya, North Korea, Iran, Sudan, Syria or any other country to which the U.S. has embargoed goods; or (ii) to anyone on the U.S. Treasury Department's list of Specially Designated Nationals or the U.S. Commerce Department's Table of Denial Orders. By installing the Software, you represent and warrant that you are not located in, under the control of, or a national or resident of any such country or on any such list.

The Software is "Commercial Computer Software" pursuant to DFAR Section 227.7202 and FAR 12.212, as applicable.  Use, duplication, or disclosure by the U.S. Government is governed solely by the terms and conditions of this End User License Agreement.

THE SOFTWARE IS PROVIDED "AS IS". TO THE FULLEST EXTENT PERMISSIBLE PURSUANT TO APPLICABLE LAW, DISNEY AND ITS LICENSORS EXPRESSLY DISCLAIM ALL WARRANTIES AND CONDITIONS, EXPRESS, IMPLIED, OR STATUTORY, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OR CONDITIONS OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, SATISFACTORY QUALITY AND NONINFRINGEMENT, AND THEIR EQUIVALENTS UNDER THE LAWS OF ANY JURISDICTION. DISNEY AND ITS LICENSORS DO NOT WARRANT THAT THE FUNCTIONS CONTAINED IN THE SOFTWARE WILL MEET YOUR REQUIREMENTS, THAT THE OPERATION OF THE SOFTWARE WILL BE UNINTERRUPTED OR ERROR-FREE,  THAT DEFECTS IN THE SOFTWARE WILL BE CORRECTED, OR THAT THE SOFTWARE AND THE SERVERS THAT THE SOFTWARE ACCESSES ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. DISNEY AND ITS LICENSORS DO NOT WARRANT OR MAKE ANY REPRESENTATIONS REGARDING THE USE OR THE RESULTS OF THE USE OF THE SOFTWARE IN TERMS OF THEIR CORRECTNESS, ACCURACY, RELIABILITY, OR OTHERWISE. YOU (AND NOT DISNEY) ASSUME THE ENTIRE COST OF ALL NECESSARY SERVICING, REPAIR OR CORRECTION. APPLICABLE LAW MAY NOT ALLOW THE EXCLUSION OF EXPRESS OR IMPLIED WARRANTIES, SO THE ABOVE EXCLUSION MAY NOT APPLY TO YOU. YOU MAY ALSO HAVE OTHER LEGAL RIGHTS WHICH VARY FROM STATE TO STATE AND JURISDICTION TO JURISDICTION.

UNDER NO CIRCUMSTANCES, INCLUDING, BUT NOT LIMITED TO NEGLIGENCE, SHALL DISNEY OR ITS LICENSORS BE LIABLE FOR ANY INDIRECT, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES OF ANY KIND UNDER ANY LEGAL THEORY (TORT, CONTRACT OR OTHERWISE) THAT RESULT FROM THE USE OF, OR THE INABILITY TO USE, THE SOFTWARE, EVEN IF THEY HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. APPLICABLE LAW MAY NOT ALLOW THE LIMITATION OR EXCLUSION OF LIABILITY OR INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THE ABOVE LIMITATION OR EXCLUSION MAY NOT APPLY TO YOU. IN NO EVENT SHALL DISNEY'S OR ITS LICENSORS' TOTAL LIABILITY TO YOU FOR ALL DAMAGES, LOSSES, AND CAUSES OF ACTION (WHETHER IN CONTRACT, TORT (INCLUDING, BUT NOT LIMITED TO, NEGLIGENCE) OR OTHERWISE) ARISING FROM YOUR USE OF THE SOFTWARE EXCEED FIFTY DOLLARS (US$50).

This Agreement will terminate immediately without notice from Disney if you fail to comply with any term herein.  Upon termination, you must erase the Software from all computer memories and storage devices within your possession or control. These terms and conditions constitute the entire agreement between Disney and you and supersede any other communications or advertising with respect to the Software.  This Agreement is governed by the laws of the State of California, U.S.A., excluding conflict of laws provisions and the 1980 United Nations Convention on Contracts for the International Sale of Goods.

Please read the Terms of Use for Disney.com [link located at bottom of this page], which are incorporated herein by this reference, and the Additional Terms stated below, before using this web site.  By using this web site, you signify your agreement to the Terms of Use and the Additional Terms.  If you do not agree to the Terms of Use and the Additional Terms please do not use this web site. We reserve the right, at our discretion, to change, modify, add, or remove portions of these terms at any time. Please check these terms periodically for changes. Your continued use of this site following the posting of changes to these terms will mean you accept those changes.

Additional Terms of Use.  You acknowledge and agree:

1. This web site is an experimental beta test web site (the "beta test web site").  There may be server outages, technical bugs, viruses or other causes beyond our reasonable control in the games or portions of the functionality on this beta test web site that may cause your computer to operate more slowly or crash and that in such event you will not be entitled to any damages or compensation from us.  We will not provide technical support or "help" for the web site or for any portions thereof, including the games.  

2. All right, title and interest to all of the intellectual property on this beta test web site, including but not limited to, all of the games and functionality included therewith, remain the sole property of WDIG and it's affiliates.  All feedback from you including comments on this beta test web site, comments on the games contained therein, suggestions for improvement, creative ideas, or other submissions are expressly covered by the provision in the Terms of Use titled "Submissions" and will be owned by us without any compensation due to you.

3. You agree to use the games only for your own personal use and agree not to copy, redistribute, sell, license, assign or transfer the games or any portion thereof and you agree not to decompile, disassemble or reverse engineer the games.
</textarea>
<form action="eula.php">
<input type="submit" name="eulaButton" value="I Agree">&nbsp;
<input name="eulaButton" type="submit" value="I Disagree">
</form>
</center>
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

