document.addEventListener("DOMContentLoaded", () => {
    let target = document.querySelector("main > ul")

    //* tableau d'objet 
    // Tableau multidimentionelle en x,y
    let eleves = [{
        nom: 'Marc', //0
        moyenne: 5,
        email: 'marco@gmail.com'
    }, {
        nom: 'Joe', //1
        moyenne: 20,
        email: 'Joe@gmail.com'
    }, {
        nom: 'Caroline', //2
        moyenne: 12,
        email: 'Caro@gmail.com'
    }]

    for (key in eleves)
        target.innerHTML += `<li>${eleves[key].nom} - ${eleves[key].moyenne} - <a  href="mailto:${eleves[key].email}">${eleves[key].email}</a></li>`

    /*   for (i = 0; i < eleves.length; i++){
        // console.log(`${eleves[i].nom} ${eleves[i].moyenne} ${eleves[i].email}`);
        if (eleves[i].moyenne < 12) {
            console.log(eleves[i].nom + ' : ' + eleves[i].moyenne)
        }
    }
 */
    /*  console.table(eleves);
        console.log(typeof (eleves));
        console.log(JSON.stringify(eleves))
        console.log(JSON.parse(JSON.stringify(eleves))); */
})
/*  Correction 
document.addEventListener("DOMContentLoaded",()=>{
    //tableau d'objet
//https://developer.mozilla.org/fr/docs/Web/Guide/HTML/Liens_email
let eleves = [  x,y 

                {
                    nom : 'Marc', //0
                    moyenne : 5,
                    email : 'marco@gmail.com'
                },
                {
                    nom : 'Joe', //1
                    moyenne : 20,
                    email : 'joe@gmail.com'
                },
                {
                    nom : 'Caroline', //2
                    moyenne : 12,
                    email : 'caro@gmail.com'
                }
            ]
    //boucle du tableau sur la console et puis sur le DOM dans une liste

    console.table(eleves)
    console.log(typeof eleves)
    console.log(JSON.stringify(eleves))
    //console.log(eleves[0].nom)
    // i = itérateur => boucle
    const moyenne = 10
    let printOut = "";
    let el = document.querySelector("ul");

    for(let i = 0; i<eleves.length; i++){
        console.log(`
                    ${eleves[i].nom} 
                    ${eleves[i].moyenne} 
                    ${eleves[i].email}
                    `)
        //afficher ceci dans le DOM
        printOut+=`<li>${eleves[i].nom}, ${eleves[i].moyenne}
         : <a href="mailto:${eleves[i].email}">${eleves[i].email}</a></li>`
    
        if(eleves[i].moyenne < moyenne){
          console.log(eleves[i].nom+' : '+eleves[i].moyenne) 
        }
        

    }
    
    el.innerHTML = printOut

}) */