<?php
/**
 * Created by PhpStorm.
 * User: toque
 * Date: 25/05/2018
 * Time: 23:45
 */
include("vues/fragment/navbarpokegame.html");
$id = $_GET['pokeId'];
?>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>Identifiant dans le Pokédex</th>
        <th>Image</th>
        <th>Courbe XP</th>
        <th>Évolution</th>
        <th>Type 1</th>
        <th>Type 2</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $lstPokemon = getInfosByPokemonId($id);
    foreach ($lstPokemon as $k) {
        echo '<h1>Fiche du pokémon ' . $k[1] . '</h1>';
        echo '<tr>';
        echo '<td>' . $k[0] . '</td>';
        echo "<td><img src='https://assets.pokemon.com/assets/cms2/img/pokedex/detail/$k[0].png'></td>";
        echo "<td>$k[2]</td>";
        echo "<td>$k[3]</td>";
        echo "<td>$k[4]</td>";
        echo "<td>$k[5]</td>";
        echo '</tr>';
    }
    ?>
    </tbody>
    </thead>
</table>