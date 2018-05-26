<?php
/**
 * Created by PhpStorm.
 * User: toque
 * Date: 22/05/2018
 * Time: 23:51
 */
session_start();
include("vues/fragment/header.html");
include("util/fonctions.php");
/**
 * Page par défault : home
 */
if (!isset($_REQUEST['root'])) {
    $root = 'homepage';
} else {
    $root = $_REQUEST['root'];
}

/**
 * Permet de rediriger l'utilisateur en fonction de la root
 */
switch ($root) {
    case 'homepage':
        include('vues/home.php');
        break;
    case 'inscription':
        include('vues/inscription.php');
        if (isset($_POST['nom']) && isset($_POST['mdp']) && isset($_POST['email']) && isset($_POST['starter'])) {
            $_SESSION['nom'] = $_POST['nom'];
            $nom = $_POST['nom'];
            $options = [
                'cost' => 12,
            ];
            $email = $_POST['email'];
            $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT, $options);
            $idStarter = $_POST['starter'];
            $a = nomExiste($nom);
            if ($a) {
                echo "Malheuresement un dresseur est déjà enregistré avec ce nom dans notre pokedex des dresseurs :-(";
            } else {
                $credit = 5000;

                $inscrire = insererDresseur($nom, $email, $mdp, $credit);
                $getDresseurId = getDresseurId($nom);
                $idDresseur = reset($getDresseurId);
                //   var_dump($idDresseur);


                $inscrirestarter = insererStarter($idDresseur, $idStarter);
                if ($inscrire && $inscrirestarter) {
                    echo "Vous avez bien été enregistré !";
                } else {
                    echo "Votre inscription a malheureusement échouée ! ";
                }
            }
        }
        break;
    case 'login':
        include('vues/login.php');
        if (isset($_POST['nom']) && isset($_POST['mdp'])) {
            $_SESSION['nom'] = $_POST['nom'];
            $nom = $_POST['nom'];
            $mdp = $_POST['mdp'];
            $_SESSION['id'] = $idDresseur;

            $checkNom = checkDresseurNom($nom);
            $hash = checkDresseurMdp($nom);

            if (password_verify($mdp, $hash[0]) && $checkNom[0] == $nom) {
                header('location:index.php?root=pokemon');
            } else {
                echo 'Nom de user ou mot de passe non reconnus !';
            }
        }
        break;
    case 'logout':
        include('vues/logout.php');
        break;
    case 'detail':
        include('vues/detail.php');
        break;
    case 'pokemon':
        include('vues/pokemon.php');
        break;
    case 'capture':
        include('vues/capture.php');
        if (isset($_POST['lieuCapture']) && isset($_POST['idPoke'])) {
            $nom = $_SESSION['nom'];
            $lieuCapture = $_POST['lieuCapture'];
            $idPokemon = $_POST['idPoke'];
            $getDresseurId = getDresseurId($nom);
            $idDresseur = reset($getDresseurId);

            $enregistreInventaire = insererPokemonCapture($idDresseur,$idPokemon,$lieuCapture);

            if ($enregistreInventaire) {
                echo "Vous avez attrapez un pokémon !";
            } else {
                echo "La capture de ce pokémon a échoué ! ";
            }

        }

        break;
}
include("vues/fragment/footer.html");