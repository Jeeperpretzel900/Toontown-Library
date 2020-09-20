<html>
<head>
<title>CONTACT US | Disney Pirates of the Caribbean Online</title>
<meta name="description" content="Port Hole for Disney's Pirates of the Caribbean Online, the massively multiplayer Internet game that lets you live the life of a pirate!">
<meta name="keywords" content="Pirates of the Caribbean Online, port hole, message from the crew, message, form, game, games,  Disney, Pirate, multiplayer, multi-player, multi, player, cooperative, massive, mmorpg, morpg, mmo, rpg">
<meta name="facet1" content="Play|Download">
<meta name="Play" content="Games|Activities">
<meta name="Download" content="Digital Fun">
<meta name="agerange" content="13-17|10-12|6-9">
<meta name="author" content="DOL Premium Products">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="PICS-Label" content='(PICS-1.0 "http://www.rsac.org/ratingsv01.html" l gen true r (n 0 s 0 v 0 l 0))'>
<meta name="thumbnail" content=" http://disney.go.com/pirates/online/images/icon_pirate_54.gif">

<META NAME="fields" CONTENT="Category_Message,subject,evening_phone,weekend_phone,connection_speed,amount_memory,E-Mail,processor_type,browser_software,OS,Name,last_name,member,day_phone,comments_or_questions">
<!-- This tag defines the location a template file that contains the error text that is inserted at the top of the original email template. -->
<META NAME="error_copy" CONTENT="pirates/error.tpl">
<link  rel="stylesheet" type="text/css" href="http://a.disney.go.com/pirates/online/v2/css/stylesheet.css">
<link  rel="stylesheet" type="text/css" href="http://a.disney.go.com/pirates/online/v2/css/global.css">

<script language="JavaScript" src="http://a.disney.go.com/pirates/online/javascript.js" type="text/javascript"></script>

<script language="javascript" src="http://a.disney.go.com/pirates/online/v2/global/javascript/validation.js"></script>
<script src="http://disney.go.com/detect/scripts/master_flash_writer.js"></script>
<script language="JavaScript" src="/pirates/web/4000/common/eventum/eventum/js/browserSniffer.js"></script>
<script language="JavaScript" src="/pirates/web/4000/common/eventum/eventum/js/global.js"></script>
<script language="JavaScript" src="/pirates/web/4000/common/eventum/eventum/js/validation.js"></script>
<script type="text/javascript" src="http://disney.go.com/javascript/querypal.js"></script>
<script type="text/javascript">
  <!--

  function win(URL){
     win1 = window.open(URL, "frame1","scrollbars=no,resizable=no,width=640,height=460");
  }

  function put(){
    var mylist=document.getElementById("Category_Message");
    document.getElementById("subject").value = "Pirates - " + mylist.options[mylist.selectedIndex].text;
  }

  function display_form(){
    //use querypal.js to get grab formId string and select value from dropdown menu
    var mylist=document.getElementById("Category_Message");
    searchParameters = new queryPal();
    checkFormId = searchParameters.checkQueryString("formId");

    document.write('<select name="Category_Message" id="Category_Message" onChange="put()">');
      document.write('<option name="questions" id="questions" value="Question/Comment/Suggestion" selected>Question/Comment/Suggestion</option>');
      document.write('<option name="badName" id="badName" value="Report Bad Name">Report Bad Name</option>');

      if (checkFormId == "misbehavior"){
        document.write('<option name="misbehavingPlayers" id="misbehavingPlayers" value="Report Misbehaving Players" selected="selected">Report Misbehaving Players</option>');
      }else{
        document.write('<option name="misbehavingPlayers" id="misbehavingPlayers" value="Report Misbehaving Players">Report Misbehaving Players</option>');
      }

      if (checkFormId == "billing"){
        document.write('<option name="billingProblems" id="billingProblems" value="Billing Problem" selected="selected">Billing Problem</option>');
      }else{
        document.write('<option name="billingProblems" id="billingProblems" value="Billing Problem">Billing Problem</option>');
      }

      if (checkFormId == "feedback"){
        document.write('<option name="feebackPirates" id="feebackPirates" value="Feedback from Pirates of the Caribbean Online" selected="selected">Feedback from Pirates of the Caribbean Online</option>');
      }else{
        document.write('<option name="feebackPirates" id="feebackPirates" value="Feedback from Pirates of the Caribbean Online">Feedback from Pirates of the Caribbean Online</option>');
      }

      if (checkFormId == "chat"){
        document.write('<option name="chat" id="chat" value="Chat Dictionary Suggestions" selected="selected">Chat Dictionary Suggestions</option>');
      }else{
        document.write('<option name="chat" id="chat" value="Chat Dictionary Suggestions">Chat Dictionary Suggestions</option>');
      }

    document.write('</select>');
    check_referer();
  }

  function check_referer(){
    var mylist=document.getElementById("Category_Message");
    searchParameters = new queryPal();
    checkFormId = searchParameters.checkQueryString("formId");

    if (checkFormId == "feedback"){
      document.getElementById("subject").value = "Pirates - " + mylist.options[4].text;
    }else{
      document.getElementById("subject").value = "Pirates - " + mylist.options[mylist.selectedIndex].text;
    }
  }
