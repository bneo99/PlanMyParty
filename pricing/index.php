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
		<h2>Describe your party</h2>
		<input class="w3-input" type="text" name="event" id="event" placeholder="My Party" autofocus="autofocus" required="required" style="width:100%;">	
	</div>
	<div class="w3-container w3-theme-l5">
		<h2>Theme</h2>
			
		<div>
			<p class="w3-btn">
				<label style="display:block" for="masquerade">
					<img src="theme/1.jpg" alt="Masquerade Party">
				</label>
				<label for="masquerade" style="display:block">Masquerade Party</label>
				<input type="radio" id="masquerade" name="theme" value="masquerade">
			</p>
			<p class="w3-btn">
				<label style="display:block" for="pajamas">
					<img src="theme/2.jpg" alt="Pajamas Party">
				</label>
				<label for="pajamas" style="display:block">Pajamas Party</label>
				<input type="radio" id="pajamas" name="theme" value="pajamas">
			</p>
			<p class="w3-btn">
				<label style="display:block" for="costume">
					<img src="theme/3.jpg" alt="Costume Party">
				</label>
				<label for="costume" style="display:block">Costume Party</label>
				<input type="radio" id="costume" name="theme" value="costume">
			</p>
			<p class="w3-btn">
				<label style="display:block" for="casual">
					<img src="theme/4.jpg" alt="Casual party">
				</label>
				<label for="casual" style="display:block">Casual Party</label>
				<input type="radio" id="casual" name="theme" value="casual">
			</p>
			<p class="w3-btn">
				<label style="display:block" for="formal">
					<img src="theme/5.jpg" alt="Formal party">
				</label>
				<label for="formal" style="display:block">Formal Party</label>
				<input type="radio" id="formal" name="theme" value="formal">
			</p>
			<p class="w3-btn">
				<label style="display:block" for="boy_kid">
					<img src="theme/6.jpg" alt="Kids party (Boys)">
				</label>
				<label for="boy_kid" style="display:block">Kids Party (Boys)</label>
				<input type="radio" id="boy_kid" name="theme" value="boy_kid">
			</p>
			<p class="w3-btn">
				<label style="display:block" for="girl_kid">
					<img src="theme/7.jpg" alt="Kids party (Girls)">
				</label>
				<label for="girl_kid" style="display:block">Kids Party (Girls)</label>
				<input type="radio" id="girl_kid" name="theme" value="girl_kid">
			</p>
		</div>
	</div>
		
	<div class="parallax2"></div>
		
	<div class="parallax w3-container w3-padding-16 w3-theme-l4">
		<h2>Number of party-cipants</h2>		
		  <input type="number" name="quantity" value="1" min="1" max="100" required="required">
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
		<h2>Food</h2>
	
	<div class="w3-dropdown-click w3-margin-bottom" style="width:100%; max-width:10cm;">
		<button type="button" onClick="showHideByID('cuisine_list')" id="selected_cuisine" class="w3-theme-d1 w3-button" style="width:100%; text-transform:capitalize;">Cuisine: Western</button>
		<div id="cuisine_list" class="w3-dropdown-content w3-bar-block w3-border" style="width:100%;">
			<a onClick="changeCuisine('western')" class="w3-bar-item w3-button">Western</a>
			<a onClick="changeCuisine('chinese')" class="w3-bar-item w3-button">Chinese</a>
			<a onClick="changeCuisine('japanese')" class="w3-bar-item w3-button">Japanese</a>
			<a onClick="changeCuisine('korean')" class="w3-bar-item w3-button">Korean</a>
			<a onClick="changeCuisine('malay')" class="w3-bar-item w3-button">Malay</a>
			<a onClick="changeCuisine('indian')" class="w3-bar-item w3-button">Indian</a>
		</div>
	</div> 
	
<div class="w3-display-container slideshow" style="margin:auto; max-width:10cm;">		
	<div class="w3-black" style="text-align:center;" >
	
		<div class="w3-display-container mySlides w3-animate-opacity">
			<img id="foodpic1" src="food/western/1.jpg" class="w3-image slides">
			<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">Affordable (RM20 /pax)</div>
		</div>

		<div class="w3-display-container mySlides w3-animate-opacity">
			<img id="foodpic2" src="food/western/2.jpg" class="w3-image slides">
			<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">Regular (RM35 /pax)</div>
		</div>

		<div class="w3-display-container mySlides w3-animate-opacity">
			<img id="foodpic3" src="food/western/3.jpg" class="w3-image slides">
			<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">Prestigious (RM50 /pax)</div>
		</div>
		<button type="button" class="w3-button w3-theme w3-display-left" onclick="changeSlide(-1)">&#10094;</button>
		<button type="button" class="w3-button w3-theme w3-display-right" onclick="changeSlide(+1)">&#10095;</button>
	</div>
