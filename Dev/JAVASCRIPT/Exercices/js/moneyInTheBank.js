document.addEventListener("DOMContentLoaded", () => {

    let solde = 1000
    let retrait
    let montRetrait = 0
    let printout = document.querySelector("ul")
    let p = document.querySelector("p")
    let pass = 1234



    let ATM = () => {
        for (let i = 3; i > 0; --i) {

// TODO : Faire obligation de saisir un code de 4 chiffres
            let passIn = Number(prompt("Veuillez saisir votre mot de passe."))
            if (passIn !== pass) {
                if (i > 1) {
                    alert("Mauvais mot de passe. Il vous reste " + (i - 1) + " essaies.")
                } else {
                    alert("Vous ne pouvez plus utiliser votre compte.")
                }
            } else {
                p.innerText = "Le mot de passe est correct."
                opération()
                break

            }
        }
    }
    let confirmer = () => {
        if (confirm("Voulez vous recommencer l'oppération?")) {
            opération()
        } else {
            alert("Opération annulé")
        }
    }

// TODO : Faire obligation de saisir un nombre
    let opération = () => {
        retrait = Number(prompt("Veuillez sasir le montant à retirer."))
        if (retrait <= 20 || retrait >= 100) {
            alert("Veuillez choisir un montant entre 20 et 100€")
            confirmer()
        } else {
            montRetrait = Number(montRetrait + retrait)
            solde -= retrait
            montRetrait += retrait
            alert("Montant retrait : " + montRetrait + " Solde : " + solde)
            confirmer()
        }
    }

    ATM()
    printout.innerHTML += `<li>Montant du retrait : ${montRetrait}€</li>
                            <li>Solde : ${solde.toFixed(2)}€</li>`
})


/*
ENTIER solde = 1000
ENTIER retrait

TANT QUE (solde > 0)
FAIRE
SAISIR retrait
    SI (retrait < solde)
        SI (retrait 20 !<> 100 )
            AFFICHER "Veuillez choisir un montant entre 20 et 100€"
            recommencer l'opération
        SINON
            AFFICHER "Vous avez retirer : " + retrait; "Vous avez dans votre compte : " + (solde - retrait);
            DEMANDER "Voulez vous recommencer l'opération?"
                SI ("Oui")
                    recommencer l'opération
                SINON
                    AFFICHER "Annulation oppération"
                FINSI
        FINSI
    SINON
        AFFICHER "Vous ne pouvez pas retirer cette somme."
        DEMANDER "Voulez vous recommencer l'opération?"
            SI ("Oui")
                recommencer l'opération
            SINON
                AFFICHER "Annulation oppération"
            FINSI
    FINSI
*/