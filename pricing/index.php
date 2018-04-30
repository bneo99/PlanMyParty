<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<!-- Change some head values-->
<script>
	/* modify this to change the title */
	document.title = "Pricing | Plan My Party!";
	
	/* modify the href to link to whatever css you want */
	var head = document.getElementsByTagName('head')[0];
	var pageCss = document.createElement('link');
	pageCss.id = 'pagecss';
	pageCss.rel = 'stylesheet';
	pageCss.type = 'text/css';
	pageCss.href = '/index_style.css';
	pageCss.media = 'all';
	head.appendChild(pageCss);
	
</script>

<form name="booking" method="post" action="#" enctype="text/plain">
	<h1>Let's Start Customising !</h1>
	
	<div class="parallax1"></div>

	<div class="parallax w3-container w3-padding-16 w3-theme-l4">	

		<p>First off, what's the occasion?</p>
			
		<br/>
			
		<p>
			<label for="event">Event Title:</label>
			<input type="text" name="event" id="event" size="30" required="required">	
		</p>
			
		<br>
		
		<p>Now, what theme would fit the party?</p>
			
		<div>
			<p><img class="w3-btn" src="theme/1.jpg" alt="Masquerade Party"></p>
			<p><img class="w3-btn" src="theme/2.jpg" alt="Pajamas Party"></p>
			<p><img class="w3-btn" src="theme/3.jpg" alt="Costume Party"></p>
			<p><img class="w3-btn" src="theme/4.jpg" alt="Casual party"></p>
			<p><img class="w3-btn" src="theme/5.jpg" alt="Formal party"></p>
			<p><img class="w3-btn" src="theme/6.jpg" alt="Kids party (Boys)"></p>
			<p><img class="w3-btn" src="theme/7.jpg" alt="Kids party (Girls)"></p>
		</div>
	</div>
		
	<div class="parallax2"></div>
		
	<div class="parallax w3-container w3-padding-16 w3-theme-l4">
		<p>Hmmm, let's see how many paople you are partying with ...</p>
		
		<br>
		
		<p>
			<label for="guest">Number of guests:</label>
			<input type="text" name="guest" id="guest" size="4" required="required">	
		</p>
	</div>

	<div class="parallax3"></div>

	<div class="parallax w3-container w3-padding-16 w3-theme-l4">
		<div id="center">
			<div id="location">
				<ul class="images">
					<li><a href="https://www.google.com/maps/place/Zinc+Restaurant+%26+Bar/@1.5534758,110.3486531,15z/data=!4m2!3m1!1s0x0:0x81e82937c6e8c96d?sa=X&ved=2ahUKEwjO2-SnxMHaAhXKMY8KHRBxCWEQ_BIwDnoFCAAQtwE"><img src="location/1.jpg" target="_blank" alt="This is the Zinc Restaurant &amp; Bar"></a></li>
					<li><img src="location/2.jpg" alt="This is the De Jackie Inspirations"></li>
					<li><img src="location/3.jpg" alt="This is the See Good Food Centre Sdn Bhd"></li>
					<li><img src="location/4.jpg" alt="This is the THE JUNK"></li>
				</ul>
			</div>
		</div>
		
		<br/>
		
		<table align="center">
			<tr>
				<td><input type="radio" name="venue" class="ven"/>Use recomemended venues</td>
			<tr>
				<td id="text" style="display: none">
				<select>
						<option>Select</option>
					<option value="Zinc Restaurant">Zinc Restaurant</option>
					<option value="De Jackie">De Jackie</option>
						</select>
				</td>
			</tr>
		</table>
	
		<br/>
	
		<p>Do not like our recommendations?</p>
	
		<br/>
	
		<p>Choose your own!</p>

		</br>
	
		<p><label for="venue">My own venue's address : </label><input id="venue" type="text" placeholder="No.####, Jalan ########, Poskod, Kuching, Sarawak, Malaysia" size="60"></p>
	
		<br/>
	</div>
	
	<div class="parallax4"></div>
	
	<div class="parallax w3-container w3-padding-16 w3-theme-l4">
		<p>Time to choose what you would like to eat</p>
	
		<br/>
	
		<div id="crazy">
			<div class="dropdown">
				<button onclick="myFunction()" class="w3-button w3-theme">Western Cuisine</button>
				
				<div id="myDropdown" class="dropdown-content">
					<a href="western.html#affordable" target="_blank">Affordable Pack</a>
					<a href="western.html#regular" target="_blank">Regular Pack</a>
					<a href="western.html#prestigious" target="_blank">Prestigious Pack</a>
				</div>
			</div>

			<div class="dropdown">
				<button onclick="myFunction1()" class="w3-button w3-theme">Chinese Cuisine</button>
				
				<div id="myDropdown1" class="dropdown-content">
					<a href="chinese.html#affordable" target="_blank">Affordable Pack</a>
					<a href="chinese.html#regular" target="_blank">Regular Pack</a>
					<a href="chinese.html#prestigious" target="_blank">Prestigious Pack</a>
				</div>
			</div>

			<div class="dropdown">
				<button onclick="myFunction2()" class="w3-button w3-theme">Malay Cuisine</button>
				
				<div id="myDropdown2" class="dropdown-content">
					<a href="malay.html#affordable" target="_blank">Affordable Pack</a>
					<a href="malay.html#regular" target="_blank">Regular Pack</a>
					<a href="malay.html#prestigious" target="_blank">Prestigious Pack</a>
				</div>
			</div>

			<div class="dropdown">
				<button onclick="myFunction3()" class="w3-button w3-theme">Indian Cuisine</button>
				
				<div id="myDropdown3" class="dropdown-content">
					<a href="indian.html#affordable" target="_blank">Affordable Pack</a>
					<a href="indian.html#regular" target="_blank">Regular Pack</a>
					<a href="indian.html#prestigious" target="_blank">Prestigious Pack</a>
				</div>
			</div>

			<div class="dropdown">
				<button onclick="myFunction4()" class="w3-button w3-theme">Japanese Cuisine</button>
				
				<div id="myDropdown4" class="dropdown-content">
					<a href="japanese.html#affordable" target="_blank">Affordable Pack</a>
					<a href="japanese.html#regular" target="_blank">Regular Pack</a>
					<a href="japanese.html#prestigious" target="_blank">Prestigious Pack</a>
				</div>
			</div>

			<div class="dropdown">
				<button onclick="myFunction5()" class="w3-button w3-theme">Korean Cuisine</button>
				
				<div id="myDropdown5" class="dropdown-content">
					<a href="korean.html#affordable" target="_blank">Affordable Pack</a>
					<a href="korean.html#regular" target="_blank">Regular Pack</a>
					<a href="korean.html#prestigious" target="_blank">Prestigious Pack</a>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Lester, do the parallax thing for here too -->
	<div class="accesories">
		<h2>Additional Accesories</h2>
	
		<div class="dessert w3-panel w3-margin w3-theme-l3 w3-padding-16">
		<h3>Additional desserts</h3><br />
		<p><input type="checkbox" id="choco_cake" name="desserts" value="choco_cake"><label for="choco_cake">Chocolate Cake</label></p>
		<p><input type="checkbox" id="redv_cake" name="desserts" value="redv_cake"><label for="redv_cake">Red Velvet Cake</label></p>
		<p><input type="checkbox" id="vanilla_cake" name="desserts" value="vanilla_cake"><label for="vanilla_cake">Vanilla Cake</label></p>
		<p><input type="checkbox" id="carrot_cake" name="desserts" value="carrot_cake"><label for="carrot_cake">Carrot Cake</label></p>
		<p><input type="checkbox" id="coffee_cake" name="desserts" value="coffee_cake"><label for="coffee_cake">Coffee Cake</label></p>
		<p><input type="checkbox" id="matcha_cake" name="desserts" value="matcha_cake"><label for="matcha_cake">Matcha Cake</label></p>
		<p><input type="checkbox" id="macarons" name="desserts" value="macarons"><label for="macarons">Macarons</label></p>
		<p><input type="checkbox" id="choco_cup" name="desserts" value="choco_cup"><label for="choco_cup">Chocolate Cupcake</label></p>
		<p><input type="checkbox" id="strawberry_cup" name="desserts" value="strawberry_cup"><label for="strawberry_cup">Strawberry Cupcake</label></p>
		<p><input type="checkbox" id="vanilla_cup" name="desserts" value="vanilla_cup"><label for="vanilla_cup">Vanilla Cupcake</label></p>
		<p><input type="checkbox" id="matcha_cup" name="desserts" value="matcha_cup"><label for="matcha_cup">Matcha Cupcake</label></p><br />
		<p><label for="d_quantity">Dessert Quantity:</label><input type="text" id="d_quantity" name="d_quantity" placeholder="Type in quantity for each dessert" size="30"></p>
		</div>
		
		<div class="equipment w3-panel w3-margin w3-theme-l3 w3-padding-16">
		<h3>Equipment</h3><br />
		<p><input type="checkbox" id="sound" name="equipment" value="sound"><label for="sound">Sound System</label></p>
		<p><input type="checkbox" id="karaoke" name="equipment" value="karaoke"><label for="karaoke">Karaoke Machine</label></p>
		<p><input type="checkbox" id="spotlight" name="equipment" value="spotlight"><label for="spotlight">Spotlights</label></p>
		<p><input type="checkbox" id="smoke" name="equipment" value="smoke"><label for="smoke">Smoke Machine</label></p>
		<p><input type="checkbox" id="photo_booth" name="equipment" value="photo_booth"><label for="photo_booth">Photo Booth with Backdrop</label></p>
		</div>
		
		<div class="ornaments w3-panel w3-margin w3-theme-l3 w3-padding-16">
		<h3>Ornaments</h3><br />
		<p><input type="checkbox" id="balloons" name="ornaments" value="balloons"><label for="balloons">Balloons</label></p>
		<p><input type="checkbox" id="banners" name="oranments" value="banners"><label for="banners">Banners</label></p><br />
		<p><label for="message">Message on balloon and/or banner:</label><input type="text" id="message" name="message"></p>
		</div>
		
		<div class="misc w3-panel w3-margin w3-theme-l3 w3-padding-16">
		<h3>Miscellaneous</h3><br />
		<p><input type="checkbox" id="confetti" name="misc" value="confetti"><label for="confetti">Confetti</label></p>
		<p onclick="cardShowBox()"><input type="checkbox" id="card" name="misc" value="card"><label for="card">Invitational cards</label></p><br />
		<p style="visibility:hidden" id="text1"><label for="cover">Message in cover:</label><br /><textarea id="cover"></textarea></p>
		<p style="visibility:hidden" id="text2"><label for="content">Content in card:</label><br /><textarea id="content"></textarea></p>
		<p style="visibility:hidden" id="text3"><label for="address">Address to be sent (sample card):</label><br /><textarea id="address"></textarea></p>
		</div>
		
		<div class="personnel w3-panel w3-margin w3-theme-l3 w3-padding-16">
		<h3>Professional personnel</h3><br />
		<p><input type="checkbox" id="master" name="personnel" value="master"><label for="master">Master of ceremonies</label></p>
		<p><input type="checkbox" id="dj" name="personnel" value="dj"><label for="dj">DJ</p>
		<p><input type="checkbox" id="band" name="personnel" value="band"><label for="band">Live Band</label></p>
		<p><input type="checkbox" id="comedian" name="personnel" value="comedian"><label for="comedian">Stand-up Comedian</label></p><br />
		<p><label for="language">Language of each session:</label><input type="text" id="language" name="language" placeholder="Type in language of each individual session or all session(s)" size="60"></p>
		</div>
	
	</div>
