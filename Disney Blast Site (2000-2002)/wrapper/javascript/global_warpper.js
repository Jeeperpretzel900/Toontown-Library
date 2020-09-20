
// XP Applet Code
function popUpWindow(){
window.location = "http://www.disneyblast.go.com/setup/sysreq.html"
}
headache = "ipt>"
appletSeed = '<Font Color = "#FFFFFF"><P>Unfortunately, your browser does not currently support java Applet. We recommmend you go to our <font color = "FFFFFF"><a href=javascript:appletMe()> Help page </a></font>, which may offer a solution to this problem.</FONT></p>'
//"<Script Language ='JavaScript'>window.location='http://www.disneyblast.go.com/setup/sysreq.html'</Scr" + "ipt>"
//
function appletMe(){
window.open("http://www.disneyblast.go.com/setup/xPage.html","Blast","height=460,width=640,scrollbars=yes,resizable=no,toolbars=no")
window.close()

}


// XP Applet Code End


basteMe = "http://www.disneyblast.go.com/wrapper/images/"
var csanzAgt=navigator.userAgent.toLowerCase();
var is_major = csanzAgt;
var is_ie5=((csanzAgt.indexOf("msie")!=-1)&& (is_major == 4)&&((csanzAgt.indexOf("msie 5.0")!=-1) ||(csanzAgt.indexOf("msie 5.5")!=-1)));


var checkAol = navigator.appVersion.indexOf("AOL")
var tslaB = 1
if (checkAol != -1)
{
var aolCheck = "aol"
}
else
{
var aolCheck = "other"
}

var OnTop=true;

	function FocusWin()
	{
	if (aolCheck == "aol")
	{
	}
	else
	{
	if (OnTop) setTimeout("parent.focus()",250)
	}
	}

function setOpen()
{
if (tslaB == 0)
{
}
else if (aolCheck == "aol")
{
var v = "b"
}

else if (csanzAgt.indexOf("msie 4.1")!=-1){

}
else if (csanzAgt.indexOf("msie 4.0")!=-1){

}

else if (opener)

{
parent.opener.window.document.club.SetVariable("thisName", "close")
}
else if (parent.opener)
{
parent.opener.window.document.club.SetVariable("thisName", "close")
}
bitzScore()
}
//dan code
winTaz = window.location
winTaz = winTaz.toString()
winTazI = winTaz.indexOf(".com") + 4
winTaz = winTaz.substr(winTazI)
winL = window.screen.height



function flashKnow()
{
if (aolCheck == "aol")
{
var v = "b"
}
else if (opener)
{
opener.window.document.club.SetVariable("thisName", "open")
}
else if (parent.opener)
{
parent.opener.window.document.club.SetVariable("thisName", "open")
}


}
//hitbox detect Start
var crew = document.title

var k = 2
var i = 0
var cI = crew.indexOf(">")

whom = crew.substr(cI +1)
var kI = whom.indexOf(">")

if(kI != -1)
{
whom = whom.substr(kI +1)
}
var test = "no"
var check = " "
shoe=whom
var t = whom.length
for(i=1;i<t;i++)
{
cr = shoe.substring(k-1,k)

if(cr.indexOf(" ") != -1 || cr.indexOf("-") != -1 ){


fool = shoe.substring(0,k-1) + "_" + shoe.substr(k)
shoe = fool
i=0
k=2
t=shoe.length
}
else if(cr.indexOf("&") !=-1)
{

fool = shoe.substring(0,k-1) + "and" + shoe.substr(k)
shoe = fool
i=0
k=2
t=shoe.length
}
else if(cr.indexOf("?") !=-1 || cr.indexOf("!") != -1 || cr.indexOf("'") !=-1 || cr.indexOf(">") != -1 || cr.indexOf(".") != -1)
{

fool = shoe.substring(0,k-1) + "" + shoe.substr(k)
shoe = fool
i=0
k=2
t=shoe.length
}


k=k+1

}
loc = window.location
loc = loc.toString()

if(loc.indexOf("blastjr") != -1)
{
typ = "MouseHouseJr"
}
else
{
typ = "Dome"
}
if(who.indexOf("games") != -1)
{
brd = "/Blast/Registered/" + typ + "/Games"
}
else if(who.indexOf("act") != -1)
{
brd = "/Blast/Registered/" + typ + "/Activities"
}
else if(who.indexOf("dtoons") != -1)
{
brd = "/Blast/Registered/" +typ + "/Stories"
}
else
{
brd = "/Blast/Registered/Seasonal/"
}
	wK = shoe
	iB = brd;
	
	
	
	var _pn=wK;								//page name(s)
	var _mlc=iB;           					//multi-level content category
	var _cp="null";                 							//campaign
	var _acct="DM510717H8BB38EN3;DM510612FMNS38EN3;DM51030813MR38EN3;DM5103083LCA38EN3";     //account number(s)
	var _pndef="title";             							//default page name
	var _ctdef="full";              							//default content category
	var _dlf="n";
	var _ptc="p";		//download filter
	var _elf="n";                   								//exit link filter
	var _epg="n";                   							//event page identifier
	var _hcv=65;                    							//code version
	var _mn="localagg";                     						//machine name
	var _gn="ehg-dig.hitbox.com";                   					//gateway name


// hitbox End

if(alter != true){
mapCor="<map name='Map'><area shape='rect' coords='487,19,543,69' href='javascript:parent.window.close()'></map>"

}
else{

}
<!--
// Bitz Addition Nov. 28th 2001
bitz = false
sp = ""
if(loc.indexOf("?") != -1){
bitzLoc = loc.substr(loc.indexOf("?") + 1) 
	if(bitzLoc.indexOf("bitz") != -1){
	sp = "_bitz"
	bitz = true
	bitzPoints = bitzLoc.substr(bitzLoc.indexOf("&") + 1)
	bitzPoints = parseInt(bitzPoints)
	}



}
function bitzScore(){
// put in flash, only html sollution
//alert(bitzPoints)
}


var contentTop = new Array()
contentTop[0] = "<body bgcolor='#000066' onUnload=setOpen() onLoad=flashKnow() TOPMARGIN=0 LEFTMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 vlink='#FFFF00'>"
contentTop[1] = "<table width='552' border='0' cellspacing='0' cellpadding='0' height='448'>"
contentTop[2] = "<tr>"
contentTop[3] = "<td height='87' width = '552'><img src='" + basteMe + who + sp + "_top.gif' width='560' height='87' usemap='#Map' border='0' ></td>"
contentTop[4] = "</tr>"
contentTop[5] = "<tr>"
contentTop[6] = "<td width='552'>"
contentTop[7] = "<table width='560' border='0' cellspacing='0' cellpadding='0'>"
contentTop[8] = "<tr>"
contentTop[9] = "<td width='12' height='345'><img src='" + basteMe + who + "_left.gif' width='15' height='355'></td>"
contentTop[10] = "<td width='532' valign='middle'><Center>"

var contentRear = new Array()
contentRear[0]="</Center></td>"
contentRear[1]="<td align='right' width='16' height='345'><img src='" + basteMe + who + "_right.gif' width='15' height='355'></td>"
contentRear[2]="</tr>"
contentRear[3]="</table>"
contentRear[4]="</td>"
contentRear[5]="</tr>"
contentRear[6]="<tr>"
contentRear[7]="<td width='552' height='15'><img src='" + basteMe + who +"_bottom.gif' width='560' height='15' ></td>"
contentRear[8]="</tr>"
contentRear[9]="</table>"+ mapCor








