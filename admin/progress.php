<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<!-- Change some head values-->
<script>
	/* modify this to change the title */
	document.title = "Update Progress 'party' | Plan My Party!";
	
</script>

<div class="w3-container w3-theme-l3">
<h1>Update Progress</h1>
</div>

<div class="w3-container w3-theme-l4">
<h2>Event Name: party (should update based on order info in database)</h2>

<h3>placeholder: put a progress bar here (maybe animate with js)</h3>

<p>add the chat kinda system (do some sort of read from file thing )
<br/>
so need some sort of folder to store all the files (havent decide)
<br/>
either straight place in a subfolder or place in server home (so wont follo through with github, can leave a template tho)
<br/>
would probably be enter saparated but need to embed time/date info and percentage info
maybe some sort of xml thing coz the format works well
</p>
<p>
<textarea style="width:100%;">
<update date="12042018" time="1430" percentage="10">Explanation</update>
</textarea>
</p>
<p>^^^^^ so smth like that in a xml file ^^^^^^ (perhaps ordernum.xml)</p>
</div>

<style>
th, td {
	text-align:center;
}
</style>

<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>