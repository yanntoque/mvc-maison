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
        if (isset($_POST['nom']) && isset($_POST['mdp'])) {
            $_SESSION['nom'] = $_POST['nom'];
                $nom = $_POST['nom'];
            $options = [
                'cost' => 12,
            ];
            $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT, $options);
            $a = nomExiste($nom);
            if ($a) {
              echo "Malheuresement un dresseur est déjà enregistré avec ce nom dans notre pokedex des dresseurs :-(";
            }else{
                $credit = 5000;
                $inscrire = insererDresseur($nom, $mdp, $credit);
                if ($inscrire) {
                    echo "Vous avez bien été enregistré !";
                }else{
                    echo "Votre inscription a malheureusement échouée ! ";
                }
            }
        }
        break;
}
include("vues/fragment/footer.html");