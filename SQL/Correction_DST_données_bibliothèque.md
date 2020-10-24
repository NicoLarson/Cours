# Correction DST 16 10 2020
## Question 1
```sql
INSERT INTO EMPRUNTER VALUES (2, 3, 5,'2011/4/4', NULL);
```
## Question 2 : quels sont les auteurs dont Gérard Bouchard a emprunté des livres ?

auteur 
    <-(numauteur)-- écrire 
    --(numouvrage)-> ouvrage 
        <-(numouvrage)-- exemplaire 
            <-(numouvrage, numexemplaire)-- 
                emprunter 
                    --(numabonne)-> abonne

```sql
select distinct nomauteur, prenomauteur
from AUTEUR A, ECRIRE EC, EMPRUNTER EM, ABONNE AB
where A.numauteur = EC.numauteur
and EC.numouvrage = EM.numouvrage
and EM.numabonne = AB.numabonne
and nomabonne = 'Bouchard'
and prenomabonne = 'Gérard';
```
## Question 3 : Ecrire l'instruction SQL listant les noms des ouvrages, et pour chacun d'eux le nombre de fois ou il a été emprunté.(Vous considèrerez les ouvrages actuellement en circulation comme empruntés).
```sql
select nomouvrage, COUNT(*)
from OUVRAGE O, EMPRUNTER E
where O.numouvrage = E.numouvrage
group by O.numouvrage, nomouvrage;
```
## Question 4 : Ecrire l'instruction SQL donnant le nombre d'ouvrages n'ayant jamais été empruntés.
```sql
select count(distinct O.numouvrage) - count(distinct E.numouvrage)
from OUVRAGE O, EMPRUNTER E;
```
## Question 5 : Ecrire l'instruction SQL listant les noms de adhérents ayant emprunté au moins deux fois le même ouvrage
```sql
select prenomabonne, nomabonne
from ABONNE A, EMPRUNTER E
where A.numabonne = E.numabonne
group by A.numabonne, prenomabonne, nomabonne
having count(distinct numouvrage) < count(*);
```
