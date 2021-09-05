<?php

//récupération de la langue
$lang = isset($_GET["lang"]) ? $_GET["lang"] : "en";
$display = "";

//traduction du texte dans les variables
if( $lang == "en" || $lang == "fr" || $lang =="de") {

    $display = true;

    switch ($lang) {
        case "en":
            //menu
            $menu_about = "About Me";
            $menu_contact = "Contact";
    
            //intro_section
            $intro_h2 = "WEBDEVELOPER";
            $intro_text = "Welcome to my personal portfolio!";
            $intro_btn = "About me";
    
            //about_me_section
            $about_title = "About me";
            $about_info_title = "Introduction";
            $about_info_text_1 = "After a 16-year career in the social sector, I decided in 2019 to reorient myself professionally.";
            $about_info_text_2 = "With great interest and enthusiasm, I started studying web development at the Institute \"Saint-Laurent\" in Liège / Belgium in 2019";
            $about_info_text_3 = "I practice various technologies and approaches with a great thirst for knowledge and spend a lot of time perfecting what I have learned. In parallel to my studies, I also research technologies that are not directly addressed in the course and that allow me to continuously expand my horizon.";
            $about_info_text_4 = "Aroused interest? Just take a look at my projects or download my CV!";
            $about_skills_title = "Skills";
            $about_skills_1 = "Advanced";
            $about_skills_2 = "Basic";
            $about_cv_link = "dist/assets/cv/CVen.pdf";
            $about_cv_download = "CVen.pdf";
    
            //Portfolio
            $portfolio_subtitle = "Have fun browsing through my projects!";
    
            //Contact
            $contact_title = "Contact";
            $contact_description = "Please note that all fields are mandatory and your email is only used to reply!";
            $placeholder_name = "Your name";
            $placeholder_mail = "Your email";
            $placeholder_subject = "Your subject";
            $placeholder_message = "Your message";
            $btn_send = "Send";
            $error_name = "Please enter your name";
            $error_email = "Please enter your email";
            $error_subject = "Please enter your subject";
            $error_message = "Please enter your message";
            $contact_social = "Would you like to know more about me? Check out my social media presences!";
            
            //Footer
            $footer_title = "Direct Contact";
            break;
        case "fr":
            //menu
            $menu_about = "À propos";
            $menu_contact = "Contact";
    
            //intro_section
            $intro_h2 = "WEBDEVELOPPEUR";
            $intro_text = "Bienvenue sur mon portfolio personnel!";
            $intro_btn = "À propos";
    
            //about_me_section
            $about_title = "À propos";
            $about_info_title = "Introduction";
            $about_info_text_1 = "Après une carrière de 16 ans dans le secteur social, j'ai décidé en 2019 de me réorienter professionnellement.";
            $about_info_text_2 = "Avec beaucoup d'intérêt et d'enthousiasme, j'ai commencé à étudier le développement web à l'Institut \"Saint-Laurent\" à Liège / Belgique en 2019";
            $about_info_text_3 = "Je pratique diverses technologies et approches avec une grande soif de connaissances et passe beaucoup de temps à perfectionner ce que j'ai appris. En parallèle de mes études, je recherche également des technologies qui ne sont pas directement abordées dans le cours et qui me permettent d'élargir en permanence mon horizon.";
            $about_info_text_4 = "Intérêt suscité ? Jetez un œil à mes projets ou téléchargez mon CV !";
            $about_skills_title = "Compétences";
            $about_skills_1 = "Avancées";
            $about_skills_2 = "De base";
            $about_cv_link = "dist/assets/cv/CVfr.pdf";
            $about_cv_download = "CVfr.pdf";
    
            //Portfolio
            $portfolio_subtitle = "Amusez-vous à parcourir mes projets!";
    
            //Contact
            $contact_title = "Contact";
            $contact_description = "Veuillez noter que tous les champs sont obligatoires et que votre email est uniquement utilisé pour répondre!";
            $placeholder_name = "Votre nom";
            $placeholder_mail = "Votre email";
            $placeholder_subject = "Votre sujet";
            $placeholder_message = "Votre message";
            $btn_send = "Envoyer";
            $error_name = "S'il vous plaît entrez votre nom";
            $error_email = "S'il vous plaît entrez votre email";
            $error_subject = "S'il vous plaît entrez votre sujet";
            $error_message = "S'il vous plaît entrez votre message";
            $contact_social = "Souhaitez-vous en savoir plus sur moi? Découvrez mes présences sur les réseaux sociaux!"; 

            //Footer
            $footer_title = "Contact direct";
            break;
        case "de":
            //menu
            $menu_about = "Über mich";
            $menu_contact = "Kontakt";
    
            //intro_section
            $intro_h2 = "WEBENTWICKLER";
            $intro_text = "Willkommen auf meinem persönlichen Portfolio!";
            $intro_btn = "Über mich";
    
            //about_me_section
            $about_title = "Über mich";
            $about_info_title = "Einführung";
            $about_info_text_1 = "Nach einer 16-jährigen Karriere im sozialen Bereich habe ich mich 2019 entschlossen, mich beruflich neu zu orientieren.";
            $about_info_text_2 = "Mit großem Interesse und Enthusiasmus habe ich 2019 ein Studium der Webentwicklung am \"Saint-Laurent\"-Institut in Lüttich/Belgien begonnen";
            $about_info_text_3 = "Mit großem Wissensdurst praktiziere ich verschiedene Technologien und Ansätze und verbringe viel Zeit damit, das Gelernte zu perfektionieren. Parallel zu meinem Studium suche ich auch nach Technologien, die nicht direkt im Studium angesprochen werden und die es mir ermöglichen, meinen Horizont ständig zu erweitern.";
            $about_info_text_4 = "Interesse geweckt? Sehen Sie sich meine Projekte an oder laden Sie meinen Lebenslauf herunter!";
            $about_skills_title = "Fähigkeiten";
            $about_skills_1 = "Fortgeschritten";
            $about_skills_2 = "Basis";
            $about_cv_link = "dist/assets/cv/CVde.pdf";
            $about_cv_download = "CVde.pdf";
    
            //Portfolio
            $portfolio_subtitle = "Viel Spaß beim Stöbern in meinen Projekten!";
    
            //Contact
            $contact_title = "Kontakt";
            $contact_description = "Bitte beachten Sie, dass alle Felder obligatorisch sind und Ihre Email nur genutzt wird zum Antworten!";
            $placeholder_name = "Ihr Name";
            $placeholder_mail = "Ihre Email";
            $placeholder_subject = "Ihr Betreff";
            $placeholder_message = "Ihre Nachricht";
            $btn_send = "Absenden";
            $error_name = "Bitte geben Sie Ihren Namen ein";
            $error_email = "Bitte geben Sie Ihre Email ein";
            $error_subject = "Bitte geben Sie Ihren Betreff ein";
            $error_message = "Bitte geben Sie Ihre Nachricht ein";
            $contact_social = "Sie möchten mehr über mich wissen? Sehen Sie sich meine Social Media Präsenz an!"; 
            
            //Footer
            $footer_title = "Direkter Kontakt";
            break;
    }
} else {
    $display = false;
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio Alain Niessen</title>        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">    
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/css/min-screen.css" type="text/css">
        <script type="text/javascript" src="dist/js/min-jquery.js"></script> 
        <script type="text/javascript" src="dist/js/min-all.js"></script>         
    </head>
    <body>
        <?php
        if($display) {
        ?>
        <section class="l-topbar"> 
            <div class="wrapper">
                <div class="l-topbar-info">
                    <a href="#intro" class="l-topbar-info-logo">
                        <svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	                    width="529px" height="72px" viewBox="0 0 529 72" enable-background="new 0 0 529 72" xml:space="preserve">
                            <g>
                                <polygon fill="#007A7E" points="17.208,0 0.228,45.396 2.315,45.441 26.939,45.441 27.93,45.441 28.896,45.441 28.896,35.539 
                                    15.58,35.539 24.815,10.838 29.896,10.838 52.834,72 64.489,72 37.51,0 	"/>
                                <polygon fill="#007A7E" points="53.524,0 53.524,10.062 66.774,45.442 78.352,45.442 65.432,10.838 74.941,10.838 97.853,72 
                                    98.943,72 98.943,71.999 98.943,71.999 124.632,71.999 125.598,71.999 126.564,71.999 126.564,36.506 115.72,36.506 115.72,62.094 
                                    105.706,62.094 82.436,0 	"/>
                            </g>
                            <g>
                                <g>
                                    <path fill="#007A7E" d="M526.614,52.087h2.158V19.898h-2.327V48.13l-22.548-28.232h-1.703v32.189h2.258V24.261L526.614,52.087z
                                        M474.491,49.993V36.675h16.349v-1.966h-16.349V21.986h18.741v-2.088h-20.977v32.189h21.328v-2.094H474.491z M462.441,23.484
                                        c-1.357-1.29-2.799-2.25-4.467-2.837c-1.665-0.625-3.421-0.962-5.511-0.962c-1.758,0-3.292,0.186-4.601,0.625
                                        c-1.419,0.337-2.578,0.943-3.562,1.708c-0.973,0.767-1.873,1.725-2.454,2.824c-0.563,1.157-0.741,2.435-0.741,3.835
                                        c0,1.388,0.178,2.422,0.691,3.399c0.485,0.804,1.034,1.6,2.051,2.12c0.823,0.629,1.957,1.139,3.157,1.546
                                        c1.444,0.517,2.947,0.871,4.606,1.161c1.646,0.388,3.101,0.842,4.473,1.179c1.194,0.334,2.228,0.772,3.17,1.334
                                        c0.732,0.554,1.407,1.252,1.788,2.003c0.372,0.696,0.688,1.548,0.688,2.595c0,2.09-0.83,3.645-2.385,4.663
                                        c-1.545,1.026-3.748,1.538-6.664,1.538c-2.378,0-4.648-0.365-6.554-1.101c-1.913-0.978-3.623-2.019-4.894-3.497l-1.31,1.996
                                        c3.424,3.095,7.688,4.643,12.714,4.643c1.715,0,3.277-0.035,4.64-0.514c1.547-0.351,2.595-0.894,3.622-1.548
                                        c1.031-0.701,1.886-1.547,2.467-2.581c0.576-1.061,0.739-2.397,0.739-3.754c0-1.406-0.142-2.621-0.675-3.558
                                        c-0.535-0.947-1.405-1.886-2.357-2.495c-0.954-0.618-2.221-1.182-3.556-1.586c-1.33-0.478-2.904-0.985-4.703-1.276
                                        c-1.71-0.288-3.066-0.748-4.298-1.047c-1.04-0.243-2.074-0.735-2.847-1.252c-0.775-0.514-1.293-1.034-1.767-1.648
                                        c-0.293-0.753-0.556-1.524-0.556-2.547c0-2.112,0.811-3.676,2.188-4.896c1.419-1.146,3.769-1.78,6.927-1.78
                                        c3.783,0,6.757,1.192,8.847,3.516L462.441,23.484z M432.816,23.484c-1.341-1.29-2.889-2.25-4.437-2.837
                                        c-1.566-0.625-3.572-0.962-5.659-0.962c-1.567,0-3.116,0.186-4.604,0.625c-1.308,0.337-2.574,0.943-3.551,1.708
                                        c-0.979,0.767-1.673,1.725-2.215,2.824c-0.578,1.157-0.992,2.435-0.992,3.835c0,1.388,0.337,2.422,0.76,3.399
                                        c0.423,0.804,1.169,1.6,1.99,2.12c0.85,0.629,1.953,1.139,3.402,1.546c1.197,0.517,2.699,0.871,4.501,1.161
                                        c1.722,0.388,3.198,0.842,4.33,1.179c1.385,0.334,2.439,0.772,3.165,1.334c0.937,0.554,1.454,1.252,1.969,2.003
                                        c0.45,0.696,0.52,1.548,0.52,2.595c0,2.09-0.683,3.645-2.285,4.663c-1.597,1.026-3.859,1.538-6.52,1.538
                                        c-2.552,0-4.646-0.365-6.685-1.101c-2.033-0.978-3.613-2.019-5.008-3.497l-1.187,1.996c3.521,3.095,7.746,4.643,12.747,4.643
                                        c1.709,0,3.256-0.035,4.697-0.514c1.334-0.351,2.622-0.894,3.627-1.548c0.998-0.701,1.662-1.547,2.238-2.581
                                        c0.581-1.061,0.953-2.397,0.953-3.754c0-1.406-0.352-2.621-0.885-3.558c-0.528-0.947-1.181-1.886-2.214-2.495
                                        c-1.032-0.618-2.123-1.182-3.613-1.586c-1.42-0.478-2.984-0.985-4.643-1.276c-1.609-0.288-3.099-0.748-4.211-1.047
                                        c-1.245-0.243-2.192-0.735-3.017-1.252c-0.709-0.514-1.294-1.034-1.581-1.648c-0.484-0.753-0.557-1.524-0.557-2.547
                                        c0-2.112,0.59-3.676,2.138-4.896c1.427-1.146,3.612-1.78,6.729-1.78c3.89,0,6.757,1.192,8.848,3.516L432.816,23.484z
                                        M386.046,49.993V36.675h16.243v-1.966h-16.243V21.986h18.592v-2.088h-21.017v32.189h21.522v-2.094H386.046z M373.019,19.898
                                        h-2.411v32.189h2.411V19.898z M357.907,52.087h2.152V19.898h-2.37V48.13l-22.501-28.232h-1.75v32.189h2.301V24.261L357.907,52.087
                                        z M306.335,52.087h4.237V19.962h-5.167v23.075l-18.329-23.139h-4.017v32.189h5.048V29.5L306.335,52.087z M273.582,19.898h-5.084
                                        v32.189h5.084V19.898z M242.019,39.544l5.315-13.736l5.162,13.736H242.019z M232.366,52.087h5.422l3.352-8.718h12.389l3.359,8.718
                                        h5.402l-12.679-32.189h-4.459L232.366,52.087z M229.272,52.087v-4.473h-17.215V19.898h-5.026v32.189H229.272z M180.495,39.544
                                        l5.416-13.736l5.164,13.736H180.495z M170.934,52.087h5.369l3.347-8.718h12.402l3.413,8.718h5.3l-12.683-32.189h-4.454
                                        L170.934,52.087z"/>
                                </g>
                            </g>
                        </svg>
                    </a>                                                       
                </div>
                <div class="l-topbar-langContainer">
                    <a href="index.php?lang=en">EN</a>
                    <a href="index.php?lang=fr">FR</a>
                    <a href="index.php?lang=de">DE</a>
                </div>                
                <div class="l-topbar-hamburgerMenu">                    
                    <div class="hamburger"> 
                        <span class="line1"></span>
                        <span class="line2"></span>
                        <span class="line3"></span>
                    </div>
                </div>
            </div>      
        </section>
        <section class="l-menu">            
            <ul>              
                <li class="l-menu-list-element"> 
                    <a href="#intro">Home</a>
                </li>
                <li class="l-menu-list-element">
                    <a href="#aboutme"><?php echo $menu_about ?></a>
                </li>
                <li class="l-menu-list-element">
                    <a href="#portfolio">Portfolio</a>
                </li>
                <li class="l-menu-list-element">
                    <a href="#contact"><?php echo $menu_contact ?></a>
                </li>
            </ul>          
        </section>
        <section class="main">
            <section class="m-intro" id="intro">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="m-intro-image">
                                <img src="dist/assets/portfolio3.jpg" alt="Portrait Alain Niessen" title="Portrait Alain Niessen">
                            </div>                        
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="m-intro-text">
                                <h1>Alain Niessen</h1>
                                <h2><?php echo $intro_h2 ?></h2>
                                <p>
                                    <?php echo $intro_text ?>
                                </p>
                                <div class="btn-about">
                                    <a href="#aboutme"><?php echo $intro_btn ?></a>
                                    <a href="#portfolio">Portfolio</a>
                                </div>                            
                            </div>                        
                        </div>
                    </div>
                </div>                           
            </section>
            <section class="m-aboutme" id="aboutme">
                <div class="wrapper">
                    <h1><?php echo $about_title ?></h1>
                    <div class="m-aboutme-infobox"> 
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="m-aboutme-infoPerson">
                                    <h1><?php echo $about_info_title ?></h1>
                                    <p>
                                        <?php echo $about_info_text_1 ?>
                                    </p>
                                    <p>
                                        <?php echo $about_info_text_2 ?>
                                    </p>
                                    <p>
                                        <?php echo $about_info_text_3 ?>
                                    </p>
                                    <p>
                                        <?php echo $about_info_text_4 ?>
                                    </p>
                                    <div class="portfolioLink">
                                        <a href="#portfolio">Portfolio</a>
                                        <a href="<?php echo $about_cv_link ?>" download="<?php echo $about_cv_download ?>">Download CV</a>
                                    </div> 
                                    <div class="m-about-social">
                                    <p><?php echo $contact_social ?></p>
                                    <div class="m-about-social-icons">
                                        <a href="https://www.facebook.com/alain.niessen.10" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                                        <a href="https://www.linkedin.com/in/alain-niessen-84b8431b2/" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://www.deviantart.com/silence-in-your-head" target="_blank" title="DeviantArt"><i class="fab fa-deviantart"></i></a>
                                        <a href="https://github.com/AlainNiessen" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>                       
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="m-aboutme-infoSkills">
                                    <h1><?php echo $about_skills_title ?></h1>                    
                                    <div class="m-aboutme-advancedSkills">
                                        <h2><?php echo $about_skills_1 ?></h2>
                                        <div class="icons">
                                            <img src="dist/assets/html5.png" alt="HTML5" title="HTML5"/>
                                            <img src="dist/assets/css3.png" alt="CSS3" title="CSS3"/>
                                            <img src="dist/assets/sass.png" alt="SASS" title="SASS"/>
                                            <img src="dist/assets/bootstrap.png" alt="BOOTSTRAP" title="BOOTSTRAP"/>
                                            <img src="dist/assets/javascript.png" alt="JAVASCRIPT" title="JAVASCRIPT"/>
                                            <img src="dist/assets/jquery.png" alt="JQUERY" title="JQUERY"/>                                                                   
                                        </div>
                                    </div>                    
                                    <div class="m-aboutme-basicSkills">
                                        <h2><?php echo $about_skills_2 ?></h2>
                                        <div class="icons">                                            
                                            <img src="dist/assets/php.png" alt="PHP" title="PHP"/>                                             
                                            <img src="dist/assets/mysql.png" alt="MYSQL" title="MYSQL"/>
                                            <img src="dist/assets/gulp.PNG" alt="GULP" title="GULP"/>
                                            <img src="dist/assets/react.png" alt="REACT" title="REACT"/>
                                            <img src="dist/assets/photoshop.png" alt="PHOTOSHOP" title="PHOTOSHOP"/>
                                            <img src="dist/assets/illustrator.png" alt="ILLUSTRATOR" title="ILLUSTRATOR"/>                        
                                        </div>
                                    </div>
                                </div>
                            </div>                    
                        </div>                  
                    </div>  
                </div>      
            </section>
            <section class="m-portfolio" id="portfolio">
                <div class="wrapper">
                    <h1>Portfolio</h1>
                    <h3>
                        <?php echo $portfolio_subtitle ?>
                    </h3>
                    <div class="m-portfolio-projects">
                        <div class="row" id="project-row">
                            <!--filled dynamique via class Project and method createProject-->
                        </div>
                    </div>                                         
                </div>
            </section>
            <section class="m-contact" id="contact">
                <div class="wrapper">
                    <h1><?php echo $contact_title ?></h1>
                    <div class="m-contact-container">                           
                        <div class="m-contactForm">
                            <h2>Email</h2>
                            <p><?php echo $contact_description ?></p>
                            <form class="m-formContact" id="form" data-lang=<?php echo $lang ?>>
                                <div class="box_name">
                                    <p><?php echo $error_name ?></p>
                                    <input type="text" name="name" id="name" placeholder="<?php echo $placeholder_name ?>" />                                            
                                </div>                                        
                                <div class="box_email">
                                    <p><?php echo $error_email ?></p>
                                    <input type="email" name="email" id="email" placeholder="<?php echo $placeholder_mail ?>" />                                            
                                </div>
                                <div class="box_subject">
                                    <p><?php echo $error_subject ?></p>
                                    <input type="text" name="subject" id="subject" placeholder="<?php echo $placeholder_subject ?>" />                                            
                                </div>
                                <div class="box_message">
                                    <p><?php echo $error_message ?></p>
                                    <textarea placeholder="<?php echo $placeholder_message ?>" id="message" name="message"></textarea>                                            
                                </div>                                        
                                <button type="submit" id="submit"><?php echo $btn_send ?></button>
                                <div class="messageResultat">
                                    <div class="messageResultatContent"></div>
                                </div>
                            </form>
                        </div>                        
                    </div>                                                      
                </div>           
            </section>
        </section>
        <section class="l-footer">
            <div class="wrapper">
                <div class="l-footer-info">                    
                    <div class="l-footer-info-contactBox">
                        <h2><?php echo $footer_title ?></h2>
                        <div class="l-footer-info-contactBox-position">                 
                            <div class="l-footer-info-infoContact"> 
                                <i class="fas fa-phone"></i>  
                                <a href="tel:+32498415694" title="Tel">++32 (0)498/41.56.94</a>                                           
                            </div>
                            <div class="l-footer-info-infoContact"> 
                                <i class="fas fa-envelope"></i>  
                                <a href="mailto:alain_niessen@hotmail.com" title="Mail">alain_niessen@hotmail.com</a>                                           
                            </div>
                        </div>                                
                    </div>                
                    <div class="l-footer-copyright">
                        <p>
                            All icons by <a href="https://fontawesome.com/" target="_blank">Font Awesome</a> and <a href="https://www.klipartz.com/" target="_blank">Klipartz</a>
                        </p>
                        <p>
                            Copyright <i class="far fa-copyright"></i> 2021 All rights reserved by <span class="text-decoration">Alain Niessen</span>
                        </p>
                    </div>                                 
                </div>
            </div>            
        </section>
        <?php
        } else {
        ?>
        <div class="langError-container">
            <h1>Language does not exist</h1>
            <a class="langError" href="index.php?lang=en">Back to site</a>
        </div>        
        <?php
        }
        ?>
    </body>
</html>