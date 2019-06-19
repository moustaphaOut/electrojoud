$( document ).ready(function() {
    showtabe();
});
function hide_columns(id,toggle){
	if(document.getElementById(toggle).checked){
		var divsToHide = document.getElementsByClassName(id); //divsToHide is an array
		for(var i = 0; i < divsToHide.length; i++){
	        divsToHide[i].style.visibility = "hidden"; // or
	        divsToHide[i].style.display = "none"; // depending on what you're doing
	    }
	}else{
		var divsToHide = document.getElementsByClassName(id); //divsToHide is an array
		for(var i = 0; i < divsToHide.length; i++){
	        divsToHide[i].style.visibility = ""; // or
	        divsToHide[i].style.display = ""; // depending on what you're doing
	    }
	}
}
// for gestion_produit 

function showtabe() { 
	
	var xhttp3; 
	/*if (periode == 0  ) {
		document.getElementById("list_product").innerHTML = "";

		return;
	}*/
	xhttp3 = new XMLHttpRequest();
	xhttp3.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {

			document.getElementById("list_product").innerHTML = this.responseText;
		}
	};
	xhttp3.open("GET", "gestion_produit_code.php?t=afficher", true);
	xhttp3.send();


}
function delet(id) {
	if (id == '') {
		document.getElementById("msg").innerHTML = "* VEUILLEZ CHOISIR UN PRODUIT !";

		return;
	}
	xhttp3 = new XMLHttpRequest();
	xhttp3.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
                showtabe();
            }
        };
        xhttp3.open("GET", "gestion_produit_code.php?t=delete&id="+id, true);
        xhttp3.send();
}