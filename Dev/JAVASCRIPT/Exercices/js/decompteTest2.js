document.addEventListener("DOMContentLoaded", () => {

    let p = document.querySelector("p")

    let chrono = ()=>{
        let tic = p.textContent
        p.innerText = tic -1
        tic == 5 ? alert("Attention!!!") : false
        tic == 1 ? p.innerHTML = "<img src='./assets/boom.jpg'>" : false
        tic == 0 ? p.innerHTML = "<img src='./assets/smileyXX.png'>" : false
        tic == 0 ? clearInterval(time) : 0        
    }

    let time = setInterval(chrono, 1000)

})