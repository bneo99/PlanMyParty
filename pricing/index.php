<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<!-- Change some head values-->
<script>
	/* modify this to change the title */
	document.title = "Pricing | Plan My Party!";
</script>

<form id="booking" onSubmit="formatPost()" method="post" action="/pricing/confirm.php" style="text-align: center;">
	<h1>Customize your party</h1>
	
	<div class="parallax1"></div>

	<div class="parallax w3-container w3-padding-16 w3-theme-l4">
		<h2>Describe your party</h2>
		<input class="w3-input" type="text" name="event_name" id="event_name" placeholder="Name your party" required="required" style="width:100%;">
		<br/>
		<h3>When is it happening?</h3>
		<input class="w3-input" type="date" name="date" id="date" required="required" style="width:100%;">	
	</div>
	<div class="w3-container w3-theme-l5">
		<h2>Theme</h2>
			
		<div>
			<p class="w3-btn">
				<label style="display:block" for="masquerade">
					<img src="theme/1.jpg" alt="Masquerade Party">
				</label>
				<label for="masquerade" style="display:block">Masquerade Party</label>
				<input type="radio" id="masquerade" name="theme" value="masquerade" required="required">
			</p>
			<p class="w3-btn">
				<label style="display:block" for="pajamas">
					<img src="theme/2.jpg" alt="Pajamas Party">
				</label>
				<label for="pajamas" style="display:block">Pajamas Party</label>
				<input type="radio" id="pajamas" name="theme" value="pajamas" required="required">
			</p>
			<p class="w3-btn">
				<label style="display:block" for="costume">
					<img src="theme/3.jpg" alt="Costume Party">
				</label>
				<label for="costume" style="display:block">Costume Party</label>
				<input type="radio" id="costume" name="theme" value="costume" required="required">
			</p>
			<p class="w3-btn">
				<label style="display:block" for="casual">
					<img src="theme/4.jpg" alt="Casual party">
				</label>
				<label for="casual" style="display:block">Casual Party</label>
				<input type="radio" id="casual" name="theme" value="casual" required="required">
			</p>
			<p class="w3-btn">
				<label style="display:block" for="formal">
					<img src="theme/5.jpg" alt="Formal party">
				</label>
				<label for="formal" style="display:block">Formal Party</label>
				<input type="radio" id="formal" name="theme" value="formal" required="required">
			</p>
			<p class="w3-btn">
				<label style="display:block" for="boy_kid">
					<img src="theme/6.jpg" alt="Kids party (Boys)">
				</label>
				<label for="boy_kid" style="display:block">Kids Party (Boys)</label>
				<input type="radio" id="boy_kid" name="theme" value="boy_kid" required="required">
			</p>
			<p class="w3-btn">
				<label style="display:block" for="girl_kid">
					<img src="theme/7.jpg" alt="Kids party (Girls)">
				</label>
				<label for="girl_kid" style="display:block">Kids Party (Girls)</label>
				<input type="radio" id="girl_kid" name="theme" value="girl_kid" required="required">
			</p>
		</div>
	</div>
		
	<div class="parallax2"></div>
		
	<div class="parallax w3-container w3-padding-16 w3-theme-l4">
		<h2>Number of party-cipants</h2>		
		 <input type="number" name="pax" id="pax" value="1" min="1" max="100" required="required">
	</div>

	<div class="parallax3"></div>

	<div class="parallax w3-container w3-padding-16 w3-theme-l4">
		<h2>Venue</h2>
		<div class="w3-bar-block w3-theme-l3">
			<button type="button" onClick="showVenue('recom')" class="w3-bar-item w3-button">Use our recommended venues</button>
			<div id="recom_venue" class="w3-container w3-padding-16 w3-theme-l4 w3-hide w3-show">
				<div class="w3-display-container" style="margin:auto; max-width:10cm;">		
					<div class="w3-black" style="text-align:center;">

						<div class="w3-display-container venueSlides w3-animate-opacity">
							<img id="rvenue1" src="location/1.jpg" class="w3-image">
							<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">The Zinc</div>
						</div>

						<div class="w3-display-container venueSlides w3-animate-opacity">
							<img id="rvenue2" src="location/2.jpg" class="w3-image">
							<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">De Jackie Inspirations</div>
						</div>

						<div class="w3-display-container venueSlides w3-animate-opacity">
							<img id="rvenue3" src="location/3.jpg" class="w3-image">
							<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">See Good Food Centre</div>
						</div>
						
						<div class="w3-display-container venueSlides w3-animate-opacity">
							<img id="rvenue4" src="location/4.jpg" class="w3-image">
							<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">The Junk</div>
						</div>
						<button type="button" class="w3-button w3-theme w3-display-left" onclick="changeSlide('rvenue', -1)">&#10094;</button>
						<button type="button" class="w3-button w3-theme w3-display-right" onclick="changeSlide('rvenue', 1)">&#10095;</button>
					</div>
				</div>
				<input id="recom_address" name="recom_address" type="hidden"></input>
			</div>
			
			<button type="button" onClick="showVenue('self')" class="w3-bar-item w3-button">or... Choose your own!</button>
			<div id="self_venue" class="w3-container w3-padding-16 w3-theme-l4 w3-hide">
				
				<input id="searchInput" class="controls" type="text" placeholder="Search with Google Maps or enter your own venue address!"  onKeyPress="return noenter()">
				<div id="map" class="w3-margin-bottom w3-margin-top"></div>
				<script>
				//map stuff
				function initMap() {
					var map = new google.maps.Map(document.getElementById('map'), {
						center: {lat: 1.5535, lng: 110.3593},
						zoom: 13
					});
					var input = document.getElementById('searchInput');
					map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

					var autocomplete = new google.maps.places.Autocomplete(input);
					autocomplete.bindTo('bounds', map);

					var infowindow = new google.maps.InfoWindow();
					var marker = new google.maps.Marker({
						map: map,
						anchorPoint: new google.maps.Point(0, -29)
					});

					autocomplete.addListener('place_changed', function() {
						infowindow.close();
						marker.setVisible(false);
						var place = autocomplete.getPlace();
						if (!place.geometry) {
							window.alert("Autocomplete's returned place contains no geometry");
							return;
						}

						// If the place has a geometry, then present it on a map.
						if (place.geometry.viewport) {
							map.fitBounds(place.geometry.viewport);
						} else {
							map.setCenter(place.geometry.location);
							map.setZoom(17);
						}
						marker.setIcon(({
							url: place.icon,
							size: new google.maps.Size(71, 71),
							origin: new google.maps.Point(0, 0),
							anchor: new google.maps.Point(17, 34),
							scaledSize: new google.maps.Size(35, 35)
						}));
						marker.setPosition(place.geometry.location);
						marker.setVisible(true);

						var address = '';
						if (place.address_components) {
							address = [
							(place.address_components[0] && place.address_components[0].short_name || ''),
							(place.address_components[1] && place.address_components[1].short_name || ''),
							(place.address_components[2] && place.address_components[2].short_name || '')
							].join(' ');
						}

						infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
						infowindow.open(map, marker);
					});

					var myCenter = new google.maps.LatLng(1.5535, 110.3593);
					var mapCanvas = document.getElementById("map");
					var mapOptions = {center: myCenter, zoom: 13};
					var map = new google.maps.Map(mapCanvas, mapOptions);
					var marker = new google.maps.Marker({position:myCenter});
					marker.setMap(map);
				}
				</script>
				<!--the map-->
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi0GWwSbuuAbe6SLjrtZJF78p5_3EEQJ4&libraries=places&callback=initMap" async defer></script>
			</div>
		</div>
	</div>
	
