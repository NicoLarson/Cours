<?php
class Prod
{
    public $marque = "Apple";
    public $prix = "1200";
    public function getOut()
    {
        print $this->marque . " : " . $this->prix . "&euro;";
    }
}

$setProperty = new Prod;

?>



<!-- class Prod {
            marque = "Leforf"
            prix = "1200"
            getOut() {
                return `${this.marque} : ${this.prix}`
            }
        }
        let affiche = new Prod
        console.log(affiche.getOut()) -->