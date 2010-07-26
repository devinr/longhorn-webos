 
kernel_sidebar.prototype.init = function() {
	kernel.sidebar.create();
	
	kernel.sidebar.addWidget('properties');
	kernel.sidebar.addWidget('split');
	kernel.sidebar.addWidget('search');
	kernel.sidebar.addWidget('split');
	kernel.sidebar.addWidget('stickynotes');
	kernel.sidebar.addWidget('split');
	kernel.sidebar.addWidget('events');
	kernel.sidebar.addWidget('split');
	kernel.sidebar.addWidget('split','absolute','125px','','101px','0px');	
	kernel.sidebar.addWidget('clock','absolute','125px','','0px','0px');
	
	kernel.debug.sendToConsole('kernel.sidebar.init', 'Kernel finished loading Sidebar..');  					
	return;
}

kernel_sidebar.prototype.create = function() {
	var tmp 									= document.createElement('div');
	tmp.id 										= 'sidebar';
	tmp.className							= 'sidebar';
	tmp.innerHTML 						= '';
	tmp.widgets								= '0';
	document.body.appendChild(tmp);
}




kernel_sidebar.prototype.addWidget = function(type,position,width,height,bottom,right) {
	
	var sidebar = document.getElementById("sidebar");
	sidebar.widgets++;
	
	if (type == 'split') { 
		var tmp 									= document.createElement('img');
		tmp.src										= 'images/sidebar/split.png';
		if (position != "") 			{ tmp.style.position 	= position; }
		if (bottom != "")					{	tmp.style.bottom 		= bottom; }
		if (right != "")					{ tmp.style.right		 	= right; }
		tmp.border								= '0';
		tmp.style.zIndex					= '3';
		sidebar.appendChild(tmp);
	}

	if (type == 'properties') { 
		var tmp 									= document.createElement('img');
		tmp.src										= 'images/sidebar/properties.png';
		tmp.border								= '0';
		tmp.style.zIndex					= '3';
		sidebar.appendChild(tmp);
	}
	
	if (type == 'search') { 
		var tmp 									= document.createElement('img');
		tmp.src										= 'images/sidebar/search.png';
		tmp.border								= '0';
		tmp.style.zIndex					= '3';
		sidebar.appendChild(tmp);
	}  
		
	if (type == 'stickynotes') { 
		var tmp 									= document.createElement('img');
		tmp.src										= 'images/sidebar/stickynotes.png';
		tmp.border								= '0';
		tmp.style.zIndex					= '3';
		sidebar.appendChild(tmp);
	} 		
		
	if (type == 'events') { 
		var tmp 									= document.createElement('img');
		tmp.src										= 'images/sidebar/events.png';
		tmp.border								= '0';
		tmp.style.zIndex					= '3';
		sidebar.appendChild(tmp);
	}	
	
	if (type == 'clock') {
		var tmp 									= document.createElement('div');
		tmp.id										= 'sidebarClock';
		tmp.style.zIndex					= '3';
		tmp.style.width						= width;
		tmp.style.bottom					= bottom;
		tmp.onclick 							= sidebarCalendar.cycle();
		tmp.style.right						= right;
		tmp.innerHTML							= '<img id="sidebarClock" border="0" src="images/sidebar/clockbg.png" style="position: absolute; z-index: 3; bottom: 0px; right: 0px;">'+
																'<object onclick="sidebarCalendar.cycle();" classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" style="position: absolute; z-index: 4; bottom: 22px; right: 26px;" id="obj1" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="73" height="73"><param name="movie" value="flash/clock.swf"><param name="quality" value="High"><param name="wmode" value="transparent"><embed src="flash/clock.swf" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj1" width="73" height="73" quality="High" wmode="transparent"></object>'+
																'<div id="sidebarClock2" style="position: absolute; z-index: 3; bottom: 4px; right: 30px;"><font color="#E2EBFE" face="arial" size="1"><span id="sidebarClock2Digital"></span><span id="sidebarClock2Digital2"></span></font></div>';	
		sidebar.appendChild(tmp);
	}

}

kernel_sidebar.prototype.cycle = function() {
	//send message to debug console
	kernel.debug.sendToConsole('kernel.sidebar.cycle', 'Cycling sidebar view (before cycling sidebar was: "'+top.sidebarstatus+'")');  

	var sidebarelement = document.getElementById("sidebar");
	var taskbartray = document.getElementById("taskbartray");
	if (top.sidebarstatus == "on")  { sidebarelement.style.display = "none"; top.sidebarstatus = "off"; taskbartray.style.display = "block"; return; }
	if (top.sidebarstatus == "off") { sidebarelement.style.display = "block"; top.sidebarstatus = "on"; taskbartray.style.display = "none"; return; }
	return;
}	