<div class="parallax4"></div>
	
<div class="parallax w3-container w3-padding-16 w3-theme-l4">
		<h2>Food</h2>
	
	<div class="w3-dropdown-click w3-margin-bottom" style="width:100%; max-width:10cm;">
		<button type="button" onClick="showHideByID('cuisine_list')" id="selected_cuisine" class="w3-theme-d1 w3-button" style="width:100%; text-transform:capitalize;">Cuisine: Western</button>
		<div id="test"></div>
		<div id="cuisine_list" class="w3-dropdown-content w3-bar-block w3-border" style="width:100%;">
			<a onClick="changeCuisine('western')" class="w3-bar-item w3-button">Western</a>
			<a onClick="changeCuisine('chinese')" class="w3-bar-item w3-button">Chinese</a>
			<a onClick="changeCuisine('japanese')" class="w3-bar-item w3-button">Japanese</a>
			<a onClick="changeCuisine('korean')" class="w3-bar-item w3-button">Korean</a>
			<a onClick="changeCuisine('malay')" class="w3-bar-item w3-button">Malay</a>
			<a onClick="changeCuisine('indian')" class="w3-bar-item w3-button">Indian</a>
		</div>
		<input id="food" name="food" type="hidden"></input>
	</div> 
	
	<div class="w3-display-container" style="margin:auto; max-width:10cm;">		
		<div class="w3-black" style="text-align:center;">
		
			<div class="w3-display-container foodSlides w3-animate-opacity">
				<img id="foodpic1" src="food/western/1.jpg" class="w3-image">
				<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">Affordable (RM20 /pax)</div>
			</div>

			<div class="w3-display-container foodSlides w3-animate-opacity">
				<img id="foodpic2" src="food/western/2.jpg" class="w3-image">
				<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">Regular (RM35 /pax)</div>
			</div>

			<div class="w3-display-container foodSlides w3-animate-opacity">
				<img id="foodpic3" src="food/western/3.jpg" class="w3-image">
				<div class="w3-display-bottom w3-container w3-padding-16 w3-theme-dark">Prestigious (RM50 /pax)</div>
			</div>
			<button type="button" class="w3-button w3-theme w3-display-left" onclick="changeSlide('food', -1)">&#10094;</button>
			<button type="button" class="w3-button w3-theme w3-display-right" onclick="changeSlide('food', +1)">&#10095;</button>
		</div>
	</div>
	
	<div class="dessert w3-panel w3-theme-l3 w3-padding-16">
		<h3>Desserts</h3><br />
		<table class="table w3-table w3-striped w3-border w3-bordered w3-theme-l5 w3-centered">
			<tr>
				<th>Types of desserts</th>
				<th>Quantity</th>
			</tr>
			<tr>
				<td>Chocolate Cake (RM40/unit)</td>
				<td><input type="number" name="choco_cake" id="choco_cake" min="0" max="5" value="0"></td>
			</tr>
			<tr>
				<td>Red Velvet Cake (RM40/unit)</td>
				<td><input type="number" name="rvelvet_cake" id="rvelvet_cake" min="0" max="5" value="0"></td>
			</tr>
			<tr>
				<td>Vanilla Cake (RM40/unit)</td>
				<td><input type="number" name="vanilla_cake" id="vanilla_cake" min="0" max="5" value="0"></td>
			</tr>
			<tr>
				<td>Carrot Cake (RM40/unit)</td>
				<td><input type="number" name="carrot_cake" id="carrot_cake" min="0" max="5" value="0"></td>
			</tr>
			<tr>
				<td>Coffee Cake (RM40/unit)</td>
				<td><input type="number" name="coffee_cake" id="coffee_cake" min="0" max="5" value="0"></td>
			</tr>
			<tr>
				<td>Matcha Cake (RM40/unit)</td>
				<td><input type="number" name="matcha_cake" id="matcha_cake" min="0" max="5" value="0"></td>
			</tr>
			<tr>
				<td>Macarons (RM5/unit)</td>
				<td><input type="number" name="macarons" id="macarons" min="0" max="100" value="0"></td>
			</tr>
			<tr>
				<td>Chocolate Cupcake (RM5/unit)</td>
				<td><input type="number" name="choco_cup" id="choco_cup" min="0" max="100" value="0"></td>
			</tr>
			<tr>
				<td>Strawberry Cupcake (RM5/unit)</td>
				<td><input type="number" name="straw_cup" id="straw_cup" min="0" max="100" value="0"></td>
			</tr>
			<tr>
				<td>Vanilla Cupcake (RM5/unit)</td>
				<td><input type="number" name="vanilla_cup" id="vanilla_cup" min="0" max="100" value="0"></td>
			</tr>
			<tr>
				<td>Matcha Cupcake (RM5/unit)</td>
				<td><input type="number" name="matcha_cup" id="matcha_cup" min="0" max="100" value="0"></td>
			</tr>
		</table>
		</div>
		<input id="dessert" name="dessert" type="hidden"></input>
