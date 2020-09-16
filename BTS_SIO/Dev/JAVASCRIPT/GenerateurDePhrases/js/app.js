document.addEventListener("DOMContentLoaded", () => {


    let phrases = ["Avoir le ventre plus gros que les yeux.",
        "Être ou peut-être. C'est sûrement la question.",
        "Le temps c'est des rognons.",
        "Ne pas vendre la peau du chat avant de ...",
        "Quand on aime on n'écoute pas."
    ]

    let showPhrases = document.querySelector("p")

    let generator = () => {
        showPhrases.innerText = phrases[Math.round(Math.random() * 4)]

    }
    let generatorButton = document.querySelector("h2")
    generatorButton.addEventListener("click", generator, false)


})