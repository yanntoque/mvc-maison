<?php
/**
 * Created by PhpStorm.
 * User: toque
 * Date: 22/05/2018
 * Time: 23:51
 */

include ("vues/fragment/header.html");

/**
 * Page par défault : home
 */
if(!isset($_REQUEST['root'])){
    $root='homepage';
}else{
    $root= $_REQUEST['root'];
}

/**
 * Permet de rediriger l'utilisateur en fonction de la root
 */
switch ($root){
    case 'homepage':
        include ('vues/home.php');
        break;
}
include ("vues/fragment/footer.html");