-->
</script>


<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">

  function validateForm(theForm) {
      var why = "";

      /*
      why += checkEmail(theForm.email.value);
      why += checkPhone(theForm.phone.value);
      why += checkPassword(theForm.password.value);
      why += checkUsername(theForm.username.value);
      why += isEmpty(theForm.notempty.value);
      why += isDifferent(theForm.different.value);
      for (i=0, n=theForm.radios.length; i<n; i++) {
          if (theForm.radios[i].checked) {
              var checkvalue = theForm.radios[i].value;
              break;
          }
      }
      why += checkRadio(checkvalue);
      why += checkDropdown(theForm.choose.selectedIndex);
      if (why != "") {
         alert(why);
         return false;
      }
      */


   var varAttachCheck = checkAttachments(theForm.screenShot1.value,theForm.screenShot2.value);
   var varAttachError = document.getElementById('fileattachalert');
  // alert("varAttachCheck="+varAttachCheck)
   if (varAttachCheck){
    varAttachError.className = "DisplayBlock"
    varAttachError.style.visibility = "hidden"
     return true;

   }else{
    var varAttachError = document.getElementById('fileattachalert');

    varAttachError.className = "DisplayNone"
    varAttachError.style.visibility = "visible"
    //alert("TRIED TO CHANGE DISPLAY")
    return false;

   }




  //return true;
  }

  function checkAttachments(xAttach1,xAttach2){

    //alert("CALLED checkAttachments: xAttach1="+xAttach1+" xAttach2="+xAttach2)

    var varAcceptTypes = ".jpg, .gif, .png, .log, .doc, .txt"
    var varReturn = true

    if (xAttach1 != "" && xAttach1 != " "){

      var varTypePos = xAttach1.lastIndexOf(".")
      var varType = xAttach1.substring(varTypePos)


      if (varAcceptTypes.indexOf(varType)>-1){
        varReturn = true

      }else{
      return false;

      }



    }

    if (xAttach2 != "" && xAttach2 != " "){

      var varTypePos = xAttach1.lastIndexOf(".")
      var varType = xAttach1.substring(varTypePos)


      if (varAcceptTypes.indexOf(varType)>-1){
        return varReturn;

      }else{
      return false;

      }



    }else{

      return varReturn;
    }



  }


  function whichBrs() {

      var agt=navigator.userAgent.toLowerCase();
      if (agt.indexOf("opera") != -1) return 'Opera';
      if (agt.indexOf("staroffice") != -1) return 'Star Office';
      if (agt.indexOf("webtv") != -1) return 'WebTV';
      if (agt.indexOf("beonex") != -1) return 'Beonex';
      if (agt.indexOf("chimera") != -1) return 'Chimera';
      if (agt.indexOf("netpositive") != -1) return 'NetPositive';
      if (agt.indexOf("phoenix") != -1) return 'Phoenix';
      if (agt.indexOf("firefox") != -1) return 'Firefox';
      if (agt.indexOf("safari") != -1) return 'Safari';
      if (agt.indexOf("skipstone") != -1) return 'SkipStone';
      if (agt.indexOf("msie") != -1) return 'Internet Explorer';
      if (agt.indexOf("netscape") != -1) return 'Netscape';
      if (agt.indexOf("mozilla/5.0") != -1) return 'Mozilla';
      if (agt.indexOf('\/') != -1) {
      if (agt.substr(0,agt.indexOf('\/')) != 'mozilla') {
      return navigator.userAgent.substr(0,agt.indexOf('\/'));}
      else return 'Netscape';} else if (agt.indexOf(' ') != -1)
      return navigator.userAgent.substr(0,agt.indexOf(' '));
      else return navigator.userAgent;
  }

