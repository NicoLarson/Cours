# Diagramme de classe
Étape de conception
Conception archeticturale
Représente la structure interne du logiciel

## Objets
|MonCompteFrance|
|---|
|numéro:78456598|
|devise:EUR|
|solde:457812|
|---|
|déposer(montant:float)|
|retirer(montant:float)|
|solde():float|

|MonCompteSuisse|
|---|
|numéro:22583369|
|devise:chf|
|solde:8456231|
|---|
|déposer(montant:float)|
|retirer(montant:float)|
|solde():float|

- Nom
- État = Valeur des attributs
- Opération = son comportement. Enssemble des tâches à effectuer.
Quelque chose qu'on a besoin de manipuler
Objet = instance de classe

## Classes
|Compte|
|----|
|numéro:int|
|devise:strung|
|solde:float|
|---|
|déposer(montant:float)|
|retirer(montant:float)|
|solde():float|

Classe regroupement d'objet de même nature(mêmes attributs + mêmes opérations)

## Associations
### Rôle
### Multiplicités
### Agrégation
Association particulière entre classes
- Dissymétrique: classe prédominante sur l'autre
- Relation de type composant composite
#### Agrégation faible
- Le composite fait référence à ses composants
- La création ou la destruction du composite est indépendante de la création ou destruction de ses composants
- Un objet peut faire partie de plusieurs composites à la fois
#### Composition
- Le composite contient ses composants
- La création ou destruction d'un composite entraine la création ou destruction de ses composants
- Un objet ne fait partie que d'un composite à la fois
----
# Limites du diagramme de classe
## Ne permet pas de représenter:
- Les valeurs autorisées des attributs
- Les conditions sur les associations
- Les relations entre les attributs ou entre les associations
## Contrainte Invariant
---
# Opérations
Service qui peut être demandé à tout objet de la classe
Comportement commun à tous objets de la classe
## Renvoyer le résultat d'un calcul
## Modifier l'état du système
- Modifier la valeur des attributs
- Ajouter ou supprimer des liens entre objets
- Crée  ou supprimer des objets

