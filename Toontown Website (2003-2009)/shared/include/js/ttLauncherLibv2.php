
<!--



_debug_wantDebug=0;

if (_debug_wantDebug) {
  _debug_debugWindow = window.open("","debug","width=1400,height=600,scrollbars=1,resizable=1");
  _debug_debugWindow.document.writeln("<pre>");
}


function _debug_writeDebugMsg(level, location, text) {
  if (_debug_wantDebug) {
    var now = new Date();
    _debug_debugWindow.document.writeln(now.toGMTString() + "\t" + location + ">\t" + text + "");
    _debug_debugWindow.pageYOffset=999999;
    _debug_debugWindow.scroll(0,999999);

  }
}



function logTrace(location, text)  { _debug_writeDebugMsg(10, location, text); }
function logDebug(location, text)  { _debug_writeDebugMsg(20, location, text); }
function logInfo(location, text)  { _debug_writeDebugMsg(30, location, text); }
function logNotice(location, text)  { _debug_writeDebugMsg(40, location, text); }
function logWarning(location, text)  { _debug_writeDebugMsg(50, location, text); }
function logErr(location, text)  { _debug_writeDebugMsg(60, location, text); }
function logCrit(location, text)  { _debug_writeDebugMsg(70, location, text); }
function logAlert(location, text)  { _debug_writeDebugMsg(80, location, text); }
function logEmerg(location, text)  {
  alert(location + ">\t" + text);
  _debug_writeDebugMsg(90, location, text);
}


    
    
    
    var logs=new Array();
    var logsi=0;

    function logit()
    {
        
        var a ="";

        for (var i=0; i<arguments.length; i++) {
          if (i%2 == 0) {
            // Name
            a+=escape(arguments[i]);
            a+= "=";
          } else {
            // Value
            a+=escape(arguments[i]);
            a+=((i+1)!=arguments.length)?"&":"";
          }

        }

      var s="http://play.toontown.com/shared/www/collect.php?deployment=US&rand="+Math.random()+"&"+a;
      var lognum = ++logsi;
      logs[lognum%9]=new Image();
      logs[lognum%9].src=s;
    }
    


function installerLogit() {
  var toEval = "logit(";
  var now = new Date();
  var ms = (now.getTime() - begin.getTime());

  logDebug("installerLogit", "Time offset is '" + ms + "' ms");

  for (var i=0; i < arguments.length; ++i) {
    toEval += "\"" + arguments[i] + "\", ";
  }

  toEval += '\"rtms\", '+  ms + ', ';
  toEval += '\"lgid\", \"'+  launchGUID_ + '\");';

  logDebug("installerLogit", "eval: " + toEval);

  eval(toEval);
}


var pandaErrorCodes = new Array(16);
pandaErrorCodes[0]='Unknown Error: Please submit a bug report so we can investigate the problem you experienced.';
pandaErrorCodes[1]='Unable to rewrite installed Toontown files.  You must have permission to modify the files in the Toontown directory in order to update so you can run the current version of Toontown.  Check your installed file permissions.';
pandaErrorCodes[2]='Unable to download new files into the Toontown directory.  Either you do not have permission to write to the Toontown directory, or you do not have enough available disk space.';
pandaErrorCodes[3]='You are connected to the internet via a proxy, and your proxy requires a username and password to connect.  Currently, Toontown does not support connecting via a password-secured proxy.  You must disable this feature, or disconnect your proxy, in order to play Toontown.';
pandaErrorCodes[4]='Toontown.exe was unable to contact the Toontown download server outside Internet Explorer.  Most likely, the connection was prevented by some personal firewall software, such as Norton Personal Firewall, McAfee Firewall, BlackICE PC Protection, ZoneAlarm, or Microsoft WinXP Internet Connection Firewall.  If you have a personal firewall program such as any of these (or any similar product) installed, please ensure it is configured to allow Toontown.exe to make connections to the internet.';
pandaErrorCodes[5]='Unable to locate the current version of the Toontown files to download.  There may be a problem with files being cached on the internet. Uninstalling Toontown and redownloading may also help fix this problem.';
pandaErrorCodes[6]='There appears to be a problem downloading the latest version of Toontown. If you are connecting to the internet via a proxy, it may be a problem with your proxy. If you are not connecting through a proxy, it is possible that the Toontown servers are temporarily unavailable. Please try to connect again.';
pandaErrorCodes[7]='Unable to open a graphics window.  Make sure you have the latest drivers installed from your 3-D graphics card vendor.  If you have previously run Toontown successfully and are unable to run now, it may help to restart your computer.';
pandaErrorCodes[8]='Your system appears to be running a third-party speed software.  As per our Member Agreement, software such as this cannot be used while playing Disney\u0027s Toontown Online.  Please disable all other software programs before continuing into the game.\n<p>For additional reference, please review our Member Agreement at <a href=\"http://play.toontown.com/memberAgreement.php\">http://play.toontown.com/memberAgreement.php</a>\n<p>Please note that failure to adhere to the Member Agreement may result in account termination.\n<p>We hope this information is helpful.';
pandaErrorCodes[9]='You are connecting to the internet via a proxy, and for some reason your proxy has disallowed the download request.  There may be an unusual configuration requirement with your proxy that Toontown does not understand.  It may help to disable your proxy if possible.';
pandaErrorCodes[10]='Toontown was unable to start its configuration program, Configrc.exe. The problem you experienced may be resolved by updating your computer\'s version of DirectX <a href=\'http://www.microsoft.com/directx\'>(www.microsoft.com/directx)</a>. Please also ensure that you have installed the latest drivers from your 3-D graphics card manufacturer and have the required 110MB of free RAM available to play the game. ';
pandaErrorCodes[11]='The game was terminated unexpectedly because of some external problem. \n<br> It is difficult to tell what happened, but it may have been a crash in your graphics driver.\n<br>Please ensure that you have installed the latest drivers from your 3-D graphics card manufacturer.';
pandaErrorCodes[12]='The game encountered an unexpected condition and was forced to exit suddenly.  Please follow the instructions below to submit a bug report so we can fix this problem in the future.\n<br><br>When you have finished submitting the bug report, you can press the red \"Play\" button to go back into the game.';
pandaErrorCodes[13]='The Toontown game server is available, but did not allow you connect.  Usually this happens only when your version of the Toontown software is out of date and requires an update.  Normally, the update happens automatically when you press the red \"Play\" button, so something must have gone wrong.  Try refreshing your browser page and pressing the Play button again.';
pandaErrorCodes[14]='The game is unable to open a graphics window. \n<br>This was probably caused by a problem with the computer\'s graphics card driver. \n<br>Please install the latest driver from your 3D graphics card manufacturer.';
pandaErrorCodes[15]='You seem to have an out-of-date version of Toontown installed.  Normally, when you press the red \"Play\" button, this should automatically update, but something must have gone wrong.  Make sure you are not already running Toontown in another window, and try pressing the Play button again.';