</script>

<script language="javascript" type="text/javascript">
    var onImgArray = new Array()
  var offImgArray = new Array()
  for (i=1;i<15;i++){
    onImgArray[i] = new Image
    offImgArray[i] = new Image
  }

function imageOn(i) {
  document.images["btn" + i].src = onImgArray[i].src
}
function imageOff(i) {
  document.images["btn" + i].src = offImgArray[i].src
}

if (document.images) {

    onImgArray[1].src  = "http://a.disney.go.com/pirates/online/v3/global/images/submit_roll.gif"
    offImgArray[1].src = "http://a.disney.go.com/pirates/online/v3/global/images/submit.gif"

}

function parentLoadContent(xURL, xHeader){
  parent.loadContent(xURL, xHeader)
}

function button_Back(){
  history.back(-1)
  //top.location = "http://apps.pirates.go.com/pirates/v2/index?pageId=current_news"
}

function bckBtn(){
  window.location.replace('http://apps.pirates.go.com/pirates/v3/#/help/contact_us.html');
}
</script>



<!-- START CHROME BREADCRUMB -->

<script language="javascript" src="http://disney.go.com/premiumproducts/pirates/js/breadcrumb_pirates.js"></script>
<!-- END CHROME BREADCRUMB -->
</head>
<body BGCOLOR="#000000" TOPMARGIN="0" LEFTMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0" background="http://a.disney.go.com/pirates/online/v3/global/images/background1_nomark.gif">

<center>
<!-- START CHROME -->
<script language="javascript" type="text/javascript" src="http://disney.go.com/globalmedia/chrome/chrome.js"></script>
<!-- END CHROME -->

<!-- BEGIN MAIN TABLE -->
<table width="997" border="0" cellpadding="0" cellspacing="0">

<tr>
  <td align="center" valign="top" width="997" style="background-color: transparent">
    <!-- BEGIN CONTENT TABLE -->
      <table border="0" cellpadding="0" cellspacing="0" width="997" height="206">


        <tr>
          <td valign="top">
           <div id="startPage" align="center" valign="top" width="997" height="206">
        <!--
        <script language="javascript" type="text/javascript">

          flashObj = new FlashObj("http://apps.pirates.go.com/flash/index_header.swf", "997", "206", "#000000", "7", "movie", "varVars=NONE");
          flashObj.render(true,"opaque");

        </script>
        -->
        <img src="http://a.disney.go.com/pirates/online/v3/global/images/clear.gif" width="997" height="206">

           </div>
      </td>
      </tr>
    </table>
  </td>
</tr>
<tr>
<td  style="vertical-align:top" width="984" valign="top">
<div id="middlePage" style="display:table-cell; vertical-align:top">

<table border="0" cellpadding="0" cellspacing="0" width="984">
        <tr>

        <td valign="top" width="160">
        <div id="leftColumn">
            <!-- BEGIN LEFT COLUMN -->


<table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="160" ALIGN="CENTER" valign="top">
    <!-- BEGIN EXIT BUTTON -->





    <div id="play" align="center" width="160" height="281" valign="top">
      <a href="javascript:bckBtn()"><img src="http://a.disney.go.com/pirates/online/v3/global/images/back_report.gif" width="142" height="184" border="0" alt="Back"></a>
    </div>

    <!-- END EXIT BUTTON -->
    </td>
  </tr>

</table>

</div>
</td>
        <td  valign="top" width="626" align="left" >

          <div id="dynamicContent">


<table border="0" cellpadding="0" cellspacing="0" width="626">
<tr>
  <td COLSPAN="3" width="626"><img src="http://a.disney.go.com/pirates/online/v3/global/images/titles/poc_title_contactus.gif" width="626" height="86" border="0" ALT="Contact Us"></td>
</tr>

