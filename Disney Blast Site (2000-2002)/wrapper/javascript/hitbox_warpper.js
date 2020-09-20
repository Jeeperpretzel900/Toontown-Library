//Main Events
tagOveride = false
// XP Applet Code
function popUpWindow(){
window.open("http://www.disneyblast.go.com/setup/sysreq.html","blast","width=562,height=458")
}
appletSeed = '<Script Language = "JavaScript">window.open("http://www.disneyblast.go.com/setup/sysreq.html","blast","width=562,height=458")</Scr' + 'ipt>'
//'<Font Color = "#FFFFFF"><P>Unfortunately, your browser does not currently support java Applet. The <font color = "FFFFFF"><a href="http://disney.go.com/help/software_center/jvm.html"> link </a></font>will take you to our Help page, where you might find the solution to this problem.</FONT></p>'

function appletMe(){
window.open("http://disney.go.com/help/software_center/jvm.html","Blast")
opener.window.close()
window.close()
}

function SetHitBox(content,page){

}

// redirect location
//lockWindow = "http://blast.online.disney.go.com:6090/dynamic/blast/ExitBlast"
// lock feature
// isp

var thp_isp = parent.document.location.search

var thp_isp = thp_isp.toString()
var thp_isp = thp_isp.substr(1)
var thp_ispAr = thp_isp.split("&")
var out

function ThirdParty(srch){

for(i=0;i<thp_ispAr.length;i++){
var ax = thp_ispAr[i].split("=")
out = thp_ispAr[i].split("=")
outPut = "default"

	if(out[0] == srch){
		outPut = out[1]
		break
	}

}

return outPut
}


var newwin;
var appVersion = navigator.appVersion
var appName = navigator.appName
var checkAol = navigator.appVersion.indexOf("AOL")
var blast = 1
who = "features"
append = ""
if(parent.window.length != 0){
kiteMe = parent.window.location
}
else{
kiteMe = window.location
}

kiteMe = kiteMe.toString()
kiteIn = kiteMe.indexOf("?")


if(kiteIn != -1){
kiteMe = kiteMe.substr(kiteIn)
if(kiteMe.indexOf("index=aol") != -1){

append = "indexAol.html"
}
if(kiteMe.indexOf("nav=dome") != -1){
append = append + "nav=dome"
}
else if(kiteMe.indexOf("nav=mhjr") != -1){
append = append + "nav=mhjr"
}
// added else if below for christopher robin's house
else if(kiteMe.indexOf("nav=pooh") != -1){
append = append + "nav=mhjr&jr=pooh"
}
else if(kiteMe.indexOf("nav=cast") != -1){
append = append + "nav=mhjr&jr=castle"
}
}
append = "?blast_isp=" + ThirdParty("blast_isp") + "&" + append
//Ported from Index2.html
<!--
if(navigator.appName.indexOf("Micro") != -1) { iamlockable = true }

leavePath = "http://register.go.com/blast/exitblast/exit?goto=exitblast&step=2"
//lock = false

//if(iamlockable == true) {
//if (parent.opener){
//leavePath = parent.opener.leavePath }
//}
//else {
//if(opener){ leavePath = opener.leavePath }
//}

function redirect(){
if(iamlockable == true) {
if (parent.opener){ parent.opener.fullWin() }
}
else {
	if(opener) { opener.fullWin() }
	}

}
function lockBlast(val){

if(val == 1){
locked = true
	if(iamlockable == true) {
		if(parent.opener){ parent.opener.unLock(1)}
	  }
	else{
		if(opener) { opener.unLock(1)}
		}
		}
}
<!-- //Inserted May 2, 2002
function UnLockBlastAndExit(){
	if(iamlockable == true) {
		if(parent.opener){ parent.opener.unLock(0); parent.window.close()}
	  }
	else{
		if(opener) { opener.unLock(0); window.close()}
		}
}


function JSExit(){
	var left = (screen.width - 552) / 2;
	var top = (screen.height - 450) / 2;
    var wint = (screen.height - 552) / 2;
    var winl = (screen.width - 450) / 2;
all = "width=562,height=458,top="+wint+",left="+winl+""
win = window.open(leavePath,'LogOut',all)

}
//-->


if(window.length == 1){
	if(opener){ locked = opener.locked }
	}
else {
	if(parent.opener) { locked = parent.opener.locked }
	}

function featureLock(){

if(locked == true){ redirect() }
else {  }
}

function featureTransition(){
locked = false
}


function featureExit(){
//alert("yo")
//alert(opener.lock)
	if(lock == true){ jsExit() }
	else { window.close() }

}


//-->


if (checkAol != -1)
{
var aolCheck = "aol"
}
else
{
var aolCheck = "other"
}

if (aolCheck == "aol")
{
appThis = "aol"
}
else if (parseFloat(navigator.appVersion) >= 4.05 && navigator.appName == "Netscape")
{
var appThis = "netscape";
}
else if (navigator.userAgent.indexOf("MSIE")!=-1)
{
var appThis = "ie";
}
else
{
appThis = "netscape"
}

function openVin(name)
{
launch = window.open(name,'launch','height=460,width=670,scrollbars=yes,resizable=no,toolbars=no')
if (parseInt(navigator.appVersion) >= 4) { launch.window.focus(); }
}

function launchwin(winurl,winname,winfeatures)
{

        newwin = window.open(winurl,winname,winfeatures);

}
function blatMe(){
	featureTransition()
var fl = parent.window.length

if (appThis == "netscape")
{
	if(fl != 0){
	parent.location = "http://www.disneyblast.go.com/homepage/index2.html" + append
	}
	else{
	window.location = "http://www.disneyblast.go.com/homepage/index2.html" + append
	
	}
	
}
else
{
parent.window.location = "http://www.disneyblast.go.com/homepage/index.html" + append
}
}


hitboxCode = ""

/////////////////////////////////////////
// start block for msn 
function ispLocMe(cookiename){
var result = null;
var myCookie = " " + document.cookie + ";";
var searchName = " " + cookiename + "=";
var startOfCookie = myCookie.indexOf(searchName);
var endOfCookie;
	if (startOfCookie != -1){
	startOfCookie += searchName.length;
	endOfCookie = myCookie.indexOf(";", startOfCookie);
	var result = myCookie.substring(startOfCookie, endOfCookie);
	}
return result
}
function chkIspLoc(){
	if (ispLocMe("blast_isp") == "DisMsn") {
		if (parent.window != -1){
  			parent.window.moveTo(0,0);
  		} else {
  	moveTo(0,0);
  	}
	document.focus();
	}
}
chkIspLoc();
// end block for msn
/////////////////////////////////////////////
