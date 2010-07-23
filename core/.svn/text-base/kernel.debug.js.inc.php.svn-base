 
kernel_debug.prototype.init = function() {
	kernel.debug.create();
}

kernel_debug.prototype.create = function() {
			var tmp = document.createElement("div");
			tmp.id = "debugConsoleDIV";
			tmp.className				= 'debugconsole';
			tmp.style.backgroundImage = "url('images/debugconsole/background.png')";
			tmp.innerHTML = '<table border="0" width="100%" id="debugconsoleTable" height="100%" cellpadding="0" style="border-collapse: collapse"><tr><td width="5" height="5"></td><td height="5"><font color="#FFFFFF face=" size="2" face="Arial">Longhorn debug console</font></td><td width="5" height="5"></td></tr><tr><td width="5">&nbsp;</td><td><form name="debug"><textarea DISABLED rows="10" name="console" cols="49" style="width:515px; height: 290px; font-family:Arial; font-size:8pt"></textarea></form></td><td width="5">&nbsp;</td></tr><tr><td width="5" height="5"></td><td height="5"></td><td width="5" height="5"></td></tr></table>';
			document.body.appendChild(tmp);
}

kernel_debug.prototype.sendToConsole = function(kfname, msg) {
	if (debugMode == "yes") {
		document.debug.console.value = document.debug.console.value + '['+kernel.calendar.getDateTime()+'] - ' + kfname + ' - ' + msg + '\n';
		return;
	}
}

kernel_debug.prototype.show = function() { document.getElementById("debugConsoleDIV").style.display = "block"; }
kernel_debug.prototype.hide = function() { document.getElementById("debugConsoleDIV").style.display = "none"; }

