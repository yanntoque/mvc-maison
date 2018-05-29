# Informations sur ce projet 

Il faut être connecté à internet puisque l'application se sert d'une API pour afficher l'image des pokémons de GEN 1 et des CDN pour bootstrap. 

# Configuration  

Environnement requis pour faire fonctionner l'application :

 * Apache 2.4
 * PHP 7
 * MySQL
  
  ou 
 
 * Wamp/Wamp64 - Xampp

# Procédure d'installation 

Cloner ce projet à la racine de votre serveur web (ex: var/www/html).

Avec une des deux commande suivante :
 * git clone git@github.com:yanntoque/mvc-maison.git (avec clé SSH)
 * git clone https://github.com/yanntoque/mvc-maison.git (sans clé SSH par HTTPS)
 
Dans votre SGBD créer une base de données nommée pokegame.
Importer la base de données nommée pokegame.sql

Accéder à l'application depuis : 
http://localhost/mvc-maison/index.php