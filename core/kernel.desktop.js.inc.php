kernel_desktop.prototype.init = function(){}  
kernel_desktop.prototype.onLeftClick = function() {
	kernel.debug.sendToConsole('kernel.desktop.onLeftclick', 'Desktop was clicked with left mouse button'); 
			 
	//Hides elements
	sidebarCalendar.remove();	
	kernel.debug.hide();


	return;
}
kernel_desktop.prototype.create = function() {
		var tmp = document.createElement("div");
		tmp.id = "desktop";
		tmp.className = 'desktop';
		tmp.onclick = function () { kernel.desktop.onLeftClick(); }
		tmp.innerHTML = '';
		document.body.appendChild(tmp);
}

kernel_desktop.prototype.addIconToDesktop = function(iconText, icon, doAction, winWidth, winHeight, winUrl) {
		var tmp = document.createElement("div");
		tmp.id = "desktopIcon";
		tmp.className = 'desktopicon_normal';
		tmp.onmouseover = function (evt) { this.className = 'desktopicon_mo'; };
		tmp.onmouseout  = function (evt) { this.className = 'desktopicon_normal'; };
		tmp.ondblclick  = function (evt) { doAction(winWidth, winHeight, '', '', winUrl); };
		tmp.innerHTML = '<center><img border="0" src="'+icon+'" width="32" height="32"><br>'+iconText+'</center>';
		document.getElementById("desktop").appendChild(tmp);	
}
	
	