document.addEventListener("DOMContentLoaded", () => {

    let nom, prenom, ville, age
    let parent = document.querySelector("main")
    let el = document.createElement("ul")
    parent.appenChild(el)
    //prompt
    nom = prompt("Votre nom")
    prenom = prompt("Votre prenom")
    ville = prompt("Votre ville")
    age = parseInt(prompt("Votre age"))
    el.innerHTML += `<li> Nom : ${nom} </li>
                    <li> Prénom : ${prenom} </li>
                    <li> Ville : ${ville} </li>
                    <li> Age : ${age} </li>`


})