
Mission 3
3.1
<?php

public function getNbEtablissements()
{
    return  $this->lesConnections->size();
}
?>
3.2
<?php

public function syncEtablisements()
{
    if($this->lAudianceBDD->getNbEtablissements() === $this->lAudianceBdd->getNbEtablissements())
    {
        foreach($this->lAudianceCsv->lesConnexions as $rne=>$c)
            if($this->lAudienceBdd->getLesConnexiond()->exist($rne))
            {
                $this.lAudienceBdd->insertEtablissement("$rme/$c[0]/$c[1]");
               // $this.lAudienceBdd->insertEtablissement($rme."/".$c[0]."/".$c[1]);
            }
    }
}
?>


3.3
1. Quelle erreur?
    Clé étrangère/ integrité référecielle
2. Pourquoi?
    Référencement d'un établissement inexistant.
3. Correction?
    $this->syncEtablissement() au début de sgmcAll()


