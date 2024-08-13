const createForm = document.forms["create-form"];
const createHeading = document.getElementById("create-form-heading");

const upadteForm = document.forms["update-form"];
const updateHeading = document.getElementById("update-form-heading");

const deleteForm = document.forms["delete-form"];
const deleteHeading = document.getElementById("delete-form-heading");

//toggle off all forms initialy 
window.onload = function(){
    document.getElementById("create-form-display").style.display = "none";
    document.getElementById("update-form-display").style.display = "none";
    document.getElementById("delete-form-display").style.display = "none";
};

//create-form display toggle
createHeading.addEventListener("click", function(){
    let container = document.getElementById("create-form-display");
    let isVisible = container.style.display !== "none";

    if(isVisible){
        container.style.display = "none";
        createForm.style.height = "50px";
        createHeading.querySelector('i').className = 'bi bi-chevron-down';
    }
    else{
        container.style.display = "";
        createForm.style.height = "200px";
        createHeading.querySelector('i').className = 'bi bi-chevron-up';
    }   
});

//update-form display toggle
updateHeading.addEventListener("click", function(){
    let container = document.getElementById("update-form-display");
    let isVisible = container.style.display !== "none";

    if(isVisible){
        container.style.display = "none";
        upadteForm.style.height = "50px";
        updateHeading.querySelector('i').className = 'bi bi-chevron-down';
    }
    else{
        container.style.display = "";
        upadteForm.style.height = "250px";
        updateHeading.querySelector('i').className = 'bi bi-chevron-up';
    }   
});

//delete-form display toggle
deleteHeading.addEventListener("click", function(){
    let container = document.getElementById("delete-form-display");
    let isVisible = container.style.display !== "none";

    if(isVisible){
        container.style.display = "none";
        deleteForm.style.height = "50px";
        deleteHeading.querySelector('i').className = 'bi bi-chevron-down';
    }
    else{
        container.style.display = "";
        deleteForm.style.height = "150px";
        deleteHeading.querySelector('i').className = 'bi bi-chevron-up';

    }   
});