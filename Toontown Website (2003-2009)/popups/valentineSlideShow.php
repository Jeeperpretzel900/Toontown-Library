<html>
<head>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<title>Valentine Slide Show</title>
</head>
<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">

<SCRIPT LANGUAGE="JavaScript">
<!--
// All javascript compatible browsers will set this.
 canDo=false;
//-->
</SCRIPT>

<SCRIPT LANGUAGE="JavaScript1.1">
<!--
// All javascript version 1.1 compatible browsers will set this.
 canDo=true;
//-->
</SCRIPT>

<SCRIPT LANGUAGE="JavaScript">
<!--
// if more images are added, change this value -- images MUST be named using the following format screen12.jpg
var maxImages = 19;
var i=1;
function nextImage() {
  if (canDo) {
    i ++;
    if  (i > maxImages) { i = 1; }
    document.images.slideimage.src="http://play.toontown.com/shared/images/valentine/image_" + i +".jpg";
    document.images.slidelabel.src="http://play.toontown.com/shared/images/valentine/txt_" + i +".gif";
  }
}
function previousImage() {
  if (canDo) {
    i --;
    if  (i < 1) { i = maxImages; }
    document.images.slideimage.src="http://play.toontown.com/shared/images/valentine/image_" + i +".jpg";
    document.images.slidelabel.src="http://play.toontown.com/shared/images/valentine/txt_" + i +".gif";
  }
}
//-->
</SCRIPT>

<center>
<table cellspacing="0" cellpadding="0" border="0" width="434">
<tr>
  <td colspan="2" align="center"><br>
  <img src="http://play.toontown.com/shared/images/valentine/txt_honorable.gif" width="333" height="59" alt="" border="0">

  <br><br>
  </td>
</tr>
</table>

<table cellspacing="0" cellpadding="0" border="0" width="434">
<tr>
  <td align="center" valign="middle"><a href="#" onClick="javascript:previousImage();"><img src="http://play.toontown.com/shared/images/arrowLeft.gif" width="48" height="70" alt="" border="0"></a></td>
  <td align="center" valign="middle"><img src="http://play.toontown.com/shared/images/valentine/image_1.jpg" alt="" name="slideimage" id="slideimage" width="333" height="272" border="0"></td>
  <td align="center" valign="middle"><a href="#" onClick="javascript:nextImage();"><img src="http://play.toontown.com/shared/images/arrowRight.gif" width="48" height="70" alt="" border="0"></a></td>
</tr>
<tr>
  <td colspan="3" align="center"><img src="http://play.toontown.com/shared/images/valentine/txt_1.gif" alt="" name="slidelabel" id="slidelabel" width="333" height="53" border="0"></td>
</tr>

<tr>
  <td colspan="3" align="center" height="80">
  &nbsp;
  </td>
</tr>

<tr>
  <td colspan="3" align="center">
  <a href="javascript:window.close();"><img src="http://play.toontown.com/shared/images/button_close.gif" width="127" height="31" alt="" border="0"></a>
  </td>
</tr>


</table>


