document.addEventListener("DOMContentLoaded", () => {


    let p = document.querySelector('p')
    let ul = document.querySelector('ul')
    let mdp = 1234
    let mdpSaisi = Number(prompt("Veuillez entrer votre code."))
    let solde = 1000





    let askPassCode = () => {
        for (let i = 2; i >= 0; i--) {
            (mdp == mdpSaisi) ?
                retrait() :
                (i == 0) ?
                    alert("Opération annulée.")
                    :
                    (i == 1) ?
                        mdpSaisi = Number(prompt("Il vous reste " + i + " essai."))
                        :
                        mdpSaisi = Number(prompt("Il vous reste " + i + " essais."))
        }
    }


    let retrait = () => {
        let montRetrait = Number(prompt("Veuillez saisir le montant à retirer."));
        (solde > montRetrait) ? (
            (montRetrait % 10 === 0) ? (
                (montRetrait >= 20 && montRetrait <= 100) ? (
                    (solde -= montRetrait),
                    (alert("Vous avez retiré " + montRetrait + "€." + " Merci d'avoir choisi notre banque.")),
                    ul.innerHTML += `<li>Vous avez retiré : ${montRetrait}€.</li>
                                    <li>Il vous reste : ${solde}€ dans votre compte.</li>`
                ) : (
                        alert("Veuillez saisir un montant entre 20 et 100.")
                    )
            ) : (
                    alert("La machine ne peut pas effectuer cette opération. Billets disponnibles : 10€ 20€ 50€ 100€.")
                )
        ) : (
                alert("Vous ne pouvez pas retirer cette somme."),
                (confirm("Voulez vous refaire l'opération")) ? (
                    retrait()) : (
                        alert("Merci d'avoir choisi notre banque.")
                    )
            )
    }

    // TODO: Annuler les répétitions 

})