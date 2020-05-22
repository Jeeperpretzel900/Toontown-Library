<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><title>Known Issues</title>
<meta name="robots" content="follow,noindex">
<meta http-equiv="imagetoolbar" content="no">
<link type="text/css" rel="stylesheet" href="http://play.test.toontown.com/shared/include/css/global.css">
    <script type="text/javascript">
    <!--
        
    
    
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

      var s="http://play.test.toontown.com/shared/www/collect.php?deployment=US&rand="+Math.random()+"&"+a;
      var lognum = ++logsi;
      logs[lognum%9]=new Image();
      logs[lognum%9].src=s;
    }
        //-->
    </script>

  <script type="text/javascript">
<!--

function popWin (name) {

  logit("NAME", "CLICKTHRU-POPUP", "t", name);
  
  if (name == "WHATISGAMECARD") {
    window.open("http://play.test.toontown.com/popups/gameCardWhatIsMain.php","whatisgamecard","width=700,height=450,resizable=0");
  } else if (name == "GAMECARDHELP") {
    window.open("http://play.test.toontown.com/popups/gameCardHelpFrameset.html","gamecardhelp","width=518,height=420,resizable=1");
  } else if (name == "WHATISCOGBUCKS") {
    window.open("http://play.test.toontown.com/popups/cogBucksWhatIsMain.php","whatiscogbucks","width=700,height=450,resizable=0");
  } else if (name == "WHATISGUESTPASS") {
    window.open("http://play.test.toontown.com/popups/guestPassWhatIsMain.php","whatisguestpass","width=700,height=450,resizable=0");
  } else if (name == "WHATISSONYCDROM") {
    window.open("http://play.test.toontown.com/popups/sonyCDWhatIsMain.php","whatissonycdrom","width=710,height=450,resizable=0");
  } else if (name == "FINDGAMECARD") {
    window.open("http://www.usa.att.com/webcents/disneystoontown_home.jsp","findgamecard","resizable=1,scrollbars=1,menubar=1,toolbar=1,location=1,status=1,directories=1");
  }


}

function popNews(url) {
  _news_popup = window.open("/frontPageArticle.php?articleID=" + url, "news","width=470,height=400,resizable=0,scrollbars=1");
  _news_popup.focus();
}

//-->
</script>

  <script type="text/javascript" src="http://a.disney.go.com/detect/scripts/master_flash_writer.js"></script>
    <script type="text/javascript">
        <!--
    headerPromoRight_Reg=new Image();
    headerPromoRight_Reg.src="/shared/images/topnav/hdrPromoRight_reg.gif";
    headerPromoRight_Over=new Image();
    headerPromoRight_Over.src="/shared/images/topnav/hdrPromoRight_over.gif";
    headerSubscribeRight_Reg=new Image();
    headerSubscribeRight_Reg.src="/shared/images/topnav/hdrSubscribeRight_reg.gif";
    headerSubscribeRight_Over=new Image();
    headerSubscribeRight_Over.src="/shared/images/topnav/hdrSubscribeRight_over.gif";
    headerTrialRight_Reg=new Image();
    headerTrialRight_Reg.src="/shared/images/topnav/hdrFreeTrial_reg.gif";
    headerTrialRight_Over=new Image();
    headerTrialRight_Over.src="/shared/images/topnav/hdrFreeTrial_over.gif";
    headerDownloadRight_Reg=new Image();
    headerDownloadRight_Reg.src="/shared/images/topnav/hdrDownloadRight_reg.gif";
    headerDownloadRight_Over=new Image();
    headerDownloadRight_Over.src="/shared/images/topnav/hdrDownloadRight_over.gif";

    function img_over(imgName){
      imgOn=eval(imgName + "_Over.src");
      document [imgName].src=imgOn;
    }
    function img_reg(imgName){
      imgOn=eval(imgName + "_Reg.src");
      document [imgName].src=imgOn;
    }
    -->
    </script>
    </head>
