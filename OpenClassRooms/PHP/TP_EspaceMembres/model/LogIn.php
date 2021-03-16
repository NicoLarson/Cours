<?php
require_once('./model/Manager.php');

class LogIn extends Manager
{
    function checkLogIn($inputUsername, $inputPassword)
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT * FROM members WHERE username = '" . $inputUsername . "'");

        $data = $req->fetch();
        $isPasswordCorrect = password_verify($inputPassword, $data['password']);

        if (!$data) {
            return '<p>Mauvais identifiant ou mot de passe !</p>';
        } else {
            if ($isPasswordCorrect) {
                session_start();
                $_SESSION['id'] = $data['id'];
                $_SESSION['pseudo'] = $inputUsername;
                return '<p>Connection réussi !</p>';
            } else {
                return '<p>Mauvais identifiant ou mot de passe !</p>';
            }
        }
    }

    function logIn()
    {
        if (isset($_POST['username'], $_POST['password'])) {
            return  $this->checkLogIn(htmlspecialchars($_POST['username']), htmlspecialchars($_POST['password']));
        } else {
            return "<p>Veuillez saisir tous les champs.</p>";
        }
    }
}