</div>
	
	<!-- Lester, do the parallax thing for here too -->
	<div class="accesories">
		<h2>Additional Stuff</h2>
		
		<div class="equipment w3-panel w3-margin w3-theme-l3 w3-padding-16">
			<h3>Equipment</h3><br />
			<p><input class="w3-check" type="checkbox" id="sound" name="equipment" value="sound"><label for="sound"> Sound System</label></p>
			<p><input class="w3-check" type="checkbox" id="karaoke" name="equipment" value="karaoke"><label for="karaoke"> Karaoke Machine</label></p>
			<p><input class="w3-check" type="checkbox" id="spotlight" name="equipment" value="spotlight"><label for="spotlight"> Spotlights</label></p>
			<p><input class="w3-check" type="checkbox" id="smoke" name="equipment" value="smoke"><label for="smoke"> Smoke Machine</label></p>
			<p><input class="w3-check" type="checkbox" id="photo_booth" name="equipment" value="photo_booth"><label for="photo_booth"> Photo Booth with Backdrop</label></p>
			<input id="equipment" name="equipment" type="hidden"></input>
		</div>
		
		<div class="decor w3-panel w3-margin w3-theme-l3 w3-padding-16">
			<h3>Decorations</h3><br />
			<p><input class="w3-check" class="w3-check" type="checkbox" id="balloons" name="decor" value="balloons"><label for="balloons"> Balloons</label></p>
			<p><input class="w3-check" type="checkbox" id="banners" name="decor" value="banners"><label for="banners"> Banners</label></p><br />
			<p><label for="message">Message on balloon and/or banner: </label><input class="w3-input" type="text" id="message" name="message"></p>
			<input id="decor" name="decor" type="hidden"></input>
		</div>
		
		<div class="misc w3-panel w3-margin w3-theme-l3 w3-padding-16">
			<h3>Miscellaneous</h3><br />
			<p><input class="w3-check" type="checkbox" id="confetti" name="misc" value="confetti"><label for="confetti"> Confetti</label></p>
			<p onclick="cardShowBox()"><input class="w3-check" type="checkbox" id="card" name="misc" value="card"><label for="card"> Invitational cards</label></p><br />
			<p style="visibility:hidden" id="text1"><label for="card_cover">Message in cover: </label><br /><textarea class="w3-input" id="card_cover"></textarea></p>
			<p style="visibility:hidden" id="text2"><label for="card_content">Content in card: </label><br /><textarea class="w3-input" id="card_content"></textarea></p>
			<p style="visibility:hidden" id="text3"><label for="card_address">Address to send the cards: </label><br /><textarea class="w3-input" id="card_address"></textarea></p>
			<input id="misc" name="misc" type="hidden"></input>
		</div>
		
		<div class="personnel w3-panel w3-margin w3-theme-l3 w3-padding-16">
			<h3>Professional personnel</h3><br />
			<p><input class="w3-check" type="checkbox" id="master" name="personnel" value="master"><label for="master"> Master of ceremonies</label></p>
			<p><input class="w3-check" type="checkbox" id="dj" name="personnel" value="dj"><label for="dj"> DJ</p>
			<p><input class="w3-check" type="checkbox" id="band" name="personnel" value="band"><label for="band"> Live Band</label></p>
			<p><input class="w3-check" type="checkbox" id="comedian" name="personnel" value="comedian"><label for="comedian"> Stand-up Comedian</label></p><br />
			<p><label for="language">Language of each/all session(s): </label><input class="w3-input" type="text" id="language" name="language" placeholder="Saparate with space"></p>
			<input id="personnel" name="personnel" type="hidden"></input>
		</div>
	
	</div>
	
	<div class="w3-theme-l4 w3-padding-16">
		<h2>Cost Break-down</h2>
		<div class="w3-panel w3-margin w3-theme-l3 w3-padding-16">
		<table class="table w3-table w3-striped w3-border w3-bordered w3-theme-l5 w3-centered">
			<tr>
				<th>Cost Description</th>
				<th>Cost (RM)</th>
			</tr>
			<tr>
				<td>Theme:</td>
				<td><span id="c_theme">0</span></td>
			</tr>
			<tr>
				<td>Venue:</td>
				<td><span id="c_venue">0</span></td>
			</tr>
			<tr>
				<td>Food:</td>
				<td><span id="c_cuisine">0</span></td>
			</tr>
			<tr>
				<td>Dessert:</td>
				<td><span id="c_dessert">0</span></td>
			</tr>
			<tr>
				<td>Equipment:</td>
				<td><span id="c_equipment">0</span></td>
			</tr>
			<tr>
				<td>Ornaments:</td>
				<td><span id="c_decor">0</span></td>
			</tr>
			<tr>
				<td>Miscellaneous:</td>
				<td><span id="c_misc">0</span></td>
			</tr>
			<tr>
				<td>Professional Personnel:</td>
				<td><span id="c_personnel">0</span></td>
			</tr>
			<tr>
				<td><strong>Grand Total:</strong></td>
				<td><input type="text" id="c_total" name="price" readonly="readonly" class="w3-input" value="0" style="text-align:center;"></input></td>
			</tr>
		</table>
			<button type="button" class="w3-button w3-theme" style="margin-top: 1%;" onclick="getPrice()">Calculate</button>
		</div>
	</div>
	
	<div class="w3-container w3-padding">
		<input class="w3-button w3-theme w3-margin" type="submit" value="Submit">
		<input class="w3-button w3-theme-l4 w3-margin" type="reset" value="Reset">
	</div>
