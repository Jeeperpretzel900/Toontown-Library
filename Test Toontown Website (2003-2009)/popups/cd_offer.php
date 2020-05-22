<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML XMLNS:IE>
<HEAD>
<META HTTP-EQUIV="imagetoolbar" CONTENT="no">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<TITLE>CD Offer</TITLE><SCRIPT language="Javascript">
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
    window.open("http://play.test.toontown.com/popups/gameCardWhatIsMain.php","whatisgamecard","width=700,height=450,resizable=0");
  } else if (name == "GAMECARDHELP") {
    window.open("http://play.test.toontown.com/popups/gameCardHelpFrameset.html","gamecardhelp","width=518,height=420,resizable=1");
  } else if (name == "WHATISCOGBUCKS") {
    window.open("http://play.test.toontown.com/popups/cogBucksWhatIsMain.php","whatiscogbucks","width=700,height=450,resizable=0");
  }


}

function popNews(url) {
  _news_popup = window.open("/frontPageArticle.php?articleID=" + url, "news","width=470,height=400,resizable=0,scrollbars=1");
  _news_popup.focus();
}



//-->
</SCRIPT>

  </HEAD>
<BODY onLoad="" onUnload=""  bgcolor="#FFFFFF" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" >
<script>
<!--
function gotoStore() {
  logit("NAME", "CLICKTHRU", "name", "popupCDOffer");
  window.open("http://disney.store.go.com/DSSectionPage.process?Section_Id=14385&Product_Id=152070","disney_store","");
  window.close();
}
-->
</script>

<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<title>CD Offer</title>
</head>
<!-- body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" -->

<div align="center" valign="center">
  <img src="/shared/images/400_Install_popup.jpg" width="400" height="400" usemap="#cdoffermap" border="0">
</div>

<map name="cdoffermap">
<area shape="rect" alt="Close" coords="160,342,242,369" href="javascript:window.close();">
<area shape="rect" alt="Disney Store Online" coords="0,0,400,400" href="javascript:gotoStore();">
</map>

<script>
<!--
 logit("NAME", "PLAY-INSTALLER-POPUPCDOFFER");
  -->
</script>
</BODY></HTML>