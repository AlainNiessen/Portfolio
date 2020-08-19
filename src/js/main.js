/*Code for menu on/off*/
var menuHam = document.getElementById("men-ham");
var menuMain = document.getElementById("men-nav");
var menuMain1 = document.getElementById("main-content"); // pour moi l'id doit plutôt être main-content => CHECK
 // celui-ci est inutile! Tu as déjà menuHam ;-) => CHECK

if(menuHam != null && menuMain!= null) {
	menuHam.addEventListener('click', function(e){
		menuMain.classList.toggle("is-active");
		menuMain1.classList.toggle("is-active");
		menuHam.classList.toggle("cross");
	});
}
else {
	alert('un des deux éléments pas présents');

}