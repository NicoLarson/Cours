<?php
echo "<p>Bonjour " . $_POST['pseudo'] . "!</p>";
if($_POST['password'] == "kangourou"){
    echo "<p>Le mot de passe est: 00214azer2a1r5e</p>";
}else{
    echo "<p>Vous n'êtes pas autorisé!</p>";
}
?>