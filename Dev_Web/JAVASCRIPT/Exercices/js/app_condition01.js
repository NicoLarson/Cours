document.addEventListener("DOMContentLoaded", (event) => {
    console.log("Hello")
    let msg, el, chiffre //contexte de variable
    msg = " loaded!!!"

    el = document.querySelector('header > h1')
    el.innerText += msg

    chiffre = Number(prompt("Saisir le code"))
    //condition
    if (isNaN(chiffre)) {
        window.alert("saisir un chiffre")//BOM
        document.location.reload(true)
    } else {
        console.log(chiffre)
    }
    //expression ternaire
    //isNaN(chiffre) ? alert("saisir un chiffre") (document.location.reload(true)) : console.log(chiffre)
    let num = Number(prompt('saisir un nombre'))
    if (num <= 10) {
        console.log("small")
    } else if (num <= 100) {
        console.log("medium")
    } else {
        console.log("large")
    }


})