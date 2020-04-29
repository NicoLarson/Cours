document.addEventListener("DOMContentLoaded", (event) => {

    console.log("Loaded")

    let target = document.querySelector('main > ul')

    // Exemple 2 : objet et constructteur
    let User = ({
        // Builder
        constructor(nom, prenom, date) {
            this.nom = nom
            this.prenom = prenom
            this.date = date
        },
        // Methode pour la description
        printOut() {
            let desc = this.nom + " " + this.prenom + " " + this.date
            console.log(desc)
            return desc // retourne le resultat de mes propriétés
        }
    })

    // Utiliser le constructeur
    let user_1 = Object.create(User)
    let user_2 = Object.create(User)
    user_1.constructor("Eich", "Brendan", 2010)
    user_1.printOut()
    user_2.constructor("Berners","Lee", 1990)
    user_2.printOut()

    let capture = []
    capture.push(user_1,user_2)
    console.table(capture)

    for (key in capture)
        target.innerHTML += `<li> Nom : ${capture[key].nom} </br>
                                Prénom : ${capture[key].prenom} </br> 
                                Dates : ${capture[key].dates} </li>`

})