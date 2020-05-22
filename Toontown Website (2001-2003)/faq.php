
<html>
<head>
  <title>Toontown.com, faq</title>
  <script>
function submitForm(id) {
  document.forms[id].submit();
}

function imgOn(imageName) {
if (document.images) {
    document.images[imageName].src = eval(imageName + "_on.src");
  }
}

function imgOff(imageName) {
  if (document.images) {
    document.images[imageName].src = eval(imageName + "_off.src");
  }
}

</script>  </head>
<body bgcolor="#4477ff" text=#000000 link=#4477ff vlink=#4455bb alink=#ff5555
    leftmargin=0 topmargin=0 marginwidth=0 marginheight=0  >
<font face="verdana, arial, helvetica, sans-serif" size="1">
<table width="718" align=center border=0 cellpadding="0" cellspacing=0 bgcolor=#ffffff>
<tr>

<td colspan="5" align=left valign=top><a href="main.php">
<img border=0 width=718 height=151 src="images/cloud_header.jpg"></a></td>

</tr>
<tr>

<td valign=top align=left><table width=121 height=538 border=0 cellpadding=0 cellspacing=0 align=left valign=top>
  <tr><td valign=top align=right background="images/cloud_leftBar.jpg">
  <font size=-2><br></font>
<script>
if (document.images) {
  button_about_on = new Image();
  button_about_on.src = "images/button_about_on.gif";
  button_about_off = new Image();
  button_about_off.src = "images/button_about.gif";

  button_screenshots_on = new Image();
  button_screenshots_on.src = "images/button_screenshots_on.gif";
  button_screenshots_off = new Image();
  button_screenshots_off.src = "images/button_screenshots.gif";

  button_faq_on = new Image();
  button_faq_on.src = "images/button_faq_on.gif";
  button_faq_off = new Image();
  button_faq_off.src = "images/button_faq.gif";

  button_news_on = new Image();
  button_news_on.src = "images/button_news_on.gif";
  button_news_off = new Image();
  button_news_off.src = "images/button_news.gif";

  button_fanclub_on = new Image();
  button_fanclub_on.src = "images/button_fanclub_on.gif";
  button_fanclub_off = new Image();
  button_fanclub_off.src = "images/button_fanclub.gif";

  button_reportbug_on = new Image();
  button_reportbug_on.src = "images/button_reportbug_on.gif";
  button_reportbug_off = new Image();
  button_reportbug_off.src = "images/button_reportbug.gif";

  play_on = new Image();
  play_on.src = "images/button_play_on.gif";
  play_off = new Image();
  play_off.src = "images/button_play.gif";
}
</script>

<a href="about.php"
    onMouseOver="imgOn('button_about')"
    onMouseOut="imgOff('button_about')">
    <img border=0 src="images/button_about.gif" name="button_about"></a><br>
<a href="screenShots.php"
    onMouseOver="imgOn('button_screenshots')"
    onMouseOut="imgOff('button_screenshots')">
    <img border=0 src="images/button_screenshots.gif" name="button_screenshots"></a><br>
<img border=0 src="images/button_faq_disabled.gif"><br>
<a href="news.php"
    onMouseOver="imgOn('button_news')"
    onMouseOut="imgOff('button_news')">
    <img border=0 src="images/button_news.gif" name="button_news"></a><br>
<a href="signUp.php"
    onMouseOver="imgOn('button_fanclub')"
    onMouseOut="imgOff('button_fanclub')">
    <img border=0 src="images/button_fanclub.gif" name="button_fanclub"></a><br>
<img border=0 width=102 height=26 src="images/blank.gif" name=""><br>
<font size=-8><br></font>
<img border=0 width=102 height=53 src="images/blank.gif" name=""><br>
</td></tr>
  <tr><td valign=top><img width=121 height=57 src="images/vrstudio_logo.gif"></td></tr>
</table></td>
<td align=left valign=top><img border=0 width=42 height=438 src="images/cloud_leftTrim2.jpg"></td>
<td align=left valign=top><img border=0 width=434 height=38 src="images/cloud_headerTrim2.jpg"><br>
<table border="0" cellspacing="0" cellpadding="0" width=434 align="center">
<tr><td>
<p><h3>Frequently Asked Questions</h3></p>
<p><font size="-1">Do you have a question?  Your answer may be here.  If you cannot find an answer, send your questions to <a href="mailto:toontown@disney.com">toontown@disney.com</a>.</p>

<p>
If you think you may have found a problem with the game, please check the list of 
<a href="knownIssues.php">Known Issues</a> before reporting a bug, or sending an e-mail.

<p><a name="genquest"><h4>General Questions</h4></a></p>
<ul>
<li><a href="#whatis">What is Toontown, and what is the Toontown Beta release?</a></li>
<li><a href="#release">When will Toontown be officially released?</a></li>
<li><a href="#rpg">What is an online multiplayer RPG?</a></li>
<li><a href="#todo">What am I supposed to do in Toontown?</a></li>
<li><a href="#cost">How much does it cost to play Toontown?</a></li></p>
</ul>

