# Quête Odyssey POO
## Basics | Part 2

Après les classes `Car` et `Bicycle`, tu dois créer une classe permettant de manipuler un objet camion.

![Simpson's truck](http://images.innoveduc.fr/php_parcours/OOP/POO_2/homer-camion.jpg)

Un camion est un enfant de `Vehicle` et a des propriétés spécifiques :

* sa capacité de stockage.
* son chargement, qui est initialement à zéro.

La capacité de stockage doit être saisie au moment de l'Instanciation de l'objet, en plus de la couleur, du nombre de sièges et de l'énergie.
Il a également une méthode qui permet de savoir s’il est plein ou non. Celle-ci retourne `in filling` quand il n'est pas plein et `full` quand il est plein.

>N'oublie pas les getters et les setters !!

Critères de validation :

-[x] Le nom de la classe est en anglais et en UpperCamelCase.
-[x] La classe contient toutes les propriétés et méthodes demandées.
-[x] Les noms des propriétés et des méthodes sont en anglais et en camelCase.
-[x] Les visibilités public/private/protected sont correctement définies.
-[x] Sur index.php, il est possible d'instancier autant d’objets `Truck` que désirés, sans provoquer d'erreur.
-[x] Sur `index.php`, les camions avancent, freinent et contrôlent leur chargement sans erreur.
-[x] Ton code est disponible sur GitHub.