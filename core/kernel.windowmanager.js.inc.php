
kernel_windowmanager.prototype.init = function(){}

kernel_windowmanager.prototype.create = function(width,height,left,top,url) {
		LastWinID = LastWinID+1;
		kernel.debug.sendToConsole('kernel.windowmanager.create', 'Creating new window with ID "'+top.LastWinID+'"'); 
		 
		//-------> If no window probs. have been defined, set some defaults
		if (!width)	{ var width 	= 600; }
		if (!height){ var height	= 400; }
		if (!left) 	{	var left		= 50; }
		if (!top)		{	var top			= 50; }
	
		var div = document.createElement('DIV');
		div.className='dhtmlgoodies_window';
		document.body.appendChild(div);
					
		var topDiv = document.createElement('DIV');
		topDiv.className='dhtmlgoodies_window_top';
		div.appendChild(topDiv);

		var img = document.createElement('IMG');
		img.src = 'images/themes/standard/top_center.jpg';
		img.className='topCenterImage';
		img.id = 'topCenterImageID'+LastWinID;
		topDiv.appendChild(img);
		//FIX: Resize top bar background
		document.getElementById(img.id).style.width = width-8+'px';

		var img = document.createElement('IMG');
		img.src = 'images/themes/standard/top_left.gif';
		img.align='left';
		topDiv.appendChild(img);

		var img = document.createElement('IMG');
		img.src = 'images/themes/standard/top_right.gif';
		img.align='right';
		topDiv.appendChild(img);
		
		
		var buttonDiv = document.createElement('DIV');
		buttonDiv.className='top_buttons';
		topDiv.appendChild(buttonDiv);
		
		var img = document.createElement('IMG');
		img.src = 'images/themes/standard/button_minimize.gif';
		img.className='minimizeButton';
		buttonDiv.appendChild(img);	

		var img = document.createElement('IMG');
		img.src = 'images/themes/standard/button_maximize.gif';
		img.className='maximizeButton';
		buttonDiv.appendChild(img);
		
		var img = document.createElement('IMG');
		img.src = 'images/themes/standard/button_close.gif';
		img.className='closeButton';
		buttonDiv.appendChild(img);	
		
		var toolbarDIV = document.createElement('DIV');
		toolbarDIV.className='windowToolbar';
		div.appendChild(toolbarDIV);

		var img = document.createElement('IMG');
		img.src = 'images/themes/standard/toolbar_background.jpg';
		img.className='toolbarCenterImage';
		toolbarDIV.appendChild(img);

		var img = document.createElement('IMG');
		img.src = 'images/themes/standard/toolbar_back_normal3.png';
		img.style.position = "absolute";
		img.style.top = "0";
		img.style.left = "0";
		toolbarDIV.appendChild(img);

		var img = document.createElement('IMG');
		img.src = 'images/themes/standard/toolbar_search_normal.png';
		img.style.position = "absolute";
		img.style.top = "0";
		img.style.right = "53";
		toolbarDIV.appendChild(img);

		var img = document.createElement('IMG');
		img.src = 'images/themes/standard/toolbar_favorits_normal.png';
		img.style.position = "absolute";
		img.style.top = "0";
		img.style.right = "0";
		toolbarDIV.appendChild(img);

		var middleDiv = document.createElement('DIV');
		middleDiv.className='dhtmlgoodies_windowMiddle';
		div.appendChild(middleDiv);
		
		var contentDiv = document.createElement('DIV');
		contentDiv.className='dhtmlgoodies_windowContent';
		contentDiv.innerHTML='<table border="0" width="100%" id="table1" cellpadding="0" style="border-collapse: collapse" height="100%"><tr><td width="4" background="images/themes/standard/middle_left.gif">&nbsp;</td><td width="110%"><iframe id="windowContentIframe'+LastWinID+'" name="windowContentIframe" src="inlineWindowContent.php?url='+url+'" marginwidth="1" marginheight="1" height="100%" width="100%" border="0" frameborder="0"></iframe></td><td width="3" background="images/themes/standard/middle_right.gif">&nbsp;</td></tr></table>';
		middleDiv.appendChild(contentDiv);
	
		var bottomDiv = document.createElement('DIV');
		bottomDiv.className='dhtmlgoodies_window_bottom';
		div.appendChild(bottomDiv);


		var img = document.createElement('IMG');
		img.src = 'images/themes/standard/bottom_center.jpg';
		img.className='bottomCenterImage';
		bottomDiv.appendChild(img);

		var img = document.createElement('IMG');
		img.src = 'images/themes/standard/bottom_left.jpg';
		img.className='bottomLeftImage';
		bottomDiv.appendChild(img);	
	
		var img = document.createElement('IMG');
		img.src = 'images/themes/standard/bottom_right.jpg';
		img.className='resizeImage';
		bottomDiv.appendChild(img);		

		windowSizeArray[windowSizeArray.length] = [width,height];
		windowPositionArray[windowPositionArray.length] = [left,top];

		div.style.width =  width + 'px';
		contentDiv.style.height = height  + 'px';		
		div.style.left =  left + 'px';
		div.style.top = top  + 'px';	
		
		return initWindows(false,div);		
		 	
}


kernel_windowmanager.prototype.maximizeWindow = function(activeId, obj) {
	if (activeId == "") { activeId = obj.id; }
	var ActiveWinID = 'dhtml_goodies_id'+activeId; var topCenterImageID = 'topCenterImageID'+activeId;
	var ActiveElement = document.getElementById(ActiveWinID);

	ActiveElement.style.top = 0; 	ActiveElement.style.left = 0;

	//----------> Detect Window width
	var winW = document.body.offsetWidth; if (sidebarstatus == "on") { winW = winW-top.sidebarWidth; } 

	//----------> Detect window height
	if (window.innerHeight != "" && document.body.offsetHeight != "0") { var winH = document.body.offsetHeight; }
	else { var winH = window.innerHeight; }
	ActiveElement.style.height = winH;
	var newWinH = winH - top.taskbarHeight - windowBorderDel+'px';
	//--------> Set window Height
	document.getElementById('windowContent' + activeId).style.height = newWinH;

	//--------> Set window width
	ActiveElement.style.width = winW; document.getElementById(topCenterImageID).style.width = winW-8+'px';
	return;
}

