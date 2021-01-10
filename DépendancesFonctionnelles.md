# Dépendance fonctionnelles

## Définition
A et B sont en dépendance fonctionnelle si la connaissance de la valeur de A détermina la connaissance d'au plus une valeur de B.
### Quelques règles
#### Identifiant
A -> B
A est nécessairement un identifiant.
        - Unique
        - Invariable dans le temps
#### Arcs de transitivité
A -> B -> C == A -> C
Par convention inutile d'écrire A -> C
### Dépendance faible
### Les Entités
### Les Associations
Correspondances entre les entités
### Les Cardinalités
0: Aucun
1: Un seul
N: Plusieurs

0,N: Un étudiant participe à 0,1 ou N soirées
0,N: Une soirée peut avoir 0,1 ou N étudiants
0,1: Une soirée peut se dérouler dans 0 ou 1 lieux
1,N: Un lieu peut avoir un ou plusieurs soirée
> Figure 1.7: Exemple de cardinalités


SI nb_places est dans ETUDIANT : Un étudiant est obligé de réserver le même nombre de places à toutes les soirées
SI nb_places est dans SOIREE : Tous les étudiant d'une soirée sont obligés de réserver le même nombre de places
SI nb_places est dans PARTICIPER : Le nombre de places dépend de l'ETUDIANT et de la SOIREE.
> Figure 1.8: Exemple attribut


### Associations et attributs

0,N: Un fournisseur peut effectuer 0,1 ou plusieurs Livraison
1,1: Une LIVRAISON peut être effectuer par 1 seul fournisseur
0,N: Une LIVRAISON peut comporter 1 ou plusieurs PRODUITS
0,N: Un produit peut être livrer par 0,1 ou plusieurs fois
SI le prix est dans PRODUIT : tous les fournisseurs proposent le produit au même prix
SI le prix est dans PROPOSER : Le prix d'un produit dépend aussi du fournisseur

### Réflexives
### Ternaires
Client date: Quelle Produits un client à acheter tel date
Client produit: A quelle date un client à acheter tel produit
Produit date: Les clients qui on acheter tel produit à telle date
Client Date Produit:
        - Combien tell produit à été acheter tel jour par tel client
        - Aucun produit à été achet tel jour par tel client

### Entité faible


MCD: Qu'est ce que je veux faire
        - ! Ne pas mettre de clée étrangère dans un MCD !!!

Clé étrangère: Comment on peut faire

> Ne pas confondre table et entité

Occurrence d'entité: C'est une entité
Une occurrence de soirée: c'est une soirée
