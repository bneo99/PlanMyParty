<!DOCTYPE html>
<html lang="en" class="w3-theme-light">
	<head>
		<title>Plan My Party!</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="robots" content="noindex nofollow"/>
		<script src="/scripts/default.js"></script>
		<script src="/scripts/jquery-3.3.1.js"></script>
		
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
		
		<link rel="stylesheet" href="/styles/styles.css"/>
		<link rel="stylesheet" href="/styles/w3.css"/>
		<link rel="stylesheet" href="/styles/w3-theme-indigo.css"/>
		<link rel="stylesheet" id="theme" href="https://www.w3schools.com/lib/w3-theme-black.css"/>
	</head>
	<body>
	
		<?php session_start();?>
	
		<nav>
			<div id="topbar" class="w3-bar w3-theme">
				<a class="w3-dropdown-click w3-bar-item w3-button w3-hide-large" onclick="showHideByID('navbar')">&#9776;</a>
				<a href="/" class="w3-bar-item w3-button w3-hide-small w3-hide-medium">Home</a>
				<?php if(empty($_SESSION['accType'])){?>
				<a href="/pricing" class="w3-bar-item w3-button w3-hide-small w3-hide-medium">Pricing</a>
				<a href="/bookings" class="w3-bar-item w3-button w3-hide-small w3-hide-medium">My Bookings</a>
				<?php }
				elseif($_SESSION['accType'] == "admin"){?>
				<a href="/admin" class="w3-bar-item w3-button w3-hide-small w3-hide-medium">Admin Dashboard</a>
				<?php }
				else {?>
				<a href="/pricing" class="w3-bar-item w3-button w3-hide-small w3-hide-medium">Pricing</a>
				<a href="/bookings" class="w3-bar-item w3-button w3-hide-small w3-hide-medium">My Bookings</a>
				<?php }?>
				<a href="/reviews" class="w3-bar-item w3-button w3-hide-small w3-hide-medium">Reviews</a>
				<a href="/aboutus" class="w3-bar-item w3-button w3-hide-small w3-hide-medium">About</a>
				<a href="/contactus" class="w3-bar-item w3-button w3-hide-small w3-hide-medium">Contact Us</a>
				<a href="/disclaimer" class="w3-bar-item w3-button w3-hide-small w3-hide-medium">Disclaimer</a>
				<!-- Button to open the modal login form -->
				<div id="profile">
					<?php if(empty($_SESSION['userName'])){?>
					<a onclick="showHideByID('loginbox')" class="w3-bar-item w3-button w3-right">Login | Sign Up</a>
					<?php }?>	
					<?php if(isset($_SESSION['userName'])){?>

					<div class="w3-dropdown-click w3-right">
						<a id="userbutton" onclick="showHideByID('usermenu')" class="w3-button w3-theme w3-hide w3-show"><?php echo $_SESSION['userName']; ?></a>
						<div id="usermenu" class="w3-dropdown-content w3-bar-block w3-border" style="right:0;">
							<a href="/myaccount" class="w3-bar-item w3-button">My Account</a>
							<a href="/settings" class="w3-bar-item w3-button">Settings</a>
							<a onclick="showHideByID('themepicker')" class="w3-bar-item w3-button">Themes</a>
							<a href="/logout.php" class="w3-bar-item w3-button">Logout</a>
						</div>
					</div>
						<?php if(isset($_SESSION['themeName'])){?>
							<script>
								var themeLink = document.getElementById('theme');
								themeLink.href = themeLink.href.replace("indigo", '<?php echo $_SESSION['themeName']; ?>');
							</script>
						<?php }?>
					<?php }?>
				</div>
			</div> 
			
			<div id="navbar" class="w3-dropdown-content w3-bar-block w3-theme w3-hide w3-hide-large">
				<a href="/" class="w3-bar-item w3-button">Home</a>
				<?php if(empty($_SESSION['accType'])){?>
				<a href="/pricing" class="w3-bar-item w3-button">Pricing</a>
				<a href="/bookings" class="w3-bar-item w3-button">My Bookings</a>
				<?php }
				elseif($_SESSION['accType'] == "admin"){?>
				<a href="/admin" class="w3-bar-item w3-button">Admin Dashboard</a>
				<?php }
				else {?>
				<a href="/pricing" class="w3-bar-item w3-button">Pricing</a>
				<a href="/bookings" class="w3-bar-item w3-button">My Bookings</a>
				<?php }?>
				<a href="/reviews" class="w3-bar-item w3-button">Reviews</a>
				<a href="/aboutus" class="w3-bar-item w3-button">About</a>
				<a href="/contactus" class="w3-bar-item w3-button">Contact Us</a>
				<a href="/disclaimer" class="w3-bar-item w3-button">Disclaimer</a>
			</div>
			
			<!-- Login Modal -->
			<div id="loginbox" class="w3-modal">
				<!-- Modal Content -->
				<form class="w3-modal-content w3-animate-zoom" >
					<header class="w3-container w3-theme">
						<span onclick="showHideByID('loginbox')" class="w3-button w3-display-topright" >&times;</span>
						
						<h2>Login</h2>
					</header>
					<div class="w3-container w3-theme-light w3-padding ">
						<label for="uname" >Username</label>
						<input type="text" id="uname" name="uname" class="w3-input w3-border" autofocus required />

						<label for="passwd" >Password</label>
						<input type="password" class="w3-input w3-border" id="passwd" name="passwd" required />
						<br />
						<div id="add_err"></div>
						<br />
						<button id="login" type="submit" class="w3-button w3-theme-d1" >Login</button>
						
						<span> <a href="#">Forgot password?</a> </span>
						
						<a onclick="openSignupBox()" class="w3-button w3-theme-d1" style="float:right;" >Sign Up</a>
					</div>
				</form>
			</div> 
			
			<div id="signupbox" class="w3-modal">
				<!-- Modal Content -->
				<form class="w3-modal-content w3-animate-zoom" >
					<header class="w3-container w3-theme">
						<span onclick="showHideByID('signupbox').style.display='none'" class="w3-button w3-display-topright" >&times;</span>
						
						<h2>Sign Up</h2>
					</header>
					<div class="w3-container w3-theme-light w3-padding ">
						<label>Username</label>
						<input type="text" name="uname" class="w3-input w3-border" required />
						<label>Email</label>
						<input type="text" name="email" pattern="^.+@.+\..{2,3}$" class="w3-input w3-border" required />
						<label>Password</label>
						<input type="password" class="w3-input w3-border" name="passwd" required />
						<label>Confirm Password</label>
						<input type="password" class="w3-input w3-border" name="cpasswd" required />
						<label>
							<input type="checkbox" required="required" name="accepttnc" /> I accept the Terms and Conditions.
						</label>
						<br /> 
						<button type="submit" class="w3-button w3-theme-d1" >Submit</button>
					</div>
				</form>
			</div> 
			
			<!-- Theme Modal -->
			<div id="themepicker" class="w3-modal">
				<!-- Modal Content -->
				<form id="selecttheme" class="w3-modal-content w3-animate-zoom" >
					<header class="w3-container w3-theme">
						<span onclick="showHideByID('themepicker')" class="w3-button w3-display-topright" >&times;</span>
							
						<h2>Theme Picker</h2>
						</header>
					<div class="w3-container w3-theme-light w3-padding ">
						<p>These are predefined themes from W3Schools.</p>
						<p>	<select class="w3-select" form="selecttheme" id="themename" name="themename">
								<option value="" selected disabled>Choose a theme</option>
								<option value="red">Red</option>
								<option value="pink">Pink</option>
								<option value="purple">Purple</option>
								<option value="deep-purple">Deep Purple</option>
								<option value="indigo">Indigo</option>
								<option value="blue">Blue</option>
								<option value="light-blue">Light Blue</option>
								<option value="cyan">Cyan</option>
								<option value="teal">Teal</option>
								<option value="green">Green</option>
								<option value="light-green">Light Green</option>
							</select> 
						</p>
						<p id="theme_status"></p>
						<button type="submit" id="changetheme" class="w3-button w3-theme-d1">Set Theme</button>
					</div>
				</form>
			</div> 
		</nav>
		<button id="totopbutton" style="position:fixed;" class="w3-margin w3-display-bottomright w3-btn w3-round-large w3-theme-d3 w3-hide" onclick="window.scrollTo(0, 0);">Top</button>