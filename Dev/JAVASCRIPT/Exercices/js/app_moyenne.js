document.addEventListener("DOMContentLoaded", () => {

    //tableau
    //let tab = []
    let note, moyenne, i
    const nombreNotes = 6
    let meilleurNote
    note = [nombreNotes]
    note[0] = 12.5
    note[1] = 7.5
    note[2] = 6
    note[3] = 10
    note[4] = 14
    note[5] = 13.5

    moyenne = 0
    //itérateur
    for (i = 0; i < nombreNotes; i++) {
        note[i] > 13.5 ? meilleurNote = note[i] : false
        moyenne += note[i]
    }
    console.log("total " + moyenne)
    moyenne /= nombreNotes
    console.log("Votre moyenne générale est de " + parseFloat(moyenne.toFixed(2)))

    let liste = document.querySelector("ul")
    liste.innerHTML += `<li>Meilleur notes : ${meilleurNote}</li>
                        <li>Votre moyenne générale est de ${parseFloat(moyenne.toFixed(2))}</li>`


})