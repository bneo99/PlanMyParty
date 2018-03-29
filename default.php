<!DOCTYPE html>
<html lang="en" class="w3-theme-light">
	<head>
		<title>Plan My Party! | Home</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="robots" content="noindex nofollow"/>
		<script src="/scripts/default.js"></script>
		<script src="/scripts/jquery-3.3.1.js"></script>
		<link rel="stylesheet" href="/styles/styles.css"/>
		<link rel="stylesheet" href="/styles/w3.css"/>
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-cyan.css"/>
		
		<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png"/>
		<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png"/>
		<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png"/>
		<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png"/>
		<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png"/>
		<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png"/>
		<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png"/>
		<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png"/>
		<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png"/>
		<link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png"/>
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png"/>
		<link rel="icon" type="image/png" sizes="96x96" href="/faviconfavicon/favicon-96x96.png"/>
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png"/>
		<link rel="manifest" href="/favicon/manifest.json"/>
		<meta name="msapplication-TileColor" content="#ffffff"/>
		<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png"/>
		<meta name="theme-color" content="#ffffff"/>
	</head>
	<body>
	
		<?php session_start();?>
	
		<nav>
			<div id="topbar" class="w3-bar w3-theme">
				<a href="javascript:void(0)" class="w3-bar-item w3-button  w3-hide-large w3-hide-medium" onclick="expandNav()">&#9776;</a>
				<a href="/" class="w3-bar-item w3-button">Home</a>
				<a href="/pricing" class="w3-bar-item w3-button w3-hide-small">Pricing</a>
				<a href="/bookings" class="w3-bar-item w3-button w3-hide-small">My Bookings</a>
				<a href="/review" class="w3-bar-item w3-button w3-hide-small">Review</a>
				<a href="/aboutus" class="w3-bar-item w3-button w3-hide-small">About</a>
				<a href="/contactus" class="w3-bar-item w3-button w3-hide-small">Contact Us</a>
				<!-- Button to open the modal login form -->
				<div id="profile">
					<?php if(empty($_SESSION['userName'])){?>
					<a onclick="document.getElementById('loginbox').style.display='block'" class="w3-bar-item w3-button w3-right">Login | Sign Up</a>
					<?php }?>	
					<?php if(isset($_SESSION['userName'])){?>

					<div class="w3-dropdown-click w3-right">
						<a id="userbutton" onclick="openDropDownMenu()" class="w3-button w3-theme w3-hide w3-show">user</a>
						<div id="usermenu" class="w3-dropdown-content w3-bar-block w3-border" style="right:0;">
							<a href="/myaccount" class="w3-bar-item w3-button">My Account</a>
							<a href="/settings" class="w3-bar-item w3-button">Settings</a>
							<a href="/logout.php" class="w3-bar-item w3-button">Logout</a>
						</div>
					</div>
					<a id="totopbutton" class="w3-bar-item w3-button w3-right w3-hide" onclick="window.scrollTo(0, 0);">Top</a>
					<?php }?>
				</div>
			</div> 
			
			<div id="navbar" class="w3-bar-block w3-theme w3-hide w3-hide-large w3-hide-medium">
				<a href="#" class="w3-bar-item w3-button">Pricing</a>
				<a href="#" class="w3-bar-item w3-button">My Bookings</a>
				<a href="#" class="w3-bar-item w3-button">Review</a>
				<a href="#" class="w3-bar-item w3-button">About</a>
				<a href="#" class="w3-bar-item w3-button">Contact Us</a>
			</div>
			
			<!-- Login Modal -->
			<div id="loginbox" class="w3-modal">
				<!-- Modal Content -->
				<form class="w3-modal-content w3-animate-zoom" action="login.php">
					<header class="w3-container w3-theme">
						<span onclick="document.getElementById('loginbox').style.display='none'" class="w3-button w3-display-topright" >&times;</span>
						
						<h2>Login</h2>
					</header>
					<div class="w3-container w3-theme-light w3-padding ">
						<label for="uname" >Username</label>
						<input type="text" id="uname" name="uname" class="w3-input w3-border" autofocus required />

						<label for="passwd" >Password</label>
						<input type="password" class="w3-input w3-border" id="passwd" name="passwd" required />
						<br />
						<div class="err" id="add_err"></div>
						<br />
						<button id="login" type="submit" class="w3-button w3-theme-d1" >Login</button>
						
						<span> <a href="#">Forgot password?</a> </span>
						
						<a onclick="openSignupBox()" class="w3-button w3-theme-d1" style="float:right;" >Sign Up</a>
					</div>
				</form>
			</div> 
			
			<div id="signupbox" class="w3-modal">
				<!-- Modal Content -->
				<form class="w3-modal-content w3-animate-zoom" action="/signup.php">
					<header class="w3-container w3-theme">
						<span onclick="document.getElementById('signupbox').style.display='none'" class="w3-button w3-display-topright" >&times;</span>
						
						<h2>Sign Up</h2>
					</header>
					<div class="w3-container w3-theme-light w3-padding ">
						<label for="uname" >Username</label>
						<input type="text" name="uname" class="w3-input w3-border" required />
						<label for="email" >Email</label>
						<input type="text" name="email" pattern="^.+@.+\..{2,3}$" class="w3-input w3-border" required />
						<label for="passwd" >Password</label>
						<input type="password" class="w3-input w3-border" name="passwd" required />
						<label for="cpasswd" >Confirm Password</label>
						<input type="password" class="w3-input w3-border" name="cpasswd" required />
						<label>
							<input type="checkbox" required="required" name="accepttnc" /> I accept the Terms and Conditions.
						</label>
						<br /> 
						<button type="submit" class="w3-button w3-theme-d1" >Submit</button>
					</div>
				</form>
			</div> 

			<div id="usermenu" class="w3-dropdown-content w3-bar-block w3-theme w3-hide" style="right:0;">
				
			</div> 
			
		</nav>
		
		<!-- Put the contents here -->
		<h1 class="any">Plan My Party</h1>
		
		<br/><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		
		<!-- Footer -->
		<footer class="w3-container w3-theme-dark">
			<p>&copy; Plan My Party 2018</p>
			<p>Last updated: WhatDay, dd-mm-yy at hh:mm am/pm  (get a script to read modification time perhaps)</p>
			<p>Maintained by: Webmaster (webmaster@planmyparty.ofcoursethisisfakedotcom)</p>
		</footer>
		
	</body>
