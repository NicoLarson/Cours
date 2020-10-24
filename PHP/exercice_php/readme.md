![php logo](image/php.png "php logo") 
# Développemet PHP 
Avant de commencer il faudrait faire soit un clone de ce repository soit un fork. Un fork est une copie d’un dépôt. Forker un dépôt vous permet d’expérimenter librement des modifications sans toucher au projet original.

- - -
## Ce repository contient
Une page html déjà mise en forme qui affiche dans un tableau des statistiques des langages de programmation.

## Votre mission, toujours si vous l'acceptez
Cela consiste à transformer ce fichier statique en fichier dynamique: créer un système de fichiers d'inclusion comme vu en cours :
```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours web</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<!--inclusion des entêtes -->

<header>
    <h1>&lt;/&gt; Cours html <sup>5</sup> css<sub>3</sub></h1>
</header>
<!--inclusion du header-->

<main>
    <section>
        <h2>Secondary title</h2>
        <p>text content...</p>
    </section>
</main>
<!--inclusion du corps-->

<!--inclusion du footer-->
<footer>
        <p>2020 &copy; - MIT -</p>
</footer>
```
## Affichage des données du tableau
Les données du tableau doivent être injectées par un tableau PHP. Exemple ci-dessous:

```PHP
 $python = array (
                    'classement' => '1',
                    'langage' => 'Python',
                    'type' => 'Web application'
                );
/* en suite */


```   
## Consignes
* Vous ne devez pas modifier le design de la page
* Cette page comporte un **Manifest** qui doit rester dans les entêtes du document.
* La date du footer doit être dynamique
* Vous devez créer un répertoire pour les fichier d'inclusion
* Durée du développement 2 heures

Voir l'affichage de la page : [maquette html](https://giusmili.github.io/exercice_php/index.html "Page en html")

**Auteur**: _Militello_ _Giuseppe_ _2020_
        

