<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML XMLNS:IE>
<HEAD>
<META HTTP-EQUIV="imagetoolbar" CONTENT="no">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<TITLE>Toontown News</TITLE><SCRIPT language="Javascript">
<!--

var logs=new Array();
var logsi=0;

function logit(){
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

  var s="http://play.test.toontown.com/shared/www/collect.php?rand="+Math.random()+"&"+a;
  var lognum = logsi++;
  logs[lognum%9]=new Image();
  logs[lognum%9].src=s;
}

//-->
</SCRIPT>

  <SCRIPT language="Javascript">
<!--

function popWin (name) {
  if (name == "WHATISGAMECARD") {
    window.open("http://play.test.toontown.com/popups/gameCardWhatIsMain.php","gamecard","width=700,height=450,resizable=0");
  } else if (name == "GAMECARD") {
    window.open("http://play.test.toontown.com/popups/gameCardHelpFrameset.html","whatisgamecard","width=518,height=420,resizable=1");
  } 
}

function popNews(url) {
  window.open("/frontPageArticle.php?articleID=" + url, "news","width=455,height=400,resizable=0");
}



//-->
</SCRIPT>

      <SCRIPT language="JavaScript">

        headerPromoRight_Reg = new Image();
        headerPromoRight_Reg.src = "http://play.test.toontown.com/shared/images/topnav/hdrPromoRight_reg.gif";

        headerPromoRight_Over = new Image();
        headerPromoRight_Over.src = "http://play.test.toontown.com/shared/images/topnav/hdrPromoRight_over.gif";

        headerSubscribeRight_Reg = new Image();
        headerSubscribeRight_Reg.src = "http://play.test.toontown.com/shared/images/topnav/hdrSubscribeRight_reg.gif";

        headerSubscribeRight_Over = new Image();
        headerSubscribeRight_Over.src = "http://play.test.toontown.com/shared/images/topnav/hdrSubscribeRight_over.gif";

        headerTrialRight_Reg = new Image();
        headerTrialRight_Reg.src = "http://play.test.toontown.com/shared/images/topnav/hdrTrialRight_reg.gif";

        headerTrialRight_Over = new Image();
        headerTrialRight_Over.src = "http://play.test.toontown.com/shared/images/topnav/hdrTrialRight_over.gif";
        
        headerDownloadRight_Reg = new Image();
        headerDownloadRight_Reg.src = "http://play.test.toontown.com/shared/images/topnav/hdrDownloadRight_reg.gif";

        headerDownloadRight_Over = new Image();
        headerDownloadRight_Over.src = "http://play.test.toontown.com/shared/images/topnav/hdrDownloadRight_over.gif";


        function img_over(imgName) {
          imgOn = eval(imgName + "_Over.src");
          document [imgName].src = imgOn;
        }

        function img_reg(imgName) {
          imgOn = eval(imgName + "_Reg.src");
          document [imgName].src = imgOn;
        }
        
        
    </SCRIPT>

    </HEAD>
