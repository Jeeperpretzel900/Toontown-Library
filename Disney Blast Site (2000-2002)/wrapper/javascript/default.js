
function openVin(name)
{
launch = window.open(name,'launch','height=550,width=750,scrollbars=yes,resizable=yes,toolbars=no')
if (parseInt(navigator.appVersion) >= 4) { launch.window.focus(); }
}


// stop browsers from crashing on errors
function stopError() {
        return true;
}

function writeFooter(fontColor,fontSize){
//color = "#ffffff"
if(fontColor != false){
color = fontColor
size = fontSize
}
else {
size = "1"
color = "#ffffff"
}
if(parseInt(size) <= 0){
size = "1"
}
// Tags Start
tags = new Array()
tags[0]=''
tags[1]='<center>'
tags[2]=''
tags[3]=''

tags[4]='<font color="' + color + '"size="' + size + '">'

tags[5]='<a href="http://disney.go.com/guestservices/disney_blast.html" target="_top"><font color = "' + color + '">Guest Services</font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.dig.com/legal/wdig_privacy.html" target="_top"><font color = "' + color + '"><b>Privacy Policy</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://disney.go.com/legal/internet_safety.html"><font color = "' + color + '">Internet Safety</font></a><br>'
tags[6]=''
tags[7]=''
tags[8]='Use of this site signifies your agreement to the <a href="http://disney.go.com/investors/wdig/legal/terms.html"><font color = "' + color + '">terms of use</font></a>.'
tags[9]=''
tags[10]='<br>'
tags[11]=' &copy;Disney. All rights reserved.'
tags[12]=''
tags[13]=''
tags[14]='</font>'
tags[15]='</center>'
// Tags End

for(i=0;i<tags.length;i++){
document.write(tags[i])
}
document.write("<BR>")
}