</form>
	
<script>
var recomVenueNo = 0; //for knowing which venue type is selected (for recommended venues)
var foodPack = 0; //for knowing which food price tier is selected
var selectedCuisine = "Western";

showSlides('food', foodPack);
showSlides('rvenue', recomVenueNo);

function changeSlide(type, n){
	if (type == 'rvenue'){
		recomVenueNo += n;
		showSlides(type, recomVenueNo);
	}
	else if (type == 'food'){
		foodPack += n;
		showSlides(type, foodPack);
	}
}

function showSlides(type, n) {
	var i;
	if (type == 'rvenue'){
		var x = document.getElementsByClassName("venueSlides");
	}
	else if (type == 'food'){
		var x = document.getElementsByClassName("foodSlides");
	}
	
	if (n > x.length - 1){
		if (type == 'rvenue'){
			recomVenueNo = n = 0;
		}
		else if (type == 'food'){
			foodPack = n = 0;
		}
	}
	
	if (n < 0){
		if (type == 'rvenue'){
			recomVenueNo = n = x.length - 1;
		}
		else if (type == 'food'){
			foodPack = n = x.length - 1;
		}
	}
	
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	
	if (type == 'rvenue'){
		x[recomVenueNo].style.display = "block"; 
	}
	else if (type == 'food'){
		x[foodPack].style.display = "block"; 
	}
}

