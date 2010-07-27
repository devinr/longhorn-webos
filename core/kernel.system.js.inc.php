
kernel_system.prototype.init = function(){}

kernel_system.prototype.getKernelModules = function(){
	if (!kernel) return [];
	var ret = [];
	for (var i in kernel){
		try{
			if (kernel[i] instanceof Object && kernel[i].init instanceof Function){ // this is an module
				ret[ret.length] = "kernel."+i;			
			}
		}catch(e){
		}
	}
	return ret;
}
 
kernel_system.prototype.buildTag = function(action) {
	if (action == "init") { 
		var tmp 				= document.createElement('div');
		tmp.id 					= 'desktopBuildtag';
		tmp.className		= 'buildtag';
		tmp.innerHTML 	= ''+buildtag+'';
		document.getElementById("desktop").appendChild(tmp);
	}
}
 
