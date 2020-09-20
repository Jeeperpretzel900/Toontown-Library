<HTML>
<HEAD>
	<title>Preschool Time Online: Report An Issue</title>
	<meta NAME="ROBOTS" Content="NOINDEX, NOFOLLOW">
	<meta name="AUTHOR" content="DOL PREMIUM PRODUCTS">


	<META NAME="fields" CONTENT="Category_Message,subject,evening_phone,weekend_phone,connection_speed,amount_memory,E-Mail,processor_type,browser_software,OS,Name,last_name,member,day_phone,comments_or_questions">
	<!-- This tag defines the location a template file that contains the error text that is inserted at the top of the original email template. -->
	<META NAME="error_copy" CONTENT="downloads2/playhouse/error.tpl">

	<script language="javascript">
	activeXChecked=false;
	function sendToActiveXPage(){
		//jump to activeX install page
		var detect = navigator.userAgent.toLowerCase();
		xp = (detect.indexOf('sv1')>-1)
		suffix=""
		if(xp){
			suffix="?xp=true"
		}
		document.location="https://register.go.com/playhouse/register/rbActiveXInstall"+suffix
	}
	function checkIfInstalled(){
		//alert("cehcking if installed");
		if(hdmanager.Init == undefined || hdmanager.getProcessList == undefined){
			//alert("Sending to the active x intall page");
			sendToActiveXPage()
		}else{
			//dataform.submitb.disabled=false;
			reportStatus();
		}
	}
	alreadyPosted=false
	function submitForm() {
		if(getCookieVal("phd_form_submitted") != "yes"){
			dataform.submit();
			alreadyPosted=true;
			document.cookie = "phd_form_submitted=yes;path=/;domain=.go.com";
		}
	}
	</script>
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
	

	<!-- START CHROME BREADCRUMB -->
	<script language="javascript" src="http://playhouse.go.com/v1/global/js/reportbug_breadcrumb.js"></script>
	<!-- END CHROME BREADCRUMB -->
 
	<!-- START COLLECT FUNCTIONAL INFORMATION -->
	<script language="javascript" type="text/javascript">
	// collect gm info
	//###################### SETUP INFORMATION ##############################
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
	userinfomsg = "";
	function print(line){
		userinfomsg+=line+"\n";
	}
	//###################### BROWSER INFORMATION ###########################
	// collect basic user info
	print("appName: " + navigator.appName);
	print("appVersion: " + navigator.appVersion);
	print("platform: " + navigator.platform);
	print("userAgent: " + navigator.userAgent);
	//###################### BROWSER INFORMATION END, FLASH INFORMATION ####
	// collect flash info
	var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;
	if(window.ActiveXObject && isWin){
		try{
			flash= new ActiveXObject("ShockwaveFlash.ShockwaveFlash");
			flashversion=flash.GetVariable("$version")
		}catch(ex){
			print("Flash: !!! unable to create flash object");
		}
	}else{
		if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
			var swVer2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
			flashversion = navigator.plugins["Shockwave Flash" + swVer2].description;
		}
	}

	print("flashVersion: " + flashversion);
	//###################### FLASH INFORMATION END ##############################

	
	if(window.ActiveXObject){
		//###################### DS BASE INFORMATION ##############################
		try{
			dsObj = new ActiveXObject("Locator.DIGStreamClientInfo.1");
			print("DigStream is installed");
			print("DigStream client version: "+ dsObj.GetClientVersion());
			print("DigStream clientId: "+ dsObj.GetClientID());

			if(dsObj.GetSiteStatus(siteName) != "Unsubscribed"){
				PtoSiteStatus = dsObj.GetSiteStatus(siteName);
				print("DigstreamSiteStatus: " + PtoSiteStatus );
				hasDSInstalled=true;
			}else{
				print("DigstreamSiteStatus: not installed (although DigStream itself is installed)");
			}
		}catch(e){
			print("DigStream is not installed; error name: "+e.name+"; error message: "+e.message);
		}
		try{
			new ActiveXObject("DIGGameManager.GameManagerCtrl.1");
			hasGMInstalled=true
		}catch(o){
			print("Game Manager: Unable to initialize Game Manager");
		}
	}else{
		print("Controls: Browser does not support ActiveX");
		hasGMInstalled = false;
		PtoInstalled = false;
	}

	//###################### GM INSTALL CHECK ##############################

	// dsSiteStatus codes
	FSGetStatusCodes = new Array();
	FSGetStatusCodes[0] = "ERROR";
	FSGetStatusCodes[1] = "STATUS_IN_CACHE";
	FSGetStatusCodes[2] = "STATUS_DOWNLOADING";
	FSGetStatusCodes[3] = "STATUS_IN_QUEUE";
	FSGetStatusCodes[4] = "STATUS_DOWNLOAD_ERROR";
	FSGetStatusCodes[5] = "STATUS_DELETED_SINGLE_DOWNLOAD";
	
	function dumpAssetStatus(fileUrl){
		prefix="\t"+fileUrl+": ";
		document.DIGStreamFileStatus.SetURL(fileUrl);
		try{
			PtoStatus = document.DIGStreamFileStatus.GetStatus();
		}catch(error){
			print(prefix+"DigstreamGetStatus: Exception generated; name: "+error.name+"; message: "+error.message);
			PtoStatus = 0;
		}
		print(prefix+"DigstreamGetStatus: " + FSGetStatusCodes[PtoStatus] );
		if(PtoStatus != 0 && PtoStatus != "0"){
			PtoIsInCache = document.DIGStreamFileStatus.IsInCache();
			print(prefix+"DigstreamIsInCache: " + PtoIsInCache );
			PtoDownloadProgress = document.DIGStreamFileStatus.GetDownloadProgress();
			print(prefix+"DigstreamGetDownloadProgress: " + PtoDownloadProgress );
			PtoGetQueuePosition = document.DIGStreamFileStatus.GetQueuePosition();
			print(prefix+"DigstreamGetQueuePosition: " + PtoGetQueuePosition );
			PtoGetDownloadRate = document.DIGStreamFileStatus.GetDownloadRate()
			print(prefix+"DigstreamGetDownloadRate: " + PtoGetDownloadRate );
		}
	}
	function dumpCategory(category){
		assetlist=document.DIGStreamLocator.GetAssetsByCategory(siteName, category);
		print("category "+category+": "+assetlist);
		if(assetlist.length>0){
			assets=assetlist.split(",");
			for(var i=0;i<assets.length;i++){
				//alert(assets[i]);
				dumpAssetStatus(assets[i]);
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
	function reportStatus(){
	//###################### HARDWARE INFORMATION ###############################
	print("FreeSpace: " + document.hdmanager.getFreeSpace() + "\n");
	print("CPUSpeed: " + document.hdmanager.getCPUSpeed() + "\n");
	print("CPUInfo: " + document.hdmanager.getCPUInfo() + "\n");
	print("RAM: " + document.hdmanager.getRAM() + "\n");
	print("AvailableRAM: " + document.hdmanager.getAvailableRAM () + "\n");
	print("Has3dHW: " + document.hdmanager.getHas3dHW());
	print("VideoCardName: " + document.hdmanager.getVideoCardName() + "\n");
	print("VideoCardRAM: " + document.hdmanager.getVideoCardRAM() + "\n");
	print("DirectXLevel: " + document.hdmanager.getDirectXLevel() + "\n");
	print("OSName: " + document.hdmanager.getOSName() + "\n");
	print("About: " + document.hdmanager.getAbout());
	print("IEVersion: " + document.hdmanager.getIEVersion () + "\n");
	print("MACAddress: " + document.hdmanager.getMACAddress() + "\n");
	print("IPAddress: " + document.hdmanager.getIPAddress() + "\n");
	print("Version: " + document.hdmanager.getVersion() + "\n");
	print("*** start process list *** \n")
	processArray = document.hdmanager.getProcessList().split(";");
	for(var i=0; i<processArray.length; i++){
		print(processArray[i] + "\n");
	}
	print("*** end process list *** \n");
	//print("getProcessList :" + document.hdmanager.getProcessList() + "\n");
	print("ProxyEnabled :" + document.hdmanager.getProxyEnabled() + "\n");
	print("Proxy :" + document.hdmanager.getProxy() + "\n");
	print("SoundCardDescription :" + document.hdmanager.getSoundCardDescription() + "\n");
	hcstatus= hdmanager.setProduct("PHO");
	print("KerioPersonalFirewall :" + hdmanager.getProductString("KerioPersonalFirewall", "ProductCode"));
	print("McAfeeFirewall :" + hdmanager.getProductString("McAfeeFirewall", "Ownership"));
	print("NortonSecurity :" + hdmanager.getProductString("NortonSecurity", "Norton Internet Security"));
		if(hasGMInstalled){
		// more gm info
			print("GameManagerVersion: " + document.manager.GetControlVersion());
			PtoInstalled = document.manager.IsGameInstalled("Playhouse");
			print("PtoInstalled: " + PtoInstalled);
			// more digstream info
			if(hasDSInstalled){
				PtoSubscribedCategories = document.DIGStreamLocator.GetSubscribedCategories(siteName);
				print("PtoSubscribedCategories: " + PtoSubscribedCategories);
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

<body bgcolor="#FFFFFF" text="#000000" link="#000000" vlink="#000000" alink="#000000" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" onload="javascript:checkIfInstalled()">
	<script language="javascript" type="text/javascript">
		if(hasGMInstalled){
			document.write('<OBJECT id="manager" CLASSID="CLSID:CC32D4D8-2A0B-4CEB-B105-C9B968379105" height="0" width="0" codebase="http://playhouse.go.com/v1/gamemanager/DIGGameManager.cab#Version=1,2,0,0012">');
			document.write('<PARAM name="ProductID" value="phddirect">');
			document.write('</OBJECT>');
		}
		if(hasDSInstalled){
		<!--  START DIGSTREAM OBJECTS -->
			//document.write('<OBJECT id="DIGStreamClientInfo" height="0" width="0" classid="CLSID:AAF15A90-F3EC-4FEE-9A00-F65B25B83D05"></OBJECT>');
			document.write('<OBJECT id="DIGStreamFileStatus" height="0" width="0" classid="CLSID:18DBD3E9-3E6D-4878-9AB1-82B40EA0E071"></OBJECT>');
			document.write('<OBJECT id="DIGStreamLocator" height="0" width="0" classid="CLSID:AB0E6E3B-4C96-48D8-A3FF-3235B524B7F9"></OBJECT>');
		<!--  END DIGSTREAM OBJECTS -->
		}
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
			<INPUT TYPE="Hidden" NAME="subject" VALUE="Playhouse Disney Preschool Time - Technical Problem">
			<INPUT TYPE="Hidden" NAME="redirect" VALUE="http://playhouse.go.com/v1/parents/helpautosubmit.html">
			<INPUT TYPE="Hidden" NAME="required" VALUE="Category_Message,E-Mail,Name,last_name,day_phone,comments_or_questions">
			<INPUT TYPE="Hidden" NAME="template" VALUE="downloads2/playhouse/formtech.tpl">
			<INPUT TYPE="Hidden" NAME="pass" VALUE="1">
			<INPUT TYPE="Hidden" NAME="referrer" VALUE="">
			<INPUT TYPE="Hidden" NAME="debug" VALUE="">
			<INPUT TYPE="Hidden" NAME="Info" VALUE="Information to be passed to the E-mail message.">
			<INPUT TYPE="Hidden" NAME="mail_format_template" VALUE="downloads2/playhouse/email.tpl">
			<INPUT TYPE="Hidden" NAME="email1" VALUE="preschooltime@disneyonline.com">
			<INPUT TYPE="Hidden" NAME="systemspec" VALUE="">

               <table width="500" border="0" cellspacing="0" cellpadding="0" align="center">
                  <tr>
                     <td colspan="2"><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="1" height="15" alt=""></td>
                  </tr>
                  <tr>
                     <td><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="15" height="1" alt=""></td>
                     <td align="left" valign="top">
                     <font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="3" color="#000000">
                     <b>Report A Bug</b><img src="http://playhouse.go.com/v1/global/images/clear.gif" width="200" height="1" alt=""><a href="http://playhouse.go.com/v1/parents/help/index.html"><img src="http://playhouse.go.com/v1/global/images/bug_back_button.gif" width="118" height="36" alt="Back" border="0"></a>
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
                     <font face="arial" size="2"><b>To better assist you with the problem you are experiencing, this form will provide 
                     us with a report about the last time you ran Preschool Time Online.</b></font>                    
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
					<td width="540" align="center"><INPUT TYPE="image" id="bsubmit" NAME="submit" src="http://playhouse.go.com/v1/global/images/bug_send_button.gif" width="147" height="46" border="0" alt="Send" DISABLE onClick="javascript:submitForm()"></td>
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
	<object id="hdmanager" classid="CLSID:352797A0-EFD0-4FA6-B229-145120EA4B8A" height="0" width="0" codebase="https://disney.go.com/games/downloads/hardwarecontrol/DIGHardwareControl.cab#Version=1,5,1,0"></object>
</table>

<!--WEBSIDESTORY CODE HBX1.0 (Universal)-->
<!--COPYRIGHT 1997-2004 WEBSIDESTORY,INC. ALL RIGHTS RESERVED. U.S.PATENT No. 6,393,479B1. MORE INFO:http://websidestory.com/privacy-->
<script SRC = "http://hb.disney.go.com/stat/hitboxcode.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
hitbox = new HB_CreateObject("/PARENTS_CORNER/HELP/CONTACT/");
hitbox.HB_PlaceAccount("DM5103120MSF93EN3","DM510612FMNS38EN3","DM51030813MR38EN3","DM5103083LCA38EN3");
hitbox.HB_PlaceName("report_bug");
hitbox.HB_render();
</script>
<!--END WEBSIDESTORY CODE-->

</BODY>

</HTML>
