 
kernel_taskbar.prototype.init = function() {
	kernel.taskbar.create();
	kernel.taskbar.createSystray();
	//kernel.debug.sendToConsole('kernel.taskbar.init', 'Kernel finished loading the taskbar..'); 
}	


kernel_taskbar.prototype.create = function() {
	var tb 		= document.createElement("div");
	tb.id 		= "taskbarDIV";
	tb.className	= "taskbar";
	tb.innerHTML = ''+
			'<img id="taskbar_button" 				class="taskbar_button" 				border="0" src="images/taskbar_startbutton_normal.png" 	onmouseover="kernel.taskbar.startButtonMouseOver()" onmouseout="kernel.taskbar.startButtonMouseOut()" onclick="kernel.taskbar.startButtonClick()">' +
			'<img id="taskbar_debugconsole" 	class="taskbar_debugconsole" 	border="0" src="images/taskbar_debugconsole.png" 				onclick="kernel.debug.show();">' +
			'<img id="taskbar_min_sidebar" 		class="taskbar_min_sidebar" 	border="0" src="images/taskbar_minsidebar_normal.png" 	onmouseover="kernel.taskbar.sidebarButtonMouseOver()" onmouseout="kernel.taskbar.sidebarButtonMouseOut()" onclick="kernel.sidebar.cycle();">';
	document.body.appendChild(tb);
}

kernel_taskbar.prototype.createSystray = function() {
	var tmp 			= document.createElement("div");
	tmp.id 				= "taskbartray";
	tmp.className	= "systray";			
	tmp.innerHTML = '' +
		'<img id="taskbartrayStickynote" 			border="0" src="images/taskbartray/stickynote_normal.png" 			style="position: absolute; z-index: 3; bottom: 0px; right: 0px;">' +
		'<img id="taskbartrayPower" 					border="0" src="images/taskbartray/power_normal.png" 						style="position: absolute; z-index: 3; bottom: 0px; right: 33px;">' +
		'<img id="taskbartrayClock" 					border="0" src="images/taskbartray/clock_normal.png" 						style="position: absolute; z-index: 3; bottom: 0px; right: 66px;">' +
		'<img id="taskbartrayDesktop" 				border="0" src="images/taskbartray/desktop_normal.png" 					style="position: absolute; z-index: 3; bottom: 0px; right: 99px;">' +	
		'<img id="taskbartrayQuicklaunch" 		border="0" src="images/taskbartray/quicklaunch_normal.png" 			style="position: absolute; z-index: 3; bottom: 0px; right: 132px;">' +	
		'<img id="taskbartrayAlarm" 					border="0" src="images/taskbartray/alarm_normal.png" 						style="position: absolute; z-index: 3; bottom: 0px; right: 163px;">' +	
		'<img id="taskbartraySearch" 					border="0" src="images/taskbartray/search_normal.png" 					style="position: absolute; z-index: 3; bottom: 0px; right: 196px;">' +
		'<img id="taskbartraySidebarrestore" 	border="0" src="images/taskbartray/sidebarrestore_normal.png" 	style="position: absolute; z-index: 3; bottom: 0px; right: 231px;" onclick="kernel.sidebar.cycle();" onmouseover="this.src=\'images/taskbartray/sidebarrestore_highligthed.png\'" onmouseout="this.src=\'images/taskbartray/sidebarrestore_normal.png\'">';	
	document.body.appendChild(tmp);
}



kernel_taskbar.prototype.startButtonMouseOver = function() {
	document.getElementById("taskbar_button").src = "images/taskbar_startbutton_highligthed.png";
	return;
}

kernel_taskbar.prototype.startButtonMouseOut = function() {
	document.getElementById("taskbar_button").src = "images/taskbar_startbutton_normal.png";
	return;
}

kernel_taskbar.prototype.startButtonClick = function() {
		//send message to debug console
	kernel.debug.sendToConsole('kernel.taskbar.startButtonClick', 'Start button was clicked');  
	alert('Dont click this button');
	return;
}

kernel_taskbar.prototype.sidebarButtonMouseOver = function() 	{ document.getElementById("taskbar_min_sidebar").src = "images/taskbar_minsidebar_highligthed.png"; }
kernel_taskbar.prototype.sidebarButtonMouseOut = function() 	{ document.getElementById("taskbar_min_sidebar").src = "images/taskbar_minsidebar_normal.png"; }



