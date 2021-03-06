3.1 méthode getNbEtablissements() de la classe Audiences retourne le nombre d’établissements chargés dans les dictionnaires (la méthode pourra se baser indifféremment sur le dictionnaire $lesConnexions ou $lesApplications)

<?php
class Audiences 
{
    private  $lesConnexions;
    // Dictionnaire contenant le nombre de connexions
    // par établissement et par catégorie d'usages

    private  $lesApplications;
    // Dictionnaire contenant le nom des applications
    // activées par établissement et par type d'utilisateur

    public function __construct(){...};
    public  function getLesConnexions()
    {
        return $this->lesConnexions;
    }
    public  function getLesApplications() 
    {
        return $this->lesApplications;
    }
    public function getNbEtablissements()
    {
        return  $this->lesConnections->size();
        // retourne le nombre d’établissements
        // contenus dans le dictionnaire 
        // méthode à coder sur votre copie
    }
}
?>
la méthode syncEtablissements() de la classe Synchronisation, 
secharge   de   déceler   les   nouveaux   établissements   
qui   doivent   être   ajoutés   en comparant les deux sources de données.
En présence d’un nouvel établissement,
la   mise   à   jour   de   la   base   se   fera   à   l’aide   de   la   
méthodeAudiencesBdd∷insertEtablissement()
<?php
class Synchronisation {
    private $lAudienceCsv;  // un objet AudiencesCsv
    public  function __construct() 
    { 
        $this-> lAudienceCsv = new AudiencesCsv("connexions.csv", "applications.csv"); 
        $this-> lAudienceBdd = new AudiencesBdd();
    }
    private function syncConnexions() 
    {
        $cnx = $this->lAudienceCsv->getLesConnexions();
        $this->lAudienceBdd->updateConnexions($cnx);
    }
    private function syncApplications() 
    {
        $app = $this->lAudienceCsv->getLesApplications();$this->lAudienceBdd->updateApplications($app);
    }
    public function syncAll() 
    {
        $this->syncConnexions();
        $this->syncApplications();
    }
    public function syncEtablisements()
    {
        if($this->lAudianceBDD->size() === $this->lAudianceBdd->size())
        {
            return true;
        } else {
            AudiencesBdd∷insertEtablissement()
        }
        // teste si les 2 sources de données ont le même nombre d’établissements
        // si ce n’est pas le cas met à jour la base de données en appelant la méthode
        // insertEtablissement de la classe AudiencesBdd pour chaque nouvel établissement
        // Méthode à coder sur votre copie 
    }
}


?>

3.3
Que signifie Pourquoi cette erreur Comment on l'a corrige
On ne peut pas ajouter, ni modifier un établissement dans la table Synchronisation. Car il y a un problème avec la clé étrangère.
Il faudrait ajouter un élément dans la table parent