var installer = null;
var installerError = "";
var installerEmbedded = 0;
var pageFunction = "UNSET";
var deployment = "";
var begin = new Date();



function initActiveX() {
  logTrace("initActiveX", "Begin");

  //
  // Short-cut if the activeX is already up
  //
  if (installer) {
    logWarning("initActiveX", "ActiveX already initted - but called initActiveX again.");
    return 1;
  }

  //
  // Otherwise go for it
  //
  result = 0;

  if (installerCtrl) {
    logDebug("initActiveX", "installerCtrl has value '" + installerCtrl + "'");
  }

  try {
    result = installerCtrl.Init();
  } catch (e) {
    logDebug("initActiveX", "Got e of '" + e.message + "'");
  }

  logTrace("initActiveX", "Init result is '" + result + "'");
  if (result != 0) {
    installer = installerCtrl;
  }
  return result;
}



function embedInstaller() {
  _embedInstaller(1);
}

function embedInstallerWithoutCodebase() {
  _embedInstaller(0);
}

function _embedInstaller(includeCodeBase)
{
  logTrace("_embedInstaller", "Begin");

  if (installerEmbedded) {
    logErr("_embedInstaller", "Installer already embedded, skipping");
  }

  logDebug("_embedInstaller", "ActiveX is at 'http://a.download.toontown.com/sv1.0.24.24/ttinst.cab#Version=1,0,19,5' and classID 'C02226EB-A5D7-4B1F-BD7E-635E46C2288D'");
  document.writeln('<object classid="CLSID:C02226EB-A5D7-4B1F-BD7E-635E46C2288D"');
  if (includeCodeBase) {
    document.writeln('  codebase="http://a.download.toontown.com/sv1.0.24.24/ttinst.cab#Version=1,0,19,5"');
  }

  document.writeln('  id="installerCtrl" height=0 width=0>');
  document.writeln('</object>');

  document.writeln("<script language='javascript' type='text/javascript'> installerEmbedded=1; logTrace('embedInstaller-cb', 'installerEmbedded=1'); </script>");

  logDebug("_embedInstaller", "Installer embed written to document");
  
}

function checkForInstallerEmbed() {

  logDebug("checkForInstallerEmbed", "installerEmbedded='" + installerEmbedded + "'");
  return (installerEmbedded);

}


// browser/OS detection code
// yoinked from http://www.mozilla.org/docs/web-developer/sniffer/browser_type.html

// convert all characters to lowercase to simplify testing
var agt=navigator.userAgent.toLowerCase();

var IsWindows = (agt.indexOf("win")!=-1);

// *** BROWSER VERSION ***
// Note: On IE5, these return 4, so use is_ie5up to detect IE5.
var is_major = parseInt(navigator.appVersion);
var is_minor = parseFloat(navigator.appVersion);
var is_ie     = ((agt.indexOf("msie") != -1) && (agt.indexOf("opera") == -1));

function InternetExplorer() {
  return is_ie;
}

function check_browser() {
  valid = 1;

  if(!is_ie4up) {
      valid = 0;
      if(is_nav) {
        alert("Toontown does not currently support Netscape.  Please launch Toontown from Internet Explorer.");
      } else if(is_ie) {
        alert("Toontown requires Internet Explorer 4 or greater. Please download the latest IE browser from http://www.microsoft.com/ie");
      } else {
        alert("Toontown requires Internet Explorer.");
      }
  }

  if (!valid) {
    return 1;
  }
  return 0;
}

