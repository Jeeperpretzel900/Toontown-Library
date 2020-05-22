<HTML>
  <HEAD>
    <TITLE>Going to Toontown...</TITLE> <!-- Netscape plugin looks for this window title -->
<!-- make sure this page isn't cached -->
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="x-ua-compatible" content="IE=5"> <!-- For modern support -->
<SCRIPT LANGUAGE=VBScript>
<!--
' initializes the installer ctrl if present
' if ctrl is not present, returns 0
' this is in VB for its error recovery capabilities
function initInstallerCtrlVB()
    on error resume next
    installerCtrl.Init()
   if (err.number = 0) then
      initInstallerCtrlVB = 1
     else
      initInstallerCtrlVB = 0
     end if
end function
' poke the flash player to see if it's present
' if player is not present, returns 0
' this is in VB for its error recovery capabilities
function detectFlashPlayerVB()
    on error resume next
    ttmovie.IsPlaying()
    if (err.number = 0) then
      detectFlashPlayerVB = 1
     else
      detectFlashPlayerVB = 0
     end if
end function
//-->
</SCRIPT>
<SCRIPT ID=clientEventHandlersJS LANGUAGE=javascript>
<!--
var timerID;
var installationPollingPeriodMs = 100;
var inGamePollingPeriodMs = 2500;
var mainLoopGuard = 0;
var initialized = 0;
var installer = null;
// netscape doesn't call onUnload until after destroying the installer. nice, huh?
// so we have to keep these here and update them from time to time, so that we have
// them when the window closes.
var installerLogFileName = "";
var launcherExtractionLogFileName = "";
var gameLogFileName = "";
var userLoggedIn = "";
var paidUserLoggedIn = "";
//var NSsound = navigator.plugins && navigator.plugins["LiveAudio"] && navigator.javaEnabled();
//var IEsound = navigator.plugins && document.all;
// browser/OS detection code
// yoinked from http://www.mozilla.org/docs/web-developer/sniffer/browser_type.html
  // convert all characters to lowercase to simplify testing
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
function greenNotFound() {
  addUserError("Green not found.");
  showErrorPage();
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
  } else {
    //alert("Toontown installer object not found!");
  }
  return result;
}
function NSP_Installation_Failed() {
  closeWindow();
}
function prepareForNetscapePlugin() {
  checkOpener();
  // store the URL for the installation script to go back to
  url = getThisServerURL() + "launchingToontown.php";
  navigator.netscapePluginURL = url;
  // set up the failure callback
  navigator.NSP_Installation_Failed = NSP_Installation_Failed;
}
function initNSP() {
  if(null != document.ns_installer) {
    installer = document.ns_installer;
    installer.Init();
    return 0;
  }
  if (navigator.javaEnabled()) {
    trigger = netscape.softupdate.Trigger;
    if (trigger) {
      if (trigger.UpdateEnabled()) {
        if (navigator.platform == "Win32") {
          prepareForNetscapePlugin();
          trigger.StartSoftwareUpdate(getThisServerURL() + "ttinst.jar", trigger.FORCE_MODE);
          return 1;
        } else {
          alert("Disney's Toontown Online only runs on Microsoft Windows.");
        }
      } else {
        alert("Please enable SmartUpdate to run Disney's Toontown Online.");
      }
    } else {
      alert("Error: netscape.softupdate.Trigger is NULL.");
    }
  } else {
    alert("Please enable Java to run Toontown.");
  }
  return 2;
}
function getRidOfScrollBar() {
  // This appears to not work in the latest version of IE;
  // instead, I've added 'SCROLL="no"' to the BODY tag.
  // This doesn't appear to hurt anything, either, so I
  // left it in.
  // get rid of the dang scroll bar
  if(InternetExplorer()) window.resizeBy(16,0);
}
function closeWindow()  {window.close();}
function stopMainLoop() {clearInterval(timerID);}
function parentOpen(url) {
  checkOpener();
  // note for IE6 SP1, 'file://' URLs wont work here to since http://->file:// is disallowed!
  // load the url into the parent's 'top' to get rid of any frames
  window.opener.top.location.href = url;
}
function parentSetData(HTMLdata) {
  checkOpener();
  window.opener.document.open();
  window.opener.document.write(HTMLdata);
  window.opener.document.close();
}
function addUserError(err) {
  if (installer) {
    installer.setValue("AddUserErrorMessage", err);
  }
}
function grabInstallerVars() {
  if (initialized) {
    installerLogFileName = installer.getValue("InstallerLogFileName");
    launcherExtractionLogFileName = installer.getValue("LauncherExtractionLogFileName");
    //gameLogFileName = installer.getValue("GameLogFileName");
    //userErrorString = installer.getValue("UserErrorString");
    userLoggedIn = installer.getValue("UserLoggedIn");
    paidUserLoggedIn = installer.getValue("PaidUserLoggedIn");
  }
  //userErrorString = userErrorString + localUserErrorString;
  installerLogFileName = escape(installerLogFileName);
  launcherExtractionLogFileName = escape(launcherExtractionLogFileName);
  // gameLogFileName = escape(gameLogFileName);
  //userErrorString = escape(userErrorString);
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
  else
    url = url + "?";
  url = addURLParam(url, "installerLogFileName", installerLogFileName);
  url = addURLParam(url, "launcherExtractionLogFileName", launcherExtractionLogFileName);
  //url = addURLParam(url, "gameLogFileName", gameLogFileName);
  //url = addURLParam(url, "userErrorString", userErrorString);
  if(userLoggedIn!="") {
    if(paidUserLoggedIn!="") {
      url = addURLParam(url, "paidUserLoggedIn", paidUserLoggedIn);
    } else {
      url = addURLParam(url, "userLoggedIn", userLoggedIn);
    }
  }
  return url;
}
function playMusic() {
  if(InternetExplorer())
  {
    midisongIE.src = "flash_intro.mid";
    midisongIE.loop = 1;
  }
  else
  {
    if (document.midisongNS)
      if (document.midisongNS.IsReady())
        document.midisongNS.play(true);
  }
}
function stopMusic() {
  if(InternetExplorer())
  {
    midisongIE.src = "";
  }
  else
  {
    if (document.midisongNS)
      if (document.midisongNS.IsReady())
        document.midisongNS.stop();
  }
}
function checkOpener() {
  if ((!window.opener) || window.opener.closed) {
    initialized = 0; // circumvent onUnload
    closeWindow();
  }
}
function showPageDataInParentWindow(HTMLdata) {
  parentSetData(HTMLdata);
  initialized = 0; // circumvent onUnload
  closeWindow();
}
function showPageInParentWindow(url) {
  parentOpen(url);
  initialized = 0; // circumvent onUnload
  closeWindow();
}
function showNormalExitPage() {
  // browse to the thanksForPlayingFrameset page, which will drop cookies
  // on disney.go.com and display thanksForPlaying.php
  showPageInParentWindow(addTTURLParams(getThisServerURL() +
                                        "thanksForPlayingFrameset.php"));
}
function showErrorPage() {
  if(!IsSupportedPlatform()) {
      alert("Please use Internet Explorer on Windows to report bugs.");
      return;
  }
  if (!installer) {
    showPageInParentWindow(addTTURLParams(getThisServerURL() + "ActiveXproblem.php"));
  } else {
    installer.setValue("RemoteErrorPageURL", getThisServerURL() + "reportBug.php");
    showPageDataInParentWindow(installer.getValue("LocalErrorPageData"));
  }
}
function showInvalidHardwarePage() {
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
  showNormalExitPage();
}
function window_onunload() {
  if (initialized) {
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
  //var url = installer.getValue("MessagesFilename");
  //var url = "http://download.test.toontown.com/sv1.4.1/messages.swf";
  flash().LoadMovie(0,"game1.swf");
}
function loadMovie_game1() {
  //var url = installer.getValue("Game1Filename");
  //var url = "http://download.test.toontown.com/sv1.4.1/game1.swf";
  flash().LoadMovie(0,"game1.swf");
}
function loadMovie_movie() {
  flash().LoadMovie(0,"movie.swf");
  playMusic();
}
function loadMovie_game2() {
  stopMusic();
  flash().LoadMovie(0,"game2.swf");
}
// Handle all the FSCommand messages from the Flash movie
function ttmovie_DoFSCommand(command, args) {
  if("game1_done" == command) {
    installer.setValue("Game1_Done", "");
  } else if("movie_done" == command) {
    flash().SetVariable("_root.rec:percent_loaded", "0");
    loadMovie_movie();
  } else if("game2_done" == command) {
    stopMusic();
    installer.setValue("Game2_Done", "");
    // load up a flash movie that doesn't use much CPU
    loadMovie_movie();
    setFlashQuality(1);
  } else if ("quit" == command) {
    closeWindowNormalExit();
  }
}
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
function mainLoopBody() {
  checkOpener();
  installer.RunInstaller();
  switch(parseInt(installer.getValue("StateCode"))) {
    case 15:
      // ask user if default directory is OK
      break;
    case 20:
      stopMainLoop();
      // navigate to troubleshooting webpage
      showErrorPage();
      break;
    case 21:
      stopMainLoop();
      showInvalidHardwarePage();
      break;
    case 23:
      stopMusic();
      // display "updating Toontown..."
	  
	  //for now use game1 until movie.swf's loading percent has been fixed
      loadMovie_game1();
      // Switch into high quality for the messages page
      setFlashQuality(1);
      flash().SetVariable("_root.LauncherMessage", "Checking for Launcher updates...");
      break;
    case 25:
	  loadMovie_movie();
      // If you came from the movie, you will still have the loading bar
      // so update the percentage now that the launcher is done extracting
      flash().SetVariable("_root.rec:percent_loaded", "8");
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
	  flash().SetVariable("_root.rec:percent_loaded", "55");
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
      flash().SetVariable("_root.rec:percent_loaded", "1")
      break;
    case 53:
      // starting launcher download...
      flash().SetVariable("_root.rec:percent_loaded", "2")
      flash().SetVariable("_root.LauncherMessage", "Downloading Launcher...")
      break;
    case 55:
      // waiting for launcher to download...
      flash().SetVariable("_root.rec:percent_loaded", "3")
      break;
    case 60:
      // Now the launcher is done downloading, so update the percentage
      flash().SetVariable("_root.rec:percent_loaded", "8")
      // waiting for launcher to self-extract...
      flash().SetVariable("_root.LauncherMessage", "Installing Launcher...")
      break;
    case 85:
      // Update the progress bar to show that the launcher was checked
      flash().SetVariable("_root.rec:percent_loaded", "9")
      // going to start downloading launcher patch...
      flash().SetVariable("_root.LauncherMessage", "Downloading new version of Launcher...")
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
      flash().SetVariable("_root.rec:percent_loaded", "10")
      flash().SetVariable("_root.LauncherMessage", "Starting Launcher...")
      break;
    case 110:
      // updating "percent loaded"...
      // Scale the value we get back from the Launcher to be in the
      // range 10-100 since we already ticked the first 10 percent
      launcherPercent = parseInt(installer.getValue("PercentLoaded"));
      launcherPercent = Math.floor((launcherPercent * 0.9)) + 10;
      flash().SetVariable("_root.rec:percent_loaded", launcherPercent.toString());
      break;
    case 115:
      // waiting for panda window to open...
      msg = installer.getValue("LauncherMessage");
      if (msg != "") {
	 flash().SetVariable("_root.LauncherMessage", msg);
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
function check_flash_version() {
  if (InternetExplorer()) {
    if (0 == detectFlashPlayerVB()) {
     // cant add a user error because installer doesnt exist yet
     // addUserError("To play Toontown, you must allow Flash 5 (or newer) to install.");
      // showErrorPage();
      showPageInParentWindow(addTTURLParams(getThisServerURL() +"Flashproblem.php"));
      closeWindow();
      return 1;
    }
  } else {
    var plugin =
      (navigator.mimeTypes && navigator.mimeTypes["application/x-shockwave-flash"] ?
      navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin : 0);
    if ((!plugin) ||
        parseInt(plugin.description.substring(plugin.description.indexOf(".")-1)) < 5)
    {
      addUserError("You must upgrade to Flash 5 (or newer) to play Toontown.");
      showErrorPage();
      return 1;
    }
  }
  return 0;
}
function check_browser() {
  valid = 1;
  if(!is_ie4up) {
      valid = 0;
      if(is_nav) {
	<!-- Remove for modern support -->
      } else if(is_ie) {
	alert("Toontown requires Internet Explorer 4 or greater. Please download the latest IE browser from http://www.microsoft.com/ie");
      } else {
	   alert("Toontown requires Internet Explorer.");
      }
  }
  if (!valid) {
    closeWindow();
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
    closeWindow();
    return 1;
  }
  return 0;
}
function window_onload() {
  window.focus();
  // check for a compatible OS
  if (check_OS())
      return;
  // check for a compatible browser
  if (check_browser())
      return;
  if (check_flash_version())
      return;
  // check and initialize the installer
  if(InternetExplorer()) {
    if(initActiveX() == 0) {
      showPageInParentWindow(addTTURLParams(getThisServerURL() +"ActiveXproblem.php"));
      closeWindow();
      return;
    }
    installer = installerCtrl
  } else {
    // this may not come back if the plugin needs to be installed
    if(val = initNSP())
    {
      if (val == 2)
        NSP_Installation_Failed(); // there was an error triggering the installation
      // otherwise, plugin installation has started
      return;
    }
  }
  // make sure we can create logs, no other TT is running, installer version is correct
  if(installer.InitForRun("1,0,9,10")==0) {
        showErrorPage();
	return;
  }
  initialized = 1;
  installer.setValue("SWID", getURLParam(location.search, "SWID", '&'));
  installer.setValue("DownloadServer", "localhost");
  installer.setValue("DownloadVersion", "sv1.4.1");
  installer.setValue("GameServer", "localhost");
  installer.setValue("AccountServer", "localhost");
  installer.setValue("Game1_Version", "1");
  installer.setValue("Movie_Version", "4");
  installer.setValue("Game2_Version", "1");
  installer.setValue("Messages_Version", "1");
  installer.setValue("ToonTune_Version", "1");
  // get the green
  green = getCookie("GREEN");
  if (!green) {
     green = "TEMPORARY TEST GREEN";
  }
  //if (!green) greenNotFound();
  installer.setValue("Green", green);
  referrer = getCookie("ReferrerCode");
  if (referrer) installer.setValue("ReferrerCode", referrer);
  mainLoop();
  timerID = setInterval("mainLoop()", installationPollingPeriodMs);
}
//-->
</SCRIPT>
</HEAD>
  <BODY onLoad="javascript:window_onload();" onUnload="javascript:window_onunload();" BGCOLOR="#000000" SCROLL="no">
    <SCRIPT LANGUAGE=javascript>
    <!--
    getRidOfScrollBar();
    
    if(InternetExplorer()) {
      document.writeln('<bgsound id="midisongIE" src="">');
    }
    else
    {
      document.writeln('<embed src="flash_intro.mid" hidden=true autostart=false name="midisongNS" MASTERSOUND>');
    }
    
    //-->
    </SCRIPT>
    <CENTER>
    <!-- Netscape can't set the flash movie quality on-the-fly,
         so set the quality to 'high' in Netscape so that NS users
         aren't offended by the ugly low-quality messages screen;
         IE is able to switch the quality on-the-fly.
         NOTE: DON'T set the Flash movie to automatically adjust the movie
         quality; it does a poor job, bouncing back and forth between
         high and low
    -->
    <OBJECT CLASSID="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
      CODEBASE="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"
      ID=ttmovie WIDTH=100% HEIGHT=100% VIEWASTEXT>
      <PARAM NAME="movie" VALUE="toonpreviewsite.swf">
      <PARAM NAME="play" VALUE="true">
      <PARAM NAME="quality" VALUE="high">
      <PARAM NAME="bgcolor" VALUE=#0000CC>
      <PARAM NAME="menu" VALUE="false">
      <EMBED NAME=ttmovie SRC=toonpreviewsite.swf MENU=false WIDTH=100% HEIGHT=100% PLAY=true
        SWLIVECONNECT=true QUALITY=high bgcolor=#0000CC>
    </OBJECT>
<SCRIPT LANGUAGE=javascript>
<!--
if(InternetExplorer()) {
      document.writeln('<OBJECT CLASSID="CLSID:C02226EB-A5D7-4B1F-BD7E-635E46C2288D"');
    document.writeln('CODEBASE="ttinst.cab#Version=1,0,9,10"');
  
  document.writeln('ID=installerCtrl HEIGHT=0 WIDTH=0>');
  document.writeln('</OBJECT>');
} else {
  document.writeln('<EMBED type=application/x-WDI-Toontown-Installer-ns-v11 name="ns_installer" hidden=true>');
}
//-->
</SCRIPT>
    </CENTER>
  </BODY>
</HTML>