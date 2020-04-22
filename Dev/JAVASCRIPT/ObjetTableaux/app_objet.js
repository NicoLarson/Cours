document.addEventListener("DOMContentLoaded", () => {

    let target = document.querySelector('main > ul')

    let Produits = {
        marque: "Samsung",
        prix: 450,
        annee: 2019,
        photo: "../Questionnaire/assets/cup.png",
        printOut() { //Afficher le premier objet
            target.innerHTML +=
                `<li> Marque : ${this.marque}</li>
                <li>Prix : ${this.prix}</li>
                <li>Année : ${this.annee}</li>
                <li>Photo : <img src="${this.photo}" alt="logo"></li>
                `
        }
    }

    Produits.printOut()
    let newProduit = Object.create(Produits);
    newProduit.marque = "Apple"
    newProduit.prix = "2000"
    newProduit.annee = "2019"
    newProduit.printOut()

})