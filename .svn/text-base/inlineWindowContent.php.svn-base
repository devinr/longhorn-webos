<?
	$url = $_GET['url'];
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/menu.css">

<!-- dd menu -->
<script type="text/javascript">
<!--
	var timeout         = 500;
	var closetimer		= 0;
	var ddmenuitem      = 0;

	// open hidden layer
	function mopen(id) {	
		// cancel close timer
		mcancelclosetime();
		// close old layer
		if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
		// get new layer and show it
		ddmenuitem = document.getElementById(id);
		ddmenuitem.style.visibility = 'visible';
	}

	// close showed layer
	function mclose()	{
		if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
	}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}	

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>

</head>
<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">

<style>
		body{
			overflow:hidden;
			scroll:no;
			topmargin: 0;
			leftmargin: 0;
			rightmargin: 0;
			bottommargin 0;
			marginwidth: 0;
			marginheight: 0;
			background: #C0C0C0;	
		}	
		.contentFrame {
			height: 100%;
			width: 100%;
		}
		
</style>

<div style="position: absolute; width: 100%; height: 20px; z-index: 1; left: 0px; top: 0px; background-image: url('images/filemenu_center.png')" id="layer1">

<ul id="sddm">
	<li><a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()">Home</a>
		<div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="/forum"><b>Index</b></a><hr>
		<a href="http://www.longhorn.dk/forum/ucp.php?mode=register">&nbsp;&nbsp;Register</a>
		<a href="/forum/ucp.php?mode=login">&nbsp;&nbsp;Login</a>
		<a href="/forum/ucp.php?mode=logout">&nbsp;&nbsp;logout</a>
		<a href="javascript:window.close();">Exit</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m2')" onmouseout="mclosetime()">Forums</a>
		<div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="/forum/viewforum.php?f=13"><b>Longhorn information Center</a><hr>
		<a href="/forum/viewforum.php?f=14">&nbsp;&nbsp;Build information</a>
		<a href="/forum/viewforum.php?f=15">&nbsp;&nbsp;<b>Longhorn.dk</b></a>
		<a href="/forum/viewforum.php?f=16">&nbsp;&nbsp;&nbsp;&nbsp;Longhorn WebOS</a>
		<a href="/forum/viewforum.php?f=3"><b>Tips and Tricks</a><hr>
		<a href="/forum/viewforum.php?f=4">&nbsp;&nbsp;Networking</a>
		<a href="/forum/viewforum.php?f=5">&nbsp;&nbsp;MS Updates (framework etc.)</a>
		<a href="/forum/viewforum.php?f=6">&nbsp;&nbsp;Applications</a>
		<a href="/forum/viewforum.php?f=11"><b>Projects</a><hr>
		<a href="/forum/viewforum.php?f=12">&nbsp;&nbsp;SigmaOS</a>
		<a href="/forum/viewforum.php?f=9"><b>General</a><hr>
		<a href="/forum/viewforum.php?f=9">&nbsp;&nbsp;Lobby</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()">User</a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="/forum/ucp.php?i=163">Overview</a>
		<a href="/forum/ucp.php?i=164">Profile</a>
		<a href="/forum/ucp.php?i=165">Board Prefences</a>
		<a href="/forum/ucp.php?i=166">Private Messages</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">Other</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="/forum/memberlist.php">Members</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">Help</a>
		<div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="/forum/memberlist.php?mode=leaders">Administators</a>
		</div>
	</li>
</ul>
</div>
<br>
<iframe class="contentFrame" border="0" frameborder="0" src="<?="$url";?>" width="100%" height="100%"></iframe>

</body>
</html>