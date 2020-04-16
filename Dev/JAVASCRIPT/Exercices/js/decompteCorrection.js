document.addEventListener("DOMContentLoaded", () => {

    console.log("loaded")

    let el = document.querySelector('p')
    console.log(el.childNodes[0].nodeValue)

    let chrono = () => {
        let tic = el.innerText;
        el.innerText = tic - 1;
        console.log(tic)
        tic == 1 ? clearInterval(time) : 0; //tic == 5 ? alert("décompte : "+tic) : false;
        if (tic > 1) {    //test pour afficher un evenement 
            el.innerText = tic - 1;
        }
        else {
            setTimeout(() => {
                el.innerHTML = '<img src="./assets/boom.jpg">';
            }, 1000)
        }
    }

    let time = setInterval(chrono, 1000); //appel de la fonction chrono


})