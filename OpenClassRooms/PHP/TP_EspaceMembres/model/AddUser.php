<?php
require_once('./model/Manager.php');

class AddUser extends Manager
{
    function checkUsername($inputUsername)
    {
        $db = $this->dbConnect();
        $reqUsername = $db->query("SELECT username FROM members WHERE username = '".$inputUsername."'");
        $verifUsername =  $reqUsername->fetch(); 
        return !$verifUsername[0];
    }

    function checkPassword($inputFirstPassword, $inputSecondPassword)
    {
        return $inputFirstPassword == $inputSecondPassword;
    }

    function checkMailRegex($inputEmail){
        $mailRegex = "/(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)/"; 
        return preg_match($mailRegex,$inputEmail) == 0;
    }

    function checkEmailExist($inputEmail)
    {
        $db = $this->dbConnect();
        $reqEmail = $bdd->query("SELECT email FROM members WHERE email = '".$inputEmail."'");
        $verifEmail =  $reqEmail->fetch(); 
        return $verifEmail[0];
    }
    function insertLine($inputUsername,$inputPassword,$inputEmail)
    {
        $db = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO members(username, password, email, register_date) VALUES(:username, :password, :email, CURDATE())');
        return $req->execute(array(
            'username' => $inputUsername,
            'password' => password_hash($inputPassword, PASSWORD_DEFAULT),
            'email' =>  $inputEmail));
    }

    function addUser()
    {
        if(isset($_POST['username'],$_POST['password'],$_POST['mail'],$_POST['password-confirm']))
        {
            if(!$this->checkUsername($_POST['username']))
            {
                return "<p>Le pseudo est déjà utilisé.</p>";
            }
            elseif(!$this->checkPassword($_POST['password'], $_POST['password-confirm']))
            {
                return "<p>Veuillez vérifier la saisie du mot de passe.</p>";
            }
            elseif($this->checkMailRegex($_POST['mail'])){
                return "<p>Le format d'email est invalide</p>";
            }
            elseif($this->checkEmailExist($_POST['mail'])){
                return "<p>Cette email est déjà utilisé.</p>";
            }
            else
            {
                return "<p>Inscription réussi!</p>";
                $this->insertLine($_POST['username'],$_POST['password'],$_POST['mail']);
            }
        }
        else
        {
            return "<p>Veuillez saisir tous les champs.</p>";
        }
    }
}

