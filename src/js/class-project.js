class Project {
    constructor (object) {
        this.img = object.img,
        this.title = object.title,
        this.demoLink = object.demoLink,
        this.codeLink = object.codeLink,
        
        this.createProject();
    }
    createProject() {
        //définition des éléments
        let parentElement = $('#project-row');
        let responsiveContainer = $('<div class="col-12 col-md-6 col-lg-4"></div>'); // based on grid system in grid.scss
        let project = $('<div class="m-project"></div>');
        let projectIllustration = $('<div class="m-project-illustration"></div>');
        let projectImg = $(`<a href=${this.demoLink} target="_blank" class="m-project-illustration-img"><img src=${this.img} alt=${this.title} title=${this.title} /></a>`);
        let projectIcon = $(`<a href=${this.demoLink} target="_blank" class="m-project-illustration-icon"><img src="dist/assets/glasses.png" alt="glasses" title="glasses" /></a>`);
        let projectTitle = $(`<h3><a href=${this.demoLink} target="_blank">${this.title}</a></h3>`);
        let projectCode = $(`<div class="m-project-code"><a href=${this.codeLink} target="_blank">Code</a></div>`);

        //construction project
        projectIllustration.append(projectImg, projectIcon);
        project.append(projectIllustration, projectTitle, projectCode);
        responsiveContainer.append(project);
        parentElement.append(responsiveContainer);
       
        
    }
}

