// CODE FOR ANIMATION MOBILE MENU
var menuHam = document.getElementById("men-ham");
var menuMain = document.getElementById("men-nav");
var menuMain1 = document.getElementById("main-content"); 

if(menuHam != null && menuMain != null) {
	menuHam.addEventListener('click', function(e){
		menuMain.classList.toggle("is-active");
		menuMain1.classList.toggle("is-active");
		menuHam.classList.toggle("cross");
	});
}
else {
	alert('un des deux éléments pas présents');

}

//CODE FOR ANIMATION STUDIES - SLIDER

// 1 . Place DOM elements in variables
let slider = document.getElementById('slider');
let active = document.getElementById('active');
let line1 = document.getElementById('line1');
let line2 = document.getElementById('line2');
let line3 = document.getElementById('line3');
let line4 = document.getElementById('line4');
let line5 = document.getElementById('line5');

/* 2 . Check with if condition:
    if DOM element placed in variable is
        a) present (!= null) => function execute
        b) not present (== null) => no function execute
    
    ATTENTION : when no checking with if condition and DOM element is not present (== null):
    Error message: Uncaught TypeError: Cannot set property 'onclick' of null
*/
if (line1 != null) {
    line1.onclick = function() { // 3. function for animation on style
        slider.style.transform = 'translateX(0)';
        active.style.left = '0';
    }
}
if (line2 != null) {
    line2.onclick = function() {
        slider.style.transform = 'translateX(-20%)';
        active.style.left = '23%';
    }
}
if (line3 != null) {
    line3.onclick = function() {
        slider.style.transform = 'translateX(-40%)';
        active.style.left = '46%';
    }
}
if (line4 != null) {
    line4.onclick = function() {
        slider.style.transform = 'translateX(-60%)';
        active.style.left = '69%';
    }
}
if (line5 != null) {
    line5.onclick = function() {
        slider.style.transform = 'translateX(-80%)';
        active.style.left = '92%';
    }
}