<BODY onLoad="" onUnload=""  bgcolor="#FF6633" topmargin="0" marginheight="0" >

    <table width="770" cellspacing="0" cellpadding="0" border="0" align="center">
      <tr bgcolor="#FFAA88" height="50">
        <td colspan="2"><font face="arial,helvetica" size="3"><center><b>This is the Toontown Test Server.</b><br>
        If you are here by mistake, please <A href="http://play.toontown.com/">Play Toontown Here</a> instead.</font></td>
      </tr>
    </table>


    


  
    <table cellspacing="0" cellpadding="0" border="0" bgcolor="#FFFFFF" align="center">
      <tr>

      <tr>
      <tr>
          <td colspan="5">
    <!-- START HEADER -->
        <table cellspacing="0" cellpadding="0" border="0">
          <tr>
            <td><img src="http://play.test.toontown.com/shared/images/weather/weather_blizzard.gif" width="133" height="109" border="0"><br></td>
                      <td><a href="http://play.test.toontown.com/webHome.php"><img src="http://play.test.toontown.com/shared/images/hdrCenterLogo.gif" width="516" height="109" alt="" border="0"></a></td>

                          <td><a href="https://account.test.toontown.com/webWelcome.php"><img name="headerTrialRight" src="http://play.test.toontown.com/shared/images/topnav/hdrTrialRight_reg.gif" width="121" height="109" alt="" border="0" onMouseover = "img_over('headerTrialRight');" onMouseout = "img_reg('headerTrialRight');"></a></td>

                        
          
          </tr>
          <tr>
            <td colspan="3"><img src="http://play.test.toontown.com/shared/images/hdrSepStrip.gif" width="770" height="23" alt="" border="0"></td>
          </tr>
        </table>
    <!-- END HEADER -->
        </td>
      </tr>
      <tr>
          <td width="154" valign="top">
        <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,79,0"  WIDTH="154" HEIGHT="468" id="tt_nav">
         <PARAM NAME="movie" VALUE="http://play.test.toontown.com/shared/images/flash/tt_nav_prospect.swf?playUrl=javascript:window.location='https://account.test.toontown.com/webWelcome.php';&frontPageUrl=http://play.test.toontown.com/webHome.php&whatIsTTUrl=http://play.test.toontown.com/about.php&screenshotsUrl=http://play.test.toontown.com/screenshots.php&newsArchiveUrl=http://play.test.toontown.com/newsArchive.php&releaseNotesUrl=http://play.test.toontown.com/news.php&memberServicesUrl=http://play.test.toontown.com/unavailableOnTestServer.php&emailPrefUrl=https://account.test.toontown.com/webChangeEmail.php&changePwdUrl=https://account.test.toontown.com/webChangePassword.php&billingInfoUrl=http://play.test.toontown.com/unavailableOnTestServer.php&chatPrefUrl=https://account.test.toontown.com/webChangeChat.php&faqUrl=http://play.test.toontown.com/faq.php&reportProblemUrl=http://play.test.toontown.com/problem.php&exitSignUpUrl=http://play.test.toontown.com/webHome.php&seetoontownUrl=http://play.test.toontown.com/screenshots.php&sendCardUrl=http://disney.go.com/dcards/toontown/index.html&">
         <PARAM NAME="quality" VALUE="high">
         <PARAM NAME="bgcolor" VALUE="#FFFFFF">
         <PARAM NAME="base" VALUE="shared/images">
         <PARAM NAME="menu" value="false">
         <EMBED src="http://play.test.toontown.com/shared/images/tt_nav_prospect.swf?playUrl=javascript:window.location='https://account.test.toontown.com/webWelcome.php';&frontPageUrl=http://play.test.toontown.com/webHome.php&whatIsTTUrl=http://play.test.toontown.com/about.php&screenshotsUrl=http://play.test.toontown.com/screenshots.php&newsArchiveUrl=http://play.test.toontown.com/newsArchive.php&releaseNotesUrl=http://play.test.toontown.com/news.php&memberServicesUrl=http://play.test.toontown.com/unavailableOnTestServer.php&emailPrefUrl=https://account.test.toontown.com/webChangeEmail.php&changePwdUrl=https://account.test.toontown.com/webChangePassword.php&billingInfoUrl=http://play.test.toontown.com/unavailableOnTestServer.php&chatPrefUrl=https://account.test.toontown.com/webChangeChat.php&faqUrl=http://play.test.toontown.com/faq.php&reportProblemUrl=http://play.test.toontown.com/problem.php&exitSignUpUrl=http://play.test.toontown.com/webHome.php&seetoontownUrl=http://play.test.toontown.com/screenshots.php&sendCardUrl=http://disney.go.com/dcards/toontown/index.html&" quality=high bgcolor="#FFFFFF"  WIDTH="154" HEIGHT="468" NAME="tt_nav" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="https://www.macromedia.com/go/getflashplayer"></EMBED>
        </OBJECT>

        <center>
          <img src="http://play.test.toontown.com/shared/images/logos/webbyAward.gif" width="119" height="79" alt="" border="0">
          <font size="-10"><br><br></font>
          <img src="http://play.test.toontown.com/shared/images/logos/csrAward.gif" width="110" height="110" alt="" border="0">
        </center>

        </td>
        <td width="14" background="http://play.test.toontown.com/shared/images/lineLeft.gif" rowspan="2">&nbsp;</td>
          <td width="434" rowspan="1" valign="top"><!-- START MIDDLE CONTENT -->
    

