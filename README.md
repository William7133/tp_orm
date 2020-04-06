# tp_orm

# Quel est l'intérêt de créer une API plutôt qu'une application classique ?

Réponse : une API a plusieurs avantage par rapport à une application classique, elle permet de délimiter le domaine, on dispose d'un
contrôle et d'une visibilité sur les trafics entrants et sortants.
Cela permet aussi de simplifie et sécuriser au maximum la création,l'utilisation et le partage d'API

# Résumez les étapes du mécanisme de sérialisation implémenté dans Symfony.

Réponse : les encodeurs ne traiteront que de la transformation de formats spécifiques en tableaux et vice versa.
De la même manière, les normalisateurs traiteront de la transformation d' objets spécifiques en tableaux et vice versa.

# Qu'est-ce qu'un groupe de sérialisation ? A quoi sert-il ?

Réponse : Nous avons la possibilité d’utiliser les groupes d’attributs pour sérialiser seulement une partie des propriétés d’un objet.
Il est aussi possible de spécifier les attributs que l’on souhaite sérialiser/désérialiser.

# Quelle est la différence entre la méthode PUT et la méthode PATCH ?

Réponse : PUT met à jour la ligne, nous ne pouvons pas décider ce que l'on met à jour, tout est mis à jour.

La définition simple, mais pas tout à fait précise de PATCH est la suivante: c'est comme PUT, sauf que vous n'avez pas besoin d'envoyer le corps de ressource entier, c'est à dire qu'une partie des données que l'on a sélectionné va être mis à jour.

# Quels sont les différents types de relation entre entités pouvant être mis en place avec Doctrine ?

Réponse : il existe 5 relations : 

relation one-to-one, relation many-to-one, relation many-to-many, relation one-to-many, relations bidirectionnelles.


# Qu'est-ce qu'un Trait en PHP et à quoi peut-il servir ?

Les traits sont un mécanisme de réutilisation de code dans un langage à héritage simple tel que PHP. Un trait tente de réduire certaines limites de l'héritage simple, en autorisant le développeur à réutiliser un certain nombre de méthodes dans des classes indépendantes
