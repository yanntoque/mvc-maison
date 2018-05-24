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
    $conn = new PDO("mysql:host=$host;dbname=pokegame", "$username", "$password");
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
function insererDresseur($nom, $email, $mdp, $credit)
{
    $dbcon = connexion();
    $query = "INSERT INTO dresseur (nom, mail, mdp, credit) VALUES (:nom, :mail, :mdp, :credit);";
    $prep = $dbcon->prepare($query);
    $prep->bindValue(':nom', $nom);
    $prep->bindValue(':mail', $email);
    $prep->bindValue(':mdp', $mdp);
    $prep->bindValue(':credit', $credit);
    return $prep->execute();
}

/**
 * Retourne la liste des starter du jeu Pokémon Jaune
 * @return array
 */
function getStarter()
{
    $dbcon = connexion();
    $query = "SELECT id,nom FROM `pokemon` WHERE nom = \"Bulbizarre\" OR nom = \"Carapuce\" OR nom = \"Salamèche\";";
    $resultat = $dbcon->query($query)->fetchAll(PDO::FETCH_ASSOC);
    $list = [];
    foreach ($resultat as $row) {
        $list[$row['id']] = $row['nom'];
    }
    return $list;
}

/**
 * Insere dans l'inventaire l'id du dresseur et l'id de son starter
 * @param $idDresseur
 * @param $idPokemon
 * @return bool
 */
function insererStarter($idDresseur, $idPokemon)
{
    $dbcon = connexion();
    $query = "INSERT INTO inventaire (idDresseur, idPokemon) VALUES (:idDresseur, :idPokemon);";
    $prep = $dbcon->prepare($query);
    $prep->bindValue(':idDresseur', $idDresseur);
    $prep->bindValue(':idPokemon', $idPokemon);
    return $prep->execute();
}

/**
 * Retourne l'id du dresseur en fonction de son nom ( Rapelle dans notre bdd les noms sont uniques)
 * @param $nom
 * @return mixed
 */
function getDresseurId($nom)
{
    $dbcon = connexion();
    $query = "SELECT id FROM `dresseur` WHERE nom = '$nom';";
    $resultat = $dbcon->query($query)->fetch();
    return $resultat;
}

/**
 * Vérifie les identifiants
 * @param $nom
 * @param $mdp
 * @return mixed
 */
function verifLogin($nom, $mdp)
{
    $dbcon = connexion();
    $query = "SELECT nom, mdp FROM dresseur  WHERE nom = :nom AND mdp= :mdp;";
    $prep = $dbcon->prepare($query);
    $prep->bindValue(':nom', $nom);
    $prep->bindValue(':mdp', $mdp);
    return $prep->execute();

}

/**
 * Récupère la liste des pokémon d'un dresseur particulier
 * @param $id
 * @return array
 */
function getPokemonByDresseurId($id)
{
    $dbcon = connexion();
    $query = "SELECT pokemon.id, pokemon.nom FROM `inventaire`, pokemon WHERE pokemon.id = inventaire.idPokemon AND idDresseur = :idDresseur; ";
    $prep = $dbcon->prepare($query);
    $prep->bindValue(':idDresseur', $id);
    $prep->execute();
    $resultat = $prep->fetchAll();
    $list = [];
    foreach ($resultat as $row) {
        $list[$row['id']] = $row['nom'];
    }
    return $list;
}