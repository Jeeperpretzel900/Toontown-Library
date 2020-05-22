
<html> 
<head>
  <title>Toontown.com, thanksForPlaying</title>
  <script>
function submitForm(id) {
  document.forms[id].submit();
}

function imgOn(imageName) {
if (document.images) {
    document.images[imageName].src = eval(imageName + "_on.src");
  }
}

function imgOff(imageName) {
  if (document.images) {
    document.images[imageName].src = eval(imageName + "_off.src");
  }
}

</script>  </head>
<SCRIPT LANGUAGE=javascript>
function goToTargetPage() {
  // load into 'top' to get rid of the frame
  top.location.href="thanksForPlaying.php" + window.location.search;
}
</SCRIPT><body><script>goToTargetPage();</script></body></html>
