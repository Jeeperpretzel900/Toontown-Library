// glovalnavi
window.name = 'tto_contents';

function gnavi( id ) {
  var url;
  if ( id == 1 ) {
    url = '/';
  } else if ( id == 2 ) {
    url = '/start/';
  } else if ( id == 3 ) {
    url = '/guide/';
  } else if ( id == 4 ) {
    url = '/support/';
  } else {
    url = '/fun/';
  }
  var win = window.open( url, 'tto_contents', '' );
  win.focus();
}
