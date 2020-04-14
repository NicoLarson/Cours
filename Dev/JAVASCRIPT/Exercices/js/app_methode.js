document.addEventListener("DOMContentLoaded", () => {
    console.log("loaded!!!")
    /*let numberOne = Number(prompt("inserer un chiffre"))
    let numberTwo = Number(prompt("inserer un chiffre "))
    
    let x, y, z
    x = 0.9 // 1
    y = 0.5
    console.log(typeof x)
    console.log(Math.round(x))
    console.log(Math.floor(y)) // 0

    let getRamdom = (number) => {
        return Math.floor(Math.random() * Math.floor(number))
    }
    console.log(getRamdom(numberOne,numberTwo))
    let tab = []
    tab.push(numberOne,numberTwo)
    console.table(tab)
*/
    //*Méthodes conditonnelles
    const code_bon = "010101"
    let code_mauvais = "0000"
    let code
    let el = document.querySelector("p")
    let btn = document.querySelector("h1")

    //*passer la propriété css  à h1
    btn.classList.add("color-default") //toggle
    //*btn.className = "color-default"
    let access = () => {
        code = prompt("saisir le code?")
        btn.classList.remove("color-default")
        switch (code) {
            case code_mauvais:
                el.innerText = "Acces refusé", el.style.color = "rgb(200,0,0)"
                break
            case code_bon:
                el.innerText = "Acces accordé", el.style.color = "rgb(0,200,0)"
                break
            default:
                el.innerText = "Acces refusé", el.style.color = "rgb(200,0,0)" // else

        }
    }
    //callBack
    /* btn.addEventListener("click",(event)=>{
        event.preventDefault()
        access()
    })*/
    btn.addEventListener("click", access, false)

})