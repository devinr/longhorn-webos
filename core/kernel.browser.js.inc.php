//Ajax vars
var bustcachevar = 1; //bust potential caching of external pages after initial request? (1=yes, 0=no)
var loadedobjects = '';
var rootdomain = 'http://'+window.location.hostName;
var bustcacheparameter = '';


kernel_browser.prototype.init = function(){}

kernel_browser.prototype.getCookie = function(name){
	var start = document.cookie.indexOf(name+"="); 
	var len = start+name.length+1; 
	if ((!start) && (name != document.cookie.substring(0,name.length))) return null; 
	if (start == -1) return null; 
	var end = document.cookie.indexOf(";",len); 
	if (end == -1) end = document.cookie.length; 
	return unescape(document.cookie.substring(len,end));
}

kernel_browser.prototype.setCookie = function(name,value,expires,path,domain,secure){
 expires = expires * 60*60*24*1000;
 var today = new Date();
 var expires_date = new Date( today.getTime() + (expires) );
 var cookieString = name + "=" +escape(value) + 
		( (expires) ? ";expires=" + expires_date.toGMTString() : "") + 
		( (path) ? ";path=" + path : "") + 
		( (domain) ? ";domain=" + domain : "") + 
		( (secure) ? ";secure" : ""); 
	document.cookie = cookieString; 
}


kernel_browser.prototype.ajaxGetPage = function(url, containerid){
	var page_request = false;
	if (window.XMLHttpRequest) { // if Mozilla, Safari etc
		page_request = new XMLHttpRequest();
	}
	else if (window.ActiveXObject) { // if IE
		try {
			page_request = new ActiveXObject("Msxml2.XMLHTTP");
		} 
		catch (e) {
			try {
				page_request = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e){}
		}
	}
	else { return false; }
	page_request.onreadystatechange = function() {
		if (page_request.readyState == 4 && (page_request.status==200 || window.location.href.indexOf("http")==-1)) {
			document.getElementById(containerid).innerHTML=page_request.responseText;
		}
	}
	if (bustcachevar) { //if bust caching of external page
		bustcacheparameter=(url.indexOf("?")!=-1)? "&"+new Date().getTime() : "?"+new Date().getTime();
		page_request.open('GET', url+bustcacheparameter, true);
		page_request.send(null);
	}
}

kernel_browser.prototype.ajaxLoadObjs = function(){
	if (!document.getElementById) { return; }
	for (i=0; i<arguments.length; i++) {
		var file=arguments[i];
		var fileref="";
		if (loadedobjects.indexOf(file)==-1) { //Check to see if this object has not already been added to page before proceeding
			if (file.indexOf(".js")!=-1) { //If object is a js file
				fileref = document.createElement('script');
				fileref.setAttribute("type","text/javascript");
				fileref.setAttribute("src", file);
			}
			else if (file.indexOf(".css")!=-1) { //If object is a css file
				fileref = document.createElement("link");
				fileref.setAttribute("rel", "stylesheet");
				fileref.setAttribute("type", "text/css");
				fileref.setAttribute("href", file);
			}
		}
		if (fileref!="") {
			document.getElementsByTagName("head").item(0).appendChild(fileref);
			loadedobjects+=file+" "; //Remember this object as being already added to page
		}
	}
}