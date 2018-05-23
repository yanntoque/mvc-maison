<?php
/**
 * Created by PhpStorm.
 * User: toque
 * Date: 22/05/2018
 * Time: 23:53
 */

/**
 * Fonction permettant la connexion à la base de donnée : pokegame
 * @return PDO
 */
function connexion()
{
    $host = "localhost";
    $username = "root";
    $password = "root";
    $conn =  new PDO("mysql:host=$host;dbname=pokegame", "$username", "$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}

/**
 * Vérifie si le nom saisi est déjà enregistré
 * @param $nom
 * @return mixed
 */
function nomExiste($nom)
{
    $dbConn = connexion();
    $requete = "SELECT * FROM `dresseur` WHERE nom = '$nom';";
    $resultat = $dbConn->query($requete);
    $pseudoexiste = $resultat->fetch();
    return $pseudoexiste;
}

/**
 * Enregistre un dresseur dans la table : dresseur
 * @param $nom
 * @param $mdp
 * @param $credit
 * @return bool
 */
function insererDresseur($nom, $mdp, $credit)
{
    $dbcon = connexion();
    $query = "INSERT INTO dresseur (nom, mdp, credit) VALUES (:nom, :mdp, :credit);";
    $prep = $dbcon->prepare($query);
    $prep->bindValue(':nom', $nom );
    $prep->bindValue(':mdp', $mdp );
    $prep->bindValue(':credit', $credit );
    return $prep->execute();
}