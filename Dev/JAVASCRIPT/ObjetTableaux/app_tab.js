document.addEventListener("DOMContentLoaded", () => {

    let target = document.querySelector('main > ul')
    // let signIn = prompt("Saisir votre nom")
    User = ({
        nom: "Ya",
        prenom: "Brodon",
        ville: "LA",
        cp: 92000
    })


    //instance d'User = enfant d'User
    let newUser = Object.create(User)
    newUser.nom = "Tom"
    console.log(newUser.nom)


    // Stockage dans navigateur
    sessionStorage.setItem("user", User.nom)
    console.table(User)


    // Boucle pour objet User
    for (key in User) {
        value = User[key]
        target.innerHTML += `<li>${key} : ${value}</li>`
        console.log(key + " " + value)
    }

    // Ajouter à la boucle
    target.innerHTML += `<li>${key} : ${newUser.nom}</li>` // Instance de User.nom

})