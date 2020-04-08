document.addEventListener("DOMContentLoaded", () => {

    console.log("loaded")

    let age = Number(prompt("Entre ton âge."))
    let confirmer = confirm("Confirmer")
    let message = document.querySelector("p")

    if (age >= 18 && age <= 26) {
        if (confirmer) {
            alert("Merci d'avoir confirmer")
            message.innerText = "Merci d'avoir confirmer"
        } else {
            alert("Annulation de votre demande")
        }
    }else if (!age){
        alert("Attention saisir votre âge.")
        document.location.reload(true);
    } else {
        alert("Votre âge doit être comprise entre 18 et 26.")
        document.location.reload(true);
    }




    /*
        SI age >= 18 && age <= 26
            Si confirmer
                ALORS
                    "Merci d'avoir confirmer" //Afficher dans le DOM
                SINON
                    "Annulation de votre demande"
            FIN SI
        SINON SI !age
                ALORS "Attention saisir votre age"
                recharger la page
            SINON
                message "Votre age doit être comprise entre 18 et 26"
            FIN SI
      
      
            /*  if (age >= 18){
              alert("Tu es majeur.")
          } else {
              alert("Tu es mineur.")
          }
               
        age >= 18 && age <= 26 ? alert("Réduction") : alert("Plein pot")
          if(confirm("Voulez vous confirmer?"))
          alert("Ok")
    */
})