<p><a name="techquest"><h4>Technical Questions</h4></a></p>
<ul>
<li><a href="#computer">What kind of computer is needed to play Toontown?</a></li>
<li><a href="#hardware">Do I need any special equipment, such as a 3-D card, to play Toontown?</a></li>
<li><a href="#software">Do I need any special software to play Toontown?</a></li>
<li><a href="#speed">How fast an Internet connection do I need to play Toontown?</a></li>
<li><a href="#adv">Will someone with a faster Internet connection have an advantage playing?</a></li>
<li><a href="#long">How long does it take to download Toontown, and will I have to download it more than once?</a></li>
<li><a href="#nt">Can Toontown run in Windows XP or Windows 2000?</a></li>
<li><a href="#other_sys">Can I play Toontown in operating systems other than Windows?</a></li>
<li><a href="#cd">Can I get Toontown on a CD?</a></li>
<li><a href="#uninstall">How do I uninstall Toontown?</a></li>
<li><a href="#harddrive">What kind of information does Toontown put onto my computer's hard drive?</a></li>
<li><a href="#gameupdate">What is a "game update," and will I notice when they occur?</a></li>
<li><a href="#chatprog">How can I communicate with other player in Toontown Online?</a></li>
<li><a href="#serverdown">What does it mean if I see the message "Server Down" when I try to get to Toontown?</a></li>
<li><a href="#aol">Can I run Toontown Online from AOL?</a></li>
<li><a href="#lowmemory">I tried to install Toontown and it says I need dont have enough memory, but I have 2 Gigabytes!</a></li>
</ul>

<p><a name="betaquest"><h4>Beta Release Questions</h4></a></p>
<ul>
<li><a href="#update">Will you update Toontown during Beta?</a></li>
<li><a href="#offlimits">Are there certain areas of Toontown that are off limits or impossible to get to at first?</a></li>
<li><a href="#comments">Can I send in comments about what I like or don't like, and things that need to be fixed?</a></li>
<li><a href="#report">How can I report problems?</a></li>
<li><a href="#betaover">Will you delete all the Toons when the beta is over?</a></li></p>
</ul>

<p><a name="gamequest"><h4>Game Questions</h4></a></p>
<ul>
<li><a href="#playonown">Can I play Toontown on my own, or should I join up with others?</a></li>
<li><a href="#howmany">How many people can play Toontown?</a></li>
<li><a href="#getaround">Is there some way to get around Toontown other than walking?</a></li>
<li><a href="#night">Is there night and day in Toontown?</a></li>
<li><a href="#manual">Is there a Toontown manual or guide?</a></li>
<li><a href="#cheat">What will happen to someone who tries to cheat or who doesn't follow the rules?</a></li></p>
</ul>

<p><a name="toonquest"><h4>Toon Questions</h4></a></p>
<ul>
<li><a href="#create">How do I create my Toon?</a></li>
<li><a href="#toonname">Can I name my Toon anything?</a></li>
<li><a href="#howmanytoons">How many Toons can I have?</a></li>
<li><a href="#clothes">Can I get special clothes for my Toon?</a></li>
<li><a href="#givetoon">Can I give my Toon to someone else?</a></li>
<li><a href="#bothonline">If I have more than one Toon, can they both be active in Toontown at the same time?</a></li>
<li><a href="#controltoon">How do I control my Toon? With a keyboard, mouse, joystick, or a combination?</a></li>
<li><a href="#view">How do I change my viewpoint?</a></li>
<li><a href="#tooninfo">How do I get information about my own Toon?</a></li>
<li><a href="#othertooninfo">How do I get information about another Toon?</a></li>
<li><a href="#namesappear">What are those names that appear on the screen -- are they other players?</a></li>
<li><a href="#savegame">How do I save my game?</a></li>
<li><a href="#exitgame">How do I exit Toontown, and will my Toon still be there when I come back?</a></li>
</ul>

<p><a name="screenquest"><h4>Screen Questions</h4></a></p>
<ul>
<li><a href="#laffmeter">What's a Laffmeter?</a></li>
<li><a href="#book">What's a Shticker Book, and what's inside it?</a></li>
<li><a href="#quicktalker">How do I Chat?</a></li>
<li><a href="#friendslist">How do I use the Friends List?</a></li>
<li><a href="#secrets">How do I chat freely with my real-life friends?  What's this about "Secrets"?</a></li>
</ul>

<p><a name="gagquest"><h4>Gag, Trolley, and Toon Task Questions</h4></a></p>
<ul>
<li><a href="#trolleydo">What does the Trolley do in Toontown, and why would I want to ride it?</a></li>
<li><a href="#gags">What are Gags?  How do I get them and what do I do with them?</a></li>
<li><a href="#stealgags">Can any other Toon steal my Gags?</a></li>
<li><a href="#tradegags">Can I trade Gags with other Toons?</a></li></p>
<li><a href="#emptytoontask">My ToonTask listing contains an empty entry.  How can I fill it?</a></li></p>
<li><a href="#whatsabugle">My ToonTask was 'Deliver 2 Bugles to Fifi'.  What is a Bugle and how do I get it?</a></li></p>
<li><a href="#fruitpietask">My ToonTask was 'Deliver 2 Fruit Pies to Flippy'.  I walked up to the counter and Flippy said 'Keep up the good work!', but didn't reward me!</a></li></p>
</ul>

