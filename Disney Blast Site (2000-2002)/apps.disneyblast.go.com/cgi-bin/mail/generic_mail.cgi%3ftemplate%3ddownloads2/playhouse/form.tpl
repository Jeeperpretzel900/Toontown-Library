<HTML>
<head>
	<title>Preschool Time Online: Report An Issue</title>
	<meta NAME="ROBOTS" Content="NOINDEX, NOFOLLOW">
	<meta name="AUTHOR" content="DOL PREMIUM PRODUCTS">


	<META NAME="fields" CONTENT="Category_Message,subject,evening_phone,weekend_phone,connection_speed,amount_memory,E-Mail,processor_type,browser_software,OS,Name,last_name,member,day_phone,comments_or_questions">
	<!-- This tag defines the location a template file that contains the error text that is inserted at the top of the original email template. -->
	<META NAME="error_copy" CONTENT="downloads2/playhouse/error.tpl">

	<script language="JavaScript">
	<!--

	function win(URL) {
	   win1 = window.open(URL, "frame1","scrollbars=no,resizable=no,width=640,height=460");
	}

	function put() {
	   option=document.forms[0].Category_Message.options[document.forms[0].Category_Message.selectedIndex].text;
	   txt=option;
	   document.forms[0].subject.value="Playhouse Preschool Time Online - "+txt;
	}

	// -->
	</script>

	<!-- START CSS EXTERNAL -->
	<link rel="stylesheet" type="text/css" href="http://playhouse.go.com/v1/global/css/forms.css">
	<!-- END CSS EXTERNAL -->

	<!-- script language="javascript" src="http://playhouse.go.com/v1/parents/javascript/getxml.js"></script -->
	<!-- START CHROME BREADCRUMB -->
	<script language="javascript" src="http://playhouse.go.com/v1/global/js/reportbug_breadcrumb.js"></script>
	<!-- END CHROME BREADCRUMB -->

	<!-- START COLLECT FUNCTIONAL INFORMATION -->
	<script language="javascript" type="text/javascript">
	// collect gm info
	//###################### SETUP INFORMATION ##############################
	//alert("Starting script");
	var siteName="PlayhouseDisney";
	var mainExeUrl="/v1/builds/PlayhouseInstall1.0.14.exe"
	var hasDSInstalled = false; //this variable means that 1) DS is installed and 2) Playhouse site is set up
	var DigstreamClientVersion = 0;
	hasGMInstalled = false;
	PtoInstalled = false;
	function manager_OnError(errorCode) {
		//alert("GM Error Code: " + errorCode);
		userinfomsg += "!!!! GM Error Code: " + errorCode+"\n";
	}
	function errorReport(errormsg){
		//alert("errorReport: " + errormsg)
		if(errormsg == "Automation server can't create object"){
			if(hasDSInstalled == false){
				hasGMInstalled = false;
			}else{
				hasDSInstalled = false;
			}
			if(dsStatusChecked){
				clearInterval(chkDSPHDInterval)
				chkDSPHDInterval = setInterval('chkDSPHDInstall()', 5000);
			}
		}else{
			userinfomsg +="!!! javascript error: " + errormsg;
		}
		return true
	}
	function getCookieValue(cookieName) {
		thisCookie = document.cookie.split("; ")
    	for (i=0; i<thisCookie.length; i++) {
        	if (cookieName == thisCookie[i].split("=")[0]) {
        		return thisCookie[i].split("=")[1]
        	}
    	}
		return null; //default value
	}
	//window.onerror=errorReport
	var userinfomsg = "";
	//###################### BROWSER INFORMATION ###########################
	// collect basic user info
	userinfomsg += "\nSWID: " + getCookieValue("SWID") + "\n";
	userinfomsg += "appName: " + navigator.appName + "\n";
	userinfomsg += "appVersion: " + navigator.appVersion + "\n";
	userinfomsg += "platform: " + navigator.platform + "\n";
	userinfomsg += "userAgent: " + navigator.userAgent + "\n";
	//###################### BROWSER INFORMATION END, FLASH INFORMATION ####
	// collect flash info
	//alert("Flash info script");
	var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;
	if(window.ActiveXObject && isWin){
		try{
			flash= new ActiveXObject("ShockwaveFlash.ShockwaveFlash");
			flashversion=flash.GetVariable("$version")
		}catch(ex){
			userinfomsg += "Flash: !!! unable to create flash object\n";
		}
	}else{
		if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
			var swVer2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
			flashversion = navigator.plugins["Shockwave Flash" + swVer2].description;
		}
	}

	userinfomsg += "flashVersion: " + flashversion + "\n";
	//###################### FLASH INFORMATION END ##############################

