document.addEventListener("DOMContentLoaded", () => {
    //tester 3 essaies pour un code

    let bonCode = 1234
    let essaies
    let affichage = document.querySelector('p')

    /*   for (let i = 3; i > 0; i--) {
           let essaies = Number(prompt("Il vous reste " + i + " essaies"))
           if (essaies !== bonCode) {
               affichage.innerText = "Mauvais code!"
           } else {
               affichage.innerText = "Vous avez saisi : " + bonCode + " Code bon!"
               break
           }
       }
      */
    while (bonCode !== essaies) {
        essaies = prompt("Saisir le code");
        element.innerText = "Votre code est : " + essaies;
        alert(essaies + "\n" + ("il reste" + (i--)))
        //tester les essaies
        if (i > 3 || i < 0) {
            alert("Désolé opération abandonnée")
            break // sortie du programme
        }

    }
    //correction pour le js 
    let element = document.querySelector("p")
    let code;
    let i = 3; while (code !== 2016) {
        code = Number(prompt("Saisir le code?"))
        element.innerText = "Votre code est : " + code; alert(code + "\n" + ("il reste" + (i--) + " essaies"))
        //tester les essaies 
        if (i > 3 || i < 0) {
            alert("Désolé opération abbandonnée")
            breack //sortie du programme
        }
    }


    /*
    initialiser code
    initialiser les essaies
    tant que code different de code 
        alors condiion vérifier nombre d'essaies
            i = i - 1
            
            si i > 3 ou i < 0
            afficher "Abort"
            Sortir du programme
    */
})

/*
int bonCode = 1234;
int compteur = 3;
int essai;

saisir essai;
compteur > 0; compteur--;
    si
        essai != bonCode;
        faire saisir essai;
    si non
        afficher le code;
*/