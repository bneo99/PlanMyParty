function foodList(){
  
  var checkboxes = document.getElementsByName('food');
  var checkboxesChecked = [];
  // loop over them all
  for (var i=0; i<checkboxes.length; i++) {
     // And stick the checked ones onto an array...
     if (checkboxes[i].checked) {
        checkboxesChecked.push(checkboxes[i].value);
     }
  }
  document.getElementById("text").value = checkboxesChecked;

}

function venue()
{
	var rad = document.getElementByClass('ven');
	var dar = document.getElementByClass('ren');
	var rec = document.getElementById('text');
	
	if (dar.selected == true)
	{
		rec.style.display = "none";
    } 
	
	else
	{
       rec.style.display = "block";
    }
}