<p><a name="cogquest"><h4>Cog Questions</h4></a></p>
<ul>
<li><a href="#cogs">What are Cogs, and what are they doing here?</a></li>
<li><a href="#cogtypes">What is a "Sellbot", "Cashbot", etc?</a></li></p>
<li><a href="#battle">How do I keep the Cogs from taking over Toontown?</a></li>
<li><a href="#cogbuilding">How can I tell what kind of Cogs work in a building?</a></li>
<li><a href="#gagcombo">Does the gag I use affect other toon's gag attacks?</a></li>
<li><a href="#secretbattle">Are there secret battle sequences that will earn me extra points?</a></li>
<li><a href="#lose">What happens if I lose a battle?</a></li>
<li><a href="#die">Can my Toon ever die?</a></li>
<li><a href="#heal">How do I "heal" my Toon or refill my Laffmeter?</a></li></p>
</ul>

<p><a name="chatquest"><h4>Chat Questions</h4></a></p>
<ul>
<li><a href="#howtotalk">How do I talk with other players?</a></li>
<li><a href="#hearsomething">What's happening when another Toon "talks" and all I hear is something that doesn't make sense?</a></li>
<li><a href="#filter">Is there a swear word filter in Toontown?</a></li>
<li><a href="#talktoDisney">Can I talk to Mickey, Donald, and other Disney Toons?</a></li>
<li><a href="#seeasay">When my Toon says something, how will others see it?</a></li>
<li><a href="#meetup">How do I meet up with a friend?</a></li>
<li><a href="#safe">How can I keep information about myself safe from others?</a></li>
</ul></p>


<p><h4>General Answers</h4></p>

<p><a name="whatis"></a><i><b>What is Toontown, and what is the Toontown Beta Release?</b></i>
<p>Toontown is a massively multiplayer online PC game for ages seven and older.  The Toontown "Beta Release" lets players get a sneak peek at the game before it is officially finished and released.  Beta players get to help Disney finish the game as well as test it, so your comments are very important.</p>

<p><a name="release"></a><i><b>When will Toontown be officially released?</b></i></p>
<p>A release date has not been set, but Beta players will be the first to know.</p>

<p><a name="rpg"></a><i><b>What is an online multiplayer RPG?</b></i></p>
<p>In role-playing games (RPGs), you create a character and then step into a game world with that character.  Taking an RPG online allows you to play with others -- that's why it's called multiplayer!</p>

<p><a name="todo"></a><i><b>What am I supposed to do in Toontown?</b></i></p>
<p>Players create their own cartoon characters and enter Toontown to:</p>
<ul><li>Meet friends and make new friends</li>
<li>Compete in games</li>
<li>Battle the evil robot Cogs</li></ul></p>

<p><a name="cost"></a><i><b>How much does it cost to play Toontown?</b></i></p>
<p>Right now there is no charge for Beta Testing since the product is not complete.</p>

<p align="right"><a href="#genquest">Back to General Questions</a></p>


<p><h4>Technical Answers</p></h4>

<p><a name="computer"></a><i><b>What kind of computer is needed to play Toontown?</b></i></p>
<p>You must have a PC -- Toontown does not run on Macintosh computers.  You also need:
<ul>
<li>Microsoft Windows 95, 98, ME, 2000, or XP</li>
<li>233 MHz or faster CPU</li>
<li>90MB RAM memory or more</li>
<li>100MB free space on your Windows System hard drive (most likely C:)</li>
<li>A video card with 3-D acceleration, 8MB, and an AGP bus interface</li>
<li>A 56K modem, or a faster Internet connection</li>
<li>Microsoft DirectX 7.0 (or newer)</li>
<li>Microsoft IE v. 4.0 (or newer) or Netscape v. 4.x (but not Netscape 6.x)</li></ul></p>

<p><a name="hardware"></a><i><b>Do I need any special equipment, such as a 3-D card, to play Toontown?</b></i></p>
<p>Yes, you need a 3D video card, but don't worry about checking your
computer.  The Toontown installer will confirm that all necessary
hardware and software is in place prior to installation.
</p>
The following 3D video cards have been tested by our QA staff, and
appear to work with Toontown Online.  Other cards may work, of course.  
This is not an endorsement for any of these products.<br>
<blockquote>
3Dfx Voodoo 5<br>
3Dfx Voodoo 4<br>
3Dfx Voodoo 3<br>
<br>
ATI Radeom 64MB DDR<br>
ATI Rage 128 Pro<br>
ATI Rage 128<br>
ATI All in Wonder<br>
<br>
Intel I-810<br>
Intel I-815<br>
<br>
Matrox Millenium G200<br>
Matrox Millenium G400<br>
<br>
NVidia Riva TNT<br>
NVidia Riva TNT2<br>
NVidia Geforce 2<br>
NVidia Geforce 3<br>
<br>
S3/Diamond Viper II<br>
S3/Diamond Savage 4<br>
<br>
Permedia 2<br>
</blockquote>

<BR>
The following 3D video cards will not work properly with Toontown.<BR>
<blockquote>
Any card with < 4MB of video memory.<br>
Number Nine Imagine Series 2<br>
3Dfx Voodoo 1,2  (no mouse cursor)<br>
S3 Virge-based cards<br>
</blockquote>

