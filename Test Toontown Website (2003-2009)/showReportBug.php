<HTML><BODY onLoad="javascript:window_onload();">
<SCRIPT LANGUAGE=VBScript>
<!--
function initInstallerCtrlVB()
    on error resume next
    installerCtrl.Init()
    if (err.number = 0) then
      initInstallerCtrlVB = 1
     else
      initInstallerCtrlVB = 0
     end if
end function
//-->
</SCRIPT>
<SCRIPT ID=clientEventHandlersJS LANGUAGE=javascript>
<!--
var installer = null;

// browser/OS detection code
// yoinked from http://www.mozilla.org/docs/web-developer/sniffer/browser_type.html

  // convert all characters to lowercase to simplify testing
  var agt=navigator.userAgent.toLowerCase();

  // *** BROWSER VERSION ***
  // Note: On IE5, these return 4, so use is_ie5up to detect IE5.
  var is_major = parseInt(navigator.appVersion);
  var is_minor = parseFloat(navigator.appVersion);
  var is_ie     = ((agt.indexOf("msie") != -1) && (agt.indexOf("opera") == -1));

function InternetExplorer() {
  return is_ie;
}

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

function initActiveX() {
  result = initInstallerCtrlVB();
  if (result != 0) {
    installer = installerCtrl;
  }
  return result;
}

function showPageInParentWindow(url) {
  window.opener.location.href = url;
  window.close();
}

function goToReportBugPage() {
  if (installer) {
        installer.setValue("AddUserErrorMessage", "");
  }
  installer.setValue("JustMakeErrorPage", getThisServerURL() + "reportBug.php?reportbug");

  // cannot set parent URL to a file:// due to IE6 security, so overwrite the HTML directly
  window.opener.document.open();
  window.opener.document.write(installer.getValue("LocalErrorPageData"));
  window.opener.document.close();
  window.close();
}

function goToNoLogsReportBugPage() {
  showPageInParentWindow(getThisServerURL() + "ActiveXproblem.php");
}

function window_onload() {
  window.focus();
  // check and initialize the installer
  if(InternetExplorer()) {
    if(initActiveX() == 0) {
      goToNoLogsReportBugPage();
      return;
    }
    goToReportBugPage();
  } else {
    alert("Please report bugs using IE on Windows.");
  }
}
//-->
</SCRIPT>

    <TABLE align="CENTER" style="text-align:center" WIDTH=100% height=100%> <TR>
    <TD ALIGN="CENTER">
    <SPAN ID=loadingText style="font-size:20pt;color:white">Loading Toontown Installer to Report a Problem...</SPAN>
    <script language="javascript">
<!--
/* alert("http://download.test.toontown.com/sv1.0.9.8.test/tt_test.cab#Version=1,0,14,3");*/
if(InternetExplorer()) {
      document.writeln('<OBJECT CLASSID="CLSID:FF791555-FDAC-43ab-B792-389E4CC0A6E5"');
    document.writeln('CODEBASE="http://download.test.toontown.com/sv1.0.9.8.test/tt_test.cab#Version=1,0,14,3"');
  
  document.writeln('ID=installerCtrl HEIGHT=0 WIDTH=0>');
  document.writeln('</object>');
} else {
  document.writeln('<EMBED type=application/x-WDI-Toontown-Installer-ns-v11 name="ns_installer" hidden=true>');
}
//-->
</script>
    </TD></TR>
    </TABLE>
    <SCRIPT LANGUAGE="JavaScript">
  loadingText.innerText="";
    </SCRIPT>


