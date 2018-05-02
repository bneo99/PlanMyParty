<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<!-- Change some head values-->
<script>
	/* modify this to change the title */
	document.title = "Home | Plan My Party!";
	
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

<h1>Sorry!</h1>

<p style="text-align:center;">This function is not implemented yet. Sorry for the inconvenience caused.</p>

<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>