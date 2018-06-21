###GUIDE D'INSTALLATION

Pour installer le projet wordpress sur votre machine, il vous faut d'abord creer un dossier du nom du projet. Puis une fois dans le dossier sur le terminal, executer les commandes suivantes pour télécharger et extraire wordpress :
`wget https://fr.wordpress.org/wordpress-latest-fr_FR.zip`
`sudo unzip wordpress-latest-fr_FR.zip -d .`
**Puis il vous faut créer une base de donées vierge sur PHPmyAdmin Et creer un localhost avec apache2.**

Ensuite, rendez vous sur votre navigateur à l'adresse que vous avez choisie dans le virtual host.

Suivez ensuite les instructions de wordpress afin de finaliser la création du site, en indiquant bien les informations de votre base de données. Et validez !

Si wordpress n'as pas pu créer de fichier wp-config, copier le texte indiquer et créer votre `wp-config.php` à la racine du dossier wordpress/ Choisissez le titre du site ainsi que l'identifiant et le mot de passe de l'administrateur.Connectez vous.

Ensuite il vous faut  [https://fr.wordpress.org/plugins/all-in-one-wp-migration/]:télécharger le plugin permettant d'effectuer une migration d'un site wordpress.Une fois télécharger il faut l'extraire dans `wordpress/wp-content/plugins/` .

Dans votre console, allez dans le dossier contenant le dossier wordpress et faites : `sudo chmod -R 777 .`

Retourner sur votre site wordpress et cliquez sur `extensions` et activer
<dt>All-in-One WP Migration</dt>

Dans le menu d'administration est donc apparu le plugin, allez sur import et importez le fichier evaluation7.Le projet est désormais monté.

PS : Après l'adresse du site, il faut ajouter index.php (Je sais pas pourquoi)

Exemple : test.local/index.php/simplon

User : root
Password : simplonco