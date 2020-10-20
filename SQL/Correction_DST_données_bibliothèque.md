1.
```sql
INSERT INTO EMPRUNTER (numabonne,numouvrage,numexemplaire,dateemprunt)
VALUE (2,5,3,'04-04-2011');
```
2.
```sql
SELECT prenomauteur, nomauteur
FROM AUTEUR A, ECRIRE EC, EMPRUNTER EM, ABONNE A
WHERE A.prenomabonne = 'Gérard'
AND A.nomabonne = 'Bouchard'
AND EM.numabonne = A.numabonne
AND EC.numouvrage = EM.numouvrage
AND A.numauteur = EC.numauteur;
```
3.
```sql
SELECT nomouvrage,COUNT(DISTINCT E.numouvrage)
FROM OUVRAGE,EMPRUNTER E
GROUP BY nomouvrage;
```
4.
```sql

```
5.
```sql

```
