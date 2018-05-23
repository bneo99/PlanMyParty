		<button id="totopbutton" style="position:fixed;" class="w3-margin w3-display-bottomright w3-btn w3-round-large w3-theme-d3 w3-hide" onclick="window.scrollTo(0, 0);">Top</button>
		<!-- Footer -->
		<footer class="w3-container w3-theme-dark" style="font-size:1.5vw;">
			<p>&copy; Plan My Party 2018</p>
			
			<?php 
				date_default_timezone_set("Asia/Kuching");
				$mod_time = date (DateTime::RFC850, getlastmod()); 
			?>
			<p>Last updated: <?php echo $mod_time; ?></p>
			<p>Maintained by: Webmaster (webmaster@planmyparty.ofcoursethisisfakedotcom)</p>
		</footer>