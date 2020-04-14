document.addEventListener("DOMContentLoaded", () => {

    const rouge = "rouge",
        vert = "vert",
        bleu = "bleu"
    let saisie
    let p0 = document.getElementsByTagName("p")[0]
    let p1 = document.getElementsByTagName("p")[1]
    let btn = document.querySelector("h2")
    let couleur = () => {
        saisie = prompt("Veuillez saisir une couleur (rouge, vert ou bleu).")
        switch (saisie) {
            case rouge:
                p0.innerText = "Vous avez choisi la couleur : " + saisie, p0.style.cssText = 'padding: 2rem; color: rgb(200,0,0)'
                p1.innerText = 'Rouge se dit "red" en anglais', p1.style.cssText = 'color: rgb(200,0,0)'
                break
            case vert:
                p0.innerText = "Vous avez choisi la couleur : " + saisie, p0.style.cssText = 'padding: 2rem; color: rgb(0,200,0)'
                p1.innerText = 'Vert se dit "green" en anglais', p1.style.cssText = 'color: rgb(0,200,0)'
                break
            case bleu:
                p0.innerText = "Vous avez choisi la couleur : " + saisie, p0.style.cssText = 'padding: 2rem; color: rgb(0,0,200)'
                p1.innerText = 'Bleu se dit "blue" en anglais', p1.style.cssText = 'color: rgb(0,0,200)'
                break
            default:
                p0.innerText = "Vous avez choisi la couleur : " + saisie, p0.style.cssText = 'padding: 2rem; color: rgb(200,0,0)'
                p1.innerText = 'Je ne conais pas cette couleur...', p1.style.cssText = 'margin: 0 auto; padding : 1rem; width: 16rem; color: #fff; background-color: rgb(500,0,0)'
                break
        }
    }
    btn.addEventListener("click", couleur, false)
})