<p><a name="software"></a><i><b>Do I need any special software to play Toontown?</b></i></p>
<p>The Toontown installer will automatically make sure your computer has:</p>
<ul><li>Internet Explorer browser (version 4.0 or newer) or Netscape version 4.x.  Netscape 6.x is not currently supported.</li>
<li>Microsoft's DirectX version 7.0 or newer.  Download the latest version from <a href=http://www.microsoft.com/directx>www.microsoft.com/directx</a></li>
<li>Macromedia's Flash Player, version 5.0 (or newer).  Download the latest version from <a href=http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash>www.macromedia.com</a></li></ul></p>

<p><a name="speed"></a><i><b>How fast an Internet connection do I need to play Toontown?</b></i></p>
<p>The faster the better, but Toontown is designed to work over even a 56K modem.</p>

<p><a name="adv"></a><i><b>Will someone with a faster Internet connection have an advantage playing?</b></i></p>
<p>No.  Toontown has been designed to work online so that everyone can
play together and compete with each other in the game.  The primary
benefit of a fast connection is that you won't have to wait as long
for the initial download.</p>

<p><a name="long"></a><i><b>How long does it take to download Toontown, and will I have to download it more than once?</b></i></p>
<p>Normal installation should take 10 to 20 minutes, depending on the speed of your Internet connection.  During Beta Release, unexpected problems -- and major new versions of Toontown -- may require you to uninstall your older version of Toontown and download a new version.  Technical support will let you know if you need to do this.  If this does happen, your Toon and game information will be saved on the Toontown servers, so you'll be able to pick up the game again right away.</p>

<p><a name="nt"></a><i><b>Can Toontown run in Windows XP or Windows 2000?</b></i></p>
<p>Toontown works with Windows 95, 98, ME, NT 4.0, 2000, and XP.  On NT/2000/XP, you are currently required to have administrator privileges to install and run.  Toontown will run on NT 4.0 if your video driver supports OpenGL accleration.</p>

<p><a name="other_sys"></a><i><b>Can I play Toontown in operating systems other than Windows?</b></i></p>
<p>Not at this time.</p>

<p><a name="cd"></a><i><b>Can I get Toontown on a CD?</b></i></p>
<p>Not at this time.</p>

<p><a name="harddrive"></a><i><b>What kind of information does Toontown put onto my computer's hard drive?</b></i></p>
<p>Toontown installs some game software onto your hard drive.  This is why you need at least 100 megabytes of available space.  This process is just like any game installation and should not affect your computer in any other way, other than to allow you to play.</p>

<p><a name="uninstall"></a><i><b>How do I uninstall Toontown?</b></i></p>
<p>Go to Start Menu->Settings->Control Panel->Add/Remove Programs.  Find "Disney's Toontown Online", click "Change/Remove" and a window will appear. In the window "Automatic" uninstall will be selected. Click "Next" to perform the uninstall.</p>

<p><a name="gameupdate"></a><i><b>What is a "game update," and will I notice when they occur?</b></i></p>
<p>Like Disneyland, Toontown will continue to change for as long as someone has imagination and a budget.  Each time you sign in to play Toontown Online, new features may be included in the 'patches' that are automatically downloaded and installed.</p>

<p><a name="chatprog"></a><i><b>How can I communicate with other player in Toontown Online?</b></i></p>
<p>Toontown Online has its own chat system that lets you choose from a list of words and phrases and assemble them together into sentences.</p>

<p><a name="serverdown"></a><i><b>What does it mean if I see the message "Server Down" when I try to get to Toontown?</b></i></p>
<p>Sometimes the unavoidable happens -- power goes out, a storm knocks out phone lines, or a game server has problems and has to be turned off and on again.  Also, there are times when the game servers must be pulled offline for maintenance.  In general, advance warning of maintenance will be given to all visitors, but if you see the "Server Down" message, just try Toontown again a short time later.</p>

<p><a name="aol"></a><i><b>Can I run Toontown Online from AOL?</b></i></p>
<p>Yes, but AOL child accounts will not let an Internet connection be
established outside of the AOL window.  AOL child accounts must have
parental control disabled to play Toontown.</p>

<p><a name="lowmemory"></a><i><b>I tried to install Toontown and it says I need dont have enough memory, but I have 5 Gigabytes!</b></i></p>
<p>The error refers to RAM memory, not disk space.  You probably have only 32 or 64MB of RAM, which is not enough to play Toontown.</P>

<p align="right"><a href="#techquest">Back to Technical Questions</a></p>

<p><h4>Beta Release Answers</p></h4>
<p><i><b><a name="update"></a> Will you update Toontown during Beta?</b></i></p>
<p>Yes, but these updates should happen seamlessly.  For more information on Toontown Beta issues, click on the "News" button in the <a href="#">sidebar</a>.</p>

<p><i><b><a name="offlimits"></a> Are there certain areas of Toontown that are off limits or impossible to get to at first?</b></i></p>
<p>Yes.  In Toontown's Beta Release, some areas are still under construction.</p>

<p><i><b><a name="comments"></a> Can I send in comments about what I like, don't like, and things that need to be fixed?</b></i></p>
<p>Yes, please do! <a  href="mailto:toontown@disney.com">Click here to send us your comments.</a></p>