function check_OS() {
  valid = 1;
  errstr = "";
  if (!is_win) {
    valid = 0;
  } else if (is_win16) {
    errstr ="32-bit ";
    valid = 0;
  }

  if (!valid) {
    alert("Toontown only runs on " + errstr + "Microsoft Windows 98, ME, 2000, or XP.");
    //closeWindow();
    return 1;
  }
  return 0;
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

function getThisServerURL()
{
  // determine server URL from this page's URL
  //return location.protocol + "//" +
  //  location.host + "/" +
  //  unPreSlashify(stripFilename(location.pathname));
  return location.protocol + "//" +
    location.host + "/";
}

function getURLParam(url, name)
{
  if(url) {
    index = url.indexOf(name);
    if (index != -1) {
      countbegin = (url.indexOf("=", index) + 1);
      countend = url.indexOf('&', index);
      if (countend == -1) {
        countend = url.length;
      }
      val = url.substring(countbegin, countend);
      return unescape(val);
    }
  }
  return "";
}


function addURLParam(url,name,value)
{
  if (!name.length) {
    return url;
  }

  // look for at least a single slash to qualify a path.
  dubslashindex = url.indexOf('//');

  if (dubslashindex == -1)  {
    logErr('addURLParam', 'Told to add name values on a malformed URL');
    return url;
  }

  url2 = url.substring(dubslashindex+2,url.length);

  slashindex = url2.indexOf('/');
  if (slashindex == -1) {
    url += '/';
  }

  qindex = url.indexOf('?');
  if (qindex == -1)
    url += '?';
  else
  {
    ampersand = url.substring(url.length-1, 1);
    if (ampersand != '&')
      url += '&';
  }

  url += escape(name) + '=' + escape(value);

  return url;
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

function getCookie(name) {
  var start = document.cookie.indexOf(name+"=");
  var len = start+name.length+1;
  if ((!start) && (name != document.cookie.substring(0,name.length))) return null;
  if (start == -1) return null;
  var end = document.cookie.indexOf(";",len);
  if (end == -1) end = document.cookie.length;
  return unescape(document.cookie.substring(len,end));
}



var activeXInitFailURL = "";
var hardwareCheckFailURL = "";
var hardwareCheckOKURL = "";
var graphicsCheckFailURL = "";
var reportProblemURL = "";
var gameFailURL = "";
var gameOKURL = "";
var enableChatURL = "";
var setParentPasswordURL = "";
var purchaseURL = "";
var timeExpiredURL = "";


function setTargetURL(targetName, targetURL)
{
  logDebug("setTargetURL", "We are setting a target of '" + targetName + "' to a URL of '" + targetURL + "'");

  switch(targetName) {
  case 'ACTIVEXINITFAIL':
    activeXInitFailURL = targetURL; break;
  case 'HARDWARECHECKFAIL':
    hardwareCheckFailURL = targetURL; break;
  case 'HARDWARECHECKOK':
    hardwareCheckOKURL = targetURL; break;
  case 'GRAPHICSCHECKFAIL':
    graphicsCheckFailURL = targetURL; break;
  case 'REPORTPROBLEM':
    reportProblemURL = targetURL; break;
  case 'GAMEFAIL':
    gameFailURL = targetURL; break;
  case 'GAMEOK':
    gameOKURL = targetURL; break;
  case 'PURCHASE':
    purchaseURL = targetURL; break;
  case 'ENABLECHAT':
    enableChatURL = targetURL; break;
  case 'SETPARENTPASSWORD':
    setParentPasswordURL = targetURL; break;
  case 'TIMEEXPIRED':
    timeExpiredURL = targetURL; break;
  default:
    logEmerg("setTargetURL", "Unhandled URL target named '" + targetName + "' was attempted to be set with URL '" + targetURL + "'");
  };
}

function setDeployment(deploymentName)
{
  logDebug("setDeployment", "We are setting a deployment of '" + deploymentName + "'");
  
  var allowedDeployments = {
    US: 1,
    UK: 1,
    ES: 0,
    JP: 0,
    AP: 1,
    TOnlineDE: 0,
    TerraBR: 0,
    FR: 0  };

  if ((deploymentName in allowedDeployments) && allowedDeployments[deploymentName])
    deployment = deploymentName;
  else
    logEmerg("setDeployment", "Unhandled deployment named '" + deploymentName + "'");
}

function getDeployment()
{
  logTrace("getDeployment", "in getDeployment");

  if(initActiveX() == 0) {
    logErr("getDeployment", "ActiveX Failed to init");
    return '';
  }
  else
    logTrace("getDeployment", "ActiveX initialized and awaiting commands");

  var deployment = installerCtrl.getValue('DEPLOYMENT');
  logDebug("getDeployment", "Value returned from ActiveX deployment is '" + deployment + "'");

  return deployment;
}

function setDefaultUSTargetURLs()
{
  setTargetURL('ACTIVEXINITFAIL',    'http://play.toontown.com/ActiveXproblem.php');
  setTargetURL('HARDWARECHECKFAIL',  'http://play.toontown.com/missedRequirements.php');
  setTargetURL('HARDWARECHECKOK',    'http://play.toontown.com/test/hasHardware.php');
  setTargetURL('GRAPHICSCHECKFAIL',  'http://play.toontown.com/graphicsDrivers.php');
  setTargetURL('REPORTPROBLEM',      'http://play.toontown.com/reportBug.php?reportproblem=1');
  setTargetURL('GAMEFAIL',           'http://play.toontown.com/reportBug.php?reportproblem=0');
  setTargetURL('GAMEOK',             'https://account.toontown.com/thanksForPlaying.php');
  setTargetURL('ENABLECHAT',         'https://account.toontown.com/webChangeChat.php');
  setTargetURL('SETPARENTPASSWORD',  'https://account.toontown.com/webSetBilling.php');
  setTargetURL('PURCHASE',           'https://account.toontown.com/webPurchase.php');
}

function setDefaultINTLTargetURLs()
{
  setTargetURL('ACTIVEXINITFAIL',    '');
  setTargetURL('HARDWARECHECKFAIL',  '');
  setTargetURL('HARDWARECHECKOK',    '');
  setTargetURL('GRAPHICSCHECKFAIL',  '');
  setTargetURL('REPORTPROBLEM',      '');
  setTargetURL('GAMEFAIL',           '');
  setTargetURL('GAMEOK',             '');
  setTargetURL('ENABLECHAT',         '');
  setTargetURL('SETPARENTPASSWORD',  '');
  setTargetURL('PURCHASE',           '');
  setTargetURL('TIMEEXPIRED',        '');

}



function redirectToActiveXInitFailPage() {
  logDebug("redirectToActiveXInitFailPage", "Redirecting");

  installerLogit("NAME", pageFunction + "-ACTIVEXFAIL");
  window.location = activeXInitFailURL;
}

function redirectToHardwareCheckOKPage(trialEligible, trialEligible2) {
  logDebug("redirectToHardwareCheckOKPage", "Redirecting, with trialEligible='" + trialEligible + "' and trialEligible2='" + trialEligible2 + "'");

  installerLogit("NAME", pageFunction + "-HARDWARECHECKOK");

  url = hardwareCheckOKURL;
  url = addURLParam(url, 'te', trialEligible);
  url = addURLParam(url, 'te2', trialEligible2);

  window.location = url;
}

function redirectToHardwareCheckFailPage() {
  logDebug("redirectToHardwareCheckFailPage", "Redirecting");

  installerLogit("NAME", pageFunction + "-HARDWARECHECKFAIL");
  window.location = hardwareCheckFailURL;
}

function redirectToGraphicsFailPage() {
  logDebug("redirectToGraphicsFailPage", "Redirecting");

  installerLogit("NAME", pageFunction + "-GRAPHICSFAIL");
  _redirectWithUserErrorString(graphicsCheckFailURL);
}

function redirectToGameFailPage() {
  logDebug("redirectToGameFailPage", "Redirecting");
  installerLogit("NAME", pageFunction + "-GAMEFAIL");

  _redirectWithUserErrorString(gameFailURL);

}

function redirectToGameOKPage() {
  logDebug("redirectToGameOKPage", "Redirecting");
  installerLogit("NAME", pageFunction + "-GAMEOK");

  window.location = gameOKURL;
}

function redirectToPurchasePage() {
  logDebug("redirectToPurchasePage", "Redirecting");
  installerLogit("NAME", pageFunction + "-PURCHASE");

  window.location = purchaseURL;
}

function redirectToEnableChatPage() {
  logDebug("redirectToEnableChatPage", "Redirecting");
  installerLogit("NAME", pageFunction + "-ENABLECHAT");

  window.location = enableChatURL;
}

function redirectToSetParentPasswordPage() {
  logDebug("redirectToSetParentPasswordPage", "Redirecting");
  installerLogit("NAME", pageFunction + "-SETPARENTPASSWORD");

  window.location = setParentPasswordURL;
}

function redirectToTimeExpiredPage() {
  logDebug("redirectToTimeExpiredPage", "Redirecting");
  installerLogit("NAME", pageFunction + "-TIMEEXPIRED");

  window.location = setParentPasswordURL;
}


function _redirectWithUserErrorString(url) {

  //userErrorStringText = getUserErrorString();

  var userErrorNumber = parseInt(installer.getValue("PandaErrorCode"));
  
  //alert('userErrorNumber: "' + userErrorNumber + '"');
  logDebug("_redirectWithUserErrorString", "userErrorNumber is '" + userErrorNumber + "'");

  var userErrorStringText = pandaErrorCodes[userErrorNumber];
  //alert("userErrorStringText|" + userErrorStringText + '|');
  logDebug("_redirectWithUserErrorString", "userErrorStringText is '" + userErrorStringText + "'");

  myRedirectURL = url;

  if (userErrorStringText) {
    myRedirectURL = addURLParam(myRedirectURL, 'reason', userErrorNumber);   // We double up the userErrorNumber to accomodate both the UK and US websites.  The US site should be switched to use reason= exclusively to eliminate the cruft.
    myRedirectURL = addURLParam(myRedirectURL, 'userErrorString', userErrorStringText);
    myRedirectURL = addURLParam(myRedirectURL, 'userErrorNumber', userErrorNumber);
  }

  //alert('redirect url: ' + myRedirectURL);
  logDebug("_redirectWithUserErrorString", "Redirecting to '" + myRedirectURL + "'");

  window.location = myRedirectURL;
}



function checkForHardwareCheckRedirects()
{
  if ( !activeXInitFailURL.length ||
       !hardwareCheckFailURL.length ||
       !hardwareCheckOKURL.length ||
       !graphicsCheckFailURL.length ) {
    return false;
  }
  return true;
}

function checkForReportProblemRedirects()
{
  if ( !activeXInitFailURL.length ||
       !reportProblemURL.length
       ) {
    return false;
  }
  return true;
}

function checkForGameFailRedirects()
{
  return (activeXInitFailURL.length && gameFailURL.length);
}

function checkForDeployment()
{
  return (deployment && (deployment.length > 0));
}


function getUserErrorString()
{
  url = location.search;

  //alert("location search params '" + url + "'");
  userErrorStringText = getURLParam(url, 'userErrorString');

  logDebug('getUserErrorString', "UserErrorString from URL '" + userErrorStringText + "'");

  //alert(userErrorStringText);
  if (userErrorStringText.length) {
    return userErrorStringText;
  }

  return installer.getValue("UserErrorString");
}

function getToontownNotes() {
  return getUserErrorString() + "\nLog:\n" + installer.getValue("ToontownNotes") + "\n[end of logs]";
}





function performHardwareCheck() {
  _performHardwareCheckMain(1);
}



function performHardwareFailPageGeneration() {
  _performHardwareCheckMain(0);
}




function _performHardwareCheckMain(processRedirects) {
  logTrace("_performHardwareCheckMain", "Begin, processRedirects is '" + processRedirects + "'");

  //
  // Make sure we've written the installer to this page
  //

  if (!checkForInstallerEmbed()) {
    logEmerg("_performHardwareCheckMain", "Installer not yet embedded in HTML document");
    return false;
  }


  //
  // Make sure we've been provided all the URL's we need
  //
  if (!checkForHardwareCheckRedirects()) {
    logEmerg("_performHardwareCheckMain", "URLs for exit were not set");
    return false;
  }

  //
  // Make sure we are in a known deployment
  //
  if (!checkForDeployment()) {
    logEmerg("_performHardwareCheckMain", "Deployment was not set");
    return false;
  }

  //
  // To aid the accurate recording of logits in the shared redirect functions, set the pageFunction here.
  //
  pageFunction = "HARDWARETEST";

  // check and initialize the installer
  if(initActiveX() == 0) {
    logErr("_performHardwareCheckMain", "ActiveX Failed to init");
    redirectToActiveXInitFailPage();
    return;
  }

  logTrace("_performHardwareCheckMain", "ActiveX initialized and awaiting commands");

  //
  // ActiveX Hardware check code begins here
  //
  logTrace("_performHardwareCheckMain", "Begin check");

  // We pull out the trial eligible values here
  var trialEligible = installer.getValue("TrialEligible");
  var trialEligible2 = installer.getValue("TrialEligible2");
  logDebug("performHardwareCheck", "trialEligible = '" + trialEligible + "'");
  logDebug("performHardwareCheck", "trialEligible2 = '" + trialEligible2 + "'");

  //
  // Kick off the hardware detect
  //
  //installer.setValue("MissedRequirements", hardwareCheckFailURL);
  //installer.setValue("GraphicsDriver", graphicsCheckFailURL);
  //installer.setValue("AddUserErrorMessage", "");

  stateCode = parseInt(installer.getValue("JustCheckSystemPage"));

  //
  // If we are here only because we are building the error strings, then don't go any further
  //
  if (!processRedirects)
    return;

  //stateCode = 21;
  logTrace("_performHardwareCheckMain", "stateCode returned from activeX is '" + stateCode + "'");


  if (stateCode == 140)
  {
    //
    // Success: no graphics or hardware limitation detected - forward direct to the OK page
    //
    logDebug("_performHardwareCheckMain", "The user does have sufficient hardware");
    redirectToHardwareCheckOKPage(trialEligible, trialEligible2);
  }
  else if (stateCode == 21)
  {
    //
    // Fail: insufficient hardware
    //
    logDebug("_performHardwareCheckMain", "The user failed due to a hardware limitation (i.e.: RAM)");
    redirectToHardwareCheckFailPage();
  }
  else if (stateCode == 24)
  {
    //
    // Fail: insufficient graphics
    //
    logDebug("_performHardwareCheckMain", "The user failed due to a graphics system limitation");
    redirectToGraphicsFailPage();
  }
  else
  {
    //
    // Fail for some other reason, perform bug report?
    //
    logErr("_performHardwareCheckMain", "Unhandled return code, forwarding to the problem report page");
    redirectToGameFailPage();
  }

}




//-----------------------------------------------------------------------------
//
// performProblemReport
//

function performProblemReport() {
  _performCrashReportMain(0);
}

//-----------------------------------------------------------------------------
//
// performProblemReport
//

function performBugReportPageGeneration() {
  _performCrashReportMain(1);
}

//-----------------------------------------------------------------------------
//
// _performCrashReportMain
//


function _performCrashReportMain(isCrash)
{
  logTrace("_performCrashReportMain", "Begin, isCrash is '" + isCrash + "'");

  //
  // Make sure we've written the installer to this page
  //
  if (!checkForInstallerEmbed()) {
    logEmerg("_performCrashReportMain", "Installer not yet embedded in HTML document");
    return false;
  }

  //
  // Make sure we've been provided all the URL's we need
  //
  var result;
  if (isCrash) {
    result = checkForGameFailRedirects();
  } else {
    result = checkForReportProblemRedirects();
  }

  if (!result) {
    logEmerg("_performCrashReportMain", "URLs for crash report were not set");
    return false;
  }

  pageFunction = "BUGREPORT";

  // check and initialize the installer
  if(initActiveX() == 0) {
    logErr("performCrashReport", "ActiveX Failed to init");
    redirectToActiveXInitFailPage();
    return;
  } else {
    logTrace("_performCrashReportMain", "ActiveX initialized and awaiting commands");
  }

  // Log the panda error code if we receive it
  var userErrorNumber = getURLParam(location.search, 'userErrorNumber');
  var userErrorString = getURLParam(location.search, 'userErrorString');
  if (userErrorNumber.length) {
    // Log this for stats 
    installerLogit("NAME", "PANDA-ERROR", "userErrorNumber", userErrorNumber, "userErrorString", userErrorString.substr(0, 100), "pageFunction", pageFunction );
  }

  retval = parseInt(installer.getValue("JustMakeErrorPage"));

}



var activeXVersion_             ='';
var playToken_                  ='NO PLAYTOKEN';
var blue_                       ='NO BLUE';
var chatEligible_               =0;
var webAccountParams_           ='';
var trialEligible_              ='';
var trialEligible2_             ='';
var userName_                   ='';
var downloadServer_             ='';
var downloadVersion_            ='';
var gameServer_                 ='';
var accountServer_              ='';
var statServer_                 ='';
var doLogits_                   ='';
var windowTitle_                ='';
var launchGUID_                 ='';
var useCallInsertCopyCallbacks_ =0;

var swfPaths_         = "?overlaySwfURL=/US/overlay.swf&toonfilmSwfURL=/US/toonfilm.swf&v=1,0,19,5";


// Hook for Internet Explorer
if (navigator.appName && navigator.appName.indexOf("Microsoft") != -1 &&
    navigator.userAgent.indexOf("Windows") != -1 && navigator.userAgent.indexOf("Windows 3.1") == -1) {
  document.writeln('<script type="text/vbscript" language="VBScript"\>');
  document.writeln('on error resume next');
  document.writeln('Sub ttmovie_FSCommand(ByVal command, ByVal args)');
  document.writeln('  call ttmovie_DoFSCommand(command, args)');
  document.writeln('end sub');
  document.writeln('</script\>');
}



function setActiveXVersion(activeXVersion) {
  logDebug("setActiveXVersion", "Passed activeXVersion of '" + activeXVersion + "'");
  activeXVersion_ = activeXVersion;
}



function setPlayToken(playToken) {
  
  if (playToken.length == 0) {
    logCrit("setPlayToken", "playToken is ZERO LENGTH. Using value of 'NO PLAYTOKEN'");
    playToken_ = 'NO PLAYTOKEN';
  } else {
    logDebug("setPlayToken", "Passed playToken of '" + playToken + "'");
    playToken_ = playToken;
  }

}


function setChatEligible(chatEligible) {
  logDebug("setChatEligible", "Passed chatEligible of '" + chatEligible + "'");
  chatEligible_ = chatEligible;
}


function setWebAccountParams(webAccountParams) {
  logDebug("setWebAccountParams", "Passed webAccountParams of '" + webAccountParams + "'");
  webAccountParams_ = webAccountParams;
}



function setTrialEligible(trialEligible, trialEligible2) {
  logDebug("setTrialEligible", "Passed trialEligible of '" + trialEligible + "' amd trialEligible2 of '" + trialEligible2 + "'");
  trialEligible_ = trialEligible;
  trialEligible2_ = trialEligible2;
}


function setUserName(userName) {
  logDebug("setUserName", "Passed userName of '" + userName + "'");
  userName_ = userName;
}


function setDoLogits(doLogits) {
  logDebug("setDoLogits", "Passed doLogits of '" + doLogits + "'");
  doLogits_ = doLogits;
}


function setDownloadInfo(downloadServer, downloadVersion) {
  logDebug("setDownloadInfo", "Passed downloadServer of '" + downloadServer + "' and downloadVersion of '" + downloadVersion + "'");
  downloadServer_ = downloadServer;
  downloadVersion_ = downloadVersion;
}


function setGameServer(gameServer) {
  logDebug("setGameServer", "Passed gameServer of '" + gameServer + "'");
  gameServer_ = gameServer;
}


function setWebPaths(accountServer, statServer) {
  logDebug("setWebPaths", "Passed accountServer of '" + accountServer + "' and statServer of '" + statServer + "'");
  accountServer_ = accountServer;
  statServer_ = statServer;
}



function setWindowTitle(windowTitle) {
  logDebug("setWindowTitle", "Passed windowTitle of '" + windowTitle + "'");
  windowTitle_ = windowTitle;
}


  



function setLaunchGUID(launchGUID) {
  logDebug("setLaunchGUID", "We received a GUID of '" + launchGUID + "'");
  launchGUID_ = launchGUID;
}



function setUseCallInsertCopyCallbacks(useCallInsertCopyCallbacks) {
  logDebug("setLaunchGUID", "We received a useCallInsertCopyCallbacks of '" + useCallInsertCopyCallbacks + "'");
  useCallInsertCopyCallbacks_ = useCallInsertCopyCallbacks;
}




function performGameLaunch()
{
  logTrace("performGameLaunch", "Begin");

  pageFunction = "PLAY";
  
  logDebug("performGameLaunch", "Hiding loading container");

  //loadingTextContainer.style.display="none";
  //loadingTextContainer.style.visibility="hidden";
  loading.style.display="none";
  loading.style.visibility="hidden";
  if (useCallInsertCopyCallbacks_) { insertCopy('GoingToTT'); }   // If this is off the INTL site, and we have loaded the dynamic strings, update the text;
  
  
  

  // check and initialize the installer
  if(initActiveX() == 0)  {
    logErr("performGameLaunch", "ActiveX Failed to init");
    redirectToActiveXInitFailPage();
    return;
  } else {
    logTrace("performGameLaunch", "ActiveX initialized and awaiting commands");
  }
  
  installer = installerCtrl;



  logDebug("performGameLaunch", "Showing installer");
  
  install.style.visibility="visible";
  install.style.display="inline";
  
  if (useCallInsertCopyCallbacks_) { insertCopy('DownloadingTT'); }   // If this is off the INTL site, and we have loaded the dynamic strings, update the text;


  // following doesn't harm but useful for initfunction
  installer.setValue("DownloadURL", getThisServerURL());

  // make sure we can create logs, no other TT is running, installer version is correct
  if(installer.InitForRun(activeXVersion_)==0) {
    logErr("performGameLaunch", "Call to InitForRun returned error value of 0");
    redirectToGameFailPage();
    return;
  }


  initialized = 1;

  installer.setValue("Deployment", deployment);

  installer.setValue("DownloadServer", downloadServer_);
  installer.setValue("DownloadVersion", downloadVersion_);
  installer.setValue("GameServer", gameServer_);
  installer.setValue("AccountServer", accountServer_);
  installer.setValue("StatServer", statServer_);

  installer.setValue("Game1_Version", "1");
  installer.setValue("Movie_Version", "4");
  installer.setValue("Game2_Version", "1");
  installer.setValue("Messages_Version", "1");
  installer.setValue("ToonTune_Version", "1");

  var blue;
  blue = "NO BLUE";

  installer.setValue("Blue", blue);
  installer.setValue("PlayToken", playToken_);

  installer.setValue("ChatEligible", chatEligible_);
  installer.setValue("WebAccountParams", webAccountParams_);
  installer.setValue("TrialEligible", trialEligible_);
  installer.setValue("TrialEligible2", trialEligible2_);

  installer.setValue("LastLogin", "");
  installer.setValue("WindowTitle", windowTitle_);

  //installer.setValue("ReferrerCode", referrer);

  mainLoop();
  timerID = setInterval("mainLoop()", installationPollingPeriodMs);

}

var timerID;
var installationPollingPeriodMs = 250;
var inGamePollingPeriodMs = 2500;
var mainLoopGuard = 0;
var initialized = 0;
var downloadInProgress = 0;
var downloadComplete = 0;

var installerLogFileName = "";
var launcherExtractionLogFileName = "";
var gameLogFileName = "";
var userLoggedIn = "";
var paidUserLoggedIn = "";
var configSubmitApproved = "";

var agt=navigator.userAgent.toLowerCase();

// *** BROWSER VERSION ***
// Note: On IE5, these return 4, so use is_ie5up to detect IE5.
var is_major = parseInt(navigator.appVersion);
var is_minor = parseFloat(navigator.appVersion);

// Note: Opera and WebTV spoof Navigator.  We do strict client detection.
// If you want to allow spoofing, take out the tests for opera and webtv.
var is_nav  = ((agt.indexOf('mozilla')!=-1) && (agt.indexOf('spoofer')==-1)
            && (agt.indexOf('compatible') == -1) && (agt.indexOf('opera')==-1)
            && (agt.indexOf('webtv')==-1) && (agt.indexOf('hotjava')==-1));
var is_nav6up = (is_nav && (is_major >= 5));

var is_ie     = ((agt.indexOf("msie") != -1) && (agt.indexOf("opera") == -1));
var is_ie4up  = (is_ie && (is_major >= 4));

// *** PLATFORM ***
var is_win   = ( (agt.indexOf("win")!=-1) || (agt.indexOf("16bit")!=-1) );

// is this a 16 bit compiled version?
var is_win16 = ((agt.indexOf("win16")!=-1) ||
           (agt.indexOf("16bit")!=-1) || (agt.indexOf("windows 3.1")!=-1) ||
           (agt.indexOf("windows 16-bit")!=-1) );
// end browser/OS detection code

function IsSupportedPlatform() {
  return is_ie && is_win;
}

function InternetExplorer() {
  return is_ie;
}


function stopMainLoop() {
  clearInterval(timerID);
}



// adds the log file names and other various flags
function addTTURLParams(url) {
  grabInstallerVars();
  if ("" != location.search)
  {
    // add this page's URL params
    if (url.indexOf("?") == -1) url = url + "?";
    if (url.charAt(url.length - 1) != '?') url = url + "&";
    url = url + location.search.substring(1);
  }
  else {
    url = url + "?";
  }

  url = addURLParam(url, "installerLogFileName", installerLogFileName);

  if(userLoggedIn!="") {
    if(paidUserLoggedIn!="") {
      url = addURLParam(url, "paidUserLoggedIn", paidUserLoggedIn);
    } else {
      url = addURLParam(url, "userLoggedIn", userLoggedIn);
    }
  }

  if(configSubmitApproved!="") {
      url = addURLParam(url, "configSubmitApproved", configSubmitApproved);
  }

  return url;
}

function closeWindowNormalExit()
{
  var exitPage = installer.getValue('ExitPage');

  logDebug("closeWindowNormalExit", "We were passed an exitPage of '" + exitPage + "'");

  switch(exitPage) {
  case 'purchase':
    installerLogit("NAME", "PLAY-COMPLETE-PURCHASE");
    redirectToPurchasePage();
    break;
  case 'setparentpassword':
    installerLogit("NAME", "PLAY-COMPLETE-SETPARENTPASSWORD");
    redirectToSetParentPasswordPage();
    break;
  case 'chat':
    installerLogit("NAME", "PLAY-COMPLETE-ENABLECHAT");
    redirectToEnableChatPage();
    break;
  case 'timeexpired':
    installerLogit("NAME", "PLAY-COMPLETE-TIMEEXPIRED");
    redirectToTimeExpiredPage();
    break;
  default:
    installerLogit("NAME", "PLAY-COMPLETE-NORMAL");
    redirectToGameOKPage();
  };
}


var httpReq; // used in newRequest function

// Get an XMLHttpRequest object in a portable way.
function createHttpRequest()
{
  httpReq = false;
  // For Safari, Firefox, and other non-MS browsers
  if (window.XMLHttpRequest) {
    try {
      httpReq = new XMLHttpRequest();
    } catch (e) {
      httpReq = false;
    }
  } else if (window.ActiveXObject) {
    // For Internet Explorer on Windows
    try {
      httpReq = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try {
        httpReq = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e) {
        httpReq = false;
      }
    }
  }
}

function installerExit()
{
  // This function is called on window-onUnload on installer.php
  if (initialized) {
    var cdrom_version = parseInt(installer.getValue("CDRom"));
    var cookieVal = unescape(document.cookie);
    var isTrial = cookieVal.indexOf("class=trial");
    if (downloadInProgress == 1 && isTrial > -1
      && (isNaN(cdrom_version) || cdrom_version==0)
      && deployment == 'US' )
    {
      installerLogit("NAME", "PLAY-INSTALLER-INITIATE-INCOMPLETEDOWNLOADEMAIL");
      createHttpRequest();  // creates httpReq
      httpReq.open("GET", "http://play.toontown.com/services/sendIncompleteDownload.php", true);
      httpReq.send(null);
    } else {
      installerLogit("NAME", "PLAY-INSTALLER-NOINITIATE-INCOMPLETEDOWNLOADEMAIL");
    }
  }
}

// get the flash player object
function flashinstall() {
  return document.getElementById("ttmovie");
}

// get the flash player object
function flashpatch() {
  return document.getElementById("ttmoviepatch");
}

function setFlashQuality(q) {
  if (InternetExplorer())
    flashinstall().quality = q;
}

// commands to show flash movies
function loadMovie_messages() {
  logDebug("loadMovie_messages", "Switching to patch");
  flashinstall().style.display="none";
  flashinstall().style.visibility="hidden";
  flashinstall().LoadMovie(0,"/"+deployment+"/toonpreviewsite.swf" + swfPaths_);  // This will stop the installer audio from playing
  install.style.display="none";
  install.style.visibility="hidden";
  if (useCallInsertCopyCallbacks_) { insertCopy('UpdatingTT'); }   // If this is off the INTL site, and we have loaded the dynamic strings, update the text;

  
  flashpatch().style.display="block";
  flashpatch().style.visibility="visible";
  flashpatch().LoadMovie(0,"/"+deployment+"/loadingdisplay.swf" + swfPaths_);
  patch.style.display="block";
  patch.style.visibility="visible";

}


function loadMovie_movie() {
  logDebug("loadMovie_movie", "Switching to download");
  downloadInProgress = 1;
  flashinstall().LoadMovie(0,"/"+deployment+"/movie.swf" + swfPaths_); 
}


//
// Handle all the FSCommand messages from the Flash movie
//

function ttmovie_DoFSCommand(command, args) {

  logDebug("ttmovie_DoFSCommand", "Received callback, command = '" + command + "', args='" + args + "'");

  if("game1_done" == command) {
    installer.setValue("Game1_Done", "");
  } else if("movie_done" == command) {
    flashinstall().SetVariable("_root.rec:percent_loaded", "0");
    loadMovie_game2();
  } else if("game2_done" == command) {
    installer.setValue("Game2_Done", "");
    // load up a flash movie that doesn't use much CPU
    loadMovie_messages();
    setFlashQuality(1);
  } else if ("quit" == command) {
    closeWindowNormalExit();
  }
}

var launcherPercent = 0;

//
// Percentage functions -- determines how far along we are, as determined by the ActiveX
//

function getOverallPercentLoaded() {
  return parseInt(installer.getValue("OverallPercentLoaded"));
}

//
// Percentage functions used by installer
//

var launcherAt100Count = 0;
var installAt100Count = 0;

var lastPctLauncher = 0;
var lastPctInstall = 0;

function getInstallPhasesPercent()
{
  var pctLauncher = installer.getValue("PercentLauncherDownloaded");
  var pctInstall = installer.getValue("PercentLoaded");

  //
  // These hacks get around the perctentage bars jumping wildly to 100% and back
  //
  if(!seenStateCode55) {
    pctLauncher = 0;
  }

  if (!seenStateCode110) {
    pctInstall = 0;
  }

  if (pctLauncher >= 100) {
    if (stateCode == 115) {
      pctLauncher = 99;
    }
    launcherAt100Count++;

    if (launcherAt100Count < 5) {
      pctLauncher = lastPctLauncher;
    }
  }

  if (pctInstall >= 100) {
    if (stateCode == 115) {
      pctInstall = 99;
    }

    installAt100Count++;
    if (installAt100Count < 5) {
      pctInstall = lastPctInstall;
    }
  }

  lastPctLauncher = pctLauncher;
  lastPctInstall = pctInstall;

  return Math.round(pctLauncher*0.2 + pctInstall*0.8);
}

var stateCode = 0;
var lastStateCode=-1;
var seenStateCode25=0;
var seenStateCode55=0;
var seenStateCode110=0;
var lastPercent=0;
var curPercent=0;
var lastInstallPercent=0;
var curInstallPercent=0;

var percentIncrement=1;

function mainLoopBody() {
  installer.RunInstaller();

  stateCode = parseInt(installer.getValue("StateCode"));

  var pctInstallPhases = getInstallPhasesPercent();
  var pctOverallLoaded = getOverallPercentLoaded();

  logDebug("mainLoop", "stateCode='" + stateCode + "' pctInstallPhases ='" + pctInstallPhases + "' pctOverallLoaded='" + pctOverallLoaded + "'");

  launcherPercent = pctInstallPhases;

  if (stateCode == 55 || stateCode == 60 || stateCode == 110) {   // Installing...

    flashinstall().SetVariable("_root.rec:percent_loaded", pctInstallPhases);
    flashinstall().SetVariable("_root.percent_loaded", pctInstallPhases);
  }
  else if (stateCode == 115)
  { // Patching...
    flashinstall().SetVariable("_root.rec:percent_loaded", '100');
    flashinstall().SetVariable("_root.percent_loaded", '100');

    flashpatch().SetVariable("_root.rec:percent_loaded", pctInstallPhases);
    flashpatch().SetVariable("_root.percent_loaded", pctInstallPhases);
  }
  else if (stateCode == 120)
  { // Launching...
    downloadInProgress = 0;
    downloadComplete = 1;

    flashpatch().SetVariable("_root.rec:percent_loaded", '100');
    flashpatch().SetVariable("_root.percent_loaded", '100');

    flashinstall().SetVariable("_root.rec:percent_loaded", '100');
    flashinstall().SetVariable("_root.percent_loaded", '100');
  }

  curPercent = Math.floor(pctOverallLoaded/percentIncrement)*percentIncrement;  // Only update 5 at a time
  curInstallPercent = Math.floor(pctInstallPhases/percentIncrement)*percentIncrement;  // Only update 5 at a time

  if (doLogits_ && (stateCode != lastStateCode
                    || curPercent >= lastPercent + percentIncrement
                    || curInstallPercent >= lastInstallPercent + percentIncrement) )
  {

    if (curPercent >= lastPercent + percentIncrement) {
      lastPercent += percentIncrement;
    }

    if (curInstallPercent >= lastInstallPercent + percentIncrement) {
      lastInstallPercent += percentIncrement;
    }

    logDebug("mainLoop", "stateCode='" + stateCode + "' percent='" + curPercent + "' lastPercent='" + lastPercent + "'" );
    installerLogit("NAME", "PLAY-INSTALLER", "sc", stateCode, "percent", lastPercent, "installPercent", lastInstallPercent);
    lastStateCode = stateCode;
  }

  switch(stateCode) {
    case 7:
            var configinfo=installer.getValue("ConfigInfoRecord");
      var retval = window.showModalDialog("/submitConfigDialog.php",configinfo,"dialogHeight: 470px; dialogWidth: 500px; edge: Raised; center: Yes; help: No; resizable: Yes; status: No;");
      if(retval=="yes") {
        installer.setValue("ConfigSubmitApproved","1");
      } else {
        showPageInParentWindow(addTTURLParams("/configSubmitNotAccepted.php"));
      }
      break;
    case 15:
      //
      // Ask user if default directory is OK
      //
      break;
    case 20:
      //
      // The game has exited out due to a application crash
      //
      stopMainLoop();
      redirectToGameFailPage();
      break;

    case 21:
      //
      // The game has exited due to a perceived limitation in hardware
      //
      stopMainLoop();
      redirectToHardwareCheckFailPage();
      break;

    case 23:
      // display "updating Toontown..."
      loadMovie_messages();
      // Switch into high quality for the messages page
      setFlashQuality(1);
      flashinstall().SetVariable("_root.LauncherMessage", "Checking for Launcher updates...");
      break;

    case 24:
      //
      // The game has exited due to a perceived limitation in graphics gear / drivers
      //
      stopMainLoop();
      // navigate to troubleshooting webpage

      redirectToGraphicsFailPage();
      break;
    case 25:
      seenStateCode25 = 1;
      // If you came from the movie, you will still have the loading bar
      // so update the percentage now that the launcher is done extracting
      // going to check if the launcher is current...
      break;
    case 30:
      // start game1 in flash
      break;
    case 35:
      // waiting for movie to download...
      break;
    case 36:
      // start downloading game2
      break;
    case 37:
      // waiting for game2 to download...
      break;
    case 38:
      // tell game1 it can exit
      flashinstall().SetVariable("_root:game_can_exit", "true");
      break;
    case 40:
      // waiting for game1 to exit...
      // As a hack to fix this problem: just lie to the installer that
      // game 1 has exited.
      installer.setValue("Game1_Done", "");
      break;
    case 50:
      // start movie in flash
      loadMovie_movie();
      break;
    case 53:
      // starting launcher download... nothing much to do or show here
      break;
    case 55:
      // waiting for launcher to download...updating "percent loaded"...
      // Scale the value we get back from the Launcher to be in the range 0-20 since this is about 20 % of the download
      seenStateCode55 = 1;
      break;
    case 60:
      seenStateCode55 = 1;
      // Now the launcher is done downloading, so update the percentage
      // waiting for launcher to self-extract...
      flashinstall().SetVariable("_root.LauncherMessage", "Installing Launcher...")
      break;
    case 85:
      // Update the progress bar to show that the launcher was checked
      // going to start downloading launcher patch...
      // flashinstall().SetVariable("_root.rec:percent_loaded", 19);
      // flashinstall().SetVariable("_root.LauncherMessage", "Downloading new version of Launcher...")
      //getLauncherPercent();
      //getLauncherPercentFull();
      //flashinstall().SetVariable("_root.rec:percent_loaded", launcherPercent.toString());
      // show this percentage on the 'loadingdisplay' movie as well: the flash variable name is not the same as intro
      //flashinstall().SetVariable("_root.percent_loaded", launcherPercent.toString());
      break;
    case 87:
      // waiting for patch to download...
      break;
    case 90:
      // start movie
      loadMovie_movie();
      break;
    case 95:
      // going to check if launcher is valid...
      break;
    case 97:
      // going to run launcher...
      flashinstall().SetVariable("_root.rec:percent_loaded", 20);
      // show this percentage on the 'loadingdisplay' movie as well: the flash variable name is not the same as intro
      //flashinstall().SetVariable("_root.percent_loaded", 20);
      //flashinstall().SetVariable("_root.LauncherMessage", "Starting Launcher...")
      break;
    case 110:
      // updating "percent loaded"...
      // Scale the value we get back from the Launcher to be in the
      // range 20-100 since we already ticked the first 20 percent
      seenStateCode110=1;
      break;
    case 115:
      // waiting for panda window to open...
      msg = installer.getValue("LauncherMessage");
      if (msg != "") {
        logDebug("flashMessage", "Message sent to patcher is '" + msg + "'");
        flashpatch().SetVariable("_root.LauncherMessage", msg);
      }
      break;
    case 120:
      // panda has started up, go into a slow polling loop

      // stop the patcher bubbles
      clearInterval(timerID);
      timerID = setInterval("mainLoop()", inGamePollingPeriodMs);

      if (useCallInsertCopyCallbacks_) { 
        // If this is off the INTL site, and we have loaded the dynamic strings, update the text;
        insertCopy('PlayingTT'); 
        patch.style.display="none";
        patch.style.visibility="hidden";
        play.style.display="block";
        play.style.visibility="visible";

      }   

      break;

    case 130:
      // checking up on the game...
      // download may still be going, in that case keep getting some more variables
      msg = installer.getValue("LauncherMessage");
      if (msg != "") {
        logDebug("flashMessage", "Message sent to patcher is '" + msg + "'");
        flashpatch().SetVariable("_root.LauncherMessage", msg);
      }
      break;
    case 140:
      //
      // The game has exited cleanly
      //
      stopMainLoop();
      closeWindowNormalExit();
      break;
    case 13:
      //
      // "Major" game crash error
      //
      stopMainLoop();
      redirectToGameFailPage();
      break;
    default:
      // error, unknown StateCode
      stopMainLoop();
      //alert("Installer Javascript Error: unknown StateCode " + installer.getValue("StateCode"));
      redirectToGameFailPage();
      break;
  }

}

function mainLoop() {
  if (mainLoopGuard)
    return;

  mainLoopGuard++;
  mainLoopBody();
  mainLoopGuard--;
}




logTrace("ttLauncherLib::init", "Code successfully initialized");


//-->
