//*Exemple de correction
document.addEventListener("DOMContentLoaded", () => {

    let print_out = document.querySelector("main > p")
    let points = 0
    let questions_1
    questions_1 = Number()
//Conditions
switch(questions_1){
    case 1492:
        alert("Bonne réponse")
        point++
        print_out.innerText = "Mauvaise réponse nb pts : " + points
    break;
default :
alert("Mauvais réponse")
print_out.innerText = "Mauvaise réponse nb pts : " + points
}

if(points == 3){
    winner.style.display = "block";
    prix.setAttribute("src","./image...") 
} else if(points == 2){
    winner.style.display = "block";
    prix.setAttribute("src","./image...") 
}

//Stocker les points

localStorage.setItem("points",points)




})