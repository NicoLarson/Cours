<?php
class Personnage
{
    private $_id,
        $_degats,
        $_nom;
    public function frapper(Personnages $perso)
    {
        if($perso != this->_id){
            $perso->_degats += 1;
        }else{
            echo "Vous ne pouvez pas vous frapper!";
        }
    }
    public function recevoirDegats()
    {
        
    }
}
