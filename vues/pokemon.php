<?php
/**
 * Created by PhpStorm.
 * User: toque
 * Date: 24/05/2018
 * Time: 23:06
 */
include("vues/fragment/homelogout.html");
require_once 'util/fonctions.php';
$getDresseurId = getDresseurId($_SESSION['nom']);
$id = reset($getDresseurId);
$credit = getCreditByDresseurId($id);
?>
<div class="dresseurInfo">
    <h1><?php print_r($_SESSION['nom']); ?> | <?php echo $credit[0]; ?> <span class="glyphicon glyphicon-ruble"></span>
    </h1>
</div>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Identifiant dans le Pokédex</th>
        <th>Nom du pokémon</th>
    </tr>
    </thead>
    <tbody>
    <?php

    $lstPokemon = getPokemonByDresseurId($id);
    foreach ($lstPokemon as $k => $v) {
        echo '<tr>';
        echo '<td>' . $k . '</td>';
        echo "<td><img src='assets/images/$k.png'></td>";
        echo '</tr>';
    }
    ?>
    </tbody>
</table>