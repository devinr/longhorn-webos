//Register kernel modules
function kernel_init() { }
function kernel_debug() { }
function kernel_system() { }
function kernel_browser() { }
function kernel_calendar() { }
function kernel_desktop() { }
function kernel_sidebar() { }
function kernel_windowmanager() { }
function kernel_taskbar() { }


//Use PHP to include the kernel modules
  <? include "kernel.init.js.inc.php"; ?>
  <? include "kernel.debug.js.inc.php"; ?>
  <? include "kernel.system.js.inc.php"; ?>
  <? include "kernel.browser.js.inc.php"; ?>
  <? include "kernel.calendar.js.inc.php"; ?> 
  <? include "kernel.desktop.js.inc.php"; ?>
  <? include "kernel.sidebar.js.inc.php"; ?>
  <? include "kernel.windowmanager.js.inc.php"; ?>
  <? include "kernel.taskbar.js.inc.php"; ?>
  

//Define the kernel modules
function kernel() {
	this.init 				= new kernel_init();
	this.debug 				= new kernel_debug();
	this.system				= new kernel_system();
	this.browser				= new kernel_browser();
	this.calendar				= new kernel_calendar();
	this.desktop				= new kernel_desktop();
	this.sidebar				= new kernel_sidebar();
	this.windowmanager			= new kernel_windowmanager();
	this.taskbar				= new kernel_taskbar();
}

var kernel = new kernel();