function changeCuisine(cuisine){
	button = document.getElementById("selected_cuisine");
	
	button.innerText = "Cuisine: " + cuisine;
	selectedCuisine = cuisine;
	
	$("#foodpic1").attr("src", "food/"+ cuisine +"/1.jpg")
	$("#foodpic2").attr("src", "food/"+ cuisine +"/2.jpg")
	$("#foodpic3").attr("src", "food/"+ cuisine +"/3.jpg")

	showHideByID("cuisine_list");
}

function getPrice()
{
	var theme_cost = getTheme();
	var venue_cost = getVenue();
	var food_cost = getFood();
	var dessert_cost = getDessert();
	var equip_cost = getEquipment();
	var ornament_cost = getOrnament();
	var misc_cost = getOrnament();
	var p_cost = getPersonnel();
	
	var total_cost = 0;
	
	var theme = document.getElementById("c_theme");
	var venue = document.getElementById("c_venue");
	var food = document.getElementById("c_cuisine");
	var dessert = document.getElementById("c_dessert");
	var equipment = document.getElementById("c_equipment");
	var ornament = document.getElementById("c_decor");
	var misc = document.getElementById("c_misc");
	var personnel = document.getElementById("c_personnel");
	
	theme.textContent = theme_cost;
	venue.textContent = venue_cost;
	food.textContent = food_cost;
	dessert.textContent = dessert_cost;
	equipment.textContent = equip_cost;
	ornament.textContent = ornament_cost;
	misc.textContent = misc_cost;
	personnel.textContent = p_cost;
	
	var total = document.getElementById("c_total");
	total_cost = theme_cost + venue_cost + food_cost + dessert_cost + equip_cost + ornament_cost + misc_cost + p_cost
	total.value = total_cost;
}
	
function getTheme()
{
	var theme1 = document.getElementById("masquerade").checked;
	var theme2 = document.getElementById("pajamas").checked;
	var theme3 = document.getElementById("costume").checked;
	var theme4 = document.getElementById("casual").checked;
	var theme5 = document.getElementById("formal").checked;
	var theme6 = document.getElementById("boy_kid").checked;
	var theme7 = document.getElementById("girl_kid").checked;
	
	var theme_cost = 0;
	
	if ((theme1 == true) || (theme2 == true) || (theme3 == true) || (theme4 == true) || (theme5 == true) || (theme6 == true) || (theme7 == true))
	{
		theme_cost = 200;
	}
	
	else
	{
		theme_cost = 0;
	}
	
	return theme_cost;
}

