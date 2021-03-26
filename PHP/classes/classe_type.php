<?php
require('./classes/first_classe.inc.php');
require('./classes/classe_pro.inc.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $afficher->css ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <header>
        <h1><span class="material-icons" aria-hidden="true">
                manage_accounts
            </span><?= $afficher->title  ?></h1>
    </header>
    <main>
        <section>
            <h2><span class="material-icons">
                    manage_accounts
                </span>Les propriété des classes</h2>
            <p><?= $setProperty->getOut() ?></p>
        </section>
    </main>
    <footer>
        <p>&copy; MIT - 2021</p>
    </footer>
    <script>
        class Prod {
            marque = "Leforf"
            prix = "1200"
            getOut() {
                return `${this.marque} : ${this.prix}`
            }
        }
        let affiche = new Prod
        console.log(affiche.getOut())
    </script>
</body>

</html>