</form>

<br/><br/><br/><br/><br/><br/><br/><br/>
	
<script>
	function cardShowBox(){
		var x = document.getElementById("card");
		var text1 = document.getElementById("text1");
		var text2 = document.getElementById("text2");
		var text2 = document.getElementById("text2");
		
		if (x.checked == true)
		{
			text1.style.visibility = "visible";
			text2.style.visibility = "visible";
			text3.style.visibility = "visible";
		}
		
		else
		{
			text1.style.visibility = "hidden";
			text2.style.visibility = "hidden";
			text3.style.visibility = "hidden";
		}
		
	}
	
	function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
	}

	window.onclick = function(event) {
	  if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
		  var openDropdown = dropdowns[i];
		  if (openDropdown.classList.contains('show')) {
			openDropdown.classList.remove('show');
		  }
		}
	  }
	}

	function myFunction1() {
		document.getElementById("myDropdown1").classList.toggle("show");
	}

	window.onclick = function(event) {
	  if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
		  var openDropdown = dropdowns[i];
		  if (openDropdown.classList.contains('show')) {
			openDropdown.classList.remove('show');
		  }
		}
	  }
	}

	function myFunction2() {
		document.getElementById("myDropdown2").classList.toggle("show");
	}

	window.onclick = function(event) {
	  if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
		  var openDropdown = dropdowns[i];
		  if (openDropdown.classList.contains('show')) {
			openDropdown.classList.remove('show');
		  }
		}
	  }
	}


	function myFunction3() {
		document.getElementById("myDropdown3").classList.toggle("show");
	}

	window.onclick = function(event) {
	  if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
		  var openDropdown = dropdowns[i];
		  if (openDropdown.classList.contains('show')) {
			openDropdown.classList.remove('show');
		  }
		}
	  }
	}


	function myFunction4() {
		document.getElementById("myDropdown4").classList.toggle("show");
	}

	window.onclick = function(event) {
	  if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
		  var openDropdown = dropdowns[i];
		  if (openDropdown.classList.contains('show')) {
			openDropdown.classList.remove('show');
		  }
		}
	  }
	}


	function myFunction5() {
		document.getElementById("myDropdown5").classList.toggle("show");
	}

	window.onclick = function(event) {
	  if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
		  var openDropdown = dropdowns[i];
		  if (openDropdown.classList.contains('show')) {
			openDropdown.classList.remove('show');
		  }
		}
	  }
	}
