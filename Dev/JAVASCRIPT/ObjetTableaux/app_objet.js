document.addEventListener("DOMContentLoaded", () => {

console.log("load")

})
    let target = document.querySelector('main > ul')
    let user = ({})
    let Produits = { //objet
        marque /* propriété */: "Samsung",
        prix: 450,
        annee: 2019,
        photo: "../Questionnaire/assets/cup.png",
        printOut() { //Methodes pour afficher le premier objet
            target.innerHTML +=
                `<li> Marque : ${this.marque}</li>
                <li>Prix : ${this.prix}</li>
                <li>Année : ${this.annee}</li>
                <li>Photo : <img src="${this.photo}" alt="logo"></li>
                `
        }
    }

    Produits.printOut()
    let newProduit = Object.create(Produits); //instance d'objet
    newProduit.marque = "Apple"
    newProduit.prix = "2000"
    newProduit.annee = "2019"
    newProduit.printOut()

    let bdd = ["Azus", 700, 2018]
    let newProduit = Object.create(Produits); //instance d'objet
    newProduit.marque = bdd[0]
    newProduit.prix = bdd[1]
    newProduit.annee = bdd[2]
    newProduit.printOut()