</html> 

<script>
function expandNav() {
	var x = document.getElementById("navbar");
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
	} else { 
		x.className = x.className.replace(" w3-show", "");
	}
}

window.onscroll = function (e) {  
	var topBar = document.getElementById("topbar");
	var userButton = document.getElementById("userbutton");
	var userMenu = document.getElementById('usermenu');
	var toTopButton = document.getElementById('totopbutton');


	if ($(window).scrollTop() == 0){
		topBar.className = topBar.className.replace(" w3-top", "");
	} else { 
		if (topBar.className.indexOf("w3-top") == -1) {
			topBar.className += " w3-top";
		}
	}
	if ($(window).scrollTop() == 0){
		if (userButton.className.indexOf("w3-show") == -1) {
			userButton.className += " w3-show";
		}
		
	} else { 
		userButton.className = userButton.className.replace(" w3-show", "");
		userMenu.className = userMenu.className.replace(" w3-show", "");
	}
	if ($(window).scrollTop() == 0){
		toTopButton.className = toTopButton.className.replace(" w3-show", "");
	} else { 
		if (toTopButton.className.indexOf("w3-show") == -1) {
			toTopButton.className += " w3-show";
		}
	}
}

function openSignupBox() {
	document.getElementById("loginbox").style.display='none';
	document.getElementById("signupbox").style.display='block';
}

var loginModal = document.getElementById('loginbox');
var signupModal = document.getElementById('signupbox');
var userMenu = document.getElementById('usermenu');

// When the user clicks anywhere outside of the element, close it
window.onclick = function(event) {
	if (event.target == loginModal) {
		loginModal.style.display = "none";
	}
	if (event.target == signupModal) {
		signupModal.style.display = "none";
	}
	if (event.target == userMenu) {
		userMenu.style.display = "none";
	}

}

function openDropDownMenu() {
	var x = document.getElementById("usermenu");
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
	} else { 
		x.className = x.className.replace(" w3-show", "");
	}
}

$(document).ready(function(){
	
   $("#login").click(function(){
		username=$("#uname").val();
        password=$("#passwd").val();

        $.ajax({
			type: "POST",
			url: "login.php",
            data: "uname="+username+"&passwd="+password,

            success: function(html){
			
			  if(html=='true')
              {
                document.getElementById('loginbox').style.display='none';
				location.reload(true);
              }
              else
              {
                    $("#add_err").html("Your username or password is incorrect, please try again.");
              }
            },
            beforeSend:function()
			{
                 $("#add_err").html("Loading...")
            }
        });
         return false;
    });
});

</script>
