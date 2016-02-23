**********************************************************************************
************************         Blog de François         ************************
**********************************************************************************

Fonctionnalité du blog
    
    - Visionner les articles deja présente sur le blog
    - Vous inscrire, si vous n'avait pas de compte
    - Vous connecter si vous etes inscrit
    - Rechercher un article a l'aide du moteur de recherche
    - Rédiger, éditer et supprimer des articles si vous etes connecté (Point de vue sécurité)
    
    

-- Rediger un article --

Lorsque que vous rédiger un article, vous pouvez mettre une photo grave à l'upload d'image.



*********************************************************************************
***********************         Espace développement       **********************
*********************************************************************************

Pour que le code soit clair, dans chaque page j'ai fais des includes vers le header, et footer.



	addArticle.php = C'est le php qui traite l'ajout dans la base d'un nouvel article

	deconnexion.php = C'est le php qui traite la deconnexion, donc détruit la variable de session et renvoi vers la page index

	deleteArticle.php = C'est le php qui traite la suppresion d'un article, dès que l'article est supprimer nous sommes rediriger vers la page d'accueil et un message qui affiche que l'article a bien etait supprimer

	footer.php = C'est le bas de la page avec les appels des fichiers js

	getCookie.php = Affichage de la varible

	header.php = C'est le haut de la page avec les appels css, et si un utilisateur est connecter, il affiche le prenom de la personne connecter et l'adresse de connexion

	nav.php = Cette page gere la barre de navigation avec les boutons de connexion. Si l'utilisateur est connecter on affiche le bouton déconnexion 

	redim.php = C'est le php qui traite la redimentionnage d'une image uploader

	setCookie = C'est le php qui traite le cookie (Le compteur de visite)

	traitementConnexion.php = C'est le php qui traite la connexion d'un utilisateur

	updateArticle.php = C'est le php qui traite la modification d'un article et quand un article est modifier on est renvoyer vers la page d'accueil

	ajouterArticle.php = Fomulaire d'ajout d'un article qui lors de l'appui sur le bouton submit la page php "addArticle.php" et appeler

	editerArticle.php = Formulaire pour modifier un article

	index.php = Page avec tous les articles présent en base de données

	login.php = Page pour ce connecter au blog

	logout.php = Page pour ce déconnecter du blog

	recherche.php = C'est le php qui traite la recherche d'un article

	register.php = Page pour s'incrire au blog



Lorsqu'on s'inscrit, on fait appel a la page : register.php
Nous avons les champs Nom, Prenom, E-mail et mot de passe
Au moment du clic sur le bouton envoyer on traite le php situé en haut de la page.

On réccupere les valeurs du fomulaire, on les stocks dans des variables, après on vérifie si l'une des valeurs n'est pas vides.
    
    - Si un champs est vide, on affiche un message
    - Si lors de la recherche dans la base on trouve que l'adresse email est deja utiliser, on affiche un message d'erreur
    - Si les deux mots de passe ne son tpas identiques on affiche un message d'erreur
    - Si tous les criteres précedents sont vérifier sans erreur, on insere l'utilisateur dans la base

Nous sommes ensuite redirigé vers la page index, et la nous pouvons nous inscrire.
Au niveau de la page login.php, juste un formulaire avec deux champs. Lors de l'appui sur le bouton "Login", le traitement ce fait sur la "traitementConnexion.php"

