document.addEventListener("DOMContentLoaded", () => {
    //l'itération
    for (let i = 0; i < 10; i++) {
        console.log("passage \n" + i)
    }

    let x = 0
    while (x < 10) {
        x++
        console.log(("passage \n" + x))
    }

    // let nom
    // do {
    //     nom = prompt("ton nom stp?")
    // } while (!nom){
    // console.log(nom)}

    let tab = ["html", "css", false]
    for (let u = 0; u < tab.length; u++) {
        console.log(tab[u])
    }
    //autres boucles


    tab.forEach((k, v) => {
        console.log(k + " " + v)
    })


    for (let key in tab) {
        let valeur = tab[key]
        console.log(valeur)
    }
    //objet js
    
    let user = ({
    	nom : "Bob",
        prenom : "Leponge",
        age : 100,
            calc(){
                console.log(this.nom)
            }

    })
    user.calc()
    let autherUser  = Object.create(user)//instance
    autherUser.nom = "Paul"
    autherUser.calc()


})