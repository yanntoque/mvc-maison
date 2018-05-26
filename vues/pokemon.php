<?php
/**
 * Created by PhpStorm.
 * User: toque
 * Date: 24/05/2018
 * Time: 23:06
 */
include("vues/fragment/navbarpokegame.html");
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
        <th>Lieu de capture du pokémon</th>
        <th>Détail</th>
    </tr>
    </thead>
    <tbody>
    <?php

    $lstPokemon = getPokemonByDresseurId($id);
    foreach ($lstPokemon as $k ) {
        echo '<tr>';
        echo '<td>' . $k[0] . '</td>';
        echo "<td>$k[1]<br><img src='https://assets.pokemon.com/assets/cms2/img/pokedex/detail/$k[0].png'></td>";
        echo "<td>".$k[2]."</td>";
        echo "<td><a class='btn btn-info' href='index.php?root=detail&pokeId=$k[0]'> Détail sur $k[1] </a> </td>";
        echo '</tr>';
    }
    ?>
    </tbody>
</table>