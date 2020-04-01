document.addEventListener("DOMContentLoaded", (event) => {

    let target, ajouterNom, ajouterAge


    target = document.querySelector('p')
    ajouterNom = prompt("Saisisez votre nom.")

    if (isNaN(ajouterNom)) {
        target.innerText += ajouterNom
    } else {
        alert("Saisisez votre NOM!")
        document.location.reload(true)
    }

    ajouterAge = Number(prompt("Saisisez votre âge."))

    if (isNaN(ajouterAge)) {

        alert("Saisisez votre AGE!")
        document.location.reload(true)
    } else {
        target.innerHTML += "<br>" + ajouterAge
    }



})
