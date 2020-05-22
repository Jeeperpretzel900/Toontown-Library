<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><title>About Guest Pass</title>
<meta name="robots" content="follow,noindex">
<meta http-equiv="imagetoolbar" content="no">
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

<table cellpadding="10" cellspacing="0" border="0">
  <tr>
    <td><a name="top">
      <img src="/shared/images/billboards/guestPass.gif" width="193" height="222" alt="Guest Pass" border="0">
    </td>
    <td>
    
      <img src="/shared/images/headers/about_your_guestpass.gif" width="331" height="37" alt="About Your Guest Pass" border="0">
      <br><br>
  
      <font face="arial, verdana, helvetica" size="2">

        <b>What is a Guest Pass?</b><br>

        A Guest Pass is a certificate for free game time in Disney's Toontown Online. 

        <p/>

        <b>Will I be charged any fees for using a Guest Pass? </b><br>

        No. There is no charge for using a Guest Pass.

        <p/>

        <b>How do I continue my membership when my Guest Pass expires? </b><br>
        
        Click the "Update Subscription" button on the front page of the Toontown Web site. 
        From here you can log in to your account and choose from several membership plans. 
        
        <p/>


      </font>
    </td>
  </tr>

  <tr align="left">
    <td>
    </td>
    <td align="left"></td>
  </tr>

  
  <tr align="center">
    <td colspan="2" align="center"><a href="javascript:window.close()"><img src="/shared/images/button_close.gif" width="127" height="31" alt="" border="0"></a></td>
  </tr>

  <tr>
    <td colspan="2" align="center">
      <font size="1" face="arial,helvetica">
      &copy; Disney. All rights reserved.
      <font>
    </td>
  </tr>

  
  
</table>

</body></html>
