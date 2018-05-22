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
function connexion(){
    $host = "localhost";
    $username = "root";
    $password = "root";
    $makeconnexion = new PDO("mysql:host=$host;dbame=pokegame", "$username","$password");
    return  $makeconnexion;
}