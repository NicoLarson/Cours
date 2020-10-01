document.addEventListener("DOMContentLoaded", () => {

    let target = document.querySelector('ul');

    let machineaLaver = ({

        constructor(marque, prix, consommation, matricule, modele) {
            this.marque = marque;
            this.prix = prix;
            this.consommation = consommation;
            this.matricule = matricule;
            this.modele = modele
        },

        affichage() {

            target.innerHTML += `<li itemprop="seller">Marque: ${this.marque}</li>
                             <li itemprop="price">Prix:  ${this.prix}</li>
                             <li itemprop="additionalProperty">Consommation:  ${this.consommation}</li>
                             <li itemprop="identifier">Matricule:  ${this.matricule}</li>
                             <li itemprop="image"><img src="${this.modele}"</li>`
        }

    })

    let machine1 = Object.create(machineaLaver);

    machine1.constructor('Samsung', '900 euro', '150KW', '455236452', './assets/photo1.jpeg');

    machine1.affichage();
    console.log(machine1);

    let btn = document.querySelector('.btn');

    let main = document.querySelector('main')


    btn.addEventListener('click', (e) => {
        main.classList.toggle('access');
        e.stopPropagation()
    })

})
