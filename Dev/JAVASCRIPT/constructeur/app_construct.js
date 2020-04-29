document.addEventListener("DOMContentLoaded", (event) => {
    event.preventDefault()
    console.log("Loaded")


    let target = document.querySelector('main > ul')

    let Builder = function (nom, prenom, ville) {
        this.nom = nom;
        this.prenom = prenom;
        this.ville = ville
    }

    Builder("Yang", "Nico")
    console.log(Builder("Yang", "Nico"))
    console.log(typeof (Builder()))

    let maison0 = new Builder( //instance d'objet
        "Eich",
        "Brandan",
        "LA"
    )

    let maison1 = new Builder( //instance d'objet
        "Montana",
        "Tony",
        "Miami"
    )
    let maison2 = new Builder( //instance d'objet
        "Toto",
        "Yoyo",
        "Paris"
    )
    let maison3 = new Builder( //instance d'objet
    "Rufus",
    "Artacus",
    "Grèce"
)

    console.log(`${maison0.nom} ${maison1.prenom}`)
    // ajouter tableau
    let tab_objet = []
    tab_objet.push(maison0, maison1, maison2, maison3)
    console.table(tab_objet)
    console.log(tab_objet[0].nom)
    // Afficher dans une liste le tableau tab_objet

    for (key in tab_objet)
        target.innerHTML += `<li> Nom : ${tab_objet[key].nom} </br>
                                Prénom : ${tab_objet[key].prenom} </br> 
                                Ville : ${tab_objet[key].ville} </li>`

    for (let index in tab_objet) {
        console.log(tab_objet[index].nom + `\n` + tab_objet[index].prenom + `\n` + tab_objet[index].ville)
    }



})