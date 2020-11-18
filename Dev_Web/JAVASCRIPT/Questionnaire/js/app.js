document.addEventListener("DOMContentLoaded", () => {

    let questions = ["1 + 1", "2 + 2", "4 + 4"]
    let answers = ["2", "4", "8"]
    let score = 0
    let playerAnswer
    let showScore = document.querySelector("p")

    for (let i = 0; i < 3; i++) {
        playerAnswer = prompt(questions[i])
        if (playerAnswer == answers[i]) {
            score = score + 1
            alert("Vous avez obtenu 1 point.")
        }else{
            alert("Désolé mauvaise réponse.")
        }
    }

    switch (score) {
        case 3:
            showScore.innerHTML += `<img src="./assets/cup.png"><br>Votre score est : ${score} points`
            break
        case 2:
            showScore.innerHTML += `<img src="./assets/2points.jpg"><br>Votre score est : ${score} points`
            break
        case 1:
            showScore.innerHTML += `<img src="./assets/1point.jpeg"><br>Désolé votre score est : ${score} point`
            break
        default:
            showScore.innerHTML += `<img src="./assets/loser.jpg"><br>Désolé votre score est : ${score} point`
            break
    }

//* Stocker des données
localStorage.setItem("points",playerAnswer) 
})