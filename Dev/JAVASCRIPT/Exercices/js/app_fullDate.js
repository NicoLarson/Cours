document.addEventListener("DOMContentLoaded", () => {

    let month = [
        "Janvier",
        "Février",
        "Mars",
        "Avril",
        "Mai",
        "Juin",
        "Juillet",
        "Aout",
        "Septembre",
        "Octobre",
        "Novembre",
        "Décembre"
    ]

    let day = [
        "Lundi",
        "Mardi",
        "Mercredi",
        "Jeudi",
        "Vendredi",
        "Samedi",
        "Dimanche"
    ]

    //ajouter les jours
    
    console.table(month)
    let mois = new Date()
    mois = month[mois.getMonth()]
    let time = new Date()
    console.log(time.getDay() - 1)
    let jour = new Date()
    jour = day[jour.getDay()]
    let target = document.querySelector("p")
    target.innerText = `Bonjour la date du jour 
                        ${jour}
                        ${mois} : ${time.getFullYear()}`


    let cOut = document.querySelector('p');
    let el = document.querySelector('h1')
    let myDate = () => {
        let jours = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "Samedi", "Dimanche"];
        let time = new Date();
        console.log(time.getFullYear())
        console.log(jours[time.getDay() - 1])
        console.log(time.getHours() + ' h ' + time.getMinutes() + ' ' + time.getSeconds() + "s")
    }

    let afficheDte = () => {
        let temps = new Date();
        let printOut = temps.toLocaleString();
        cOut.innerText = printOut;
    }
    //analyse de l'element ou le comptenu
    console.log(el.innerText)
    console.log(el.childNodes[0].nodeValue)
    el.childNodes[0].nodeValue = "Hello JavaScript"

    setInterval(afficheDte, 1000);//montre les sécondes se dérouler

})