function getVenue()
{
	var venue_cost = 0;
	var customeVenue = document.getElementById("searchInput").value;
	
	if (customeVenue != "")
	{
		venue_cost = 150;
	}
	
	else
	{
		if (recomVenueNo == 0)
		{
			venue_cost = 300;
		}
	
		else if (recomVenueNo == 1)
		{
			venue_cost = 50;
		}
	
		else if (recomVenueNo == 2)
		{
			venue_cost = 100;
		}
	
		else if (recomVenueNo == 3)
		{
			venue_cost = 200;
		}
	}
	
	return venue_cost;
}

function getGuest()
{
	var pax = document.getElementById("pax").value;
	
	return pax;
}

function getFood()
{
	var food_cost = 0;
	var pax = getGuest();
	
	if (foodPack == 0)
	{
		food_cost = (20 * pax);
	}
	
	else if(foodPack == 1)
	{
		food_cost = (35 * pax);
	}
	
	else if(foodPack == 2)
	{
		food_cost = (50 * pax);
	}
	
	return food_cost;
}

function getDessert()
{
	var d1 = document.getElementById("choco_cake").value;
	var d2 = document.getElementById("rvelvet_cake").value;
	var d3 = document.getElementById("vanilla_cake").value;
	var d4 = document.getElementById("carrot_cake").value;
	var d5 = document.getElementById("coffee_cake").value;
	var d6 = document.getElementById("matcha_cake").value;
	var d7 = document.getElementById("macarons").value;
	var d8 = document.getElementById("choco_cup").value;
	var d9 = document.getElementById("straw_cup").value;
	var d10 = document.getElementById("vanilla_cup").value;
	var d11 = document.getElementById("matcha_cup").value;
	
	var dessert_cost;
	
	dessert_cost = (40 * d1) + (40 * d2) + (40 * d3) + (40 * d4) + (40 * d5) + (40 * d6) + (5 * d7) + (5 * d8) + (5 * d9) + (5 * d10) + (5 * d11);
	
	return dessert_cost;
}

function getEquipment()
{
	var e1 = document.getElementById("sound").checked;
	var e2 = document.getElementById("karaoke").checked;
	var e3 = document.getElementById("spotlight").checked;
	var e4 = document.getElementById("smoke").checked;
	var e5 = document.getElementById("photo_booth").checked;
	
	var equip_cost = 0;
	
	if (e1 == true)
	{
		equip_cost = equip_cost + 200;
	}
	
	if (e2 == true)
	{
		equip_cost = equip_cost + 200;
	}
	
	if (e3 == true)
	{
		equip_cost = equip_cost + 200;
	}
	
	if (e4 == true)
	{
		equip_cost = equip_cost + 200;
	}
	
	if (e5 == true)
	{
		equip_cost = equip_cost + 200;
	}
	
	return equip_cost;
}

function getOrnament()
{
	var o1 = document.getElementById("balloons").checked;
	var o2 = document.getElementById("banners").checked;
	var message = document.getElementById("message").value;
	
	var ornament_cost = 0;
	
	if (o1 == true)
	{
		ornament_cost = ornament_cost + 10;
	}
	
	if (o2 == true)
	{
		ornament_cost = ornament_cost + 10;
	}
	
	if (message != "")
	{
		ornament_cost = ornament_cost + 10;
	}
	
	return ornament_cost;
}

function getMisc()
{
	var m1 = document.getElementById("confetti").checked;
	var m2 = document.getElementById("card").checked;
	var pax = getGuest();
	
	var misc_cost = 0;
	
	if (m1 == true)
	{
		misc_cost = misc_cost + 5;
	}
	
	if (m2 == true)
	{
		misc_cost = misc_cost + (5 * pax);
	}
	
	return misc_cost;
}

