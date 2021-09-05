//chargement DOM via Jquery
$(function () {    
    // CODE FOR ANIMATION MOBILE MENU
    const HEADER = $('.l-topbar');
    const MENU = $('.l-menu'); 
    const HAMBURGER = $('.hamburger');
    const LISTELEMENT = $('.l-menu-list-element');
    const LANGUAGE = $('.l-topbar-langContainer a');
    const LOGO = $('#Ebene_1');
    
    [HAMBURGER, LISTELEMENT].forEach((element) => {
        element.on('click', () => {
            HEADER.toggleClass("active"); 
            MENU.toggleClass("active"); 
            LANGUAGE.toggleClass("active");
            LOGO.toggleClass("active");
        })
    })

    //CODE FOR PROJECT CREATION VIA CLASS PROJECT
    //) create Table with objects
    let projects = [
        {
            img: "dist/assets/krom.PNG",
            title: "KROM",
            demoLink: "https://alainniessen.github.io/Krom",
            codeLink: "https://github.com/AlainNiessen/Krom"
        },
        {
            img: "dist/assets/islweb.PNG",
            title: "ISL-WEB",
            demoLink: "https://alainniessen.github.io/ISLWeb",
            codeLink: "https://github.com/AlainNiessen/ISLWeb"
        },
        {
            img: "dist/assets/portfolio.jpg",
            title: "PORTFOLIO CODE",
            demoLink: "https://github.com/AlainNiessen/Portfolio",
            codeLink: "https://github.com/AlainNiessen/Portfolio"
        },
        {
            img: "dist/assets/gulp.PNG",
            title: "GULP SUPPORT CODE",
            demoLink: "https://github.com/AlainNiessen/Starter-Project",
            codeLink: "https://github.com/AlainNiessen/Starter-Project"
        },        
        {
            img: "dist/assets/dad.PNG",
            title: "DRAG AND DROP",
            demoLink: "https://alainniessen.github.io/Project-Drag-and-Drop",
            codeLink: "https://github.com/AlainNiessen/Project-Drag-and-Drop"
        },
        {
            img: "dist/assets/color.PNG",
            title: "DRAW RECTANGLE",
            demoLink: "https://alainniessen.github.io/Project-Draw-Rectangle",
            codeLink: "https://github.com/AlainNiessen/Project-Draw-Rectangle"
        },
    ]

    projects.forEach((project) => {
        new Project(project);
    });   

    //submit event form
    $('#form').on('submit', formSubmit);

    //RESET event focusOut on every input and textarea in form individually
    const INPUT_NAME = $('#name');
    const INPUT_EMAIL = $('#email');
    const INPUT_SUBJECT = $('#subject');
    const INPUT_MESSAGE = $('#message');

    [INPUT_NAME, INPUT_EMAIL, INPUT_SUBJECT, INPUT_MESSAGE].forEach((element) => {
        element.on('focusout', focusOutField);
     
    })  
    
})