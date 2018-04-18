<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<div class="w3-container">

<h2>Dynamic Progress Bar with Labels</h2>
<p>Label outside of the progress bar:</p>

<div class="w3-light-grey">
  <div id="myBar" class="w3-container w3-green" style="height:24px;width:0%"></div>
  </div>

  <p id="demo">0%</p>

  <button class="w3-button w3-green" onclick="execute()">Click Me</button>
  <div id="status" class="w3-hide w3-bar-block w3-border">
	<p class="w3-bar-item w3-button">Updates made:</p>
	<p class="w3-bar-item w3-button">Food delivery completed</p>
	<p class="w3-bar-item w3-button">Venue booking completed</p>
	<p class="w3-bar-item w3-button">Decorations set</p>
	<p class="w3-bar-item w3-button">Equipments prepared</p>
	<p class="w3-bar-item w3-button">Additional Accesories completed</p>
	<p class="w3-bar-item w3-button">All preparations done, time to party!!</p>
  </div>
</div>



<script>
function execute(){
	move();

	showHideByID("status");
}

function move() {
  var elem = document.getElementById("myBar");   
  var width = 0;
  var id = setInterval(frame, 35);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      document.getElementById("demo").innerHTML = width * 1  + '%';
    }
  }
}
</script>
<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>