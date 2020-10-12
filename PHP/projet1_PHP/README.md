# Cours PHP & mySQL

```php
const msg = "Cours p & mySQL"
    <?php
        print $msg

        //printOut => Cours php & mySQL
    ?>
```

Pour commencer voici ce qu'il faut faire au début de votre projet

---

```html
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <title>Cours PHP</title>
  </head>
</html>
```

## Voir dans ce cours

- Historique PHP
- L'environnement Apache
- Créer son répertoire de développement
- La syntaxe PHP
- Création d'une page dynammique
- Méthodes de gestion
- Les variables

## Les tableaux

```
    Clé => valeur (array)

    0 : François
    1 : Michel
    2 : Nicolas
```

### Syntaxe de notation d'un tableau

```php
        $user = array(
            "François",
            "Michel",
            "Nicolas"
        );
```

```php
        $language = ["fr", "us"];
        $language[0] = "fr";
        $language[1] = "us";
```

```php
        $gamers = array(
            0 => "Caroline",
            1 => "Mathieu",
            2 => "Nick",
            3 => "Tavarez"
        );
```

```php

     $produit = ([
         "Marque" => "Samsung",
         "Capacité" => "25kg",
         "Consommation" => "100 KW",
         "Prix" => "300€",
         "image" => '<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.samsung.com%2Fis%2Fimage%2Fsamsung%2Fza_WF8500NHS-XFA_001_Front%3F%24L2-Thumbnail%24&f=1&nofb=1" alt="">'
     ]
);
```

### Méthode d'affichage

```php
        print "<pre>";
        print_r($gamers);
        print "<pre>";

```

### Méthode "array_push"

```php
$allTable = [];
        array_push($allTable, "apple", "Samsung", "?", 1);
        print "<pre>";
        print_r($allTable);
        print "<pre>";
```

### Méthode de fusion: array_merge()

```php
 $fusion_arr = array_merge($allTable, $produit, $gamers);
        print "<pre>";
        print_r($fusion_arr);
        print "<pre>";
```

## Tableau multidimensionnel

### Syntaxe de notation d'un tableau

```php
$table_assoc = array(
      1 => array("code" => "HTML", "date" => "1990"),
      2 => array("code" => "PHP", "date" => "1994"),
      3 => array("code" => "JavaScript", "date" => "1995")
  );
```

### Méthode d'affichage

```php
foreach ($table_assoc as $key => $index)
{
  foreach ($index as $key_1 => $value)
  {
    echo "<li>" . $key_1 . " : " . $value . "</li>\n";
  };
};
```

### Méthode d'affichage

## Les Itérations

### for()

```php
for ($index = 0; $index < count($progs); $index++) {
echo ($index.": ".$progs[$index] . "<br>");
}
```

### while()

```php
$index = 0;
while ($index < count($progs)) {
  echo ($index . ": " . $progs[$index] . "<br>");
  $index++;
}
```

### foreach()

```php
foreach ($produit as $key => $valeur) {
    echo ($key . ": " . $valeur . "<br>");
}
```

### for(in)

Ne fonctionne pas avec PHP.

### print / echo

print pour string
echo permet de renvoyer tous et n'importequoi.