<tr valign="top">
  <td BACKGROUND="http://a.disney.go.com/pirates/online/v3/global/images/parch_left.gif"><img src="http://a.disney.go.com/pirates/online/v3/global/images/dot.gif" width="57" height="327" border="0" ALT=""></td>
  <td BACKGROUND="http://a.disney.go.com/pirates/online/v3/global/images/parch_bg.gif"><img src="http://a.disney.go.com/pirates/online/v3/global/images/dot.gif" width="511" height="2" border="0" ALT="">

  <DIV ALIGN="CENTER">
    <TABLE WIDTH="90%" CELLPADDING="6" CELLSPAING="1" BORDER="0">
      <TR VALIGN="TOP">
        <TD>

<!-- BEGIN CONTENT -->


<table cellspacing=0 cellpadding=0 border=0  valign="top">
<tr>
  <td align="center" colspan="2"><img src="http://disney.go.com/pirates/online/v3/global/images/clear.gif"  height="5" border="0" alt=""></td>
</tr>


<!-- ******** MAIN CONTENT *************** -->
<tr>
  <td align="left" valign="top" colspan="2"><img src="http://disney.go.com/pirates/online/v3/global/images/clear.gif" width="10" height="1" border="0" alt=""></td>
</tr>
<tr>
     <td colspan="3" align="left"><font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="2" color="#000000">
    The form below is intended for account problems or other customer service issues only. If you have questions, make sure you check out our <a HREF="javascript:window.top.location='http://apps.pirates.go.com/pirates/v3/index?pageId=faq'">Frequently Asked Questions<a>.</font></p></td>
</tr>

<tr>
  <td align="left" valign="top" colspan="3"><img src="http://disney.go.com/pirates/online/v3/global/images/clear.gif" width="10" height="20" border="0" alt=""></td>
