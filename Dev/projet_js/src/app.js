//ici la fonction main
document.addEventListener("DOMContentLoaded", (addEventListener) => {
	event.preventDefault()
	console.log("loaded")

	let el = document.querySelector('main>ul')
	//crée une class
	class Produit {
		constructor(type, marque, disponibilité, prix) {
			this.type = type
			this.marque = marque
			this.disponibilité = disponibilité
			this.prix = prix
		}
		printOut() {
			console.log(`${this.marque} ${this.disponibilité} ${this.prix}`)
			el.innerHTML += `<li>Type: ${this.type}</li>
		<li>Marque: ${this.marque}</li>
		<li>Disponibilité: ${this.disponibilité}</li>
		<li>Prix: ${this.prix} &euro;</li>
		<br>`
		}
	}
	console.log(Produit)

	//instance de la class Produit

	let prod_1 = new Produit(
		"PC",
		"Samsung",
		true,
		800
	)
	let mac = new Produit(
		"Mac",
		"Apple",
		true,
		1090
	)

	prod_1.printOut()
	mac.printOut()
	
	let prod_tab = []//tableau vide
	prod_tab.push(prod_1, mac)//On ajoute
	console.table(prod_tab)// On affiche


	/* 
	 for (key in prod_1)
	 el.innerHTML += `<li>${prod_1[key]}</li> `
	 */
})