/*
	// collect digstream info
	//###################### DS BASE INFORMATION ##############################
	if(window.ActiveXObject){
		try{
			//alert("Creating DS");
			dsObj = new ActiveXObject("Locator.DIGStreamClientInfo.1");
			userinfomsg += "DigStream is installed\n";
			userinfomsg += "DigStream client version: "+ dsObj.GetClientVersion()+"\n";
			userinfomsg += "DigStream clientId: "+ dsObj.GetClientID()+"\n";

			if(dsObj.GetSiteStatus(siteName) != "Unsubscribed"){
				PtoSiteStatus = dsObj.GetSiteStatus(siteName);
				userinfomsg += "DigstreamSiteStatus: " + PtoSiteStatus + "\n";
				hasDSInstalled=true;
			}else{
				userinfomsg += "DigstreamSiteStatus: not installed (although DigStream itself is installed)\n";
			}
		}catch(e){
			userinfomsg += "DigStream is not installed; error name: "+e.name+"; error message: "+e.message+"\n";
		}
	}else{
		userinfomsg += "DigStream: Browser does not support ActiveX\n";
	}

	//###################### GM INSTALL CHECK ##############################
	if(window.ActiveXObject){
		try{
			//alert("Creating Manager");
			new ActiveXObject("DIGGameManager.GameManagerCtrl.1");
			hasGMInstalled=true
		}catch(o){
			userinfomsg += "Game Manager: Unable to initialize Game Manager\n";
		}
	}else{
		userinfomsg += "Game Manager: Browser does not support ActiveX\n";
		hasGMInstalled = false;
		PtoInstalled = false;
	}
	*/

	// dsSiteStatus codes
	FSGetStatusCodes = new Array();
	FSGetStatusCodes[0] = "ERROR";
	FSGetStatusCodes[1] = "STATUS_IN_CACHE";
	FSGetStatusCodes[2] = "STATUS_DOWNLOADING";
	FSGetStatusCodes[3] = "STATUS_IN_QUEUE";
	FSGetStatusCodes[4] = "STATUS_DOWNLOAD_ERROR";
	FSGetStatusCodes[5] = "STATUS_DELETED_SINGLE_DOWNLOAD";

	function dumpAssetStatus(fileUrl){
			//alert("dumpAssetStatus: "+fileUrl);
		prefix="\t"+fileUrl+": ";
		document.DIGStreamFileStatus.SetSite(siteName);
		document.DIGStreamFileStatus.SetURL(fileUrl);
		try{
			PtoStatus = document.DIGStreamFileStatus.GetStatus();
		}catch(error){
			userinfomsg += prefix+"DigstreamGetStatus: Exception generated; name: "+error.name+"; message: "+error.message+"\n";
			PtoStatus = 0;
		}
		userinfomsg += prefix+"DigstreamGetStatus: " + FSGetStatusCodes[PtoStatus] + "\n";
		if(PtoStatus != 0 && PtoStatus != "0"){
			PtoIsInCache = document.DIGStreamFileStatus.IsInCache();
			userinfomsg += prefix+"DigstreamIsInCache: " + PtoIsInCache + "\n";
			PtoDownloadProgress = document.DIGStreamFileStatus.GetDownloadProgress();
			userinfomsg += prefix+"DigstreamGetDownloadProgress: " + PtoDownloadProgress + "\n";
			PtoGetQueuePosition = document.DIGStreamFileStatus.GetQueuePosition();
			userinfomsg += prefix+"DigstreamGetQueuePosition: " + PtoGetQueuePosition + "\n";
			PtoGetDownloadRate = document.DIGStreamFileStatus.GetDownloadRate()
			userinfomsg += prefix+"DigstreamGetDownloadRate: " + PtoGetDownloadRate + "\n";
		}
	}
	function dumpCategory(category){
			//alert("dumpCategory: "+category);
		assetlist=document.DIGStreamLocator.GetAssetsByCategory(siteName, category);
		userinfomsg += "category "+category+": "+assetlist+"\n";
		if(assetlist.length>0){
			assets=assetlist.split(",");
			for(var i=0;i<assets.length;i++){
				if (assets[i] != "" && assets[i].replace(/ /g,"") != "") {
					dumpAssetStatus(assets[i]);
				}
			}/**/
		}
	}
	function getCookieVal(cookieName) {
		thisCookie = document.cookie.split("; ")
	    	for (i=0; i<thisCookie.length; i++) {
	        	if (cookieName == thisCookie[i].split("=")[0]) {
	        		return thisCookie[i].split("=")[1]
	        	}
	    	}
		return null; //default value
	}
	hasGMInstalled = true;
	hasDSInstalled = true;
	function reportStatus(){
	if(window.ActiveXObject){
		//###################### DS BASE INFORMATION ##############################
		try{
			//dsObj = new ActiveXObject("Locator.DIGStreamClientInfo.1");
			if(document.DIGStreamClientInfo.GetClientVersion() != null){
				userinfomsg += "DigStream is installed" + "\n";
			}
			userinfomsg += "DigStream client version: "+ document.DIGStreamClientInfo.GetClientVersion() + "\n";
			userinfomsg += "DigStream clientId: "+ document.DIGStreamClientInfo.GetClientID() + "\n";

			if(document.DIGStreamClientInfo.GetSiteStatus(siteName) != "Unsubscribed"){
				PtoSiteStatus = document.DIGStreamClientInfo.GetSiteStatus(siteName);
				userinfomsg += "DigstreamSiteStatus: " + PtoSiteStatus  + "\n";
				hasDSInstalled=true;
			}else{
				userinfomsg += "DigstreamSiteStatus: not installed (although DigStream itself is installed)" + "\n";
			}
		}catch(e){
			userinfomsg += "DigStream is not installed; error name: "+e.name+"; error message: "+e.message + "\n";
			hasDSInstalled = false;
		}
		try{
			//new ActiveXObject("DIGGameManager.GameManagerCtrl.1");
			//hasGMInstalled=true
			if(document.manager.GetControlVersion() != null){
				formPrint("GameManager is installed");
			}
		}catch(o){
			userinfomsg += "Game Manager: Unable to initialize Game Manager" + "\n";
			hasGMInstalled = false;
		}
	}else{
		userinfomsg += "Controls: Browser does not support ActiveX" + "\n";
		hasGMInstalled = false;
		hasDSInstalled = false;
		PtoInstalled = false;
	}
		if(hasGMInstalled){
		// more gm info
			userinfomsg += "GameManagerVersion: " + document.manager.GetControlVersion() + "\n";
			PtoInstalled = document.manager.IsGameInstalled("Playhouse");
			userinfomsg += "PtoInstalled: " + PtoInstalled + "\n";
			// more digstream info
			if(hasDSInstalled){
				PtoSubscribedCategories = document.DIGStreamLocator.GetSubscribedCategories(siteName);
				userinfomsg += "PtoSubscribedCategories: " + PtoSubscribedCategories + "\n";
				categories= PtoSubscribedCategories.split("|");
				for(var i=0;i<categories.length;i++){
					dumpCategory(categories[i]);
				}

				document.DIGStreamFileStatus.SetSite(siteName);
				var cookiestring = getCookieVal("phdgoup_files");
				if(cookiestring != null){
					userinfomsg += "PtoFiles: " + cookiestring + "\n";
					cookiearray = cookiestring.split("|");
					for(i=0; i<cookiearray.length; i++){
						dumpAssetStatus(cookiearray[i]);
					}
				}
				// end file status update
			}
		}
		//alert(userinfomsg);
		dataform.systemspec.value=userinfomsg;
	}
	</script>
	<!-- END COLLECT FUNCTIONAL INFORMATION -->
	<SCRIPT LANGUAGE="javascript" FOR="manager" EVENT="OnError(errorCode)">
		manager_OnError(errorCode);
	</SCRIPT>
