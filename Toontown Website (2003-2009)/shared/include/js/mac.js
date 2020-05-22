
function getAppleWebKit() {
			
  // String found if this is a AppleWebKit based product
  var kitName = "applewebkit/";
  var tempStr = navigator.userAgent.toLowerCase();
  var pos = tempStr.indexOf(kitName);
  var isAppleWebkit = (pos != -1);
		
  if (isAppleWebkit) {
    // Grab the version
    var kitVersion = tempStr.substring(pos + kitName.length,tempStr.length);
    kitVersion = kitVersion.substring(0,kitVersion.indexOf(" "));
    //alert("Congratulations!\n You are using AppleWebKit version : " + kitVersion);
    return kitVersion;	
  }
  else {
    //alert("Bummer\n You are not using AppleWebKit.");
    return -1; 
  }
}



function getSafariFromWebKit(webKit){

  //These values are based on from matrix:
  //http://developer.apple.com/internet/safari/uamatrix.html

  var safari;  
    
  switch(webKit)
  {
    //Begin Mac OS X 10.2.x (Jaguar)
    case '85.7':
      safari = '1.0';
      break;
    case '85.8.2':
      safari = '1.0.3';
      break;
    case '85.8.5':
      safari = '1.0.3';
      break;
    //End Mac OS X 10.2.x (Jaguar)


    //Begin Mac OS X 10.3.x (Panther)
    case '100':
      safari = '1.1';
      break;
    case '125.2':
      safari = '1.2.2';
      break;
    case '125.4':
      safari = '1.2.3';
      break;
    case '125.5':
      safari = '1.2.3';
      break;
    case '125.5.5':
      safari = '1.2.4';
      break;
    case '125.5.6':
      safari = '1.2.4';
      break;
    case '125.5.7':
      safari = '1.2.4';
      break;
    case '312.1':
      safari = '1.3';
      break;
    case '312.1.1':
      safari = '1.3';
      break;
    case '312.5':
      safari = '1.3.1';
      break;
    case '312.5.1':
      safari = '1.3.1';
      break;
    case '312.8':
      safari = '1.3.2';
      break;
    //End Mac OS X 10.3.x (Panther)

    //Begin Mac OS X 10.4.x (Tiger)
    case '412':
      safari = '2.0';
      break;    
    case '412.6':
      safari = '2.0';   
      break;
    case '412.6.2':
      safari = '2.0';   
      break;
    case '412.7':
      safari = '2.0.1';   
      break;
    case '416.11':
      safari = '2.0.2';   
      break;
    case '416.12':
      safari = '2.0.2';   
      break;
    case '417.9':
      safari = '2.0.3';   
      break;
    case '418':
      safari = '2.0.3';   
      break;
    case '418.8':
      safari = '2.0.4';   
      break;
    //End Mac OS X 10.4.x (Tiger)

    default:
      safari = '-1';//unknown    
  }

  return safari;

}



function getOsFromWebKit(webKit){

  //These values are based on from matrix:
  //http://developer.apple.com/internet/safari/uamatrix.html


  var os;  
    
  switch(webKit)
  {

    //Begin Mac OS X 10.2.x (Jaguar)
    case '85.7':
      os = '10.2.8';
      break;
    case '85.8.2':
      os = '10.2.8';
      break;
    case '85.8.5':
      os = '10.2.8';
      break;
    //End Mac OS X 10.2.x (Jaguar)


    //Begin Mac OS X 10.3.x (Panther)
    case '100':
      os = '10.3';
      break;
    case '125.2':
      os = '10.3.4';
      break;
    case '125.4':
      os = '10.3.5';
      break;
    case '125.5':
      os = '10.3.5';
      break;
    case '125.5.5':
      os = '10.3.6';
      break;
    case '125.5.6':
      os = '10.3.7';
      break;
    case '125.5.7':
      os = '10.3.8';
      break;
    case '312.1':
      os = '10.3.9';
      break;
    case '312.1.1':
      os = '10.3.9';
      break;
    case '312.5':
      os = '10.3.9';
      break;
    case '312.5.1':
      os = '10.3.9';
      break;
    case '312.8':
      os = '10.3.9';
      break;
    //End Mac OS X 10.3.x (Panther)


    //Begin Mac OS X 10.4.x (Tiger)
    case '412':
      os = '10.4';
      break;    
    case '412.6':
      os = '10.4.2';   
      break;
    case '412.6.2':
      os = '10.4.2';   
      break;
    case '412.7':
      os = '10.4.2';   
      break;
    case '416.11':
      os = '10.4.3';   
      break;
    case '416.12':
      os = '10.4.3';   
      break;
    case '417.9':
      os = '10.4.5';   
      break;
    case '418':
      os = '10.4.6';   
      break;
    case '418.8':
      os = '10.4.7';   
      break;
    //End Mac OS X 10.4.x (Tiger)

    default:
      os = '-1';//unknown    
  }

  return os;

}



