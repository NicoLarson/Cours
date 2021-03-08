<?php 

include("./minichat_post.php");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini Chat</title>
</head>
<body>
<form action="minichat.php" method="post">
        <label for="pseudo">pseudo</label>
        <input id="pseudo" type="text" name="pseudo">
        <label for="message">message</label>
        <input id="message" type="text" name="message">
<input type="submit" value="Envoyer">
    </form>
<section>
    <h2>Les messages</h2>
<ul>
<?php 
while($data = $response->fetch()){
    echo "<li>".htmlspecialchars($data['pseudo']).": ". htmlspecialchars($data['message'])."</li>";
}
?>
</ul>



</section>
</body>
</html>