function getPersonnel()
{
	var p1 = document.getElementById("master").checked;
	var p2 = document.getElementById("dj").checked;
	var p3 = document.getElementById("band").checked;
	var p4 = document.getElementById("comedian").checked;
	
	var p_cost = 0;
	
	if (p1 == true)
	{
		p_cost = p_cost + 800;
	}
	
	if (p2 == true)
	{
		p_cost = p_cost + 800;
	}
	
	if (p3 == true)
	{
		p_cost = p_cost + 800;
	}
	
	if (p4 == true)
	{
		p_cost = p_cost + 800;
	}
	
	return p_cost;
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

function showVenue(type) {
	var recomVenue = document.getElementById("recom_venue");
	var selfVenue = document.getElementById("self_venue");
	
	if (type == 'recom'){
		showHideByID("recom_venue");
		if (selfVenue.className.indexOf("w3-show") != -1) {
			selfVenue.className = selfVenue.className.replace(" w3-show", "");
		}
	}
	if (type == 'self'){
		showHideByID("self_venue");
		if (recomVenue.className.indexOf("w3-show") != -1) {
			recomVenue.className = recomVenue.className.replace(" w3-show", "");
		}
	}
}


function formatPost(){
	//format some stuff before posting to confirm.php
	
	// format venue
	var recomAddress = document.getElementById("recom_address");
	var selfAddress = document.getElementById("searchInput");
	var recomVenue = document.getElementById("recom_venue");
	var selfVenue = document.getElementById("self_venue");
	
	if((recomVenue.className.indexOf("w3-show") != -1) && (selfVenue.className.indexOf("w3-show") == -1)){
		var recomVenueName = "Recommended Venue: ";
		switch(recomVenueNo) {
			case 0:
				recomVenueName = recomVenueName + "The Zinc";
				break;
			case 1:
				recomVenueName = recomVenueName + "De Jackie Inspirations";
				break;
			case 2:
				recomVenueName = recomVenueName + "See Good Food Centre";
				break;
			case 3:
				recomVenueName = recomVenueName + "The Junk";
				break;
		}
		recomAddress.value = recomVenueName;
		recomAddress.name = "venue";
	}
	else {
		selfAddress.value = "Own venue: " + selfAddress.value;
		selfAddress.name = "venue";
	}
	
	
	//format food
	var food = document.getElementById("food");
	var foodDesc = selectedCuisine +" - ";
	switch(foodPack) {
		case 0:
			foodDesc = foodDesc + "Affordable";
			break;
		case 1:
			foodDesc = foodDesc + "Regular";
			break;
		case 2:
			foodDesc = foodDesc + "Prestigious";
			break;
	}
	food.value = foodDesc;

	
	//format desserts
	var d1 = document.getElementById("choco_cake").value;
	var d2 = document.getElementById("rvelvet_cake").value;
	var d3 = document.getElementById("vanilla_cake").value;
	var d4 = document.getElementById("carrot_cake").value;
	var d5 = document.getElementById("coffee_cake").value;
	var d6 = document.getElementById("matcha_cake").value;
	var d7 = document.getElementById("macarons").value;
	var d8 = document.getElementById("choco_cup").value;
	var d9 = document.getElementById("straw_cup").value;
	var d10 = document.getElementById("vanilla_cup").value;
	var d11 = document.getElementById("matcha_cup").value;
	var dessert = document.getElementById("dessert");
	var dessertDesc =  "";
	
	if (d1 != 0){
		dessertDesc = dessertDesc + "Chocolate Cake: " + d1 + ",";
	}
	if (d2 != 0){
		dessertDesc = dessertDesc + "Red Velvet Cake: " + d2 + ",";
	}
	if (d3 != 0){
		dessertDesc = dessertDesc + "Vanilla Cake: " + d3 + ",";
	}
	if (d4 != 0){
		dessertDesc = dessertDesc + "Carrot Cake: " + d4 + ",";
	}
	if (d5 != 0){
		dessertDesc = dessertDesc + "Coffee Cake: " + d5 + ",";
	}
	if (d6 != 0){
		dessertDesc = dessertDesc + "Matcha Cake: " + d6 + ",";
	}
	if (d7 != 0){
		dessertDesc = dessertDesc + "Macarons: " + d7 + ",";
	}
	if (d8 != 0){
		dessertDesc = dessertDesc + "Chocolate Cupcake: " + d8 + ",";
	}
	if (d9 != 0){
		dessertDesc = dessertDesc + "Strawberry Cupcake: " + d9 + ",";
	}
	if (d10 != 0){
		dessertDesc = dessertDesc + "Vanilla Cupcake: " + d10 + ",";
	}
	if (d11 != 0){
		dessertDesc = dessertDesc + "Matcha Cupcake: " + d11 + ",";
	}
	dessertDesc = dessertDesc.replace(/,\s*$/, "");
	dessert.value = dessertDesc;
	
	
	//format equipment
	var e1 = document.getElementById("sound").checked;
	var e2 = document.getElementById("karaoke").checked;
	var e3 = document.getElementById("spotlight").checked;
	var e4 = document.getElementById("smoke").checked;
	var e5 = document.getElementById("photo_booth").checked;
	
	var equipment = document.getElementById("equipment");
	var equipmentDesc =  "";
	
	if (e1 == true){
		equipmentDesc = equipmentDesc + "Sound System,";
	}
	if (e2 == true){
		equipmentDesc = equipmentDesc + "Karaoke Machine,";
	}
	if (e3 == true){
		equipmentDesc = equipmentDesc + "Spotlights,";
	}
	if (e4 == true){
		equipmentDesc = equipmentDesc + "Smoke Machine,";
	}
	if (e5 == true){
		equipmentDesc = equipmentDesc + "Photo Booth with Backdrop,";
	}
	equipmentDesc = equipmentDesc.replace(/,\s*$/, "");
	equipment.value = equipmentDesc;
	
	
	//format decor
	var o1 = document.getElementById("balloons").checked;
	var o2 = document.getElementById("banners").checked;
	var message = document.getElementById("message").value;
	
	var decor = document.getElementById("decor");
	var decorDesc =  "";
	
	if (o1 == true){
		decorDesc = decorDesc + "Balloons,";
	}
	if (o2 == true){
		decorDesc = decorDesc + "Banners,";
	}
	if (message != ""){
		decorDesc = decorDesc + "Message: " + message + ",";
	}
	decorDesc = decorDesc.replace(/,\s*$/, "");
	decor.value = decorDesc;
	
	
	//format misc
	var m1 = document.getElementById("confetti").checked;
	var m2 = document.getElementById("card").checked;
	var card_cover = document.getElementById("card_cover");
	var card_content = document.getElementById("card_content");
	var card_address = document.getElementById("card_address");
	var pax = getGuest();
	
	var misc = document.getElementById("misc");
	var miscDesc =  "";
	
	if (m1 == true){
		miscDesc = miscDesc + "Confetti,";
	}
	if (m2 == true){
		miscDesc = miscDesc + "Invitational Cards x" + pax + ",";
		miscDesc = miscDesc + "Message in cover: " + card_cover.value + ",";
		miscDesc = miscDesc + "Content in card: " + card_content.value + ",";
		miscDesc = miscDesc + "Address to send the cards: " + card_address.value + ",";
	}
	miscDesc = miscDesc.replace(/,\s*$/, "");
	misc.value = miscDesc;
	
	
	//format personnel
	var p1 = document.getElementById("master").checked;
	var p2 = document.getElementById("dj").checked;
	var p3 = document.getElementById("band").checked;
	var p4 = document.getElementById("comedian").checked;
	var lang = document.getElementById("language");
	
	var personnel = document.getElementById("personnel");
	var personnelDesc =  "";
	
	if (p1 == true){
		personnelDesc = personnelDesc + "Master of Ceremonies,";
	}
	
	if (p2 == true){
		personnelDesc = personnelDesc + "DJ,";
	}
	
	if (p3 == true){
		personnelDesc = personnelDesc + "Live Band,";
	}
	
	if (p4 == true){
		personnelDesc = personnelDesc + "Stand Up Comedian,";
	}
	
	if (lang.value != ""){
		personnelDesc = personnelDesc + "Language: " + lang.value + ",";
	}
	
	personnelDesc = personnelDesc.replace(/,\s*$/, "");
	personnel.value = personnelDesc;
}
function noenter() {
	return !(window.event && window.event.keyCode == 13);
}
</script>

<style>
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

#map {
	width: 100%;
	height: 600px;
}

.controls {
	border: 1px solid transparent;
	border-radius: 2px 0 0 2px;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	height: 32px;
	outline: none;
	box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#searchInput {
	background-color: #fff;
	font-family: Roboto;
	font-size: 15px;
	font-weight: 300;
	padding: 0 11px 0 13px;
	text-overflow: ellipsis;
	width: 100%;
}
#searchInput:focus {
	border-color: #4d90fe;
}
</style>

<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>