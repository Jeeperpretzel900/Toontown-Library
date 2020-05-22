/*
 * jsBrwSniff v0.5
 *
 * A browser sniffer library
 * http://jsbrwsniff.sf.net
 *
 * Released under the GNU LGPL license
 * Author: Pau Garcia i Quiles <paugq AT users DOT sourceforge DOT net>
 *
 */

function getBrowser(obj) {
    var b=new Array("unknown", "unknown", "unknown", "unknown");

    (isEmpty(obj) ? brs=navigator.userAgent.toLowerCase() : brs=obj);

    if (brs.search(/opera[\/\s](\d+(\.?\d)*)/) != -1) {
    // Opera
        b[0]="opera";
        b[1]=brs.match(/opera[\/\s](\d+(\.?\d)*)/)[1];
        b[2]="opera";
        b[3]=b[1];
        return b;
    } else {
        b[0]="unknown";
        return b;
    }
}

// Return browser's (actual) major version or -1 if bad version entered
function getMajorVersion(v) {
    return (isEmpty(v) ? -1 : (hasDot(v) ? v : v.match(/(\d*)(\.\d*)*/)[1]))
}

// Return browser's (actual) minor version or -1 if bad version entered
function getMinorVersion(v) {
    return (!isEmpty(v) ? (!hasDot(v) ? v.match(/\.(\d*([-\.]\d*)*)/)[1] : 0) :
-1)
}

// Return operating system we are running on top of
function getOS(obj) {

    var os=new Array("unknown", "unknown");

    (isEmpty(obj) ? brs=navigator.userAgent.toLowerCase() : brs=obj);

    if (brs.search(/windows\sce/) != -1) {
        os[0]="wince";
        try {
            os[1]=brs.match(/windows\sce\/(\d+(\.?\d)*)/)[1];
        } catch (e) { }
        return os;
    } else if ( (brs.search(/windows/) !=-1) || ((brs.search(/win9\d{1}/) !=-1))
) {
        os[0]="win";
        if (brs.search(/nt\s5\.1/) != -1) {
            os[1]="xp";
        } else if (brs.search(/nt\s5\.0/) != -1) {
            os[1]="2000";
        } else if ( (brs.search(/win98/) != -1) || (brs.search(/windows\s98/)!=
-1 ) ) {
            os[1]="98";
        } else if (brs.search(/windows\sme/) != -1) {
            os[1]="me";
        } else if (brs.search(/nt\s5\.2/) != -1) {
            os[1]="win2k3";
        } else if ( (brs.search(/windows\s95/) != -1) || (brs.search(/win95/)!=
-1 ) ) {
            os[1]="95";
        } else if ( (brs.search(/nt\s4\.0/) != -1) || (brs.search(/nt4\.0/) ) !=
-1) {
            os[1]="nt4";
        }

        return os;
    } else if (brs.search(/linux/) !=-1) {
        os[0]="linux";
        try {
            os[1] = brs.match(/linux\s?(\d+(\.?\d)*)/)[1];
        } catch (e) { }
        return os;
    } else if (brs.search(/mac\sos\sx/) !=-1) {
        os[0]="macosx";
        return os;
    } else if (brs.search(/freebsd/) !=-1) {
        os[0]="freebsd";
        try {
            os[1] = brs.match(/freebsd\s(\d(\.\d)*)*/)[1];
        } catch (e) { }
        return os;
    } else if (brs.search(/sunos/) !=-1) {
        os[0]="sunos";
        try {
            os[1]=brs.match(/sunos\s(\d(\.\d)*)*/)[1];
        } catch (e) { }
        return os;
    } else if (brs.search(/irix/) !=-1) {
        os[0]="irix";
        try {
            os[1]=brs.match(/irix\s(\d(\.\d)*)*/)[1];
        } catch (e) { }
        return os;
    } else if (brs.search(/openbsd/) !=-1) {
        os[0]="openbsd";
        try {
            os[1] = brs.match(/openbsd\s(\d(\.\d)*)*/)[1];
        } catch (e) { }
        return os;
    } else if ( (brs.search(/macintosh/) !=-1) || (brs.search(/mac\x5fpowerpc/)
!= -1) ) {
        os[0]="macclassic";
        return os;
    } else if (brs.search(/os\/2/) !=-1) {
        os[0]="os2";
        try {
            os[1]=brs.match(/warp\s((\d(\.\d)*)*)/)[1];
        } catch (e) { }
        return os;
    } else if (brs.search(/openvms/) !=-1) {
        os[0]="openvms";
        try {
            os[1]=brs.match(/openvms\sv((\d(\.\d)*)*)/)[1];
        } catch (e)  { }
        return os;
    } else if ( (brs.search(/amigaos/) !=-1) || (brs.search(/amiga/) != -1) ) {
        os[0]="amigaos";
        try {
            os[1]=brs.match(/amigaos\s?(\d(\.\d)*)*/)[1];
        } catch (e) { }
        return os;
    } else if (brs.search(/hurd/) !=-1) {
        os[0]="hurd";
        return os;
    } else if (brs.search(/hp\-ux/) != -1) {
        os[0]="hpux";
        try {
            os[1]=brs.match(/hp\-ux\sb\.[\/\s]?(\d+([\._]\d)*)/)[1];
        } catch (e) { }
        return os;
    } else if ( (brs.search(/unix/) !=-1) || (brs.search(/x11/) != -1 ) ) {
        os[0]="unix";
        return os;
    } else if (brs.search(/cygwin/) !=-1) {
        os[0]="cygwin";
        return os;
    } else if (brs.search(/java[\/\s]?(\d+([\._]\d)*)/) != -1) {
        os[0]="java";
        try {
            os[1]=brs.match(/java[\/\s]?(\d+([\._]\d)*)/)[1];
        } catch (e) { }
        return os;
    } else if (brs.search(/palmos/) != -1) {
        os[0]="palmos";
        return os;
    } else if (brs.search(/symbian\s?os\/(\d+([\._]\d)*)/) != -1) {
        os[0]="symbian";
        try {
            os[1]=brs.match(/symbian\s?os\/(\d+([\._]\d)*)/)[1];
        } catch (e) { }
        return os;
    } else {
        os[0]="unknown";
        return os;
    }
}