<p><i><b><a name="report"></a> How can I report problems?</b></i></p>
<p>Every time you exit from Toontown, you will go to a form that
allows you to send in comments.  Please try to send us as much
information as you can, and let us know if this is a fatal problem
(that is, Toontown won't start or crashes), or if it is a minor
problem.</p>

<p>
If you see a problem with the graphics inside Toontown Online, in addition
to attaching the log files please do the following:
<OL>
<li>PRESS the F9 KEY in the game to automatically save a screenshot image in a file
named "[frame_number].bmp" which will be saved in "C:\Program Files\Disney\Disney Online\Toontown"</li>
<li>Exit Toontown Online, go to the START MENU, select RUN, and type DXDIAG.EXE</li>
<li>Click SAVE ALL INFORMATION, which saves the file DxDiag.txt, then exit DXDIAG.EXE</li>
<li>Attach the files "DxDiag.txt" and "[frame_number].bmp" to the bug report, along with a description of the problem, and e-mail to toontown@disney.com</li></OL>
<p/>


<p><i><b><a name="betaover"></a> Will you delete all the Toons when the beta is over?</b></i></p>
<p>We have no plans to clear the database. We realize how much time
people invest in their character because we all play the game too! Of
course since this is a beta and the game is still not complete, the
worst case may be necessary. We will do everything reasonable to
prevent this. Also, in order to properly balance the world during the beta,
we may from time to time adjust the difficulty and gag experience levels
in the game. This may mean that you will lose abilities you once had.
</p>

<p align="right"><a href="#betaquest">Back to Beta Release Questions</a></p>

<p><h4>Game Answers</p></h4>

<p><i><b><a name="playonown"></a> Can I play Toontown on my own, or should I join up with others?</b></i>
<p>Toontown is a multiplayer game -- there is no single-player version. You can, however, wander the streets, play Trolley Games, and play in Toontown as a Toon on your own. But it's more fun if you share the adventure. </p>

<p><i><b><a name="howmany"></a> How many people can play Toontown?</b></i></p>
<p>Toontown is designed as a massively multiplayer game. There's enough room here for you and all your friends.</p>

<p><i><b><a name="getaround"></a> Is there some way to get around Toontown other than walking?</b></i></p>

<p>After completing
some ToonTasks, you will be able to teleport to other playgrounds by
clicking on their pictures on the map in your Shticker Book.  You can
also use your Shticker Book to teleport you back to the playground you
last visited.  Finally, you can teleport to any of your friends in the
game by clicking on their names in your Friends List, and then
clicking on the "Go To" button.</p>

<p><i><b><a name="night"></a> Is there night and day in Toontown?</b></i></p>
<p>Mostly the sun shines in Toontown, but Dreamland is where Toons go to sleep.</p>

<p><i><b><a name="manual"></a> Is there a Toontown manual or guide?</b></i></p>
<p>Toontown starts with some help on how to play, so you don't really need a manual or guide.</p>

<p><i><b><a name="cheat"></a> What will happen to someone who tries to cheat or who doesn't follow the rules?</b></i></p>
<p>When you sign in to Toontown the first time you play, you will see options for "I Accept" or "I Do Not Accept."  By clicking on "I Accept" you agree to abide by Toontown's rules.  This means no cheating and no bothering other players.  Toontown guests who do not follow these rules and guidelines may be asked to leave Toontown, and may even be banned from ever returning.</p>
<p align="right"><a href="#gamequest">Back to Game Questions</a></p>

<p><h4>Toon Answers</p></h4>
<p><i><b><a name="create"></a>How do I create my Toon?</b></i></p>
<p>When you start into Toontown, the first step will be to create your Toon -- it's easy and fun, so just follow directions from your host, Mickey Mouse.</p>

<p><i><b><a name="toonname"></a>Can I name my Toon anything?</b></i></p>
<p>Yes, within reason.  Toon names are limited to a maximum number of 
characters, and also to three words.  When you see someone putting their
creativity to ill use, you may want to tell us about their 
<a href="badNames.php">bad name</a> on their toon.</p>

<p><i><b><a name="howmanytoons"></a>How many Toons can I have?</b></i></p>
<p>Each account can have six Toons.  You can delete one of these six, if you would like to create another.  But once you delete a Toon, everything associated with that Toon -- clothes, Gags, points earned -- will be erased.</p>

<p><i><b><a name="clothes"></a>Can I get special clothes for my Toon?</b></i></p>
<p>You can dress your Toon lots of different ways during Create A Toon in Toontown.</p>
 
<p><i><b><a name="givetoon"></a>Can I give my Toon to someone else?</b></i></p>
<p>No.  Your Toon is yours and cannot be traded.</p>

<p><i><b><a name="bothonline"></a>If I have more than one Toon, can they both be active in Toontown at the same time?</b></i></p>
<p>No. You can only have one Toon at a time active in Toontown.</p>

<p><i><b><a name="controltoon"></a>How do I control my Toon? With a keyboard, mouse, joystick, or a combination?</b></i></p>
<p>Use the arrow keys on the keyboard to move your Toon around Toontown, and use the mouse to click on screen options or menu choices. You don't need a joystick to play.</p>

<p><i><b><a name="view"></a>How do I change my viewpoint?</b></i></p>
<p>The Tab key on your keyboard will let you switch your camera view
of Toontown.  You can also hold down the page up and page down keys to
temporarily look up and down.</p>

<p><i><b><a name="tooninfo"></a>How do I get information about my own Toon?</b></i></p>
<p>On the lower left corner of the screen, you'll see a Laffmeter that shows you how healthy your sense of humor is.  Also, the Shticker Book, which appears in the lower right corner of the screen, has information about your accomplishments in the game, and what kind of Gags you have earned to fight the Cogs. You can click on the corners of the Shticker Book to flip through the pages.</p>

<p><i><b><a name="othertooninfo"></a>How do I get information about another Toon?</b></i></p>

<p>You can click on a Toon or a Toon's name to learn more about that
Toon.  The left-arrow button in the lower left corner of the Toon
panel will bring up further details about that Toon.</p>

<p><i><b><a name="namesappear"></a>What are those names that appear on the screen -- are they other players?</b></i></p>
<p>Names for other players will appear on the screen to let you know if
someone is nearby. Arrows will also show nearby Toons and Cogs.</p>

<p><i><b><a name="savegame"></a>How do I save my game?</b></i></p>
<p>Everything about your Toon -- looks, points earned, gags bought, Cogs defeated -- is automatically saved, so there's no need for you to do anything. This is done for you.</p>

<p><i><b><a name="exitgame"></a>How do I exit Toontown, and will my Toon still be there when I come back?</b></i></p>
<p>At the lower right corner of the screen, you'll see your Shticker
Book icon.  Click this to open the book, and then turn to the first
page, which is called "Options," and from there click "Exit Toontown." You
can also access this page by hitting the Escape key on your keyboard.
When you come back, your Toon or Toons will be waiting for you.</p>

<p align="right"><a href="#techquest">Back to Toon Questions</a></p>


<p><h4>Screen Answers</p></h4>
<p><i><b><a name="laffmeter"></a>What's a Laffmeter?</b></i></p>
<p>The Laffmeter appears on the lower left corner of the screen and
shows you how healthy your sense of humor is.  The Laffmeter will go
down if you are hit by Cogs during a battle.  Other Toons can help you
regain your full sense of humor by amusing you with one of the props
from their Toon-up Track. Your Laffmeter will also gradually go up
while you are in any playground or playing Trolley Games.</p>

<p><i><b><a name="book"></a>What's a Shticker Book, and what's inside it?</b></i></p>
<p>The Shticker Book appears on the lower right corner of your screen. This is your main guide, and it includes the following:
<ul>
<li>Options - enables you to set game controls and exit</li>
<li>Districts - lists the active Toontown Districts and the population
for the district you are in</li>
<li>Toontown Map - shows the areas of Toontown you've seen and allows
you to go back to the last playground you were in. As you complete
ToonTasks, you will be able to teleport directly to any playground by
clicking on its picture.</li>
<li>Gags - shows the Toon props you've traded Jelly Beans for and how
much more experience you need until you get the next gag in each track.</li>
<li>ToonTasks - shows the tasks you are currently working on</li>
</ul>
<p><i><b><a name="quicktalker"></a>How do I Chat?</b></i></p>
<p>Toontown has a point-and-click chat system called the ToonTalker
that allows players to form sentences by selecting words from preset
lists.  This is the preferred way to chat in Toontown.</p>

<p>It is also possible to chat by simply typing sentences using the
keyboard, but because Toontown is designed to be a safe place for
kids, other players you meet in the game won't be able to understand
you when you chat in this way.  However, you can get a special Secret
to give to your real-life friends that will allow you to understand
each other when you chat using the keyboard; see below.</p>

<p><i><b><a name="friendslist"></a>How do I use the Friends List?</b></i></p>

<p>The Friends List appears in the upper right corner of the screen.
Click on it to see a list of your friends.  You can click on a Toon's
name for information about that Toon or to add that person to your
Friends List.  Once someone is on your Friends List, you can teleport
to that person, or call that friend to help you out in a battle, or
remove him or her from your Friends List if you choose.</p>

<p>Another way to add a Toon to your Friends List is to exchange a
Secret with him or her; if you do this, you become "secret friends",
and can chat freely with each other using the keyboard.  See
below.</p>

<p><i><b><a name="secrets"></a>How do I chat freely with my real-life
friends?  What's this about "Secrets"?</b></i></p>

<p>At the top of your friends list, there's a button called "Secrets".
Click on this button to open a panel that will offer you the chance
either to get a new Secret, or to type in a Secret from someone
else.</p>

<p>A Secret is a temporary code word that is assigned to you and to
you alone.  You use it to prove you know someone else in real life.
Each time you get a Secret, a new random code will be assigned to you.
Tell this Secret to your real-life friend, and when your friend logs
into Toontown and enters the Secret, the two of you will be marked as
"secret friends", and you will be able to chat freely with each other
using the keyboard.</p>

<p>Each Secret can only be entered by one real-life friend, and then
it goes away.  If you want to become secret friends with multiple
people, you should get several Secrets, one for each friend.</p>

<p>Your friend only has 48 hours to enter your Secret.  If he or she
doesn't enter it in that time, it goes away, and you will have to get
another one.  But once you become secret friends, you'll stay that
way forever until one of you decides to break the friendship.</p>

<p align="right"></p><a href="#screenquest">Back to Screen Questions</a></p>


<p><h4>Gag, Trolley, Toon Task Answers</p></h4>
<p><i><b><a name="trolleydo"></a>What does the Trolley do in
Toontown, and why would I want to ride it?</b></i></p>

<p>In the playground of each Toontown Neighborhood there is a Trolley Station. The Trolley takes you to the Trolley Games, fun games of skill and chance.  You can play to win Jelly Beans that you can trade for Gags to use against the Cogs.</p>

<p><i><b><a name="gags"></a>What are Gags, how do I get them, and what do I do with them?</b></i></p>
<p>Gags are bits of physical humor that you can use to "lighten up" the Cogs and make them disappear.  There are seven Gag Types to master, and each type has six different levels of Gags.  As you advance in the game, you get more types of Gags to earn and use.</p>

<p><i><b><a name="stealgags"></a>Can any other Toon steal my Gags?</b></i></p>
<p>No, your stuff is yours.  You only lose your stuff if you lose a battle with a Cog and get sent back to a safe playground.</p>

<p><i><b><a name="tradegags"></a>Can I trade Gags with other Toons?</b></i></p>
<p>No, your stuff is yours.</p>

<p><i><b><a name="emptytoontask"></a> My Toon Task listing contains an empty entry.  How can I fill it?</b></i></p>
<p>Visit any shop owner and they should be able to find something for you to do.</p>

<p><i><b><a name="whatsabugle"></a>My ToonTask was 'Deliver 2 Bugles to Fifi'.  What is a Bugle and how do I get it?</b></i></p>
<p>A Bugle is a brass wind instrument somewhat shorter than a trumpet and lacking keys or valves.  It is one of the sound gags and you probably
dont have access to it yet, so you should work on improving your sound skills so you can acquire one!  In general, 
if you dont recognize an item you are asked to deliver, it is a gag you need to improve your skills to be able to use.</P>

<p><i><b><a name="fruitpietask"></a>My ToonTask was 'Deliver 2 Fruit Pies to Flippy'.  I walked up to the counter and Flippy said 'Keep up the good work!', but didn't reward me!</b></i></p>
<p>You probably tried to deliver 2 Fruit Pie Slices to Flippy, not 2 Fruit Pies, which are a separate higher-level gag.  Similarly, 'Cream Pie Slices' are a different gag than 'Cream Pies'.</P>

<p align="right"><a href="#gagquest">Back to Gag, Trolley, and Toon Task Questions</a></p>


<p><h4>Cog Answers</p></h4>
<p><i><b><a name="cogs"></a>What are Cogs, and what are they doing here?</b></i></p>
<p>Cogs are part of an invention that has gone terribly wrong. They are turning Toontown into a black-and-white metropolis of skyscrapers and businesses -- it is up to every Toon to find a way to battle them and ultimately stop them.</p>

<p><i><b><a name="cogtypes"></a>What is a 'Sellbot', 'Cashbot', etc?</b></i></p>
<p>Sellbots are cogs that are experts in the art of marketing.  The 'Telemarkter' is one example of a Sellbot. 
Cashbots are primarily concerned with monetary issues.  If you aren't sure what type of Cog you are dealing with,
you can click on one of them in streets and it will give you more information about which Cog "family" they belong to.
</p>

<p><i><b><a name="battle"></a>How do I keep the Cogs from taking over Toontown?</b></i></p>
<p>Robot Cogs are thwarted by your using Gags on them.  You can fight Cogs alone, or with a group of Toons. Once in battle you can:</p>
<ul><li>Attack - use a Gag on the Cog</li>
<li>Toon-up - use a Gag to refill another Toon's Laffmeter in the battle</li>
<li>Ask for help - invite friends to help battle</li>
<li>Run - teleport away</li></ul></p>

<p><i><b><a name="cogbuilding"></a>How can I tell what kind of Cogs work in a Cog building?</b></i></p>
<p>Hang around the building awhile and notice the Cogs that go in and out.  Also, notice that not all Cog buildings look alike.</P>

<p><i><b><a name="gagcombo"></a>Does the gag I use affect other toon's gag attacks?</b></i></p>
<p>There are unique combinations of Gags that are more effective.  For example, if you use a Trap Gag, such as a banana peel, you'll want to use a Lure Gag such as money to get the Cog to step forward and slip on the peel.</p>

<p><i><b><a name="secretbattle"></a>Are there secret battle sequences that will earn me extra points?</b></i></p>
<p>If multiple Toons select the same Gag, the combination makes for a more powerful attack.</p>

<p><i><b><a name="lose"></a>What happens if I lose a battle?</b></i></p>
<p>If your Laffmeter hits zero, your Toon is sent to the nearest playground
for recovery. You will also lose all the Gags you were carrying. After you
lose a battle, hang around the playground until you heal and play Trolley
Games to restock your Gag inventory.</p>

<p><i><b><a name="die"></a>Can my Toon ever die?</b></i></p>
<p>No.  Toons never die. They just lose their sense of humor for a little while.</p>

<p><i><b><a name="heal"></a>How do I "heal" my Toon or refill my Laffmeter?</b></i></p>

<p>Another Toon can use a Toon-up Gag on you when in battle.  You can
also collect special treasures in the playgrounds, like starfish in
Donald's Dock, to fill up your Laffmeter.  Finally, your Laffmeter
will slowly fill back up all by itself whenever you are in a
playground or are playing Trolley Games.</p>

<p align="right"><a href="#techquest">Back to Cog Questions</a></p>


<p><h4>Chat Answers</p></h4>
<p><i><b><a name="howtotalk"></a>How do I talk with other players?</b></i></p>

<p>All players can use the ToonTalker, a point-and-click chat system
that lets you form sentences by selecting words.  ToonTalker messages
will appear in a blue chat bubble over your head.</p>

<p>You can also chat by simply typing sentences using the keyboard.
These chat messages will appear in a white chat bubble over your head.
However, because Toontown is designed to be a safe place for kids,
other players you meet in the game won't be able to understand you
when you chat in this way, but see the section about making <a
href="#secrets">secret friends</a>.


<p><i><b><a name="hearsomething"></a>What's happening when another Toon "talks" and I hear is something that doesn't make sense?</b></i></p>

<p>The other player is trying to chat using the keyboard, but you are
not secret friends with him or her and so you can't understand what
they're saying.  All you will hear is meowing or barking (or whatever
sound is appropriate to the animal type the Toon is).</p>

