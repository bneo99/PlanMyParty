<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<!-- Set page title-->
<title>Update | Plan My Party!</title>

<div class="w3-container" >
	<h1> Update webpages from github repo </h1>
	<p> Note: This is for updating the latest changes from the github repository, the underlying script is written in bash. 
	</br>
	Press the button below or refresh to update.
	</p>
	<button type="button" onclick="updatePage()" class="w3-button w3-pale-red">Update</button>
	<p>
	<iframe src="update.php" class="w3-light-grey w3-threequarter w3-mobile">
		<p>Your browser does not support iframes.</p>
	</iframe>
	</p>
	<script>
		function updatePage() {
			location.reload();
		}
	</script>
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>