</HEAD>

<body bgcolor="#FFFFFF" text="#000000" link="#000000" vlink="#000000" alink="#000000" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" onload="javascript:reportStatus()">
	<script language="javascript" type="text/javascript">
		hasGMInstalled = true;
		hasDSInstalled = true;
		if(hasGMInstalled){
			//document.write('<OBJECT id="manager" CLASSID="CLSID:CC32D4D8-2A0B-4CEB-B105-C9B968379105" height="0" width="0" codebase="http://playhouse.go.com/v1/gamemanager/DIGGameManager.cab#Version=1,2,0,0012">');
			document.write('<OBJECT id="manager" CLASSID="CLSID:CC32D4D8-2A0B-4CEB-B105-C9B968379105" height="0" width="0">');
			document.write('<PARAM name="ProductID" value="phddirect">');
			document.write('</OBJECT>');
		}

		if(hasDSInstalled){
		<!--  START DIGSTREAM OBJECTS -->
			document.write('<OBJECT id="DIGStreamClientInfo" height="0" width="0" classid="CLSID:AAF15A90-F3EC-4FEE-9A00-F65B25B83D05"></OBJECT>');
			document.write('<OBJECT id="DIGStreamFileStatus" height="0" width="0" classid="CLSID:18DBD3E9-3E6D-4878-9AB1-82B40EA0E071"></OBJECT>');
			document.write('<OBJECT id="DIGStreamLocator" height="0" width="0" classid="CLSID:AB0E6E3B-4C96-48D8-A3FF-3235B524B7F9"></OBJECT>');
		<!--  END DIGSTREAM OBJECTS -->
		}
		//alert("finished writing objects");

	</script>
