<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML XMLNS:IE>
<HEAD>
<META HTTP-EQUIV="imagetoolbar" CONTENT="no">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<TITLE>Toontown Official Player's Guide - Table Of Contents</TITLE>    <SCRIPT language="Javascript">
    <!--
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

      var s="http://play.test.toontown.com/shared/www/collect.php?rand="+Math.random()+"&"+a;
      var lognum = ++logsi;
      logs[lognum%9]=new Image();
      logs[lognum%9].src=s;
    }
        //-->
    </SCRIPT>

  <SCRIPT language="Javascript">
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
  } else if (name == "UKINTERSTITIAL") {
    window.open("http://play.test.toontown.com/popups/uk_popup.php","ukinterstitial","width=460,height=410,resizable=0");
  } else if (name == "FINDGAMECARD") {
    window.open("http://www.usa.att.com/webcents/disneystoontown_home.jsp","findgamecard","resizable=1,scrollbars=1,menubar=1,toolbar=1,location=1,status=1,directories=1");
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
<br />
<b>Fatal error</b>:  input in flex scanner failed in <b>/toontown/web/toontown-1600/common/www/playersguide</b> on line <b>1</b><br />