<body id='us' onLoad="" onUnload=""  bgcolor="#ff6633" style="margin-top:0;margin-bottom:0;" >

    <table width="770" cellspacing="0" cellpadding="0" border="0" align="center">
      <tr bgcolor="#FFAA88" height="50">
        <td colspan="2"><font face="arial,helvetica" size="3"><center><b>This is the Toontown Test Server.</b><br>
        If you are here by mistake, please <A href="http://play.toontown.com/">Play Toontown Here</a> instead.</font></td>
      </tr>
    </table>


    


  
    <table width="770" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center">
      <tr>
        <td colspan="5">
        <!--Begin Header-->
        <table cellspacing="0" cellpadding="0" border="0" align="center">
          <tr>
            <td><a href='http://play.test.toontown.com/store/index.php'><img src="/shared/images/topnav/customTshirtPromo.gif" width="133" height="109" alt="Custom T-Shirt Promo" border="0"></a><br></td>
                      <td><a href="http://play.test.toontown.com/news.php"><img src="/shared/images/topnav/hdrCenterLogo.gif" width="516" height="109" alt="Disney's Toontown Online" border="0"></a></td>

                          <td><a href="https://account.test.toontown.com/webPlay.php"><img name="headerPromoRight" src="/shared/images/topnav/hdrPromoRight_reg.gif" width="121" height="109" alt="Play Now!" border="0" onMouseover="img_over('headerPromoRight');" onMouseout="img_reg('headerPromoRight');"></a></td>

            
          
          </tr>
          <tr>
            <td colspan="3"><img src="/shared/images/topnav/hdrSepStrip.gif" width="770" height="23" alt="Are You Toon Enough?" border="0"></td>
          </tr>
        </table>
        <!--End Header-->
        </td>
      </tr>
      <tr>
          <td width="154" valign="top" align="center">
          <script type="text/javascript">
          <!--
            flashObj=new FlashObj(
              "/shared/images/flash/leftnav.swf?exitSignUpUrl=http://play.test.toontown.com/news.php&amp;navXML=http://play.test.toontown.com/shared/include/xml/nav.xml?v=4b&amp;username=&amp;baseplayurl=http://play.test.toontown.com/&amp;baseaccounturl=https://account.test.toontown.com/&amp;exitSignUpHbx=leftnav_exitsignup&amp;baseHbx=&amp;memberServicesUrl=MEMBERSERVICES&amp;emailPrefUrl=http://play.test.toontown.com/unavailableOnTestServer.php&amp;changePwdUrl=http://play.test.toontown.com/unavailableOnTestServer.php&amp;memberInfoUrl=http://play.test.toontown.com/unavailableOnTestServer.php&amp;billingInfoUrl=http://play.test.toontown.com/unavailableOnTestServer.php&amp;", // swf
              "154", //width
              "1050", // height
              "#ffffff", // background
              "", // version
              "tt_nav", // id
              "menu=false"
              );
            flashObj.render();
          -->
          </script>
        </td>

     <td width="14" style="border-left:1px solid #000000;" rowspan="2">&nbsp;</td>
     <td width="434" rowspan="1" valign="top">
     <!--End Mid Content-->

<table width=434 border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td>
      <br>
      <center><img src="/shared/images/headers/knownIssues.gif" width="298" height="42"></center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p> Here are a few issues (bugs) that are under investigation.
        <br>
        <br>  
        <li><b>If you receive a "Page Cannot Be Displayed" message when starting Toontown on the PC, please update your browser to Internet Explorer version 6.0 or above now. We are aware of a scripting issue in older browser versions.</b>
            <p>If you receive a "Page Cannot Be Displayed" message when starting Toontown, please <a href="/shared/www/inter.php?site=http://www.microsoft.com/windows/ie/default.asp" target="_blank">update</a> your browser to Internet Explorer version 6.0 or above now. We are aware of a scripting issue in older browser versions.</p>
        <li><b>Random video graphics problems</b> 
      <p> If you see many polygons being drawn in completely random places turning
        Toontown into an inscrutable collage, first check with your graphics driver
        manufacturer's website to make sure you have their latest video driver installed. <B>Windows
        2000/XP users, please install the latest MS Service Pack for your OS </B> (available <a href="http://windowsupdate.microsoft.com">here</a>).
        Please visit our <a href="/faq/graphicsDrivers.php">graphics driver</a> page
        to update your drivers. If installing all of these fails to correct your problem,
        please run C:\windows\system\dxdiag.exe (or c:\winnt\system32\dxdiag.exe),
        click 'save all info',and send the resulting text file along with screen capture
        images (press F9 in-game) demonstrating the problem to <a href="mailto:toontown@disneyonline.com">
        toontown@disneyonline.com      </a>. </p>
      <li><strong>I have difficulty updating my credit card information. What should
          I do?</strong><br>
        <p>We are aware of the issue, please try an alternate credit card. This issue
          appears to happen when we are unable to charge your credit card for a significant
          period of time. </p>
        <li><p><strong>I'm exiting Toontown and it takes me to the &quot;Report A Bug&quot; page.</strong></p></li>
      </li>
      <p>This is a known issue that we are looking into and a patch will be downloaded
          in an upcoming release.</p>
      </li>
      <li>
      <b>Black Screen instead of Login Screen</b>
      <p>
      We are investigating reports of a Toontown startup problem where only a mouse
        cursor is displayed over a black screen when you should see the Toontown login
        screen. We believe this is not a graphics problem but a case of the Toontown
        program waiting for a message from our servers. If you see this problem and
        Toontown fails to respond for over a minute, please hit Alt-F4 to exit, and
        immediately submit a bug report. It is possible that simply restarting Toontown
        at that point will work properly. If this is the case, or if you perform some
        other action such as rebooting or installing new drivers/uninstalling and reinstalling
        Toontown that causes this problem to no longer appear, we would like to hear
        about it on the bug report page. Switching to a less populated district after
        you log in successfully may lessen the chance of this occurring when you restart
        the game.
      </p>
      </li>

      <li>
      <b>Memory Leak</b>
      <p>
      After playing for an extended period you may notice that the hard disk drive is being accessed often
      ("thrashing"), and the game gets slower and slower.  Toontown currently has a problem "leaking" memory,
      which causes it to use progressively more memory over time, which eventually causes the OS to 'swap' RAM to disk
      in an attempt to allocate more.  If you experience signs of this, we suggest you exit and restart the game immediately
      (using Alt-F4 if necessary).
      </p></li>

      <li>
      <b>Mouse Cursor Problems</b>
      <p>
      If you have an ATI card, are running Win2000 or WinXP, and see a black square instead of a cursor, this is due to an ATI driver problem.  If your cursor flickers or flashes on and off as you move it across the screen, this is also a video driver problem.  Please download the latest video driver from your card manufacturer.
      </p></li>

      <li>
      <b>Transparency Problems</b>
      <p>
      Sometimes you will notice a 'black' background behind items such as the snowflake, or things like mist clouds will partially disappear when you get close to them or look at them from certain angles.
      </p></li>
      <li>
      <b>Camera Shaking</b>
      <p>
      In certain locations the viewpoint will bounce back and forth between two positions very quickly, causing an 'earthquake' effect on the screen.<br><br>
      <li><b>I'm an International user and I would like to sign up but I can't find anywhere to input my billing information!</b></li>
      <p>
      Thank you for your interest in Disney's Toontown Online! We are working hard to bring Toontown to your country very soon. </li>
      <p> <br>
      </p>
      <p>&nbsp; </p>
      </li>

      </ul>
    </td>
  </tr>
