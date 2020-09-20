tagOveride = true
//alert("before include");
//alert("local js");
//hitboxInclude = '<script Language="JavaScript" src="http://www.disneyblast.go.com/v3/hbe-11up.js"></scr' + 'ipt>'
hitboxInclude = '<script Language="JavaScript" src="http://hb.disney.go.com/stat/hbe-11up.js"></scr' + 'ipt>'
//alert("after include");

var _pn = my_pn;
var _mlc = my_mlc;
var _seg="";  // visitor segmentation
var _cmp="";  // campaign analysis - id
var _gp="";   // campaign analysis - goal page
var _cmpn=""; // campaign analysis - query name for id 
var _gpn="";  // campaign analysis - query name for goal page
var _cp="null";               // campaign
var _acct = "DM510717H8BB38EN3";          //account number(s)
var _pndef="title";                       //default page name
var _ctdef="full";                         //default content category
var _dlf="n";                               //download filter
var _elf="n";                               //exit link filter
var _epg="n";                             //event page identifier
var _mn="we19";                                    //machine name
var _gn="ehg-dig.hitbox.com";                             //gateway name
var _lp=location.protocol.indexOf('https')>-1?'https://':'http://';
var _hcv=68; 

//alert("before write");
document.write(hitboxInclude);

//alert("after write");
function BlastFlashHitbox(pn,mlc) {
	if (typeof _hbPageView == "function") {
  	 	_hbPageView(pn,mlc);
	}
}


//alert("blastHitbox");