</div>
	</div>
	
	<!-- Lester, do the parallax thing for here too -->
	<div class="accesories">
		<h2>Additional Accessories</h2>
	
		<div class="dessert w3-panel w3-margin w3-theme-l3 w3-padding-16">
		<h3>Additional desserts</h3><br />
		<table class="table w3-table w3-striped w3-border w3-bordered w3-theme-l5">
			<tr>
				<th>Types of desserts</th>
				<th>Quantity</th>
			</tr>
			<tr>
				<td>Chocolate Cake (RM40/unit)</td>
				<td><input type="number" name="quantity" min="0" max="5"></td>
			</tr>
			<tr>
				<td>Red Velvet Cake (RM40/unit)</td>
				<td><input type="number" name="quantity" min="0" max="5"></td>
			</tr>
			<tr>
				<td>Vanilla Cake (RM40/unit)</td>
				<td><input type="number" name="quantity" min="0" max="5"></td>
			</tr>
			<tr>
				<td>Carrot Cake (RM40/unit)</td>
				<td><input type="number" name="quantity" min="0" max="5"></td>
			</tr>
			<tr>
				<td>Coffee Cake (RM40/unit)</td>
				<td><input type="number" name="quantity" min="0" max="5"></td>
			</tr>
			<tr>
				<td>Matcha Cake (RM40/unit)</td>
				<td><input type="number" name="quantity" min="0" max="5"></td>
			</tr>
			<tr>
				<td>Macarons (RM5/unit)</td>
				<td><input type="number" name="quantity" min="0" max="100"></td>
			</tr>
			<tr>
				<td>Chocolate Cupcake (RM5/unit)</td>
				<td><input type="number" name="quantity" min="0" max="100"></td>
			</tr>
			<tr>
				<td>Strawberry Cupcake (RM5/unit)</td>
				<td><input type="number" name="quantity" min="0" max="100"></td>
			</tr>
			<tr>
				<td>Vanilla Cupcake (RM5/unit)</td>
				<td><input type="number" name="quantity" min="0" max="100"></td>
			</tr>
			<tr>
				<td>Matcha Cupcake (RM5/unit)</td>
				<td><input type="number" name="quantity" min="0" max="100"></td>
			</tr>
		</table>
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
	
	<div class="w3-theme-l4 w3-padding-16">
		<h2>Cost Break-down</h2>
		<div class="w3-panel w3-margin w3-theme-l3 w3-padding-16">
		<h3>All prices are based on Malaysian Currency (RM)</h3>
		<table class="table w3-table w3-striped w3-border w3-bordered w3-theme-l5">
			<tr>
				<td>Theme Cost:</td>
				<td><span></span></td>
			</tr>
			<tr>
				<td>Venue Cost:</td>
				<td><span></span></td>
			</tr>
			<tr>
				<td>Cuisine Cost:</td>
				<td><span></span></td>
			</tr>
			<tr>
				<td>Dessert Cost:</td>
				<td><span></span></td>
			</tr>
			<tr>
				<td>Equipment Cost:</td>
				<td><span></span></td>
			</tr>
			<tr>
				<td>Ornaments Cost:</td>
				<td><span></span></td>
			</tr>
			<tr>
				<td>Miscellaneous Cost:</td>
				<td><span></span></td>
			</tr>
			<tr>
				<td>Professional Personnel Cost:</td>
				<td><span></span></td>
			</tr>
		</table>
			<button class="w3-button w3-theme" style="margin-top: 1%;">Calculate</button>
		</div>
	</div>
	
	<div class="button">
		<p><input class="w3-button w3-theme" type="submit" value="Submit"></p><p><input class="w3-button w3-theme" type="reset" value="Reset"></p>
	</div>
</form>

<br/><br/><br/><br/><br/><br/><br/><br/>
	
<script>
	
	var foodPack = 0; //for knowing which food price tier is selected
	showSlides(foodPack);

	function changeSlide(n){
		showSlides(foodPack += n);
	}

	function showSlides(n) {
		var i;
		var x = document.getElementsByClassName("mySlides");
		if (n > x.length) {foodPack = 1}
		if (n < 1) {foodPack = x.length} ;
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		x[foodPack-1].style.display = "block"; 
		
	}

	function changeCuisine(cuisine){
		button = document.getElementById("selected_cuisine");
		
		button.innerText = "Cuisine: " + cuisine;
		
		$("#foodpic1").attr("src", "food/"+ cuisine +"/1.jpg")
		$("#foodpic2").attr("src", "food/"+ cuisine +"/2.jpg")
		$("#foodpic3").attr("src", "food/"+ cuisine +"/3.jpg")
		
		showHideByID("cuisine_list");
	}
	
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

.table{
	max-width: 500px;
	margin: 0 auto;
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