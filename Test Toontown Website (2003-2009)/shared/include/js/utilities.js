function setFocus(id){
  document.getElementById(id).focus()
}


function checkOpera(agent){

  var b=new Array("-1", "-1");//unknown

  if (agent)
    userAgent = agent.toLowerCase();
  else
    userAgent = navigator.userAgent.toLowerCase();

  if (userAgent.search(/opera[\/\s](\d+(\.?\d)*)/) != -1) {
    // Opera
    b[0]="Opera";
    b[1]=userAgent.match(/opera[\/\s](\d+(\.?\d)*)/)[1];
    return b;
  } 
  else{
    return b;      
  }
}



function getWindowsOS(agent){

    var os=new Array("-1", "-1");//unknown

    if (agent)
      userAgent = agent.toLowerCase();
    else
      userAgent = navigator.userAgent.toLowerCase();						

    if (userAgent.search(/windows\sce/) != -1) {
        os[0]="wince";
        try {
            os[1]=userAgent.match(/windows\sce\/(\d+(\.?\d)*)/)[1];
        } catch (e) { }
        return os;
    } else if ( (userAgent.search(/windows/) !=-1) || ((userAgent.search(/win9\d{1}/) !=-1))
) {
        os[0]="win";
        if (userAgent.search(/nt\s5\.1/) != -1) {
            os[1]="Windows XP";
        } else if (userAgent.search(/nt\s5\.0/) != -1) {
            os[1]="Windows 2000";
        } else if ( (userAgent.search(/win98/) != -1) || (userAgent.search(/windows\s98/)!=
-1 ) ) {
            os[1]="Windows 98";
        } else if (userAgent.search(/windows\sme/) != -1) {
            os[1]="Windows ME";
        } else if (userAgent.search(/nt\s5\.2/) != -1) {
            os[1]="Windows 2003 Server";
        } else if ( (userAgent.search(/windows\s95/) != -1) || (userAgent.search(/win95/)!=
-1 ) ) {
            os[1]="Windows 95";
        } else if ( (userAgent.search(/nt\s4\.0/) != -1) || (userAgent.search(/nt4\.0/) ) !=
-1) {
            os[1]="Windows NT4";
        }

        return os;
    } 
    else{
      return os;//unknown
    } 

}

function popVideo (url) {
  //pop flash video (FLV)
  toonVid = window.open (url, 'Toontown', 'width=400,height=600');
}

function popPlayersGuide (url) {
  playersGuide = window.open (url, "Player's Guide", 'width=460,height=540,resizable=0,scrollbars=1');
  playersGuide.focus();
}

