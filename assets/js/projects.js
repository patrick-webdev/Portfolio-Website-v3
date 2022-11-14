function searchProjects(terms){
    let projects = document.getElementsByClassName("project");
    
    if (!terms){ //Show all projects
        for(let i = 0; i < projects.length; i++){
            projects[i].parentElement.style.display = "block";
        }
        return;
    }

    let projName;

    for(let i = 0; i < projects.length; i++){
        projName = projects[i].querySelector(".project__title").innerHTML;
        projName = projName.toUpperCase();
        terms = terms.toUpperCase();
        if(projName.search(terms)==-1){
            projects[i].parentElement.style.display = "none";
        }
    }

}