</table>


    <!--End Mid Content-->
        </td>
        <td width="14" style="border-right:1px solid #000000;" rowspan="2">&nbsp;</td>
     <td width="154" rowspan="1" valign="top" align="center">
       <img src="/shared/images/rightnav/tt_tab_toonsworldunite.gif" width="154" height="15" alt="Toons of the World Unite!">
       <br>
       <script type="text/javascript">
       <!--
         flashObj=new FlashObj(
           "/shared/images/flash/topToons.swf?theDate=04062009&amp;topToonURL=/shared/images/dynamic/topToonImages/2009_04_06_small/&amp;imageBaseURL=/shared/images&amp;moreTopToonsURL=http://play.test.toontown.com/topToons.php&amp;imageFileURL=/dynamic/topToonImages/2009_04_06_small/", // swf
           "154", //width
           "330", // height
           "#ffffff", // background
           "", // version
           "top_toons", // id
           "menu=false"
           );
         flashObj.render();
       -->
       </script>
       <br>
       <img src="/shared/images/castyourvote.gif" width="154" height="65" alt="Cast your VOTE!">
       <br>
       <script type="text/javascript">
       <!--
         flashObj=new FlashObj(
           "/shared/images/flash/poll_small.swf?basePollPath=/shared/www/&amp;pollId=368&amp;alreadyAnswered=false&amp;pollType=undefined", // swf
           "154", //width
           "208", // height
           "#ffffff", // background
           "", // version
           "poll_small", // id
           "menu=false"
           );
         flashObj.render();
       -->
       </script>
       <br>

      </td>
    </tr>
    <tr><td colspan="5"><img src="/shared/images/lines.jpg" width="770" height="12" alt="" border="0"></td></tr>
      <tr><td colspan="5" align="center">

<script type="text/javascript">
<!--
var legalFooterColor="#0000ff";
var legalFtrLine1="<div style='font-weight: bold;'>Disney's Toontown Online</div>";
var legalFtrOpts=["Member/Guest Services","http://play.test.toontown.com/unavailableOnTestServer.php","Help","http://play.test.toontown.com/faq/","Contact Us","http://apps.disneyblast.go.com/cgi-bin/mail/generic_mail.cgi?template=toontown/toonhelp.tpl"]
var legalFtrCpyRgt='<div style="font: verdana, arial, helvetica, sans-serif 1pt; color:#000000;"><a href="http://play.test.toontown.com/memberAgreement.php">Member Agreements</a>&nbsp;|&nbsp;<a href="http://home.disney.go.com/guestservices/netiquette">House Rules</a><br>&copy; Disney. All rights reserved.</div>';
-->
</script>
<div id="tt_footer" align="center">
  <script type="text/javascript" src="http://a.disney.go.com/globalmedia/legal_footer/legalfooter.js"></script>
</div>
      </td></tr>
    </table>
  <!-- BEGIN DOL Web Analytics 1.0 -->
  <script type="text/javascript" src="http://aglobal.go.com/stat/dolWebAnalytics.js"></script>
  <script type="text/javascript">
    <!--
    cto=new CTO();
    cto.h.mlc='/Toontown/US/Beta/PROSPECT/';
    cto.h.pageName='_knownIssues';
    cto.registrationStatus='prospect';
    cto.genre='us';//country
    cto.account='toontown';
    cto.category='dgame';
    cto.site='tnt_beta';
    cto.siteSection='website';
    cto.pageName='knownissues';
    cto.contentType='regular';
    cto.property='tnt';
    cto.track();
    -->
  </script>
  <!-- END DOL Web Analytics 1.0 -->
</body></html>
