<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<script>
	/* modify this to change the title */
	document.title = "Admin Controls | Plan My Party!";
	
	/* modify the href to link to whatever css you want */
	var head = document.getElementsByTagName('head')[0];
	var pageCss = document.createElement('link');
	pageCss.id = 'pagecss';
	pageCss.rel = 'stylesheet';
	pageCss.type = 'text/css';
	pageCss.href = '/styles.css';
	pageCss.media = 'all';
	head.appendChild(pageCss);
</script>
<div class="w3-container">

	<h1>Admin Controls</h1>
	<h2 style="text-align: left;">Progress bar of party preparation</h2>

<div class="w3-light-grey">
	<div id="myBar" class="w3-container w3-green" style="height:24px;width:10%"></div>
	</div>

	<p id="demo">10%</p>

	<button class="w3-button w3-green" onclick="execute()">Click to update party progress</button>
	<div id="update">
		<h2 style="text-align: left;">Update Log</h2>
		<p>...Food delivery completed</p>
		<p>...Venue booking completed</p>
		<p>...Decorations set</p>
		<p>...Equipments prepared</p>
		<p>...Additional Accesories completed</p>
		<p>...All preparations done, time to party!!</p>
	</div>
	
	<h2 style="text-align: left;">Announcements</h2>
		<p><label for="announcements">Announcement details:</label></p>
		<textarea id="announcements" rows="5" cols="50">Type here</textarea>
		<p><button class="w3-button w3-green" onclick="alertadmin()">Click to submit announcement</button><button style="margin-left: 1%;" class="w3-button w3-green" onclick="cleartextbox()">Click to clear text area</button>
		
	<h2 style="text-align: left;">Content Management System (CMS)</h2>
	<p>The CMS system allows one to edit the content of the website without editing the coding directly. The button below enables this mode to be activated.</p>
	<button style="margin-bottom:1%;" class="w3-button w3-green" onclick="alertcms()">Enable CMS</button>
</div>



<script>
function execute() {
	move();
	showandhide();
}

function move() {
	var elem = document.getElementById("myBar"); 
	var demo = document.getElementById("demo");
	var width = 10;
	var id = setInterval(frame, 35);
	function frame() {
		if (width >= 100) 
		{
			clearInterval(id);
			demo.style.color = "green";
			demo.style.fontWeight = "bolder";
		} 
		
		else 
		{
			width++; 
			elem.style.width = width + '%'; 
			demo.innerHTML = width * 1  + '%';
			demo.style.color = "black";
			demo.style.fontWeight = "normal";
		}
	}
}

function showandhide()
{
	var element = document.getElementById("update");
	element.style.visibility = "visible";
	
}

function alertadmin()
{
	alert("Announcement has been sent to server to be updated.");
}

function cleartextbox() 
{
	var element = document.getElementById("announcements");
	element.value = '';
}

function alertcms()
{
	alert("Content Management System Mode Activated. (P.S. It's fake)");
}
</script>
<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>