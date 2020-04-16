document.addEventListener("DOMContentLoaded", () => {

    console.log("loaded");
    //event
    let btn, slide
    /*slide == document.querySelector("section")*/
    let article = document.querySelector("section")
    btn = document.querySelector(".btn-default")
    //window.alert(btn.tagName)
    
        let show = () => {
            if (btn.classList.toggle("btn-alert") == false) {
                btn.innerText = "Activer"
                article.style.transform = 'translateX(-100rem)'
            } else {
                btn.innerText = "Désactiver"
                article.style.transform = 'none'
            }
        }
        btn.addEventListener("click", show, true)
    
    /*
    btn.addEventListener("click", () => {
        btn.classList.toggle("btn-alert") == false ? (btn.innerText = "Activer", article.style.transform = 'translateX(-100rem)') : (
            btn.innerText = "Désactiver", article.style.transform = 'none')
    })

    btn.addEventListener("click", () => {
        btn.classList.toggle("btn-alert") //fonction booleane
        //condition ternaire
        btn.textContent == "Activer" ? btn.textContent = "Desactiver" : btn.textContent = "Activer"
        slide.classList.toggle("slide")
    })

*/


})