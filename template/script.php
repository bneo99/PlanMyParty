<script>
	function showHideByID(divID) {
		var element = document.getElementById(divID);
		
		if (element.className.indexOf("w3-show") == -1) {
			element.className += " w3-show";
		} else { 
			element.className = element.className.replace(" w3-show", "");
		}
	}

	window.onscroll = function (e) {  
		var topBar = document.getElementById("topbar");
		var userButton = document.getElementById("userbutton");
		var userMenu = document.getElementById('usermenu');
		var toTopButton = document.getElementById('totopbutton');


		if ($(window).scrollTop() <= 10){
			topBar.className = topBar.className.replace(" w3-top", "");
			
			if (userButton.className.indexOf("w3-show") == -1) {
				userButton.className += " w3-show";
			}
			
			toTopButton.className = toTopButton.className.replace(" w3-show", "");
		} else { 
			if (topBar.className.indexOf("w3-top") == -1) {
				topBar.className += " w3-top";
			}
			
			userButton.className = userButton.className.replace(" w3-show", "");
			userMenu.className = userMenu.className.replace(" w3-show", "");
			
			if (toTopButton.className.indexOf("w3-show") == -1) {
				toTopButton.className += " w3-show";
			}
		}
	}

	function openSignupBox() {
		showHideByID('loginbox');
		showHideByID('signupbox');
	}

	var loginModal = document.getElementById('loginbox');
	var signupModal = document.getElementById('signupbox');

	// When the user clicks anywhere outside of the element, close it
	window.onclick = function(event) {
		if (event.target == loginModal) {
			loginModal.className = loginModal.className.replace(" w3-show", "");
		}
		if (event.target == signupModal) {
			signupModal.className = signupModal.className.replace(" w3-show", "");
		}

	}
	
	$(document).ready(function(){
		
	   $("#login").click(function(){
			username=$("#uname").val();
			password=$("#passwd").val();

			$.ajax({
				type: "POST",
				url: "/login.php",
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
		
		$("#changetheme").click(function(){
			themename=$("#themename").val();
			
			$.ajax({
				type: "POST",
				url: "/changetheme.php",
				data: "theme="+themename,

				success: function(html){
				
				  if(html=='ok')
				  {
					$("#theme_status").html("Theme changed, refreshing page");
					location.reload("true");
				  }
				  else
				  {
						$("#theme_status").html("Error, try again.");
				  }
				},
				beforeSend:function()
				{
					 $("#theme_status").html("Changing theme...");
				}
			});
			 return false;
		});
	});

</script>