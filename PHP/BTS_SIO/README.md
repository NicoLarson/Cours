# PPE - BTS - 🏔 Vacance à la montagne ⛷

[Lien du site](https://nicolarson.github.io/PPE_vacance_montagne/)

![Aperçus template](https://raw.githubusercontent.com/NicoLarson/PPE_vacance_montagne/main/asset/screenshot/page-complete.jpg?token=AOR7OGX5SVZMA35BUIO746S77QQZ4)

## Phase 1

- [X] Les technologies autorisées sont: html5 css3, Google fontet FontAwesome.
- [X] La page doit avoir un principe d’adaptabilité à l’écran pas forcement responsive.
- [X] Utilisez Sublim-Text ou Visual Studio Code.
- [X] Le code HTML généré doit être valide selon les normes du W3C.
- [X] Pour la partie menu utilisé javascript pour créer un fil d’Ariane: quand vous cliquez sur un bouton le bouton doit rester pressé.

![fil d'Arian](https://raw.githubusercontent.com/NicoLarson/PPE_vacance_montagne/main/asset/screenshot/secton_1.PNG?token=AOR7OGQXNQNTQ2IBAMVIYX277QQ2A)

- [X] La navigation doit être pour une single page.
- [X] La largeur du module contenant la grillephotos est de:1200pxà convertir en rem.
- [X] Les photos contenues dans chaque carré sont au premier plan, avec un effet css sur fond blanc qui remonte.

![fil d'Ariane](https://raw.githubusercontent.com/NicoLarson/PPE_vacance_montagne/main/asset/screenshot/section_02.PNG?token=AOR7OGUL6FAQME5WXEFFSHC77QQZ4)

- [X] La police est du Open Sans(importer depuis Google font).

## Phase 2

### Partie PHP

- [X] Changer d’extension de fichier et convertir votre single page en php.
- [X] Créer des fichiers d’inclusion et les mettre dans un répertoire "SRC".
- [X] La page html doit être intégrée parles templates suivants: header, main et footer(prévoirun fichier d’inclusion pour le traitement bdd).

### Partie BDD

- [X] La base de données doit être appelée "vacances" et la table "offre".

```sql
USE vacances;
SHOW TABLES;
+--------------------+
| Tables_in_vacances |
+--------------------+
| offre              |
+--------------------+

DESCRIBE offre;
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| id_offre | int(11)      | NO   | PRI | NULL    | auto_increment |
| image    | varchar(128) | NO   |     | NULL    |                |
| titre    | varchar(255) | NO   |     | NULL    |                |
| contenu  | longtext     | NO   |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+

SELECT * FROM offre;
+----------+---------------------------------------+-------------------------------------------------+-------------------------------------------------------------------------------------------+
| id_offre | image                                 | titre                                           | contenu                                                                                   |
+----------+---------------------------------------+-------------------------------------------------+-------------------------------------------------------------------------------------------+
|        1 | asset/banniere-illuminations-noel.jpg | Noël: magie et féerie garanties!                | Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aliquid voluptate enim. |
|        2 | asset/banniere-village-noel.jpg       | Marchés et village de Noël en stations          | Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aliquid voluptate enim. |
|        3 | asset/pub-home-page.jpg               | Ski 2019: quand partir au ski au meilleur prix? | Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aliquid voluptate enim. |
|        4 | asset/t_hytte_260.png                 | Le noêl en famille                              | Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aliquid voluptate enim. |
+----------+---------------------------------------+-------------------------------------------------+-------------------------------------------------------------------------------------------+


```
