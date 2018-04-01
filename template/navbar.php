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
		<link rel="stylesheet" id="theme" href="https://www.w3schools.com/lib/w3-theme-indigo.css"/>
		
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
				<a href="javascript:void(0)" class="w3-dropdown-click w3-bar-item w3-button w3-hide-large w3-hide-medium" onclick="expandNav()">&#9776;</a>
				<a href="/" class="w3-bar-item w3-button">Home</a>
				<a href="/pricing" class="w3-bar-item w3-button w3-hide-small">Pricing</a>
				<a href="/bookings" class="w3-bar-item w3-button w3-hide-small">My Bookings</a>
				<a href="/review" class="w3-bar-item w3-button w3-hide-small">Review</a>
				<a href="/aboutus" class="w3-bar-item w3-button w3-hide-small">About</a>
				<a href="/contactus" class="w3-bar-item w3-button w3-hide-small">Contact Us</a>
				<a href="/disclaimer" class="w3-bar-item w3-button w3-hide-small">Disclaimer</a>
				<!-- Button to open the modal login form -->
				<div id="profile">
					<?php if(empty($_SESSION['userName'])){?>
					<a onclick="document.getElementById('loginbox').style.display='block'" class="w3-bar-item w3-button w3-right">Login | Sign Up</a>
					<?php }?>	
					<?php if(isset($_SESSION['userName'])){?>

					<div class="w3-dropdown-click w3-right">
						<a id="userbutton" onclick="openDropDownMenu()" class="w3-button w3-theme w3-hide w3-show"><?php echo $_SESSION['userName'] ?></a>
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
			
			<div id="navbar" class="w3-dropdown-content w3-bar-block w3-theme w3-hide w3-hide-large w3-hide-medium">
				<a href="/pricing" class="w3-bar-item w3-button">Pricing</a>
				<a href="/bookings" class="w3-bar-item w3-button">My Bookings</a>
				<a href="/review" class="w3-bar-item w3-button">Review</a>
				<a href="/aboutus" class="w3-bar-item w3-button">About</a>
				<a href="/contactus" class="w3-bar-item w3-button">Contact Us</a>
				<a href="/disclaimer" class="w3-bar-item w3-button">Disclaimer</a>
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
		