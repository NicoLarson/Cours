/* Prototype 

Objet est un representation d'un objet qui contient des propriétés, des méthodes (constructeurs) et instances

*/
document.addEventListener("DOMContentLoaded", () => { //Document Object Model

    let test = document.contentType
    let nav = navigator.userAgent
    console.log(test)
    console.log(typeof test)
    console.log(nav)
    console.log(typeof nav)

    // Objet date
    let d = new Date()
    let n = d.toLocaleDateString() //4/6/2020
    console.log(d.getFullYear())
    console.log(d.getDay())
    console.log(d.getHours())
    //timeZone
    console.log(event.toLocalString('en-GB',{ timeZone: 'UTC'}))



})