</tr>
<tr>
  <td colspan="3">
    <table cellspacing=0 cellpadding=0 border=0>
      <tr>

        <td colspan="3">
          <table border="0" cellspacing="0" cellpadding="0">

            <FORM ACTION="http://apps.disneyblast.go.com/cgi-bin/mail/generic_mail.cgi" METHOD="POST" name="form">
            <INPUT TYPE="Hidden" NAME="site" VALUE="Disney's Pirates of the Caribbean Online">
            <INPUT TYPE="Hidden" NAME="subject" id="subject" VALUE="Disney Pirates Online">
            <INPUT TYPE="Hidden" NAME="redirect" VALUE="http://apps.disneyblast.go.com/cgi-bin/mail/generic_mail.cgi?template=piratesonline/thanks.tpl">
            <INPUT TYPE="Hidden" NAME="required" VALUE="Category_Message,E-Mail,Name,comments_or_questions">
            <INPUT TYPE="Hidden" NAME="template" VALUE="piratesonline/form.tpl">
            <INPUT TYPE="Hidden" NAME="pass" VALUE="1">
            <INPUT TYPE="Hidden" NAME="referrer" VALUE="http://disney.go.com/pirates/online/v3/index.html">
            <INPUT TYPE="Hidden" NAME="debug" VALUE="">
            <INPUT TYPE="Hidden" NAME="maxattach" VALUE="725">
            <INPUT TYPE="Hidden" NAME="Info" VALUE="Information to be passed to the E-mail message.">
            <INPUT TYPE="Hidden" NAME="mail_format_template" VALUE="piratesonline/email.tpl">
            <INPUT TYPE="Hidden" NAME="email1" VALUE="memberservices@piratesonline.com ">

            <tr>
              <td align="left">
                <table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="center" colspan="2"></td>
                  </tr>
                  <tr>
                       <td width="40"><img src="http://disney.go.com/games/downloads/global/images/clear.gif" width="30" height="1" alt=""></td>
                        <td>
                        <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td>
                              <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                 <td width="40"><img src="http://disney.go.com/games/downloads/global/images/clear.gif" width="30" height="1" alt=""></td>
                                 <td align="left" valign="top" width="490">
                                 <BR>
                                 <font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="2" color="#000000">
                                 <b>Category of Message:</b><br>
                                 </font>
                              <font face="arial" size="1">
                              <script type="text/javascript">
                                <!--
                                display_form()
                                -->
                              </script>
                              </font>
                                 </td>
                             </tr>
                          </table>
                            </td>
                            </tr>
                            <tr>
                        <td colspan="2"><img src="http://disney.go.com/games/downloads/global/images/clear.gif" width="1" height="5" alt=""></td>
                      </tr>
                            <tr>
                        <td>
                              <table border="0" cellspacing="0" cellpadding="0"  width="390">
                              <tr>
                               <td width="185" align="left"><font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="2" color="#000000"><b>Your Name:</b></font></td>
                                <td width="390"><input name="Name" size=25  value=""></td>
                          <tr>
                          </table>
                        </td>



                      </tr>
                             <tr>
                        <td colspan="2"><img src="http://disney.go.com/games/downloads/global/images/clear.gif" width="1" height="5" alt=""></td>
                      </tr>
                      <tr>
                        <td>
                          <table border="0" cellspacing="0" cellpadding="0"  width="390">
                            <tr>
                                  <td width="200" align="left"><font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="2" color="#000000"><b>Your E-Mail:</b></font></td>
                                  <td width="390"><input type="text" name="E-Mail" value="" size="25"></td>
                            <tr>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2"><img src="http://disney.go.com/games/downloads/global/images/clear.gif" width="1" height="5" alt=""></td>
                      </tr>

                            <tr>
                        <td>
                          <table border="0" cellspacing="0" cellpadding="0"  width="390">
                            <tr>

                                 <td width="100" align="left"><font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="2" color="#000000"><b>Comment:</b></font></td>


                              </tr>
                              <tr>

                              <td width="390" colspan="3"><textarea name="comments_or_questions" cols="45" rows="5"></textarea></td>
                              </tr>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2"><img src="http://disney.go.com/games/downloads/global/images/clear.gif" width="1" height="30" alt=""></td>
                      </tr>


                            <tr>

                              <td align="center" valign="center"><INPUT TYPE="image" NAME="submit" src="http://a.disney.go.com/pirates/online/v3/global/images/submit.gif" onMouseOver="this.src='http://a.disney.go.com/pirates/online/v3/global/images/submit_roll.gif'" onMouseOut="this.src='http://a.disney.go.com/pirates/online/v3/global/images/submit.gif'" width="145" height="32" border="0" alt="Submit">

                      </tr>

                       </table>
                       </td>
                  </tr>
                  <tr>
                    <td colspan="2"><img src="http://disney.go.com/games/downloads/global/images/clear.gif" width="1" height="5" alt=""></td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          </form>
        </td>


        </tr>
        <tr>
              <td align="left" valign="top" colspan="3"><img src="http://disney.go.com/pirates/online/v3/global/images/clear.gif" width="10" height="20" border="0" alt=""></td>
        </tr>

        <tr>
          <td>
          <font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="2" color="#000000"><strong>Terms and Conditions</strong><p>
          <p><font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="2" color="#000000">It is the long-standing policy of The Walt Disney Company not to accept unsolicited submissions of creative material. This is to avoid any misunderstandings if your ideas are similar to those we have developed independently. We must therefore request that you do not send to us any original creative materials such as screenplays, stories, song lyrics, limericks, voodoo curses, etc.</font></p>

          <p><font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="2" color="#000000">Any communication or material that you transmit to the Site by electronic mail or otherwise will be treated as non-confidential and non-proprietary. Anything you transmit or post may be used by The Walt Disney Company or its affiliates for any purpose, including, but not limited to, reproduction, disclosure, transmission, publication, broadcast, and posting.</font></p>

          <p><font face="Verdana,Geneva,Arial,Helvetica,sans-serif" size="2" color="#000000">Furthermore, The Walt Disney Company is free to use any ideas, concepts, know-how, or techniques contained in any communication you send to the Site for any purpose whatsoever, including, but not limited to, developing, manufacturing, and marketing products using such information.</font></p>
          </td>
      </tr>
<tr>
  <td align="left" valign="top" colspan="3"><img src="http://disney.go.com/pirates/online/v3/global/images/clear.gif" width="10" height="20" border="0" alt=""></td>
</tr>
<tr>
    <td align="left" valign="top" colspan="3">
    <font face="Verdana,Arial,sans-serif" size="2" color="#000000">The Terms of Use contain important provisions governing your and our rights including, among other things, acceptable conduct on the Walt Disney Internet Group family of sites (including Disney.com, and other Internet sites affiliated with The Walt Disney Company), intellectual property rights (including our right to use information, content and materials you submit to us), and other rights and remedies available to you and us.</font>
  </td>
