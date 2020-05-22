<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML XMLNS:IE>
<HEAD>
<META HTTP-EQUIV="imagetoolbar" CONTENT="no">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<TITLE>Launching report Bug</TITLE></HEAD>
<BODY onLoad="" onUnload="" >

<SCRIPT LANGUAGE="JavaScript">

<!--
var agt=navigator.userAgent.toLowerCase();
var InternetExplorer = (navigator.appName.indexOf("Microsoft") != -1);
var IsWindows = (agt.indexOf("win")!=-1);

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

function getThisServerURL() {
  // determine server URL from this page's URL
  return location.protocol + "//" +
    location.host + "/" +
    unPreSlashify(stripFilename(location.pathname));
}

function openReportBug() {
  if ((!InternetExplorer)||(!IsWindows)) {
    alert("Please use Internet Explorer on Windows to report bugs.");
    history.back()
    return;
  }
  var url = getThisServerURL() + "showReportBug.php" + location.search;
  var newWindow = window.open(url, "");

  if((!newWindow) || newWindow.closed) {
      headtext.innerText="Failed to Open Report-Problem Page";
  }

  if (!newWindow.opener) {
      newWindow.opener = self;
  }
}

openReportBug();



//-->
</SCRIPT>

<table cellspacing="0" cellpadding="0" border="0" width="434" valign="top">
<tr><td><br></td></tr>
<tr>
    <td><font face="arial,helvetica" size="2">


<h2 id=headtext>Starting Report-Problem Page...</h2>

Make sure all Internet Explorer popup-window stopper software is disabled before attempting to start Toontown or make a problem report!  If a new window fails to open, this is likely the cause.


              </td>
            </tr>
          </table>

</BODY></HTML>