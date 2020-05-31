function popupWin(url) {;
if (url.match("/campaign/toon_cm.html")) {
newwin = window.open('/campaign/toon_cm.html','onegai','height=480,width=640,status=yes,scrollbars=no,resizable=no');
newwin.moveTo(0,0);
newwin.focus();
}else if (url.match("/parents_printable/")) {
newwin = window.open('/parents_printable/','onegai','height=480,width=640,status=yes,scrollbars=no,resizable=no');
newwin.moveTo(0,0);
newwin.focus();
}else{
parent.top.location.href = url;
}
}
