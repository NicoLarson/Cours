document.addEventListener("DOMContentLoaded", () => {

    console.log("loaded")

    let el = document.querySelector("p")
    console.log(el.childNodes[0].nodeValue)

    let chrono = () => {
        let tic = el.textContent;
        el.innerText = tic - 1;
        console.log(tic)
        // tic == 5 ? alert("décompte : " + tic) : false;
        tic == 1 ? clearInterval(time) : 0;

        if (time > 1) {
            el.innerText = tic - 1
        } else {
            setTimeout(() => {
                el.innerHTML = "<img src='./assets/boom.jpg'>"
            }, 1000)
        }
    }//appel de la fonction chrono
    let time = setInterval(chrono, 1000)
})


/* opérateurs
= : affection / int x = 0
== : comparaison entre deux valeurs
=== : comparaison de valeur et type
- :
+ :
-- : enleve 1
++ : ajout 1
+= : ajout une valeur
-= : enleve une valeur
% : modulo 10%3=1


*/
//copteur à rebours
/*
int clearCompteur = 0;
int compteur = 10;
    compteur > 10; compteur = compteur - 1;
    compteur == 5 ? boom : true
    compteur == 1 ? clearCompteur : 0;
*/
