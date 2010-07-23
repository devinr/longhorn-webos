//This file contains the sidebarDesktopCalendar.<functions>
//----------------------------------------------------------

function sidebarCalendar() {this.SDCholderCreated = false;};

sidebarCalendar.prototype.create = function() {
	if (!this.SDCholderCreated) {
		var cal = this.popCalendar();
		var SDC = document.createElement("div");
		SDC.id = "SDCholder";
		SDC.className	= "desktopCalendar";		
		SDC.innerHTML = ''+
				'<img border="0" src="images/SidebarDesktopCalendar/properties.png" style="position: absolute; z-index: 4; bottom: 313px; right: 0px;">' +
				'<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" style="position: absolute; z-index: 4; bottom: 58px; right: 273px;" id="obj1" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="236" height="236"><param name="movie" value="flash/clock.swf"><param name="quality" value="High"><param name="wmode" value="transparent"><embed src="flash/clock.swf" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj1" width="236" height="236" quality="High" wmode="transparent"></object>' +
				'<div id="monthpicture" style="position: absolute; z-index: 5; bottom: 187px; right: 4px;"><img border="0" src=""></div>' +
				'<div id="sidebarCalendarSubcal" style="position: absolute; z-index: 5; bottom: 20px; right: 4px; border: 1px solid #000000; background-color: #FFFFFF">'+cal+'</div>' +
				'<div style="position: absolute; z-index: 4; bottom: 10px; right: 350px;"><font color="#E2EBFE" face="arial" size="6"><span id="sidebarCalendarDtime"></span></font></div>';
		document.body.appendChild(SDC);
		this.SDCholderCreated = true;
		kernel.calendar.loadcalendar();
		document.getElementById("sidebarCalendarDtime").innerHTML = document.getElementById("sidebarClock2Digital").innerHTML;
	}
	else { alert("Allready exists"); return; }


}

sidebarCalendar.prototype.cycle = function() {
	if (!this.SDCholderCreated)  
		this.create(); 
	else 
		this.remove();
}


sidebarCalendar.prototype.remove = function() {
	if (this.SDCholderCreated) {
		document.body.removeChild(document.getElementById("SDCholder"));
		this.SDCholderCreated = false;
	}
}

sidebarCalendar.prototype.getPresentMonth =function () { 
	Stamp = new Date(); 
	return (Stamp.getMonth() + 1); 
}
sidebarCalendar.prototype.updateMonthPicture = function (imgnumb) { 
	var newimg = '<img border="1" src="images/SidebarDesktopCalendar/' + imgnumb + '.png" width="245" height="120">'; 
	document.getElementById("monthpicture").innerHTML = newimg; 
}	

sidebarCalendar.prototype.popCalendar = function(){
	var HTMLstr = [];
	HTMLstr[HTMLstr.length] = "<table width='245px' cellspacing='0' cellpadding='0' border='0'>\n";
	HTMLstr[HTMLstr.length]= "<tr><td>\n";
	HTMLstr[HTMLstr.length]= "<table border='0' cols='3' width='100%'><tr><td colspan='3'><center><div id='main2'><div></center></td></tr></table>\n";
	HTMLstr[HTMLstr.length]= "</td><div id='main' style='display: none'></div></tr>\n";
	HTMLstr[HTMLstr.length]= "<tr height='140px'><td valign=\"top\">\n";
	HTMLstr[HTMLstr.length]= "<table border=0 cols=7>\n";
	HTMLstr[HTMLstr.length]= "<tr align='center'>\n";
	HTMLstr[HTMLstr.length]= "<td width='30'><font face='Arial' size='1' color='#BEBFDF'>Mon</font></td>\n";
	HTMLstr[HTMLstr.length]= "<td width='30'><font face='Arial' size='1' color='#BEBFDF'>Tue</font></td>\n";
	HTMLstr[HTMLstr.length]= "<td width='30'><font face='Arial' size='1' color='#BEBFDF'>Wed</font></td>\n";
	HTMLstr[HTMLstr.length]= "<td width='30'><font face='Arial' size='1' color='#BEBFDF'>Thu</font></td>\n";
	HTMLstr[HTMLstr.length]= "<td width='30'><font face='Arial' size='1' color='#BEBFDF'>Fri</font></td>\n";
	HTMLstr[HTMLstr.length]= "<td width='30'><font face='Arial' size='1' color='#BEBFDF'>Sat</font></td>\n";
	HTMLstr[HTMLstr.length]= "<td width='30'><font face='Arial' size='1' color='#BEBFDF'>Sun</font></td>\n";
	HTMLstr[HTMLstr.length]= "</tr>\n";
	HTMLstr[HTMLstr.length]= "<tr align='center'>\n";
	HTMLstr[HTMLstr.length]= "<td colspan=7>\n";
	HTMLstr[HTMLstr.length]= "<div style='position: relative;'>";
	for (var date=1; date <= 31; date++) {
		HTMLstr[HTMLstr.length]= "<span id=\"idDate"+date+"\" val="+date+" style=\"position: absolute; visibility: hidden\">\n";
		HTMLstr[HTMLstr.length]= "<center><font face='Arial' size='1'>"+date+"</font></center></span>\n";
	}
	HTMLstr[HTMLstr.length]= "</div>";
	HTMLstr[HTMLstr.length]= "</td></tr>\n";
	HTMLstr[HTMLstr.length]= "</table>\n";
	HTMLstr[HTMLstr.length]= "</td></tr>\n";
	HTMLstr[HTMLstr.length]= "</table>\n";
	return HTMLstr.join("");
}

sidebarCalendar.prototype.setCurrentMonth = function(){
  date = new Date();
  currentyear=date.getYear()
  if (currentyear < 1000)
  currentyear+=1900
  kernel.calendar.setYearMonth(currentyear, date.getMonth()+1);
}

var sidebarCalendar = new sidebarCalendar();


//------------> Old calendar code
var ie=document.all
var ns6=document.getElementById&&!document.all
var n=document.layers


var MonthNames = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");


var nWidth  = 30;
var nHeight = 20;

var leftX;
var rightX
var topY;
var bottomY;









