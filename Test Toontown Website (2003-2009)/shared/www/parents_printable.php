<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><title>Toon Letter Creator</title>
<meta name="robots" content="follow,noindex">
<meta http-equiv="imagetoolbar" content="no">
<link type="text/css" rel="stylesheet" href="http://play.test.toontown.com/shared/include/css/global.css">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="expires" content="0">
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

  </head>
<body id='us' onLoad="" onUnload=""  bgcolor="#ffffff" style="margin-top:0;margin-bottom:0;" >

<script type="text/javascript" src="http://disney.go.com/detect/scripts/master_flash_writer.js"></script>

<div align="center">
<script type="text/javascript">
<!--
  flashObj = new FlashObj(
    "/shared/images/flash/parentsPrintable.swf", // swf
    "640", //width
    "480", // height
    "#ffffff", // background
    "", // version
    "parentsPrintable", // id
    "menu=false"
    );
  flashObj.render();
-->
</script>
</div>

<script type="text/javascript">
  <!--
 logit("NAME", "PARENTS-PRINTABLE");
  -->
</script>
<!-- BEGIN DOL Web Analytics 1.0 -->
<script type="text/javascript" src="http://aglobal.go.com/stat/dolWebAnalytics.js"></script>
<script type="text/javascript">
  <!--
  cto=new CTO();
  cto.h.mlc='/Toontown/US/';
  cto.h.pageName='_shared_www_parents_printable';
  cto.registrationStatus='';
  cto.genre='us';
  cto.account='toontown';
  cto.category='dgame';
  cto.site='tnt';
  cto.siteSection='website:shared:www';
  cto.pageName='parents_printable';
  cto.contentType='regular';
  cto.property='tnt';
  cto.track();
  -->
</script>
<!-- END DOL Web Analytics 1.0 -->
</body></html>