<table width="770" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td>
		<!-- START CHROME -->
		<script language="javascript" src="http://disney.go.com/globalmedia/chrome/chrome.js"></script>
		<!-- END CHROME -->
		</td>
	</tr>
</table>
<table width="770" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td><img src="http://playhouse.go.com/v1/global/images/bug_header.jpg"></td>
	</tr>

	<tr>
		<td align="center">
			<table width="571" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td align="center" valign="top">
<!-- START MAIN CONTENT -->
			<FORM ID="dataform" ACTION="http://apps.disneyblast.go.com/cgi-bin/mail/generic_mail.cgi" METHOD="POST" name="form">
			<INPUT TYPE="Hidden" NAME="site" VALUE="Playhouse Disney Preschool Time">
			<INPUT TYPE="Hidden" NAME="subject" VALUE="Playhouse Disney Preschool Time">
			<INPUT TYPE="Hidden" NAME="redirect" VALUE="http://apps.disneyblast.go.com/cgi-bin/mail/generic_mail.cgi?template=downloads2/playhouse/thanks.tpl">
			<INPUT TYPE="Hidden" NAME="required" VALUE="Category_Message,E-Mail,Name,last_name,day_phone,comments_or_questions">
			<INPUT TYPE="Hidden" NAME="template" VALUE="downloads2/playhouse/form.tpl">
			<INPUT TYPE="Hidden" NAME="pass" VALUE="1">
			<INPUT TYPE="Hidden" NAME="referrer" VALUE="">
			<INPUT TYPE="Hidden" NAME="debug" VALUE="">
			<INPUT TYPE="Hidden" NAME="Info" VALUE="Information to be passed to the E-mail message.">
			<INPUT TYPE="Hidden" NAME="mail_format_template" VALUE="downloads2/playhouse/email.tpl">
			<INPUT TYPE="Hidden" NAME="email1" VALUE="techsupport@preschooltime.com">
			<INPUT TYPE="Hidden" NAME="systemspec" VALUE="">

               <table width="500" border="0" cellspacing="0" cellpadding="0" align="center">
                  <tr>
                     <td colspan="2"><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="1" height="15" alt=""></td>
                  </tr>
                  <tr>
                     <td><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="15" height="1" alt=""></td>
                     <td align="left" valign="top">
                     <font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="3" color="#000000">
                     <b>Contact Us</b><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="200" height="1" alt=""><a href="http://playhouse.go.com/v1/parents/help/index.html"><img src="http://playhouse.go.com/v1/global/images/bug_back_button.gif" width="118" height="36" alt="Back" border="0"></a>
                     </font>
                     <p align="left">
                     <font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="2" color="#000000">

                     </font>
                     </td>
                  </tr>
               </table>
			   <table border="0" cellspacing="0" cellpadding="0" height="290" align="center">
			   		<tr>
						<td>
               <table width="540" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                     <td align="center" colspan="2"></td>
                  </tr>
                  <tr>
                     <td width="40"><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="30" height="1" alt=""></td>
                     <td align="left" valign="top" width="490">
                     <font face="arial" size="2"><b>Need to report a Technical Problem? <a href="http://apps.disneyblast.go.com/cgi-bin/mail/generic_mail.cgi?template=downloads2/playhouse/formtech.tpl">Click here</a>.</b></font>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="2" width="540"><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="1" height="15" alt=""></td>
                  </tr>
               </table>
               <table width="540" border="0" cellspacing="0" cellpadding="0" align="center">
                  <tr>
                     <td width="40"><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="40" height="1" alt=""></td>
                     <td width="100" align="right"><font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="2" color="#000000">First Name:</font></td>
                     <td width="390"><input name="Name" size=25  value=""></td>
                  </tr>
				  <tr>
                     <td colspan="3" width="540"><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="1" height="8" alt=""></td>
                  </tr>
                  <tr>
                     <td width="40"><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="40" height="1" alt=""></td>
                     <td width="100" align="right"><font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="2" color="#000000">Last Name:</font></td>
                     <td width="390"><input name="last_name" size=25 value=""></td>
                  </tr>
				  <tr>
                     <td colspan="3" width="540"><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="1" height="8" alt=""></td>
                  </tr>
                  <tr>
                     <td width="40"><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="40" height="1" alt=""></td>
                     <td width="100" align="right"><font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="2" color="#000000">E-Mail:</font></td>
                     <td width="390"><input type="text" name="E-Mail" value="" size="25"></td>
                  </tr>
				  <tr>
                     <td colspan="3" width="540"><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="1" height="8" alt=""></td>
                  </tr>
                  <tr>
                     <td width="40"><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="40" height="1" alt=""></td>
                     <td width="100" align="right"><font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="2" color="#000000">Phone:</font></td>
                     <td width="390"><input name="day_phone" size=15 value=""></td>
                  </tr>
				  <tr>
                     <td colspan="3" width="540"><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="1" height="8" alt=""></td>
                  </tr>
                  <tr>
                     <td width="40"><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="40" height="1" alt=""></td>
                     <td width="100" align="right"><font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="2" color="#000000">Comment:</font></td>
                     <td width="390"><textarea name="comments_or_questions" cols="45" rows="5"></textarea></td>
                  </tr>
               </table>
			   </td>
			  </tr>
			  </table>
			<table  border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td width="540"><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="1" height="2" alt=""></td>
				</tr>
				<tr>
					<td width="540" align="center"><INPUT TYPE="image" NAME="submit" src="http://playhouse.go.com/v1/global/images/bug_send_button.gif" width="147" height="46" border="0" alt="Send"></td>
				</tr>
				<tr>
					<td width="540"><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="1" height="18" alt=""></td>
				</tr>
			</table>
			</form>