</script>


<style>
form{
	text-align: center;
}

img{
	width: 320px;
	height: 268.5px;
}

div p{
	display: inline-block;
	margin-right: 30px;
}

ul.images {
  margin: 0;
  padding: 0;
  white-space: nowrap;
  overflow-x: auto;
  background-color: #ddd;
}
ul.images li {
  display: inline-block;
  margin-right: 10px;
}

div #location{
	margin-left: 25%;
	margin-right: 25%;
}

div #center{
	text-align: center;
}

table tr td{
	padding: 0 5%;
}

ul .food{
	margin: 0;
  padding: 0;
  white-space: nowrap;
  overflow-x: auto;
  background-color: #ddd;
}

ul .food li{
	display: inline-block;
	margin-right: 10px;
	list-style-type: none;
}

div #right{
	max-width: 320px;
	float: left;
	margin-left: 300px;
}

#clear{
	clear: both;
	text-align: center;
	margin-top: 30px;
}

.dropdown {
    position: relative;
    display: inline-block;
    margin-right: 30px;
	overflow: hidden;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}	

#crazy{
	display: inline-block;
}

.parallax{
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.parallax1{
    background-image: url("bckgrdimg/1.jpg");
    min-height:600px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: fit;
}

.parallax2{
    background-image: url("bckgrdimg/2.jpg");
    min-height: 500px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: fit;
}
.parallax3{
    background-image: url("bckgrdimg/3.jpg");
    min-height: 500px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: fit;
}
.parallax4{
    background-image: url("bckgrdimg/4.jpg");
    min-height: 500px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: fit;
}
</style>
<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>