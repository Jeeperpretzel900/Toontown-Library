<!--
function cookieVal(cookieName) {
   thisCookie = document.cookie.split("; ");
      for (i=0; i<thisCookie.length; i++) {
         if (cookieName == thisCookie[i].split("=")[0]) {
            return thisCookie[i].split("=")[1];
         }
      }
   return "Direct" //default value
}

dcdnArray = [];
dcdnArray["direct"] = "http:\/\/adisneyblast.go.com\/v3";
// JAC 06/08/05 - temporary change to workaround dummy GREEN - GoAuth problem
 dcdnArray["comcast"] = "http:\/\/s.disneyblast.go.com\/v3";
// dummy green issue is resolved. 
//dcdnArray["comcast"] = "http:\/\/adisneyblast.go.com\/v3";

function getProdIDByDCDN() {
   if (cookieVal("DCDN").toLowerCase() == "comcast") {
      return '<PARAM name="ProductID" value="blastcomcast">';
   } else {
      return '<PARAM name="ProductID" value="blastdirect">';
   }
}
//-->