</tr>

      <tr>
        <td align="left" valign="top"><img src="http://disney.go.com/pirates/online/v3/global/images/clear.gif" width="10" height="20" border="0" alt=""></td>
      </tr>

    </table>
  </td>
</tr>

<tr>
  <td align="left" valign="top"><img src="http://disney.go.com/pirates/online/v3/global/images/clear.gif" width="10" height="20" border="0" alt=""></td>
</tr>




</table>


<!-- END CONTENT -->



          </TD>
        </TR>
      </TABLE>
    </DIV>

  </td>

  <td BACKGROUND="http://a.disney.go.com/pirates/online/v3/global/images/parch_right.gif"><img src="http://a.disney.go.com/pirates/online/v3/global/images/dot.gif" width="58" height="327" border="0" ALT=""></td>
</tr>
<tr>

  <td COLSPAN="3" width="626"><img src="http://a.disney.go.com/pirates/online/v3/global/images/parch_bot.gif" alt="" width="626" height="55" border="0" ALT=""></td>
</tr>
</table>




</div>

            <!-- END CENTER CONTENT -->

        </td>
        <td valign="top" width="190" >

        <div id="rightColumn">






<!-- BEGIN TOP RIGHT AD -->


<table border="0" cellpadding="0" cellspacing="0" width="190">
<tr>
  <td colspan="3"><img src="http://a.disney.go.com/pirates/online/v3/global/images/frame_top.gif" width="190" height="9"></td>
</tr>
<tr>
  <td background="http://a.disney.go.com/pirates/online/v3/global/images/frame_lttile.gif" width="9">

    <table border="0" cellpadding="0" cellspacing="0" height="100%">
      <tr>
        <td height="15"><img src="http://a.disney.go.com/pirates/online/v3/global/images/frame_tpltimg.gif" height="15" width="9"></td>
      </tr>
      <tr>
        <td><img src="http://a.disney.go.com/pirates/online/v3/global/images/spacer.gif" height="126" width="9"></td>
      </tr>
      <tr>
        <td height="15"><img src="http://a.disney.go.com/pirates/online/v3/global/images/frame_btmltimg.gif" height="15" width="9"></td>

      </tr>
    </table>
  </td>
  <td><img src="http://a.disney.go.com/pirates/online/v3/global/images/livethelegend_notext.jpg"></td>
  <td background="http://a.disney.go.com/pirates/online/v3/global/images/frame_rttile.gif" width="9">
    <table border="0" cellpadding="0" cellspacing="0" height="100%">
      <tr>
        <td height="15"><img src="http://a.disney.go.com/pirates/online/v3/global/images/frame_tprtimg.gif" height="15" width="9"></td>
      </tr>

      <tr>
        <td><img src="http://a.disney.go.com/pirates/online/v3/global/images/spacer.gif" height="126" width="9"></td>
      </tr>
      <tr>
        <td height="15"><img src="http://a.disney.go.com/pirates/online/v3/global/images/frame_btmrtimg.gif" height="15" width="9"></td>
      </tr>
    </table>
</tr>
<tr>

  <td colspan="3"><img src="http://a.disney.go.com/pirates/online/v3/global/images/frame_bottom.gif" width="190" height="9"></td>
</tr>
</tr>
</table>
<!-- END TOP RIGHT AD -->



        </div>
        </td>

        </tr>


      </table>
</div>
    <!-- END CONTENT TABLE -->
    </td>
</tr>



</table>
<!-- END MAIN TABLE -->
<TABLE WIDTH="100%" CELLPADDING="0" CELLSPACING="0" BORDER="0">
<tr>
  <td BGCOLOR="#000000" ALIGN="CENTER">

<BR>
<table CELLPADDING="0" CELLSPACING="0" BORDER="0" align="center">
      <tr>
        <td><img src="/images/clear.gif" height="10"></td>
      </tr>
      <tr>
        <td><img src="http://a.disney.go.com/pirates/online/v3/global/images/ESRB_pirates_E10plus.gif" width="135" height="62"></td>
      </tr>
      <tr>
        <td><img src="/images/clear.gif" height="10"></td>
      </tr>

  </table>
<br>
<!-- START LEGAL FOOTER -->

<SCRIPT language="javascript" src="http://disney.go.com/globalmedia/legal_footer/legalfooter.js"></SCRIPT>

<!-- END LEGAL FOOTER -->

  </td>
</tr>

</table>

</body>

</html>