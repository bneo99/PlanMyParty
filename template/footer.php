		</div>
		<!-- Footer -->
		<footer class="w3-container w3-theme-dark">
			<p>&copy; Plan My Party 2018</p>
			
			<?php 
				date_default_timezone_set("Asia/Kuching");
				$mod_time = date (DateTime::RFC850, getlastmod()); 
			?>
			<p>Last updated: <?php echo $mod_time; ?></p>
			<p>Maintained by: Webmaster (webmaster@planmyparty.ofcoursethisisfakedotcom)</p>
		</footer>
	</body>
</html> 