let ageElement = document.getElementById("age");
let bday = new Date("July 7, 1998");
let today = new Date();
let age;

if(today.getMonth() < bday.getMonth()){
    age = today.getFullYear() - bday.getFullYear() - 1;
}else{
    age = today.getFullYear() - bday.getFullYear();
}

ageElement.innerHTML = age;