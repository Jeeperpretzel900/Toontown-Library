<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Disney's Toontown Online</title>
<meta name="robots" content="follow,noindex">
<meta http-equiv="imagetoolbar" content="no">
    <!--WEBSIDESTORY CODE HBX(Global)(Universal)-->
    <!--COPYRIGHT 1997-2004 WEBSIDESTORY,INC. ALL RIGHTS RESERVED. U.S.PATENT No. 6,393,479B1. MORE INFO:http://websidestory.com/privacy-->
    <script src = "http://hb.disney.go.com/stat/hitboxcode.js" type="text/javascript"></script>
      <script type="text/javascript">
      hitbox = new HB_CreateObject("/toontown/US/PROSPECT/HOME");
      hitbox.HB_PlaceAccount("DM53030620EW42EN3","DM510612FMNS38EN3","DM51030813MR38EN3","DM5103083LCA38EN3");
      hitbox.HB_PlaceName("_red_shortcut_desktop");
    
            
    </script>
   
      

      <script type="text/javascript"> 
        hitbox.HB_render();
      </script>       
    
    <!--END WEBSIDESTORY CODE-->
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

      var s="http://play.toontown.com/shared/www/collect.php?deployment=US&rand="+Math.random()+"&"+a;
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
    window.open("http://play.toontown.com/popups/gameCardWhatIsMain.php","whatisgamecard","width=700,height=450,resizable=0");
  } else if (name == "GAMECARDHELP") {
    window.open("http://play.toontown.com/popups/gameCardHelpFrameset.html","gamecardhelp","width=518,height=420,resizable=1");
  } else if (name == "WHATISCOGBUCKS") {
    window.open("http://play.toontown.com/popups/cogBucksWhatIsMain.php","whatiscogbucks","width=700,height=450,resizable=0");
  } else if (name == "WHATISGUESTPASS") {
    window.open("http://play.toontown.com/popups/guestPassWhatIsMain.php","whatisguestpass","width=700,height=450,resizable=0");
  } else if (name == "WHATISSONYCDROM") {
    window.open("http://play.toontown.com/popups/sonyCDWhatIsMain.php","whatissonycdrom","width=710,height=450,resizable=0");
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

  </head>
<body id='us' onload="window_onLoad(); " onunload=""  bgcolor="#ffffff" style="margin-top:0;margin-bottom:0;" >

<SCRIPT ID=clientEventHandlersJS LANGUAGE=javascript src="/shared/include/js/ttLauncherLibv2.php">
</SCRIPT>


<SCRIPT LANGUAGE="Javascript">
<!--
  
  //
  // Write out the ActiveX so we have something to init, but don't include the codebase, so we don't install a version
  //
  embedInstallerWithoutCodebase();
  


  //
  // Callback after the page has been loaded
  //

  function window_onLoad() {
    var deployment = 'US';
    //alert("Cookied deployment is '" + deployment + "'");
    
    
    if (deployment.length) {
      goSomewhere(deployment);
    } else {
      deployment = getDeployment();
      goSomewhere(deployment);
    }
  }


  function goSomewhere(deployment) {
    if (deployment != 'US') {
      goToINTL();
    } else {
      goToUS();
    }
  }
  
  
  function goToINTL() {
    location.replace('');
  } 
  

  function goToUS() {
    location.replace('');
  } 
  
//-->  
</SCRIPT>


</body>
</html>