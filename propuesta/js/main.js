// Seleccionar todos los inputs

const inputs = document.querySelectorAll(".input");

// Aparecer y Desaparecer transición de los input

function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}

// Ejecucion de funciones

inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
