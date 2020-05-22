
<!--


_debug_wantDebug=0;

if (_debug_wantDebug) {
  _debug_debugWindow = window.open("","debug","width=800,height=400,scrollbars=1,resizable=1");
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

    function logit(){

        //for (var i=0; i < arguments.length; ++i) {
        //  logDebug("installerLogit", "arg["  + i + "]: '" + arguments[i] + "'");
        //}

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

      var s="http://play.toontown.com/shared/www/collect.php?rand="+Math.random()+"&"+a;
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




var installer = null;
var installerError = "";
var installerEmbedded = 0;
var pageFunction = "UNSET";
var deployment = "";
var begin = new Date();



document.write('<SCR'+'IPT LANGUAGE=VBScript\>\n');
document.write('function initInstallerCtrlVB()\n');  
document.write('  on error resume next \n');
//document.write('  alert("initInstallerCtrlVB -- In initInstallerCtrlVB")\n');
document.write('  installerCtrl.Init()\n');
//document.write('  alert("initInstallerCtrlVB -- returned from installerCtrl.init")\n');
document.write('  if (err.number = 0) then\n');
document.write('    initInstallerCtrlVB = 1\n');
document.write('  else\n');
document.write('    initInstallerCtrlVB = 0\n');
document.write('  end if\n');
document.write('end function\n');

document.write('</SCR'+'IPT\>\n');



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
  
  result=initInstallerCtrlVB();
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


function _embedInstaller(includeCodeBase) {

  logTrace("_embedInstaller", "Begin");
  
  if (installerEmbedded) {
    logErr("_embedInstaller", "Installer already embedded, skipping");
  }
  

  if(InternetExplorer()) {
    logDebug("_embedInstaller", "ActiveX is at 'http://download.toontown.com/sv1.0.13.6/ttinst.cab#Version=1,0,17,3' and classID 'C02226EB-A5D7-4B1F-BD7E-635E46C2288D'");
    document.writeln('<OBJECT CLASSID="CLSID:C02226EB-A5D7-4B1F-BD7E-635E46C2288D"');
    if (includeCodeBase) {
      document.writeln('CODEBASE="http://download.toontown.com/sv1.0.13.6/ttinst.cab#Version=1,0,17,3"');
    }
    
    document.writeln('ID=installerCtrl HEIGHT=0 WIDTH=0>');
    document.writeln('</object>');
    
    document.writeln("<SCRIPT LANGUAGE=Javascript> installerEmbedded=1; logTrace('embedInstaller-cb', 'installerEmbedded=1'); </SCRIPT>");
    

  } else {
    // Embed the Netscape object
    document.writeln('<EMBED type=application/x-WDI-Toontown-Installer-ns-v11 name="ns_installer" hidden=true>');
  }

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
  //return location.protocol + "//" +
  //  location.host + "/" +
  //  unPreSlashify(stripFilename(location.pathname));
  return location.protocol + "//" +
    location.host + "/";
  
  
}




var activeXInitFailURL = "";
var hardwareCheckFailURL = "";
var hardwareCheckOKURL = "";
var graphicsCheckFailURL = "";
var reportProblemURL = "";
var gameFailURL = "";
var gameOKURL = "";
var enableChatURL = "";
var purchaseURL = "";


function setTargetURL(targetName, targetURL) {

  logDebug("setTargetURL", "We are setting a target of '" + targetName + "' to a URL of '" + targetURL + "'");
  
  if (targetName == 'ACTIVEXINITFAIL') {
    activeXInitFailURL = targetURL;
  } else if (targetName == 'HARDWARECHECKFAIL') {
    hardwareCheckFailURL = targetURL;
  } else if (targetName == 'HARDWARECHECKOK') {
    hardwareCheckOKURL = targetURL;
  } else if (targetName == 'GRAPHICSCHECKFAIL') {
    graphicsCheckFailURL = targetURL;
  } else if (targetName == 'REPORTPROBLEM') {
    reportProblemURL = targetURL;
  } else if (targetName == 'GAMEFAIL') {
    gameFailURL = targetURL;
  } else if (targetName == 'GAMEOK') {
    gameOKURL = targetURL;
  } else if (targetName == 'PURCHASE') {
    purchaseURL = targetURL;
  } else if (targetName == 'ENABLECHAT') {
    enableChatURL = targetURL;
  } else {
    logEmerg("setTargetURL", "Unhandled URL target named '" + targetName + "' was attempted to be set with URL '" + targetURL + "'");
  }


}


function setDeployment(deploymentName) {

  logDebug("setDeployment", "We are setting a deploymnent of '" + deploymentName + "'");
  
  if (deploymentName == 'US') {
    deployment = 'US';
  } else if (deploymentName == 'UK') {
    deployment = 'UK';
  } else {
    logEmerg("setDeployment", "Unhandled deployment named '" + deploymentName + "'");
  }

}




function getDeployment() {

  logTrace("getDeployment", "in getDeployment");
  
  if(initActiveX() == 0)  {
    logErr("getDeployment", "ActiveX Failed to init");
    return '';
  } else {
    logTrace("getDeployment", "ActiveX initialized and awaiting commands");
  }

  var deployment = installerCtrl.getValue('DEPLOYMENT');   
  
  logDebug("getDeployment", "Value returned from ActiveX deployment is '" + deployment + "'");
  
  //alert("Value returned from ActiveX deployment is '" + deployment + "'");
  
  return deployment;
  

}



function setDefaultUSTargetURLs() {

  setTargetURL('ACTIVEXINITFAIL',    'http://play.toontown.com/ActiveXproblem.php');
  setTargetURL('HARDWARECHECKFAIL',  'http://play.toontown.com/missedRequirements.php');
  setTargetURL('HARDWARECHECKOK',    'http://play.toontown.com/test/hasHardware.php');
  setTargetURL('GRAPHICSCHECKFAIL',  'http://play.toontown.com/graphicsDrivers.php');
  setTargetURL('REPORTPROBLEM',      'http://play.toontown.com/reportBug.php?reportproblem=1');
  setTargetURL('GAMEFAIL',           'http://play.toontown.com/reportBug.php?reportproblem=0');
  setTargetURL('GAMEOK',             'https://account.toontown.com/thanksForPlaying.php');
  setTargetURL('ENABLECHAT',         '');
  setTargetURL('PURCHASE',           'https://account.toontown.com/webPurchase.php');

}

function setDefaultUKTargetURLs() {

  setTargetURL('ACTIVEXINITFAIL',    'http://www.disney.co.uk/toontown/index.jsp');
  setTargetURL('HARDWARECHECKFAIL',  'http://www.disney.co.uk/toontown/index.jsp');
  setTargetURL('HARDWARECHECKOK',    'http://www.disney.co.uk/toontown/index.jsp');
  setTargetURL('GRAPHICSCHECKFAIL',  'http://www.disney.co.uk/toontown/index.jsp');
  setTargetURL('REPORTPROBLEM',      'http://www.disney.co.uk/toontown/index.jsp');
  setTargetURL('GAMEFAIL',           'http://play.toontown.com/ukGameFail.html');
  setTargetURL('GAMEOK',             'https://www.disney.co.uk/toontown/secure/exit.jsp');
  setTargetURL('ENABLECHAT',         'https://www.disney.co.uk/toontown/secure/exit.jsp?reason=ENABLE_CHAT');
  setTargetURL('PURCHASE',           'https://www.disney.co.uk/toontown/secure/exit.jsp?reason=PURCHASE');

}


function checkForHardwareCheckRedirects() {

  if ( !activeXInitFailURL.length || 
       !hardwareCheckFailURL.length || 
       !hardwareCheckOKURL.length || 
       !graphicsCheckFailURL.length ) {
       
    return false;
  } 
  
  return true;

}


function checkForReportProblemRedirects() {

  if ( !activeXInitFailURL.length || 
       !reportProblemURL.length 
       ) {
       
    return false;
  } 
  
  return true;

}


function checkForGameFailRedirects() {

  if ( !activeXInitFailURL.length || 
       !gameFailURL.length 
       ) {
       
    return false;
  } 
  
  return true;

}




function checkForDeployment() {

  if ( !deployment.length ) { 
    return false;
  } 
  
  return true;

}






function redirectToActiveXFailedPage() {
  installerLogit("NAME", pageFunction + "-ACTIVEXFAIL");
  window.location = activeXInitFailURL;
}


function redirectToHasHardwarePage(trialEligible, trialEligible2) {
  logDebug("redirectToHasHardwarePage", "Redirecting, with trialEligible='" + trialEligible + "' and trialEligible2='" + trialEligible2 + "'");

  installerLogit("NAME", pageFunction + "-HASHARDWARE");
  window.location = hardwareCheckOKURL + "?te=" + escape(trialEligible) + "&te2=" + escape(trialEligible2);

}


function redirectToGameFailPage() {
  installerLogit("NAME", pageFunction + "-GAMEFAIL");
  performCrashReport();
}



function sendPathsToInstaller() {
  logDebug("sendPathsToInstaller", "These paths going to installer: MissedRequirements = '" + hardwareCheckFailURL + "' GraphicsDriver = '" + graphicsCheckFailURL + "'");

  installer.setValue("MissedRequirements", hardwareCheckFailURL);
  installer.setValue("GraphicsDriver", graphicsCheckFailURL);
}









function performHardwareCheck() {
  logTrace("performHardwareCheck", "Begin");
  
  //
  // Make sure we've written the installer to this page
  //
  
  if (!checkForInstallerEmbed()) {
    logEmerg("performHardwareCheck", "Installer not yet embedded in HTML document");
    return false;
  }
  
  
  //
  // Make sure we've been provided all the URL's we need
  //
  
  if (!checkForHardwareCheckRedirects()) {
    logEmerg("performHardwareCheck", "URLs for exit were not set");
    return false;
  }


  //
  // Make sure we are in a known deployment
  //
  
  if (!checkForDeployment()) {
    logEmerg("performHardwareCheck", "Deployment was not set");
    return false;
  }

  
  
  //
  // For purposes of logits, set the function
  //
  
  pageFunction = "HARDWARETEST";

  // check and initialize the installer
  if(InternetExplorer())  {
    if(initActiveX() == 0)  {
      logErr("performHardwareCheck", "ActiveX Failed to init");
      redirectToActiveXFailedPage();
      return;
    } else {
      logTrace("performHardwareCheck", "ActiveX initialized and awaiting commands");
    }

    //
    // ActiveX Hardware check code begins here
    //

    logTrace("performHardwareCheck", "Begin check");
    var metRequirements = 0;
    var trialEligible = installer.getValue("TrialEligible");
    var trialEligible2 = installer.getValue("TrialEligible2");
    logDebug("performHardwareCheck", "trialEligible = '" + trialEligible + "'");
    logDebug("performHardwareCheck", "trialEligible2 = '" + trialEligible2 + "'");
    if (installer) {
      //
      // "JustCheckSystemPage" command requires a value to replace --userErrorString-- with, so set it to "" here
      //
      installer.setValue("AddUserErrorMessage", "");
    }
    
    //
    // This is where we will explicitly set the exit pages
    //
    
    sendPathsToInstaller();
    logDebug("performHardwareCheck", "server url '" + getThisServerURL() + "'");
    
    //
    // Kick off the hardware detect
    //
    
    installer.setValue("JustCheckSystemPage",  getThisServerURL());

    //alert (installer.getValue("UserErrorString"));
    if ( installer.getValue("UserErrorString") == 0 ) {
      metRequirements = 1;
      logDebug("performHardwareCheck", "metRequirements = '" + metRequirements + "'");
    } else {
      window.document.write(installer.getValue("LocalErrorPageData"));
    }

    if (metRequirements) {
      //
      // Forward direct to the OK page
      //
      
      logDebug("performHardwareCheck", "The user does have sufficient hardware");
      redirectToHasHardwarePage(trialEligible, trialEligible2);
      
    } else {
      // This never gets called
      //window.location = "http://play.toontown.com/missedRequirements.php?te=" + trialEligible;
    }


  } else {
    alert("Please report bugs using IE on Windows.");
  }
}



var agt=navigator.userAgent.toLowerCase();
//var InternetExplorer = (navigator.appName.indexOf("Microsoft") != -1);
var IsWindows = (agt.indexOf("win")!=-1);




var PageData = '';


function showPageInParentWindow(url) {
  window.top.location.href = url;
}


function performProblemReport() {
  performCrashReport(0);
}


function performCrashReport(isCrash) {

  if (isCrash == null) {
    isCrash = 1;
  }

  logTrace("performCrashReport", "Begin, isCrash is '" + isCrash + "'");


  //
  // Make sure we've written the installer to this page
  //
  
  if (!checkForInstallerEmbed()) {
    logEmerg("performCrashReport", "Installer not yet embedded in HTML document");
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
    logEmerg("performCrashReport", "URLs for exit were not set");
    return false;
  }

  pageFunction = "BUGREPORT";

  // check and initialize the installer
  if(InternetExplorer())  {
    if(initActiveX() == 0)  {
      logErr("performCrashReport", "ActiveX Failed to init");
      redirectToActiveXFailedPage();
      return;
    } else {
      logTrace("performCrashReport", "ActiveX initialized and awaiting commands");
    }

    if (installer) {
            installer.setValue("AddUserErrorMessage", "");
    }
    
    if (isCrash) {
      logDebug("performCrashReport", "Crash URL is '" + gameFailURL + "'");
      installer.setValue("RemoteErrorPageURL", gameFailURL);
    } else {
      logDebug("performCrashReport", "Problem URL is '" + reportProblemURL + "'");
      installer.setValue("JustMakeErrorPage", reportProblemURL );
    }

    
    PageData = installer.getValue("LocalErrorPageData");
    
    //logDebug("performCrashReport", "Page data is '" + PageData + "'");
    
    logDebug("performCrashReport", "Page Data Length is " + PageData.length + " bytes");
    
    document.open(); 
    document.write(PageData); 
    document.close();

  } else {
    alert("Please report bugs using IE on Windows.");
  }
}
  




var activeXVersion_   ='';
var playToken_        ='NO PLAYTOKEN';
var blue_             ='NO BLUE';
var chatEligible_     =0;
var webAccountParams_ ='';
var trialEligible_    ='';
var trialEligible2_   ='';
var userName_         ='';
var downloadServer_   ='';
var downloadVersion_  ='';
var gameServer_       ='';
var accountServer_    ='';
var statServer_       ='';
var doLogits_         ='';
var windowTitle_      ='';
var launchGUID_       ='';
 
var swfPaths_         = "?overlaySwfURL=/overlay.swf&toonfilmSwfURL=/toonfilm.swf";

// Inline code

// Hook for Internet Explorer
if (navigator.appName && navigator.appName.indexOf("Microsoft") != -1 &&
    navigator.userAgent.indexOf("Windows") != -1 && navigator.userAgent.indexOf("Windows 3.1") == -1) {
  document.write('<SCRIPT LANGUAGE=VBScript\> \n');
  document.write('on error resume next \n');
  document.write('Sub ttmovie_FSCommand(ByVal command, ByVal args)\n');
  document.write('  call ttmovie_DoFSCommand(command, args)\n');
  document.write('end sub\n');
  document.write('</SCRIPT\> \n');
}



function setActiveXVersion(activeXVersion) { 
  logDebug("setActiveXVersion", "Passed activeXVersion of '" + activeXVersion + "'");
  activeXVersion_ = activeXVersion;
}



function setPlayToken(playToken) { 
  logDebug("setPlayToken", "Passed playToken of '" + playToken + "'");
  playToken_ = playToken;

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








function performGameLaunch() {

  logTrace("performGameLaunch", "Begin");

  pageFunction = "PLAY";
  
  loadingTextContainer.style.display="none";
  ttmovie.style.visibility="visible";

  // check and initialize the installer
  if(InternetExplorer()) {
    if(initActiveX() == 0)  {
      logErr("performGameLaunch", "ActiveX Failed to init");
      redirectToActiveXFailedPage();
      return;
    } else {
      logTrace("performGameLaunch", "ActiveX initialized and awaiting commands");
    }
    installer = installerCtrl
  } else {

    // this may not come back if the plugin needs to be installed
    if(val = initNSP()) {
      if (val == 2) {
        NSP_Installation_Failed(); // there was an error triggering the installation
      }
      // otherwise, plugin installation has started
      return;
    }
  }

  // following doesn't harm but useful for initfunction
  installer.setValue("DownloadURL", getThisServerURL());

  // make sure we can create logs, no other TT is running, installer version is correct
  if(installer.InitForRun(activeXVersion_)==0) {
    showErrorPage();
    return;
  }

  initialized = 1;
  
  sendPathsToInstaller();
  installer.setValue("Deployment", deployment);

  //installer.setValue("SWID", getURLParam(location.search, "SWID", '&'));
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

  // get the green as a cookie
  green = getCookie("GREEN");
  if (!green) {
     green = "NO GREEN";
  }
  installer.setValue("Green", green);

  // get the blue off the URL
  blue = getCookie("BLUE");
  if (!blue) {
    blue = "NO BLUE";
  }
  installer.setValue("Blue", blue);
  installer.setValue("PlayToken", playToken_);


  installer.setValue("ChatEligible", chatEligible_);
  installer.setValue("WebAccountParams", webAccountParams_);
  installer.setValue("TrialEligible", trialEligible_);
  installer.setValue("TrialEligible2", trialEligible2_);

  installer.setValue("LastLogin", "");
  //alert(windowTitle_);
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

function getCookie(name) {
  var start = document.cookie.indexOf(name+"=");
  var len = start+name.length+1;
  if ((!start) && (name != document.cookie.substring(0,name.length))) return null;
  if (start == -1) return null;
  var end = document.cookie.indexOf(";",len);
  if (end == -1) end = document.cookie.length;
  return unescape(document.cookie.substring(len,end));
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


function stopMainLoop() {
  clearInterval(timerID);
}

function addUserError(err) {
  if (installer) {
    installer.setValue("AddUserErrorMessage", err);
  }
}

function grabInstallerVars() {
  if (initialized) {
    installerLogFileName = installer.getValue("InstallerLogFileName");
    
    userLoggedIn = installer.getValue("UserLoggedIn");
    paidUserLoggedIn = installer.getValue("PaidUserLoggedIn");
    configSubmitApproved = installer.getValue("ConfigSubmitApproved");
  }

  
  installerLogFileName = escape(installerLogFileName);
  userLoggedIn = escape(userLoggedIn);
  paidUserLoggedIn = escape(paidUserLoggedIn);
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

function addURLParam(url, paramName, paramValue) {
  if (url.indexOf("?") == -1) url = url + "?";
  url = removeURLParam(url, paramName);
  if (url.charAt(url.length - 1) != '?') url = url + "&";
  url = url + paramName + "=" + paramValue;
  return url;
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

function playMusic() {
  return;
  if(InternetExplorer())  {
    midisongIE.src = "flash_intro.mid";
    midisongIE.loop = -1;
  } else {
    if (document.midisongNS) {
      if (document.midisongNS.IsReady()) {
        document.midisongNS.play(true);
      }
    }
  }
}
function stopMusic() {
  return;

  if (InternetExplorer()) {
    midisongIE.src = "";
  } else {
    if (document.midisongNS) {
      if (document.midisongNS.IsReady()) {
        document.midisongNS.stop();
      }
    }
  }
}

function checkOpener() {
  if ((!window.opener) || window.opener.closed) {
    initialized = 0; // circumvent onUnload
  }
}

function parentFocus() {
  window.top.focus();
}


function showNormalExitPage() {
    showPageInParentWindow(addTTURLParams(gameOKURL));
}

function showPurchasePage() {
  showPageInParentWindow(addTTURLParams(purchaseURL));
}

function showSetParentPasswordPage() {
  showPageInParentWindow(addTTURLParams(enableChatURL));
}



function showErrorPage() {
  if(!IsSupportedPlatform()) {
      alert("Please use Internet Explorer on Windows to report bugs.");
      return;
  }

  if (!installer) {
    installerLogit("NAME", "PLAY-ABEND-ACTIVEXFAIL");
    showPageInParentWindow(addTTURLParams(getThisServerURL() + "ActiveXproblem.php"));
  } else {
    installerLogit("NAME", "PLAY-ABEND-CRASH");
    performCrashReport(1);
  }
}

function showGraphicsErrorPage() {
  if(!IsSupportedPlatform()) {
      alert("Please use Internet Explorer on Windows to report bugs.");
      return;
  }

  if (!installer) {
    installerLogit("NAME", "PLAY-ABEND-ACTIVEXFAIL");
    showPageInParentWindow(addTTURLParams(getThisServerURL() + "ActiveXproblem.php"));
  } else {
    installerLogit("NAME", "PLAY-ABEND-GRAPHICSDRIVERS");
    installer.setValue("RemoteErrorPageURL", graphicsCheckFailURL);
    PageData = installer.getValue("LocalErrorPageData");
    
    logDebug("showGraphicsErrorPage", "Page Data Length is " + PageData.length + " bytes");

    document.open();
    document.write(PageData);
    document.close();
  }
}

function showInvalidHardwarePage() {
  installerLogit("NAME", "PLAY-ABEND-INVALIDHARDWARE");
  if (!installer) alert("no installer in showInvalidHardwarePage");
  if (!installer || !InternetExplorer()) {
    showPageInParentWindow(addTTURLParams(getThisServerURL() +
                                                   "missedRequirements.php"));
  } else {
    installer.setValue("RemoteErrorPageURL",
                       getThisServerURL() + "missedRequirements.php");
    showPageDataInParentWindow(installer.getValue("LocalErrorPageData"));
  }
}

function closeWindowNormalExit() {

  var exitPage = installer.getValue('ExitPage');

  logDebug("closeWindowNormalExit", "We were passed an exitPage of '" + exitPage + "'");

  if (exitPage == 'purchase') {
    installerLogit("NAME", "PLAY-COMPLETE-PURCHASE");
    showPurchasePage();
  } else if (exitPage == 'setparentpassword') {
    installerLogit("NAME", "PLAY-COMPLETE-SETPARENTPASSWORD");
    showSetParentPasswordPage();
  } else {
    installerLogit("NAME", "PLAY-COMPLETE-NORMAL");
    showNormalExitPage();
  }
}

function installerExit() {

  if (initialized) {
    var cdrom_version = parseInt(installer.getValue("CDRom"));
    if(downloadInProgress==1 && (isNaN(cdrom_version) || cdrom_version==0) && deployment == 'US' ) {
      installerLogit("NAME", "PLAY-INSTALLER-INITIATE-POPUPCDOFFER");
      window.open("http://play.toontown.com/popups/cd_offer.php","cd_offer","width=400,height=400,resizable=0");
    } else {
      installerLogit("NAME", "PLAY-INSTALLER-NOINITIATE-POPUPCDOFFER");
    }
    showNormalExitPage();
  }
}

// get the flash player object
function flash() {
  return InternetExplorer() ? ttmovie : document.ttmovie;
}

function setFlashQuality(q) {
  if (InternetExplorer()) {
    flash().quality = q;
  }
}

// commands to show flash movies
function loadMovie_messages() {
  flash().LoadMovie(0,"/loadingdisplay.swf" + swfPaths_);
}
function loadMovie_game1() {
  flash().LoadMovie(0,"game1.swf" + swfPaths_);
}
function loadMovie_movie() {
  downloadInProgress = 1;
  flash().LoadMovie(0,"/movie.swf" + swfPaths_);
  playMusic();
}
function loadMovie_game2() {
  stopMusic();
  flash().LoadMovie(0,"/game.swf" + swfPaths_);
}

// Handle all the FSCommand messages from the Flash movie
function ttmovie_DoFSCommand(command, args) {
  if("game1_done" == command) {
    installer.setValue("Game1_Done", "");
  } else if("movie_done" == command) {
    flash().SetVariable("_root.rec:percent_loaded", "0");
    loadMovie_game2();
  } else if("game2_done" == command) {
    stopMusic();
    installer.setValue("Game2_Done", "");
    // load up a flash movie that doesn't use much CPU
    loadMovie_messages();
    setFlashQuality(1);
  } else if ("quit" == command) {
    closeWindowNormalExit();
  }
}


function getLauncherPercentFull()
{
  launcherPercent = parseInt(installer.getValue("PercentLauncherDownloaded"));
}

function getLauncherPercent()
{
  launcherPercent = parseInt(installer.getValue("PercentLauncherDownloaded"));
  launcherPercent = Math.floor(launcherPercent * 0.18);
}

function getPercentLoaded()
{
  launcherPercent = parseInt(installer.getValue("PercentLoaded"));
  launcherPercent = Math.floor((launcherPercent * 0.8)) + 20;
}

function getOverallPercentLoaded()
{
  launcherPercent = parseInt(installer.getValue("OverallPercentLoaded"));
  // few things need to be done once download has finished
  if (launcherPercent >= 27) {
    flash().SetVariable("_root.percent_loaded", "100");
  }

  if (launcherPercent == 100) {
    downloadInProgress = 0;
    downloadComplete = 1;
    flash().SetVariable("_root.LauncherMessage", "Starting Toontown...");
    flash().SetVariable("_root.percent_loaded", "100");
  }
}

var lastStateCode=-1;
var lastPercent=-100;
var curPercent=0;
var percentIncrement=5;

function mainLoopBody() {
  checkOpener();
  installer.RunInstaller();

  var stateCode = parseInt(installer.getValue("StateCode"));

  if (stateCode == 110) {
    getPercentLoaded();
    curPercent = Math.floor(launcherPercent/percentIncrement)*percentIncrement;  // Only update 5 at a time

  }

  if (doLogits_ && (stateCode != lastStateCode || curPercent >= lastPercent + percentIncrement)) {
    logDebug("mainLoop", "stateCode = '" + stateCode + "' percent = '" + curPercent + "'");
    installerLogit("NAME", "PLAY-INSTALLER", "sc", stateCode, "percent", curPercent);
    lastStateCode = stateCode;

    if (curPercent >= lastPercent + percentIncrement) {
      lastPercent = curPercent;
    }
  }

  switch(stateCode) {
    case 7:
            var configinfo=installer.getValue("ConfigInfoRecord");
      var retval = window.showModalDialog(addTTURLParams(getThisServerURL() + "submitConfigDialog.php"),configinfo,"dialogHeight: 470px; dialogWidth: 500px; edge: Raised; center: Yes; help: No; resizable: Yes; status: No;");
      if(retval=="yes") {
        installer.setValue("ConfigSubmitApproved","1");
      } else {
        showPageInParentWindow(addTTURLParams(getThisServerURL() +
                                             "configSubmitNotAccepted.php"));
      }
      break;
    case 15:
      // ask user if default directory is OK
      break;
    case 20:
      // navigate to troubleshooting webpage
      stopMainLoop();
      redirectToGameFailPage();
      break;
    case 21:
      stopMainLoop();
      showInvalidHardwarePage();
      break;
    case 23:
      stopMusic();
      // display "updating Toontown..."
      loadMovie_messages();
      // Switch into high quality for the messages page
      setFlashQuality(1);
      flash().SetVariable("_root.LauncherMessage", "Checking for Launcher updates...");
      break;
    case 24:
      stopMainLoop();
      // navigate to troubleshooting webpage
      showGraphicsErrorPage();
      break;
    case 25:
      // If you came from the movie, you will still have the loading bar
      // so update the percentage now that the launcher is done extracting
      //flash().SetVariable("_root.rec:percent_loaded", "20");
      //flash().SetVariable("_root.percent_loaded", "20");
      // going to check if the launcher is current...
      break;
    case 30:
      // start game1 in flash
      loadMovie_game1();
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
      flash().SetVariable("_root:game_can_exit", "true");
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
      // alert("55");
      // waiting for launcher to download...updating "percent loaded"...
      // Scale the value we get back from the Launcher to be in the range 0-20 since this is about 20 % of the download
      getLauncherPercent();
      flash().SetVariable("_root.rec:percent_loaded", launcherPercent.toString());
      // show this percentage on the 'loadingdisplay' movie as well: the flash variable name is not the same as intro
      flash().SetVariable("_root.percent_loaded", launcherPercent.toString());
      // The following string is shown only when you are not in the movie, so show full scale download
      getLauncherPercentFull();
      flash().SetVariable("_root.LauncherMessage", "Downloading Launcher..." + launcherPercent.toString() + "%")
      break;
    case 60:
      // Now the launcher is done downloading, so update the percentage
      // waiting for launcher to self-extract...
      flash().SetVariable("_root.rec:percent_loaded", 19);
      // show this percentage on the 'loadingdisplay' movie as well: the flash variable name is not the same as intro
      flash().SetVariable("_root.percent_loaded", 19);
      flash().SetVariable("_root.LauncherMessage", "Installing Launcher...")
      break;
    case 85:
      // Update the progress bar to show that the launcher was checked
      // going to start downloading launcher patch...
      // flash().SetVariable("_root.rec:percent_loaded", 19);
      // flash().SetVariable("_root.LauncherMessage", "Downloading new version of Launcher...")
      getLauncherPercent();
      flash().SetVariable("_root.rec:percent_loaded", launcherPercent.toString());
      // show this percentage on the 'loadingdisplay' movie as well: the flash variable name is not the same as intro
      flash().SetVariable("_root.percent_loaded", launcherPercent.toString());
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
      flash().SetVariable("_root.rec:percent_loaded", 20);
      // show this percentage on the 'loadingdisplay' movie as well: the flash variable name is not the same as intro
      flash().SetVariable("_root.percent_loaded", 20);
      flash().SetVariable("_root.LauncherMessage", "Starting Launcher...")
      break;
    case 110:
      // updating "percent loaded"...
      // Scale the value we get back from the Launcher to be in the
      // range 20-100 since we already ticked the first 20 percent
      getPercentLoaded();
      flash().SetVariable("_root.rec:percent_loaded", launcherPercent.toString());
      getOverallPercentLoaded();
      break;
    case 115:
      // waiting for panda window to open...
      msg = installer.getValue("LauncherMessage");
      if (msg != "") {
        flash().SetVariable("_root.LauncherMessage", msg);
        // show phase_3 percentage on the 'loadingdisplay movie
        getPercentLoaded();
        if (launcherPercent < 100) {
          flash().SetVariable("_root.percent_loaded", launcherPercent.toString());
        }
        getOverallPercentLoaded();
      }
      break;
    case 120:
      // panda has started up, go into a slow polling loop
      // stop that music!
      stopMusic();
      clearInterval(timerID);
      timerID = setInterval("mainLoop()", inGamePollingPeriodMs);
      break;
    case 130:
      // checking up on the game...
      // download may still be going, in that case keep getting some more variables
      if (!downloadComplete) {
        msg = installer.getValue("LauncherMessage");
        if (msg != "") {
          flash().SetVariable("_root.LauncherMessage", msg);
          getOverallPercentLoaded();
        }
      }
      break;
    case 140:
      // shut down
      stopMainLoop();
      closeWindowNormalExit();
      break;
    case 13:
      // major error
      stopMainLoop();
      showErrorPage();
      break;
    default:
      // error, unknown StateCode
      stopMainLoop();
      alert("Installer Javascript Error: unknown StateCode " + installer.getValue("StateCode"));
      showErrorPage();
      break;
  }

  if (!InternetExplorer()) {
    grabInstallerVars();
  }
}

function mainLoop() {
  if (mainLoopGuard)
    return;

  mainLoopGuard++;
  mainLoopBody();
  mainLoopGuard--;
}

function getURLParam(s,r,d) {
  if(s) {
    index = s.indexOf(r);
    if (index != -1) {
      countbegin = (s.indexOf("=", index) + 1);
      countend = s.indexOf(d, index);
      if (countend == -1) {
        countend = s.length;
      }
      val = s.substring(countbegin, countend);
      return unescape(val);
    }
  }
  return "";
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






logTrace("ttLauncherLib::init", "Code successfully initialized");


//-->






