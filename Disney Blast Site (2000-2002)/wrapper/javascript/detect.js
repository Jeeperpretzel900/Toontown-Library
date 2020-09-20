var checkAol = navigator.appVersion.indexOf("AOL")
if (checkAol != -1)
{
var aolCheck = "aol"
}
else
{
var aolCheck = "other"
}



       
 NS = IE = false;
 if ((navigator.appName == "Microsoft Internet Explorer") &&
	(navigator.userAgent.indexOf("Mac")==-1))
        IE = true;
        else 
        NS = true;
        
        
  trapErrors = true;
    // Setting this to false will turn off JS error suppression,
    // setting the browser to its normal behavior.
    // Useful for debugging during development.
    
  logErrors = false;
    // Setting this to false will stop errors from being logged.
    // Useful when working offline or without CGI.
    
  showErrorAsStatusMessage = false;
    // Setting this to true will cause the browser to display
    // the error message as the window.defaultStatus text,
    // resulting in a quieter, but not invisible, error message.
    // Sometimes this can be a more pleasant way to debug JavaScript.
  
  logNumErrors = 3;
    // Number of JS errors per page to enter into log before calling it quits.
    // Large values aren't recommended ... if you're getting a lot
    // of errors per pageview, then you're probably in a nasty loop.
  
  logScriptLoc = "path to your cgi script goes here";
    // The script must reside within the htdocs tree
    // or in a server-aliased directory like /cgi-bin,
    // since the error message is sent via HTTP.
  
  scriptName = "JS Err Log";
    // Optional: This can be any string of text used to identify the script.
  
  logComment = "Testing";
    // Optional: A short comment may be supplied here.
  
  // You may want to separate the remainder of the script from
  // the preceding portion so that you can call the same
  // error trapping code with different variable settings from
  // different HTML pages without repeating a lot of code.
  
  MSIE = (navigator.userAgent.indexOf('MSIE') > -1) ? ( true ) : ( false );
    // Is this browser a Microsoft Internet Explorer browser?
  
  if (!MSIE) { originalErrorHandler = window.onerror; }
    // Read and store value of current window.onerror property for later restoring.
    // But exclude MSIE because it won't allow us to read the window.onerror property.
    
  originalDefaultStatus = window.defaultStatus;
    // Read and store value of current window.defaultStatus property for later restoring.
    
  numErrorEvents = 0;
    // Number of Errors we've experienced so far for this pageview.
  
  
  function handleErrors(msg, errUrl, line) {
    // trun focus off

    if (logErrors || showErrorAsStatusMessage) {
      
      if (numErrorEvents < logNumErrors) {
        
        errImage = new Array(logNumErrors);
          // This will hold all of our Image() objects we will create
          // to pass error data to the server.
        
        d = new Date();
          // We append a new Date() object to the end of every GET string
          // to ensure that the URL is always unique, and therefore not
          // subject to the disk cache frustrations of MSIE.
        
        sn = (scriptName) ? ('&scr=' + escape(scriptName)) : ('');
        lc = (logComment) ? ('&comm=' + escape(logComment)) : ('');
          // Escape the data from the optional scriptName and logComment variables if necessary.
                
        if (MSIE) {
          // window.onerror in MSIE doesn't pass msg, errUrl, line values
          // automatically like Netscape does, so we must approximate them.
          errUrl = this.location;    
          msg = 'Unspecified JS Error';  
          line = 'MSIE';          
        } else {
          line = 'line ' + line;
        }
        
        if (logErrors) {
          
          errLogEntry = logScriptLoc + '?url=' + escape(errUrl) + '&msg=' + escape(msg) + '&line=' + escape(line) + sn + lc + '&d=' + escape(d);
            // Build a GET string from the data we have pieced together about the error event.
    
          errImage[numErrorEvents] = new Image();  
          errImage[numErrorEvents].src = errLogEntry;
            // The Image() object is essentially the only Object
            // in NS3, NS4, and MSIE that can have its URL refreshed
            // without reloading the page, so we use it as a background data
            // carrier for client->server communication.  We set the new URL equal
            // to our GET string, which will get parsed by the CGI on the server.
            // The CGI will return empty/garbage data, but we don't care,
            // since the image we're loading here isn't for display.
        }
        
        if (showErrorAsStatusMessage) { window.defaultStatus = 'JavaScript Error: ' + msg + ' in ' + line; }
        
        numErrorEvents++;
      }
    }
    
    return trapErrors;
  }
  
  function restoreWindowToPreviousState() {
    // Set window.onerror and window.defaultStatus
    // to their initial state when leaving the page.
    if (!MSIE) { window.onerror = originalErrorHandler; }
    window.defaultStatus = originalDefaultStatus;
  }
  
  window.onUnload = restoreWindowToPreviousState;
  
window.onerror = handleErrors;





