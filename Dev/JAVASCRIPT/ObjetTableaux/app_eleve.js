document.addEventListener("DOMContentLoaded", () => {


    let target = document.querySelector("main > ul")
    //* tableau d'objet

    let eleves = [{
        nom: 'Marc',
        moyenne: 5,
        email: 'marco@gmail.com'
    }, {
        nom: 'Joe',
        moyenne: 20,
        email: 'Joe@gmail.com'
    }, {
        nom: 'Caroline',
        moyenne: 12,
        email: 'Caro@gmail.com'
    }]


    for (key in eleves)
        target.innerHTML += `<li>${key} - ${eleves}</li>`
    console.log(key + " " + eleves[key])

    for (eleve in eleves)

        target.innerHTML += `<li>${elevei} - ${eleves[eleve]}</li>`
    console.log(eleves[eleve])

    // TODO : Boucle du tableau sur la console et sur le DOM dans une liste

    console.table(eleves);
    console.log(typeof (eleves));
    console.log(JSON.stringify(eleves))
    console.log(JSON.parse(JSON.stringify(eleves)));


})