<p>If the other player appears to be addressing you, he or she is
confused.  Use the ToonTalker to explain to him or her that you can't
understand.</p>

<p><i><b><a name="filter"></a>Is there a swear word filter in Toontown?</b></i></p>
<p>Yes.  Toontown is a happy place that shouldn't be befouled with bad language.  
You can type it on your keyboard, but other toons wont see it. Of course, it is impossible to swear with the ToonTalker
anyway.</p>

<p><i><b><a name="talktodisney"></a>Can I talk to Mickey, Donald, and other Disney Toons?</b></i></p>
<p>Sure!  Just chat with them as you would with any Toon in Toontown.</p>

<p><i><b><a name="seeasay"></a>When my Toon says something, how will others see it?</b></i></p>

<p>Anything that your Toon says appears in a cartoon speech bubble
over your head.  Other Toons near to you can see what you say,
especially if you use the ToonTalker to chat.</p>

<p>If you chat using the keyboard, other Toons will probably not be
able to understand what you are saying.  You should use the
ToonTalker, unless you are talking to your <a href="#secrets">secret
friends</a>.

<p><i><b><a name="meetup"></a>How do I meet up with a friend?</b></i></p>
<p>If you know your friend is online in Toontown, use the Friends List to
click on that person's name and "Go To" that location. Your Friends List
will tell you if any of your friends are online -- it keeps you informed
about who is currently playing and who isn't. If you know a friend in the
real world, get a <ahref="#secrets">secret code</a> to give to him or
her. This will automatically add their Toon to your Friends List and allow
you to chat with the keyboard.</p>

