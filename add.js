function myFunction() {
	 var x = document.getElementById("mySecret");
	 var y = document.getElementById("myDostyp");
	 var z = document.getElementById("addSecret");
	if (x.style.display != "none") {
		x.style.display = "none"; 
	 	y.style.display = "none";  
	 	z.style.display = "inline-block";
	} 
	else {
		x.style.display = "inline-block";  
	 	y.style.display = "inline-block"; 
	 	z.style.display = "none";
	} 
}