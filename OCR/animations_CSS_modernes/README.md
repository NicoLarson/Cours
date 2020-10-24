# Animations CSS modernes

## Transition

- Propriété CSS à modifier
- Valeur initiale
- Valeur finale
- Durée
- Événement

Appliquer les valeurs initiale à l'élément qu'on veut modifier. Et la valeur final dans la pseudo classe qui déclenche la transition.

---

## Déclencher les transition avec les pseudoclasses

- :active
- :focus
- :valid
- :invalid
- :not()
- :checked
- :enabled
- :disabled

---

## 12 Principes de l'animation

### 1 - Squash and Stretch (compression et étirement)

Donner de la masse à un objet
Étirer quand il accélère puis aplatir et élargir quand il ralentit.

### 2 - Anticipation

L'anticipation permet de préparer l'audience.

### 3 - Staging (mise en scène)

Désigne la composition.
Il s'agit de guider les yeux de l'utilisateur vers les parties importantes de l'écran par l'utilisation de mouvements.

### 4 - Straigth Ahead and Pose to Pose (toute l'action d'un coup et partie par partie)

#### En CSS 2 méthodes d'animations:

##### transitions

Basé sur des valeur de début et de fin.

##### keyframes

Animation étapes par étapes ou partie par partie.

### 5 - Follow Through and Overlapping Action (continuité du mouvement initial et chevauchement de deux mouvements consécutifs)

Masse et densité ne sont pas uniformes.

### 6 - Slow in and slow out (ralentissement en début et en fin de mouvement)

Principe basé sur le fait que les objets ne démarrent pas et ne s'arrêtent pas instantanément.
Ils accélèrent et décélèrent.

### 7 - Arc

La nature ne crée pas de lignes droites.

### 8 - Secondary Action (action secondaire)

Accentuer ou renforcer les principaux éléments d'une animation.

### 9 - Timing

Les objets doivent se déplacer à des vitesses crédibles par rapport à leur taille et à leur masse.

### 10 - Exagération

Donne un peut de caractère et de personnalité à une animation.

### 11 - Solid Drawing (notion de volume)

Ce principe concerne la structure du code de l'animation.

### 12 - Appeal (charisme)

Effets supplémentaires pour rendre l'animation plus dynamique.

---

## Créer des transitions CSS à propriétés multiples

### Créer des animations naturelles en combinant les transitions.

```css
main section ul li:nth-child(1) {
  transform: scale(1);
  transition: all 400ms;
}
main section ul li:nth-child(1):hover {
  transform: scale(1.15);
  background-color: var(--color-btn-bg-end);
  color: var(--color-btn-font-end);
}
```
### Séparer les propriétés
```css
main section ul li:nth-child(1) {
  transform: scale(1);
  transition: transform .4s, background-color 1s;
}
main section ul li:nth-child(1):hover {
  transform: scale(1.15);
  background-color: var(--color-btn-bg-end);
  color: var(--color-btn-font-end);
}
```
### Retarder le début d'une transition
```css
main section ul li:nth-child(1) {
  transform: scale(1);
  transition: transform 0.4s, background-color 1s;
  transition-delay:0, 0.2s;
}
main section ul li:nth-child(1):hover {
  transform: scale(1.15);
  background-color: var(--color-btn-bg-end);
  color: var(--color-btn-font-end);
}
```
ou
```css
main section ul li:nth-child(1) {
  transform: scale(1);
  transition: transform 0.4s, background-color 1s 0.2s;
}
main section ul li:nth-child(1):hover {
  transform: scale(1.15);
  background-color: var(--color-btn-bg-end);
  color: var(--color-btn-font-end);
}
```
_ _ _ 
## Créer des animations plus naturelles avec les fonctions timing
Tout objet en mouvement doit forcément accélérer et avant de pouvoir s'arrêter, il doit décélérer.
### Gérer l'accélération et la décélération des animations
ease-in 
ease-out
#### Fonctions des timing
```css
transition-timing-function
```
### Les principales fonctions de timing par défaut
Le timing est linéaire
#### Fonction de temporisation
* ease-in
* ease-out
* ease-in-out
* linear

* cubic-bezier(): si les timings par défaut ne correspond pas à l'animation voulu. Et permet d'ajuster des effets de timing.


## Optimiser les performances du navigateur pour les animations CSS

Frames Per Second (FPS): Images par seconde.
> Une image/0,04 secondes = 25 FPS
* 60 FPS idéal

### Comment le navigateur passe des codes HTML et CSS à une page web?

1. Style: le navigateur recois le code HTML et interprète le DOM.
2. Layout(mise en page): Détermine la taille des éléments et comment les placer.
3. Paint(peinture): Transforme les éléments en pixels.
4. Composition: Combine toutes les étapes. 
Chaque étape nécessite un temps de calcul.
Jank: Distinction des images une par une. C'est moche.

## Crée des animations fluides avec transform
### Déplacer
translate(x,y)
* Faire pivoter
* Déformer
### Changer la taille
scale(x,y)