<p><i><b><a name="safe"></a>How can I keep information about myself safe from others?</b></i></p>
<p>Follow these tips ANYTIME you go online:</p>
<p><h3>DISNEY'S INTERNET SAFETY TIPS</p></h3>
<ol><li>Keep your passwords private, even from your best friend! Your online service will never ask for them, so neither should anyone else.</li>
<li>Use only your Toon Name when chatting. Never give out personal information such as your name, address, or phone number.</li>
<li>Always delete unknown e-mail attachments without opening them. They can contain destructive viruses.</li>
<li>Remember that nothing you write on the Web is completely private -- including e-mail. So be careful and think about what you type and who you tell.</li>
<li>People are not always as nice, cute, or funny as they may sound online. Never make plans to meet an online friend in person.</li></ol></p>

<p align="right"><a href="#techquest">Back to Chat Questions</a></p>
<br></font>

</td></tr></table>
<p/>
<div align="CENTER">
<table border=0 cellpadding=0 cellspacing=0>
    <tr>
      <td>
        <div align="center"><font face="verdana, arial, helvetica, sans-serif" size="1">
          <div align="CENTER" style="margin-top:3px; font-size:10pt;"><a href="mailto:toontown@disney.com">
            Contact Us</a>
&nbsp;&nbsp;|&nbsp;&nbsp; 
            <a href="http://disney.go.com/legal/privacy_policy.html" target="_top">
            Privacy Policy</a>
&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="http://disney.go.com/legal/internet_safety.html">Internet
            Safety</a>
</div>
            <div align="CENTER" style="margin-top:5px; font-size:8pt;">Use
            of this site signifies your agreement to the 
            <a href="http://disney.go.com/legal/conditions_of_use.html">terms
            of use</a>.</div>
            <div align="CENTER" style="margin-top:3px; font-size:8pt;">&copy;
            Disney. All rights reserved.</div>
          </font></div>
      </td>
    </tr>
  </table>
  <p/>
<!-- Copyright 2001, Walt Disney Imagineering, all rights reserved. -->
</div>
</td>
<td valign=top align=left><img border=0 width=47 height=438 src="images/cloud_rightTrim2.jpg"></td>
<td valign=top align=left><img border=0 width=74 height=438 src="images/cloud_rightBar.jpg"></td>

</tr>

</table>
</font>
</body>
  </html>
