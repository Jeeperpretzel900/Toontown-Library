<HTML>
<HEAD>

  


<SCRIPT ID=clientEventHandlersJS LANGUAGE=javascript src="http://ukplay.german.toontown.com/shared/include/js/ttLauncherLibv2.php">
</SCRIPT>
</HEAD>


<BODY onload="window_onLoad()" leftmargin="0" topmargin="0" bgcolor="795891" background="images/bgslice.gif">
<link rel="stylesheet" href="toontown.css" type="text/css">
<table width=760 background="images/bgslice.gif" bgcolor="795891">
<tr><td valign=middle align=center>

	<table width=100% border=0 cellspacing=0 cellpadding=0>
	<tr><td align=left valign=middle>
			<!-- positioning tables -->
<div id=waiting style="position:absolute; top:30; left:40;">
<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
        codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
 	WIDTH="140" HEIGHT="40" id="waiting" ALIGN="">

	<PARAM NAME=movie VALUE="images/waiting.swf">
	<PARAM NAME=quality VALUE=high> 
	<PARAM NAME=wmode VALUE=transparent>

	<EMBED src="images/waiting.swf" 		
		quality=high wmode=transparent  
		WIDTH="140" HEIGHT="40" NAME="flippy" ALIGN=""
 		TYPE="application/x-shockwave-flash" 
		PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"
		swLiveConnect="true">
	</EMBED>
</OBJECT>
</div>

	</td>
	</tr>
	</table>

</td></tr>
</table>
<SCRIPT LANGUAGE="Javascript">

  //
  // Write out the ActiveX so we have something to init
  //
  embedInstaller();
  


  //
  // Callback after the page has been loaded
  //


    function window_onLoad() {
    setDeployment('TOnlineDE');
    setTargetURL('ACTIVEXINITFAIL',    'http://www.toontown-online.de/ProblemDownloadingToontownInstaller.jsp');
    setTargetURL('HARDWARECHECKFAIL',  'http://www.toontown-online.de/reportaproblem.jsp');
    setTargetURL('HARDWARECHECKOK',    'http://www.toontown-online.de/hardwaresuccess.jsp?DESTINATION_URL=http://god.t-online.de/toontown/src/action_pages/tt_register.aspx');
    setTargetURL('GRAPHICSCHECKFAIL',  'http://www.toontown-online.de/gamefail.jsp');
    performHardwareCheck();
  }
  
</SCRIPT>



</BODY>
</HTML>




