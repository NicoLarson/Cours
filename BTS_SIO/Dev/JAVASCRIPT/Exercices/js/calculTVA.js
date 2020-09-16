document.addEventListener("DOMContentLoaded", () => {

    let prix1 = Number(prompt("Saisir un premier prix."))
    let prix2 = Number(prompt("Saisir un deuxième prix."))
    let totalHt = 0
    let totalTtc = 0
    let tva = 19.6


    totalHt = prix1 + prix2
    let totalTVA = totalHt / 100 * tva
    totalTtc = totalHt + totalTVA

    let printout = document.querySelector("ul")
    /*
    console.log("Prix 1 : " + prix1 + "€")
    console.log("Prix 2 : " + prix2 + "€")
    console.log("Total HT : " + totalHt)
    console.log("Total TVA : " + totalTVA.toFixed(2))
    console.log("Total TTC : " + totalTtc.toFixed(2) + "€")
    */

    //stock produits
    let stock = []//mémoire
    stock.push(prix1, prix2)//compter les produits

    console.log("HT : " + totalHt)
    console.log("Total TVA : " + totalTVA.toFixed(2))
    console.log("Total TTC : " + totalTtc.toFixed(2) + "€")
    console.log("Nombre de produits : " + stock.length)

    printout.innerHTML +=  `<li>HT : ${totalHt}€</li>
                            <li>Total TVA : ${totalTVA.toFixed(2)}€</li>
                            <li>Total TTC : ${totalTtc.toFixed(2)}€</li>
                            <li>Nombre de produits : ${stock.length}</li>`

})

/*
afficher 2 chiffres apres la virgule
REEL px1 float
REEL px2
REEl total_ht <- 0
REEL total_ttc <- 0
REEL tva <- 19,6/100

    DEBUT
        SAISIR px1
            AFFICHER px1 <- valeur
        SAISIR px2
            AFFICHER px2 <- valeur
    PROCEDURE
        ADDITIONNER px1 + px2
        AFFICHER résultat
        total_ht <- px1 + px2
        total_ht * tva
        AFFICHER tva
        total_ttc  <- total_ht + tva
        AFFICHER total_ttc


*/