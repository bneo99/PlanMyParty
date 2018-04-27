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
		<ul>
			<li class="main"><span class="w3-button w3-theme">Additional desserts</span>
				<ul>
					<li class="sub_main"><span class="w3-button w3-theme">Cake</span>
						<ul>
							<li>Chocolate cake</li>
							<li>Red velvet cake</li>
							<li>Vanilla cake</li>
							<li>Carrot cake</li>
							<li>Coffee cake</li>
							<li>Matcha cake</li>
						</ul>
					</li>
					<li class="sub_main"><span class="w3-button w3-theme">Cupcakes</span>
						<ul>
							<li>Chocolate cupcake</li>
							<li>Vanilla cupcake</li>
							<li>Strawberry cupcake</li>
							<li>Matcha cupcake</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="main"><span class="w3-button w3-theme">Equipment</span>
				<ul>
					<li>Sound system</li>
					<li>Karaoke machine</li>
					<li>Spotlights</li>
					<li>Smoke machine</li>
					<li>Photo booth with backdrop</li>
				</ul>
			</li>
			<li class="main"><span class="w3-button w3-theme">Ornaments</span>
				<ul>
					<li>Balloons</li>
					<li>Banners</li>
				</ul>
			</li>
			<li class="main"><span class="w3-button w3-theme">Miscellaneous</span>
				<ul>
					<li>Invitational cards</li>
					<li>Confetti</li>
				</ul>
			</li>
			<li class="main"><span class="w3-button w3-theme">Professional personnel</span>
				<ul>
					<li>Master of ceremonies</li>
					<li>DJ</li>
					<li>Live band</li>
					<li>Stand-up comedian</li>
				</ul>
			</li>
		</ul>
	</div>
	
	</div>
</form>

<br/><br/><br/><br/><br/><br/><br/><br/>
	
<script>
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
.accesories{
	text-align: left;
}

.accesories li{
	list-style-type: none;
}

.main li{
	display: inline-block;
	margin-left: 2%;
	margin-right: 2%;
}

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