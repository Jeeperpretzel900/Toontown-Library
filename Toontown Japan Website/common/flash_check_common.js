// Major version of Flash required
var requiredMajorVersion = 8;
// Minor version of Flash required
var requiredMinorVersion = 0;
// Minor version of Flash required
var requiredRevision = 0;
// the version of javascript supported
var jsVersion = 1.0;

function flash_check() {
  if ( !DetectFlashVer( requiredMajorVersion, requiredMinorVersion, requiredRevision ) ) { location.href = '/no_flash.html'; }
}