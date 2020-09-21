function openwindow (url,nom,largeur,hauteur,options) {
	var top = (screen.height-hauteur)/2;
	var left = (screen.width-largeur)/2;
	window.open(url,nom,"top="+top+",left="+left+",width="+largeur+",height="+hauteur+","+options);
}