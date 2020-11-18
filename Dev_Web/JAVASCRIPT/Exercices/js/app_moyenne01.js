document.addEventListener("DOMContentLoaded", () =>{

let note1 = parseInt(prompt("Veuillez saisir la première note."))
let note2 = parseInt(prompt("Veuillez saisir la deuxième note."))
let note3 = parseInt(prompt("Veuillez saisir la troisième note."))
let moyenne = 0
let note = [note1,note2,note3]


for (i = 0; i < note.length; i++) {
    moyenne += note[i]
}
moyenne /= 3

let liste = document.querySelector("ul")
liste.innerHTML += `<li>Votre moyenne générale est de ${parseFloat(moyenne.toFixed(2))}</li>`

})