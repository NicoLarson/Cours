document.addEventListener("DOMContentLoaded", () => {

    let led = document.querySelector("img")
    let background = document.querySelector("body")
    let titre =  document.querySelector("header > h1")

    led.addEventListener('click', () => {
        led.classList.toggle("off")
        background.classList.toggle("off")
        titre.classList.toggle("off")
    })
})


    //    let background = document.querySelector("body")
    /*
    led.addEventListener('click', () => {
        led.style.filter !== "sepia(100%)" ? (
            led.style.filter = "sepia(100%)",
            title.style.color = "white",
            background.style.backgroundColor = 'black'
        ) : (led.style.filter = "none",
            title.style.color = "black",
            background.style.backgroundColor = 'white')
    })
*/
