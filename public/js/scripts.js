/// Accordion
function accordion(){

	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", 
	  		function() {
			    this.classList.toggle("active");
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
function responsive(){

	var x = document.getElementById("navbarID");
	if(x.className === "navbar"){
		x.className += " responsive";
	}else{
		x.className = "navbar";
	}

}

/// Files
function myFiles () {
				
	var f = document.getElementById("input-button");
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

	document.getElementById("input-text").value = text;

}

/*
function clearSelect (select) {

	var i;
	for (i = select.options.length - 1; i >= 1; i--) {
		select.remove (i);
	}

}

function selectChange () {

	/// Getting the selected type of instance
	var select_type = document.getElementById ("instance_type");
	var select_type_option = select_type.options [select_type.selectedIndex].text;

	/// Filling with the correspondent sizes
	var select_size = document.getElementById("instance_size");
	/// Assures no duplicates
	clearSelect(select_size);
	/// Creates and adds the option
	var select_size_option = document.createElement("option");
	select_size_option.text = select_type_option;
	select_size.add(select_size_option);

}

function listFolders (path) {

	const main_path = "../_Instances/";
	const fs = require("fs");
	alert("Chegou até aqui");


}

*/