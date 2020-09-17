document.addEventListener("DOMContentLoaded", (addEventListener) => {

    let champs = parseInt(prompt("Déposer de l'argent"))
    let retrait = parseInt(prompt("Retirer de l'argent"))

    class BankAccount {
        constructor(owner, balance) {
            this.owner = owner
            this.balance = balance
        }
        //ajouter la methode
        showBalance() {//getter
            console.log("Solde : " + this.balance + " €")
        }
        //setter
        deposite(amount) {//montant
            console.log("Dépot de " + amount + " €")
            this.balance += amount
            this.showBalance()
        }
        withdraw(amount) {//retrait
            if (amount > this.balance) {
                console.log("Retrait refusé!")
            } else {
                console.log("Retrait de " + amount + " €")
                this.balance -= amount
                this.showBalance()
            }
        }
    }


const user = new BankAccount ("Nico", 40007)
console.log(user)
user.deposite(champs)
user.withdraw(retrait)
})