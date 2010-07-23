
kernel_calendar.prototype.init = function(){} 

kernel_calendar.prototype.getDateDay = function() {
	//kernel.debug.sendToConsole('kernel.calendar.getDateDay', 'Calculating activate day in numeric format');  
	var currentTime = new Date();
	var data = currentTime.getDate();
	return data;
}

kernel_calendar.prototype.getDateMonth = function() {
	//kernel.debug.sendToConsole('kernel.calendar.getDateMonth', 'Calculating activate month in numric format');  
	var currentTime = new Date();
	var data = currentTime.getMonth() + 1;
	return data;		
}
kernel_calendar.prototype.getDateTime = function() {
		var currentTime = new Date();
		var h = currentTime.getHours();
		var m = currentTime.getMinutes();
		if (m < 10) { m = '0'+m; }
		return h+':'+m;
}
kernel_calendar.prototype.getDateYear = function() {
	//kernel.debug.sendToConsole('kernel.calendar.getDateYear', 'Calculating activate year in numric format');  
	var currentTime = new Date();
	var data = currentTime.getFullYear();
	return data;		
}

kernel_calendar.prototype.getMonth = function() {
	//kernel.debug.sendToConsole('kernel.calendar.getMonth', 'Calculating activate month in literall format'); 
	var tm = kernel.calendar.getDateMonth();
	if (tm == "1") { return "Jan"; }
	if (tm == "2") { return "Feb"; }
	if (tm == "3") { return "Mar"; }
	if (tm == "4") { return "Apr"; }
	if (tm == "5") { return "May"; }
	if (tm == "6") { return "Jun"; }
	if (tm == "7") { return "Jul"; }
	if (tm == "8") { return "Aug"; }
	if (tm == "9") { return "Sep"; }
	if (tm == "10") { return "Oct"; }
	if (tm == "11") { return "Nov"; }
	if (tm == "12") { return "Dec"; }	
}

kernel_calendar.prototype.startTime = function() {
	var todayDate = kernel.calendar.getDateDay();
	var todayMonth = kernel.calendar.getMonth();	
	var today=new Date();
	var h=today.getHours();
	var m=today.getMinutes();
	var s=today.getSeconds();
	// add a zero in front of numbers<10
	m = kernel.calendar.checkTime(m);
	s = kernel.calendar.checkTime(s);
	document.getElementById('sidebarClock2Digital').innerHTML=h+":"+m;
	document.getElementById('sidebarClock2Digital2').innerHTML=", " + todayMonth + " " + todayDate;
	t=setTimeout('kernel.calendar.startTime()',500);
	return;
}

kernel_calendar.prototype.checkTime = function(i) {
	if (i<10)i="0" + i;
	return i;
}

kernel_calendar.prototype.loadcalendar = function() {
	sidebarCalendar.setCurrentMonth();
	var thismonth = sidebarCalendar.getPresentMonth();
	sidebarCalendar.updateMonthPicture(thismonth);
}

kernel_calendar.prototype.prevMonth = function() {
	this.nCurrentMonth--;
	if (this.nCurrentMonth < 1){
		this.nCurrentMonth += 12; 
		this.prevYear();
	}
	this.setYearMonth(this.nCurrentYear, this.nCurrentMonth);
	sidebarCalendar.updateMonthPicture(this.nCurrentMonth);
}

kernel_calendar.prototype.nextMonth = function() {
	this.nCurrentMonth++;
	if (this.nCurrentMonth > 12) { 
		this.nCurrentMonth -= 12; 
		this.nextYear();
	}
	kernel.calendar.setYearMonth(this.nCurrentYear, this.nCurrentMonth);
	sidebarCalendar.updateMonthPicture(this.nCurrentMonth);
}


kernel_calendar.prototype.setYearMonth = function(nYear, nMonth) { 
	this.nCurrentYear = nYear;
	this.nCurrentMonth = nMonth;
	var cross_obj=document.getElementById("main");
	var cross_obj2=document.getElementById("main2");
	cross_obj.innerHTML  = "<font color=\"#99ffff\"><b>"+this.nCurrentYear+"</b></font>";
	cross_obj2.innerHTML = "<table border=0 width=\"100%\" id=table1 cellspacing=0 cellpadding=0>" +
			"<tr>" +
				"<td width=\"1%\">" +
					"<img onclick='kernel.calendar.prevMonth();' src='images/SidebarDesktopCalendar/prev.png' border='0'>" +
				"</td>" +
				"<td width=\"98%\">" +
					"<center><font face=\"Arial\" size=2 color=\"#c0c0c0\"><b>"+MonthNames[this.nCurrentMonth-1]+", "+this.nCurrentYear+"</font> </b></font></center>" +
				"</td><td width=\"1%\">" +
					"<img onclick='kernel.calendar.nextMonth();' src='images/SidebarDesktopCalendar/next.png' border='0'></td>" +
				"</tr>" +
			"</table>\n";

 	var date   = new Date(this.nCurrentYear, this.nCurrentMonth-1, 1);
 	var nWeek  = 1; 
 	var nDate = null;
 	while (date.getMonth() == this.nCurrentMonth-1) {
		nDate = date.getDate();
		var nLastDate = nDate;
		var posDay = date.getDay()-1;
		if (posDay == -1) posDay=6;
		var posLeft = posDay*(nWidth+5)+5;
		var posTop  = (nWeek-1)*nHeight;
		var cross_obj3 = document.getElementById("idDate"+nDate).style;
		cross_obj3.left = posLeft;
		cross_obj3.top  = posTop;
		if (date.getDay() == 0 || date.getDay() == 6)  
			cross_obj3.color  = "red";
		else
			cross_obj3.color  = "black";
		cross_obj3.visibility = "visible";
		date = new Date(this.nCurrentYear, date.getMonth(), date.getDate()+1);
	
		if (posDay == 6) nWeek++;
 	}
 	for (nDate++; nDate <= 31; nDate++){
 		var cross_obj3 = document.getElementById("idDate"+nDate).style;
 		cross_obj3.visibility = "hidden";
 	}
 		
 	 	 
}

kernel_calendar.prototype.setMonth = function(nMonth) {
	this.setYearMonth(nCurrentYear, nMonth); 
}

kernel_calendar.prototype.prevYear = function() { 
	this.nCurrentYear--; 
	this.setYearMonth(this.nCurrentYear, this.nCurrentMonth); 
}

kernel_calendar.prototype.nextYear = function() { 
	this.nCurrentYear++; 
	this.setYearMonth(this.nCurrentYear, this.nCurrentMonth); 
}