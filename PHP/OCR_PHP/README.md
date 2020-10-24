# Cours PHP OpenClassRooms

## Inclure des portions de page

include()

## Transmettre des données avec l'URL

URL: Uniform Resource Locator

### Envoyer des paramètre dans l'URL

#### Former une URL pour envoyer des paramètres

bonjour.php?nom=Poco&prenom=Yoyo
Nom du paramètre
Valeur du paramètre
Séparation avec &

#### Créer un lien avec les paramètres

```html
<a href="bonjour.php?nom=Poco&amp;prenom=Yoyo">Dis-moi bonjour!</a>
```

### Récupérer les paramètres en PHP

\$\_GET[''];

````php
<p>Bonjour <?php echo $_GET['nom'].' '.$_GET['prenom'].'.'; ?>```html
````
### Ne jamais faire confiance aux données reçus!
#### Tous les visiteurs peuvent trafiquer les URL
#### Tester la presence d'un paramètre
#### Contrôler la valeur des paramettre
isset() verifie si une variable est définie ou non.

## Transmettre des données avec les formulaires
### Créer la base du formulaire
```html
    <form action="cible.php" method="post">
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Bonjour Nicolas, J'aimerais qu'on travaille ensemble..." required minlength="10"></textarea>
        <input type="submit" name="submit" value="Envoyer">
    </form>
```
#### La méthode
* get: Les données transite dans l'URL. On pourra les récupérer avec $_GET
* post: Les données ne transite pas par l'URL.
#### La cible
L'attribut **action** sert à définir la page appelée par le formulaire. C'est cette page qui recevra les données du formulaire et qui sera chargée de les traiter
### Les éléments du formulaire
#### Les petites zones de texte
* name (obligatoire):
```html
<input type="text" name="pseudo"> 
```
* value (facultatif): Ce que contient la zone de texte au départ. 
```html
<input type="text" name="pseudo" value="mon pseudo"> 
```






> &copy; Copyright - Nicolas Yang - 2021
