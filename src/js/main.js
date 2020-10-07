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

//code for animation studies
 let slider = document.getElementById('slider');
 let active = document.getElementById('active');
 let line1 = document.getElementById('line1');
 let line2 = document.getElementById('line2');
 let line3 = document.getElementById('line3');
 let line4 = document.getElementById('line4');
 let line5 = document.getElementById('line5');

 line1.onclick = function() {
	 slider.style.transform = 'translateX(0)';
	 active.style.left = '0';
 }
 line2.onclick = function() {
	slider.style.transform = 'translateX(-20%)';
	active.style.left = '20%';
}
line3.onclick = function() {
	slider.style.transform = 'translateX(-40%)';
	active.style.left = '40%';
}
line4.onclick = function() {
	slider.style.transform = 'translateX(-60%)';
	active.style.left = '60%';
}
line5.onclick = function() {
	slider.style.transform = 'translateX(-80%)';
	active.style.left = '80%';
}