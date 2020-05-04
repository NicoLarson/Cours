document.addEventListener("DOMContentLoaded", () => {

    const login = document.getElementsByName("login")[0]
    const password = document.getElementsByName("password")[0]

    let btn = document.getElementsByTagName("input")[2]

    let log = ["Riri", "Fifi", "Loulu"]
    let passwords = ["azerty", "12345", "poiuy"]


    btn.addEventListener("click", (event) => {
        event.preventDefault()
        window.addEventListener("load", () => {})
        login.value && password.value ? true : console.log("Remplissez tous les champs")
        event.stopPropagation()

        // TODO : verifier le bon loggin et mot de pass 
        /* 
                for (key in log && passwords)
                    login.value == log[key] && password.value == passwords[key] ? console.log("Access autorisé") :
                    login.value == log[key] && password.value !== passwords[key] ? console.log("Mauvais mot de pass") : false
         */
        for (key in log && passwords)
        login.value == log[key] && password.value == passwords[key] ? console.log("Acces autorisé") :
        log.includes(login.value) == false ? console.log("Login invalid") :
        log.includes(login.value) && passwords.includes(password.value) == false ? console.log("PassW invalid") : false 

    })

})