// Return Gecko version
function getGeckoVersion() {
    return brs.match(/gecko\/([0-9]+)/)[1];
}

// Return MSIE version
function getMSIEVersion() {
    return brs.match(/msie\s(\d+(\.?\d)*)/)[1];
}

// Return full browser UA string
function getFullUAString(obj) {
    (isEmpty(obj) ? brs=navigator.userAgent.toLowerCase() : brs=obj);
    return brs;
}

// Is Flash plug-in installed?
function hasFlashPlugin(obj) {

    (isEmpty(obj) ? brs=navigator.userAgent.toLowerCase() : brs=obj);

    var f=new Array("0", "0");
    var brwEng=getBrowser(obj)[2];

    //if (getBrowser(obj)[2]!="msie") {
        if ( (brwEng=="gecko") || (brwEng="opera") || (brwEng="khtml") || (brwEng="mozold")) {
        // Non-IE Flash plug-in detection

        if (navigator.plugins && navigator.plugins.length) {
            x = navigator.plugins["Shockwave Flash"];
            if (x) {
                f[0] = 2;
                if (x.description) {
                    y = x.description;
                    f[1] = y.charAt(y.indexOf('.')-1);
                }
            } else {
                f[0] = 1;
            }
            if (navigator.plugins["Shockwave Flash 2.0"]) {
                f[0] = 2;
                f[0] = 2;
            }
        } else if (navigator.mimeTypes && navigator.mimeTypes.length) {
            x = navigator.mimeTypes['application/x-shockwave-flash'];
            if (x && x.enabledPlugin) {
                f[0] = 2;
            } else {
                f[0] = 1;
            }
        }

   return f;

  } else if (brwEng=="msie") {
      // IE flash detection.
       for(var i=7; i>0; i--) {
           try {
               var flash = new ActiveXObject("ShockwaveFlash.ShockwaveFlash." + i);
               f[1] = i;
               break;
               //return;
           } catch(e) { }
       }

       if (f[1]>0) {
           f[0]=2
       } else {
           f[0]=1
       }
   return f;
   } else {
       f[0]=0;
       f[1]=0;
       return f;
   }
}

/* FOR INTERNAL USE ONLY. THIS FUNCTIONS ARE SUBJECT TO CHANGE, DON'T TRUST THEM */
// Is input empty?
function isEmpty(input) {
    return (input==null || input =="")
}

// Does this string contain a dot?
function hasDot(input) {
    return (input.search(/\./) == -1)
}
/* END OF FOR INTERNAL USE ONLY FUNCTIONS */
