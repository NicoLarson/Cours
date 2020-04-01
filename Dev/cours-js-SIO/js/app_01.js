//début du script
document.addEventListener("DOMContentLoaded", (event) => {
    event.preventDefault()
    let msg = new String("Hello")
    const version = 7.5,
        titre = "Cours js &amp; html"
    console.log(`Type de variable ${typeof msg}`) //6,7,8 concaténation sorti console
    //console.log(typeof "Type de variable \n" + msg)

    console.log(version)
    const lang = ["Ecmascript", "React", true]

    //lang = ["JS", "React", false]
    console.table(lang) // index et valeur
    console.log(typeof (msg))
    console.log(typeof parseFloat(version))

    //function
    let calculer = (nom, prenom, age) => {
        return `Bonjour ${nom} ${prenom} vous avez ${age} ans`
    }

    let presentation = () => {
        console.log("hello")
    }
    //let titre = presentation()//hello


    // DOM

    let el_title = document.querySelector('header > h1') //par defaut c'est le
    //let el_title = document.querySelectorAll('h1')[0] //par defaut c'est le
    //document.getElementById("clear")
    //document.getElementsTagName("p")[0]
    //document.getElementsByName("nom")[0]

    el_title.innerHTML = `<strong> ${titre} </strong>` //innerText, textContent, innerHTML
    console.log(el_title.innerHTML)

    console.log(calculer("Bob", "Itch", 30))
    console.log(titre)

    let data = []

    //   let nombre = Number(prompt("Ajouter un chiffre"))

    //    let signin = prompt("Ajouter une signature")
    console.log(nombre)
    console.log(typeof nombre)
    //pour mettre des données dans un tableau
    data.push(nombre, signin)


    console.table(data)

    localStorage.setItem("donnée", JSON.stringify(data)); //stockage local


})