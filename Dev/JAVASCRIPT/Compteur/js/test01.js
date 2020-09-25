document.addEventListener("DOMContentLoaded", () => {


    let pass = "12AZ"
    let p = document.querySelector("p")

    for (let i = 3; i > 0; --i) {
        let passIn = prompt("Veuillez saisir votre mot de passe.")
        if (passIn !== pass) {
            if (i > 1) {
                alert("Mauvais mot de passe. Il vous reste " + (i - 1) + " essaies.")
            } else {
                alert("Vous ne pouvez plus utiliser votre compte.")
            }
        } else {
            p.innerText = "Le mot de passe est correct."
            break
        }
    }



    /*
    compteur

    mot de passe = 12AZ

    afficher "Veuillez saisir votre mot de passe"
    droit à 3 saisis
    i = 3 ; i > 0 ; i--;
        si mot de pass pas bon 
        afficher "Mauvais mot de passe. Il vous reste " + i + " essai."
        afficher "Veuillez saisir votre mot de passe"
        saisir "Mot de passe"
        si non 
        afficher "Le mot de passe est correct."



    */


})