<!-- END MAIN CONTENT -->
					</td>
				</tr>
			</table>

		</td>
	</tr>
</table>
<table width="770" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td>
		<!-- START FOOTER -->
		<SCRIPT language="javascript" src="http://disney.go.com/globalmedia/legal_footer/legalfooter.js"></SCRIPT>
		<!-- END FOOTER -->
		</td>
	</tr>
	<!-- START COPYRIGHTS -->
	<tr>
		<td align="center" class="rights">
		<SCRIPT language="javascript" src="http://playhouse.go.com/v1/marketing/global/js/footer_copyrights.js"></SCRIPT>
		</td>
	</tr>
	<!-- END COPYRIGHTS -->
	<!-- START The Baby Einstein Company, LLC Copyright -->
	<tr>
		<td align="center" class="rights">
		<script language="javascript" src="http://playhouse.go.com/v1/global/js/footer_baby_einstein.js"></script>
		</td>
	</tr>
	<!-- END -->
</table>
<!-- BEGIN DOL Web Analytics 1.0 -->
<script type="text/javascript" src="http://aglobal.go.com/stat/dolWebAnalytics.js"></script>
<script type="text/javascript">
<!--
cto=new CTO();
cto.account="preschooltime";
cto.category="dgame";
cto.site="pto";
cto.siteSection="parents_corner:help:contact";
cto.pageName="contact_us";
cto.contentType="regular";
cto.track(); //Required. do not remove.
-->
</script>
<!-- END DOL Web Analytics 1.0 -->
</BODY>
</HTML>
