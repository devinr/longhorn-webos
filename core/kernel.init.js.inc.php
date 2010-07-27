 
kernel_init.prototype.boot = function(){
	
		//Loads the taskbar
		kernel.taskbar.init(); 
		kernel.sidebar.init();
		
		kernel.calendar.startTime();
		initWindows();
		kernel.debug.sendToConsole('kernel.init', 'System initialization completed, kernel ('+ top.kernelversion +') loaded successfull');	
		
		kernel.system.buildTag('init');
}