<!-- START MIDDLE CONTENT -->
<table cellspacing="0" cellpadding="0" border="0" width="434">

 <tr>
    <td width="224" align="center" valign="top"><p align="justify">
      <font face="arial,helvetica" size="2">
      <br><img src="http://play.test.toontown.com/shared/images/subheaders/halloweenHauntings.gif" width="220" height="41" border="0">
      <br>
        The next cattlelog you receive will contain Halloween themed goodies -- decorate your house with creepy
        crawly wallpaper and Jack-o-Lanterns, dress up in spooky clothes, or sneak up on your friends and say Boo!
        or Happy Haunting!

        <br><br>These items will be offered for a limited time only and will not be available on backorder.
        Start saving those Jellybeans and get ready for a Toontastic Halloween!

      </font> </p>
    </td>
    <td width="210" align="center"><br><img src="http://play.test.toontown.com/shared/images/billboards/halloweenHauntings.jpg" width="200" height="180" border="0"><br>
    </td>
 </tr>

<tr>
  <td colspan="2">
    <br>
  </td>
</tr>



<tr><a name="comingsoon">
  <td colspan="2" align="center">
    <img src="http://play.test.toontown.com/shared/images/comingsoonTXT.jpg" width="253" height="90" alt="" border="0">
  </td>
</tr>
<tr>
  <td colspan="2">
      <br>
    <font face="arial,helvetica" size="2">
    <a href="comingSoon_1_1.php">Issue #1: Cogs Invade Toontown, Toon HQ to Add Leader Board</a><br>
    <a href="comingSoon_2_1.php">Issue #2: New Trolley Stop Opens - Toons Catch Fruit, Earn Beans</a><br>
    <a href="comingSoon_3_1.php">Issue #3: Toons Get Animated</a><br>
    <a href="comingSoon_4_1.php">Issue #4: New Homes for Toons - No Cogs Allowed</a><br>
    <a href="comingSoon_5_1.php">Issue #5: Experts Help New Toons</a><br>
    <a href="comingSoon_6_1.php">Issue #6: Extra! Extra! Read All About It!</a><br>
    <a href="comingSoon_7_1.php">Issue #7: Count Your Beans And Get The New Goods!</a><br>
    </font>
      <br><br>
  </td>
</tr>


<tr><a name="backstage">
  <td colspan="2" align="center">
    <img src="http://play.test.toontown.com/shared/images/backstageTXT.jpg" width="222" height="90" alt="" border="0" vspace="5">
  </td>
</tr>
<tr>
  <td colspan="2">
    <br>
    <font face="arial,helvetica" size="2">
    <a href="backStage_1_1.php">Issue #1: Cog HQ Construction Breaks Ground</a><br>
    <a href="backStage_2_1.php">Issue #2: Toon Estates to Open - Start Saving Beans</a><br>
    <a href="backStage_3_1.php">Issue #3: Attention Shoppers - Catalogs are Coming</a><br>
    <a href="backStage_4_1.php">Issue #4: New Fish Species Migrating to Toontown</a><br>
    <a href="backStage_5_1.php">Issue #5: Cog Headquarters Part II</a><br>
    </font>
    <br><br>
  </td>
</tr>



</table>

