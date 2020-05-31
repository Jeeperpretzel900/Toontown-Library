
function RunPrint()
{
    document.write('<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="640" HEIGHT="480" id="toon" ALIGN="">\n');
    document.write('<PARAM NAME=movie VALUE="index.swf">\n');
    document.write('<PARAM NAME=quality VALUE=high>\n');
    document.write('<PARAM NAME=bgcolor VALUE=#FFFFFF>\n');
    document.write('<EMBED src="index.swf" quality=high bgcolor=#FFFFFF WIDTH="640" HEIGHT="480" NAME="flashboard" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">\n');
    document.write('</EMBED>\n');
    document.write('</OBJECT>\n');
}
