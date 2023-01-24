function searchProjects(terms){
    
    let projects = document.getElementsByClassName("project");
    console.log(projects);
    
    if (!terms){ //Show all projects
        for(let i = 0; i < projects.length; i++){
            projects[i].parentElement.parentElement.style.display = "block";
        }
        return;
    }

    let projName;
    let projTags;

    for(let i = 0; i < projects.length; i++){
        projName = projects[i].querySelector(".project__title").innerHTML;
        projName = projName.toUpperCase();
        projName = projName.trim();
        projTags = projects[i].dataset.tags;
        projTags = projTags.toUpperCase();
        projTags = projTags.trim();
        terms = terms.toUpperCase();
        terms = terms.trim();
        if(projName.search(terms)==-1 && projTags.search(terms)==-1){
            projects[i].parentElement.parentElement.style.display = "none";
        }else{
            projects[i].parentElement.parentElement.style.display = "block";
        }
    }

}