<!-- END MIDDLE CONTENT -->


    <!-- END MIDDLE CONTENT -->
        </td>
        <td width="14" background="http://play.test.toontown.com/shared/images/lineRight.gif" rowspan="2">&nbsp;</td>

    
        <td width="154" rowspan="2" valign="top">
          <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"   codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,79,0"  WIDTH="154" HEIGHT="190" id="seeTT">
          <PARAM NAME="movie" VALUE="http://play.test.toontown.com/shared/images/seeTT_Ad.swf?playUrl=javascript:window.location='https://account.test.toontown.com/webWelcome.php';&frontPageUrl=http://play.test.toontown.com/webHome.php&whatIsTTUrl=http://play.test.toontown.com/about.php&screenshotsUrl=http://play.test.toontown.com/screenshots.php&newsArchiveUrl=http://play.test.toontown.com/newsArchive.php&releaseNotesUrl=http://play.test.toontown.com/news.php&memberServicesUrl=http://play.test.toontown.com/unavailableOnTestServer.php&emailPrefUrl=https://account.test.toontown.com/webChangeEmail.php&changePwdUrl=https://account.test.toontown.com/webChangePassword.php&billingInfoUrl=http://play.test.toontown.com/unavailableOnTestServer.php&chatPrefUrl=https://account.test.toontown.com/webChangeChat.php&faqUrl=http://play.test.toontown.com/faq.php&reportProblemUrl=http://play.test.toontown.com/problem.php&exitSignUpUrl=http://play.test.toontown.com/webHome.php&seetoontownUrl=http://play.test.toontown.com/screenshots.php&sendCardUrl=http://disney.go.com/dcards/toontown/index.html&">
          <PARAM NAME="quality" VALUE=high>
          <PARAM NAME="bgcolor" VALUE="#FFFFFF">
          <PARAM NAME="base" VALUE="shared/images">
          <PARAM NAME="menu" value="false">
          <EMBED src="http://play.test.toontown.com/shared/images/seeTT_Ad.swf?playUrl=javascript:window.location='https://account.test.toontown.com/webWelcome.php';&frontPageUrl=http://play.test.toontown.com/webHome.php&whatIsTTUrl=http://play.test.toontown.com/about.php&screenshotsUrl=http://play.test.toontown.com/screenshots.php&newsArchiveUrl=http://play.test.toontown.com/newsArchive.php&releaseNotesUrl=http://play.test.toontown.com/news.php&memberServicesUrl=http://play.test.toontown.com/unavailableOnTestServer.php&emailPrefUrl=https://account.test.toontown.com/webChangeEmail.php&changePwdUrl=https://account.test.toontown.com/webChangePassword.php&billingInfoUrl=http://play.test.toontown.com/unavailableOnTestServer.php&chatPrefUrl=https://account.test.toontown.com/webChangeChat.php&faqUrl=http://play.test.toontown.com/faq.php&reportProblemUrl=http://play.test.toontown.com/problem.php&exitSignUpUrl=http://play.test.toontown.com/webHome.php&seetoontownUrl=http://play.test.toontown.com/screenshots.php&sendCardUrl=http://disney.go.com/dcards/toontown/index.html&" quality=high bgcolor="#FFFFFF"  WIDTH="154" HEIGHT="190" NAME="seeTT" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>
          </OBJECT><br><br>
          
                      <a href="http://play.test.toontown.com/unavailableOnTestServer.php" onClick="logit('NAME', 'CLICKTHRU', 'name', 'rightNavPurchaseAd');"><img src="http://play.test.toontown.com/shared/images/billboards/greatDeals.gif" width="153" height="275" alt="" border="0"></a>          
          
        </td>

          </tr>
      <tr><td colspan="5"><img src="http://play.test.toontown.com/shared/images/lines.jpg" width="770" height="12" alt="" border="0"></td></tr>

      <tr><td colspan="5" align="center"><CENTER>

         <font face="verdana, arial, helvetica, sans-serif" size="2" color="#FFFFFF">
         <p>
         
         <a href="http://apps.disneyblast.go.com/cgi-bin/mail/generic_mail.cgi?template=toontown/toonhelp.tpl" target=_blank>Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://disney.go.com/corporate/legal/wdig_privacy.html" target="_top"><b>UPDATED Privacy Policy</b></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://disney.go.com/legal/internet_safety.html">Internet Safety</a></font><br>
         <font face="verdana, arial, helvetica, sans-serif" size="1" color="#000000">Use of this site signifies your agreement to the <a href="http://disney.go.com/legal/conditions_of_use.html">terms of use</a>.<br>
         <a href="http://play.test.toontown.com/memberAgreement.php">Member Agreement</a>&nbsp|&nbsp<a href="http://disney.go.com/guestservices/netiquette.html">House Rules</a>
         <br>
           &copy; Disney. All rights reserved.</p>
        </font></CENTER>

      </td></tr>

    </table>

    </BODY></HTML>