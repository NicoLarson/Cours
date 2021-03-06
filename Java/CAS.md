# 3.1
méthode getNbEtablissements() de la classe Audiences
retourne le nombre d’établissements chargés dans les dictionnaires 
(la méthode pourra sebaser indifféremment sur le dictionnaire $lesConnexions ou $lesApplications)
```java
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
            }public function getNbEtablissements(){
                // retourne le nombre d’établissements
                // contenus dans le dictionnaire 
                // méthode à coder sur votre copie
            }
}
```
# 3.2
la méthode syncEtablissements() de la classe Synchronisation
se charge   de   déceler   les   nouveaux   établissements   qui   doivent   être   ajoutés  
en comparant les deux sources de données. En présence d’un nouvel établissement,
la   mise   à   jour   de   la   base   se   fera   à   l’aide   de   la   méthodeAudiencesBdd∷insertEtablissement().
