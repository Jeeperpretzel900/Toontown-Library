
<!--
		IE=(navigator.appName=="Microsoft Internet Explorer");
		NS=(navigator.appName=="Netscape");
		var aCode="paintcenter/PaintCenter.class";
		var aCodebase="./";
		var aArchive="paintcenter.zip";
		if (NS && navigator.appVersion.indexOf("4.") >= 0) aArchive="paintcenter.jar";
		var aId="PaintCenter2";
		var aWidth="530";  //532
		var aHeight="345"; //346
		var noJava='<Font Color = "#FFFFFF"><P>Unfortunately, your browser does not currently support java Applet.</FONT></p>';

var params=new Array("browser",(IE?"IE":"NS"),
							 "cabbase",      "paintcenter.cab",
							 "bkgColor",     "ffffff",
							 "txtColor",     "000000",
							 "title",        "art/title.gif",
							 "bkgImage",     "art/interface.gif",
							 "lineArt0",     "art/lineart0.gif",
							 "lineArt1",     "art/lineart1.gif",
							 "lineArt2",     "art/lineart2.gif",
							 "lineArt3",     "art/blankpage.gif",
							 "paperMask0",   "art/papermask0.gif",
							 "paperMask1",   "art/papermask1.gif",
							 "paperMask2",   "art/papermask2.gif",
							 "paperMask3",   "art/papermask3.gif",
							 "textureImage", "art/crayontexture.gif",
							 "helpBanner",   "art/help_ok.gif",
							 "helpMask",     "art/papermask0.gif",
							 "dialogBox",    "art/adlg.gif",
							 "dialogBtn",    "art/abtn.gif",
							 "stickersImage","art/stickers.gif",
							 "pagePos",		 "122,10,397,293", //289
							 "stickerSize",  "0,0,70,70",
							 "helpRect",     "0,0,0,0",
							 "optimize",     "1",
							 "pages",        "4",
							 "stickers",     "9",
							 "visStickers",  "9",
							 "stickersOnTop","1",
							 "useCookie","0",
							 "button1","15,262,60,282",			//undo
							 "button2","15,112,80,131",	    	//eraser
							 "button3","15,153,80,174",	    	//fill
							 "button0","15,132,80,153",	    	//water - blend

							 "button4","15,183,45,199",		//Color1
							 "button5","46,183,76,199",		//Color2
							 "button6","77,183,107,199",		//Color3
							 "button7","15,200,45,216",		//Color4
                             "button8","46,200,76,216",	        //Color5
							 "button9","77,200,107,216",		//Color6
							 "button10","15,217,45,233",		//Color7
							 "button11","46,217,76,233",		//Color8
							 "button12","77,217,107,233",		//Color9
							 "button13","15,234,45,250",		//Color10
							 "button14","46,234,76,250",	        //Color11
							 "button15","77,234,107,250",		//Color12

							 "button16","15,68,80,88",	    //Brush
							 "button17","15,89,80,110",	    //Crayon
							 "button18","0,0,0,0",		    //Large Brush??
							 "button19","86,72,102,88",	    //Line 1
							 "button20","86,88,102,104",	    //Line 2
							 "button21","86,104,102,122",	    //Line 3
							 "button22","86,122,102,139",	    //Line 4
							 "button23","86,139,102,155",	    //Line 5
							 "button24","86,155,102,172",	    //Line 6
							 "button25","64,261,105,282",       //Clear
							 "button26","64,284,105,305",	    //Blank
							 "button48","0,0,0,0",		    //Submit
							 "button28","14,314,108,336",	    //help
							 "button29","0,0,0,0",              //Back??
							 "button30","128,310,158,334",	    //sticker1
							 "button31","171,310,201,334",	    //sticker2
							 "button32","216,310,248,334",	    //sticker3
							 "button33","261,310,293,334",	    //sticker4
							 "button34","305,310,337,334",	    //sticker5
							 "button35","350,310,382,334",	    //sticker6
							 "button36","395,310,427,334",	    //sticker7
							 "button37","440,310,473,334",	    //sticker8
							 "button38","484,310,517,334",	    //sticker9
							 "button39","452,262,518,301",	    //help exit
							 "button40","355,110,385,159",	    //help up
							 "button41","0,0,0,0",	            //help down -- "355,171,385,224"
						 	 "button42","260,197,304,216",	    //dlgBtn1
							 "button43","334,197,378,216",	    //dlgBtn2
							 "button44","0,0,0,0",	            //dlgBtn3 - "400,198,458,223"
							 "button45","0,0,0,0",			    //Mail
							 "button46","0,0,0,0",	            //Old Print
							 "button47","0,0,0,0",			    //Trouble
							 "button27","14,284,61,304",	    //Next Page
                                                        "button49","19,16,99,53",		    //Rainbow
						    "helpText0","-",
							"helpText1","-",
							"helpText2","-",
							"helpText3","-",
							"helpText4","-",
							"helpText5","-",
							"helpText6","-",
							"helpText7","-",
							"helpText8","-",
							"helpText9","-",
		    				"helpText10","-",
							"helpText11","-",
							"helpText12","-",
							 "printHelp","-",
							 "saveHelp","-",
							 "hintText0","-",	    //nextPage
							 "hintText1","-",	    //undo
							 "hintText2","-",	    //eraser
							 "hintText3","-",	    //paintcan
							 "hintText4","-",	    //water
							 "hintText5","-",	    //red
							 "hintText6","-",		//orange
							 "hintText7","-",		//yellow
							 "hintText8","-",		//green
							 "hintText9","-",		//blue
							 "hintText10","-",	    //purple
							 "hintText11","-",		//grey
							 "hintText12","-",	    //brown
							 "hintText13","-",	    //lightblue
							 "hintText14","-",	    //white
							 "hintText15","-",	    //black
							 "hintText16","-",		//smallBrush
							 "hintText17","-",		//mediumBrush
							 "hintText18","-",		//largeBrush
							 "hintText19","-",	    //stickerDnArrow
							 "hintText20","-",	    //stickerUpArrow
							 "hintText21","-",		//submit
							 "hintText22","-",		//help
							 "hintText23","-"		//back
							 );

		// Write out Applet tag & parameters list
		with(document)
		{
			writeln("<applet code='"+aCode+"'");
			writeln("        codebase='"+aCodebase+"'");
			writeln("        archive='"+aArchive+"'");
			writeln("		 id='"+aId+"'");
			writeln("		 name='"+aId+"'");
			writeln("		 width='"+aWidth+"'");
			writeln("	     height='"+aHeight+"'>");
			for (i=0; i<params.length; i+=2)
			{
				writeln("<param name='"+params[i]+"' value='"+params[i+1]+"'>");
			}

			writeln(noJava);
			writeln("</applet>");
		}
//-->
