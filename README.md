# MEMO-PHP-POO

# A quoi sert Composer?

Composer est un logiciel gestionnaire de dépendances libre écrit en PHP. Il permet à ses utilisateurs de déclarer et d'installer les bibliothèques dont le projet principal a besoin. Le développement a débuté en avril 2011 et a donné lieu à une première version sortie le 1er mars 2012.


# Équivalent de COMPOSER :

DOCKER COMPOSE:
    • multi-container
    • fast developpement environement setup
    • Easy linking of containers
    • easy configuration
    • yml yaml format
    • open source
      
DOCKER :
    • rapide integration and build up
    • open source
    • testability and reproductibility
    • standardization
    • lightweight

Kubernetes :
    • leading docker container management
    • simple and powerful
    • open source
    • backed by google

# Qu'est ce que le fichier composer.json ?

C'est le fichier qui stocke tous les paquets (dépendances) d'un projet, ainsi que leurs versions, mais peut aussi être utilisé pour définir un projet quand il est publié sur Git, par exemple.

{    	"name": "your-vendor-name/package-name", 
	"description": "A short description of what your package does", 
	"require": {       
			"php": "^7.2",
		      "vendor/package": "1.*",
	        	"another-vendor/package": "1.*"
}}

# A quoi sert le fichier composer.json ?

Ce fichier stocke toutes les dépendances d'un projet, sans avoir à physiquement les installer dans le répertoire vendor/, notamment lorsqu'il est stocké sur un gestionnaire de version (comme Git), ce qui réduit grandement la taille des ressources à stocker. Reste au développeur qui veut utiliser un projet, d'installer les dépendances, via un composer:install ou composer:update.`


# A quoi servent les caractères ^ et + du fichier .json ?



# A quoi sert le fichier composer.lock ? Quelle est la différence avec le fichier .json ?

Toutes les dépendantes du projet sont définies dans composer.json. Quand on exécute composer pour la première fois avec composer install, ce dernier va créer un fichier composer.lock qui va contenir les versions exactes de toutes les dépendances installées du projet. Par la suite, si une tierce personne installe le projet, composer va utiliser le fichier composer.lock plutôt que composer.json. C’est donc très intéressant d’un point de vue travail en équipe.
Que se passe t-il lors de la mise à jour via composer update ou composer update dependency ? Dans ce cas composer va lire le fichier composer.json pour obtenir les contraintes des versions, puis va ré-écrire le fichier composer.lock.

Pour etre sur que toute l’equipe utilise les meme version des dépendences on versionne le composer.lock et, de temps en temps, on en profite pour tout mettre à jour. 

======

# A quoi sert PSR-4 l'auto-loading?

Ce PSR décrit une spécification pour le chargement automatique des classes à partir des chemins de fichiers. Il est entièrement interopérable et peut être utilisé en plus de toute autre spécification de chargement automatique, y compris PSR-0 . Ce PSR décrit également où placer les fichiers qui seront chargés automatiquement conformément à la spécification.


Le terme "classe" fait référence aux classes, interfaces, traits et autres structures similaires.

Un nom de classe complet a la forme suivante :

 \<NamespaceName>(\<SubNamespaceNames>)*\<ClassName>

    Le nom de classe complet DOIT avoir un nom d'espace de noms de niveau supérieur, également appelé "espace de noms de fournisseur".

    Le nom de classe pleinement qualifié PEUT avoir un ou plusieurs noms de sous-espace de noms.

    Le nom de classe complet DOIT avoir un nom de classe de terminaison.

    Les traits de soulignement n'ont aucune signification particulière dans aucune partie du nom de classe complet.

    Les caractères alphabétiques dans le nom de classe complet PEUVENT être n'importe quelle combinaison de minuscules et de majuscules.

    Tous les noms de classe DOIVENT être référencés en respectant la casse.

Lors du chargement d'un fichier qui correspond à un nom de classe complet...

    Une série contiguë d'un ou plusieurs noms d'espace de noms et de sous-espaces de noms de tête, sans compter le séparateur d'espace de noms de tête, dans le nom de classe pleinement qualifié (un "préfixe d'espace de noms") correspond à au moins un "répertoire de base".

    Les noms de sous-espaces de noms contigus après le "préfixe d'espace de noms" correspondent à un sous-répertoire dans un "répertoire de base", dans lequel les séparateurs d'espace de noms représentent des séparateurs de répertoires. Le nom du sous-répertoire DOIT correspondre à la casse des noms des sous-espaces de noms.

    Le nom de la classe de terminaison correspond à un nom de fichier se terminant par .php. Le nom de fichier DOIT correspondre à la casse du nom de classe de terminaison.

Les implémentations d'autochargeur NE DOIVENT PAS lever d'exceptions, NE DOIVENT PAS lever d'erreurs de quelque niveau que ce soit, et NE DEVRAIENT PAS retourner de valeur

# DIFFERENCE ENTRE CLASS et OBJET

	La classe est une description détaillée, la définition et le modèle de ce que sera un objet. Mais ce n’est pas l’objet lui-même. De plus, ce que nous appelons une classe est le bloc de construction qui mène à la programmation orientée objet. Il s’agit d’un type de données défini par l’utilisateur, qui contient ses propres membres de données et fonctions membres, auxquels il est possible d’accéder et d’utiliser en créant une instance de cette classe. C’est le plan de n’importe quel objet. Une fois que nous avons écrit une classe et l’avons définie, nous pouvons l’utiliser pour créer autant d’objets basés sur cette classe que nous le souhaitons;
	
