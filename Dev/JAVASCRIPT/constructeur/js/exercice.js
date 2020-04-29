document.addEventListener("DOMContentLoaded", (event) => {
    console.log("Loaded")

    let target = document.querySelector('main > ul')
    let img = document.createElement("img")

//* Methode 1
    // initialiser methode description
    let Film = function (titre, anneeSortie, realisateur, affiche) {
        this.titre = titre;
        this.anneeSortie = anneeSortie;
        this.realisateur = realisateur;
        this.affiche = affiche
    }

    // Creer des objets pour chaques films
    let laReineDesNeiges = new Film(
        "La reine des neiges",
        "2013",
        "Jennifer Lee",
        "./img/laReineDesNeiges.jpeg"
    )
    let thor = new Film(
        "Thor",
        "2011",
        "Kenneth Branagh",
        "./img/thor.jpg"
    )

    // Afficher dans la console
    console.log(`${laReineDesNeiges.titre} - ${thor.titre}`)

    // Stocker dans un tableau
    let tab_film = []
    tab_film.push(laReineDesNeiges, thor)

    //Afficher dans le DOM
    for (key in tab_film)
        target.innerHTML += `<li><img src="${tab_film[key].affiche}">
                        Titre : ${tab_film[key].titre} </br>
                        Année de sortie : ${tab_film[key].anneeSortie} </br> 
                        Réalisateur : ${tab_film[key].realisateur}
                        </li>`

/* //* Méthode 2
    // Initialiser
    let Film = ({
        // Builder
        constructor(titre, anneeSortie, realisateur, affiche) {
            this.titre = titre
            this.anneeSortie = anneeSortie
            this.realisateur = realisateur
            this.affiche = affiche
        },
        // Methode pour la description
        printOut() {
            let desc = this.titre + " " + this.anneeSortie + " " + this.realisateur
            console.log(desc)
            return desc
        }
    })

    // Creer des objets pour chaques films
    let hulk = Object.create(Film)
    hulk.constructor("Hulk", "2003", "Ang Lee","./img/hulk.jpg" )
    let lesMignons = Object.create(Film)
    lesMignons.constructor("Les Mignons", "2015", "Pierre Coffin","./img/lesMignons.jpeg")

    // Afficher dans la console
    hulk.printOut()
    lesMignons.printOut()

    // Stocker dans un tableau
    let tab_film = []
    tab_film.push(hulk, lesMignons)

    //Afficher dans le DOM
    for (key in tab_film)
        target.innerHTML += `<li> <img src="${tab_film[key].affiche}">
                        Titre : ${tab_film[key].titre} </br>
                        Année de sortie : ${tab_film[key].anneeSortie} </br> 
                        Réalisateur : ${tab_film[key].realisateur} 
                        </li>`
                        
*/

})