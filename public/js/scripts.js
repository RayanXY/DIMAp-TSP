/// Accordion
function accordion () {

	var acc = document.getElementsByClassName ("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener ("click", 
	  		function () {
			    this.classList.toggle ("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight){
			      panel.style.maxHeight = null;
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			    } 
		  	}
		);
	}

}

/// Responsive page
function responsive () {

	var x = document.getElementById ("navbarID");
	if (x.className === "navbar") {
		x.className += " responsive";
	} else {
		x.className = "navbar";
	}

}

/// Files
function myFiles () {
				
	var f = document.getElementById ("input-button");
	var text = "";

	if ('files' in f) {
		if (f.files.length == 0) {
			text ="Escolha uma arquivo!";
		} else {
			for (var i = 0; i < f.files.length; i++) {
				var file = f.files[i];
				text += file.name + "; " ;
			}
		}
	}

	document.getElementById ("input-text").value = text;

}

/// Show text hidden
function showText () {
 
 	var text = document.getElementById ("new_size_text");
 	var select = document.getElementById ("size_select");

 	// alert (select_input);

 	if (text.style.visibility === "hidden") {
 		text.style.visibility = "visible";
 		select.disabled = true;
 	} else {
 		text.style.visibility = "hidden";
 		select.disabled = false;
 	}


}