<?php
/**
 * Created by PhpStorm.
 * User: toque
 * Date: 28/05/2018
 * Time: 18:55
 */
include("vues/fragment/navbarpokegame.html");
$getDresseurId = getDresseurId($_SESSION['nom']);
$id = reset($getDresseurId);
$credit = getCreditByDresseurId($id);
?>


<div class="dresseurInfo">
    <h1><?php print_r($_SESSION['nom']); ?> | <?php echo $credit[0]; ?> <span class="glyphicon glyphicon-ruble"></span>
    </h1>
</div>
<table class="table table-responsive">
    <thead>
    <tr>
        <th>Identifiant du dresseur qui vends ce pokémon</th>
        <th>Identifiant dans le Pokédex</th>
        <th>Pokémon</th>
        <th>Lieu de capture</th>
        <th>Détail</th>
        <th>Prix</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $lstPokemonEnVente = getAllInfoPokemonEnVente();
    foreach ($lstPokemonEnVente as $k) {
        echo '<tr>';
        echo '<td>' . $k[0] . '</td>';
        echo '<td>' . $k[1] . '</td>';
        echo "<td><br><img src='https://assets.pokemon.com/assets/cms2/img/pokedex/detail/$k[1].png'></td>";
        echo "<td>" . $k[2] . "</td>";
        echo "<td><a class='btn btn-info' href='index.php?root=detail&pokeId=$k[1]'>Détail</td>";
        echo '<td>'.$k[3].' <span class="glyphicon glyphicon-ruble"> </td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>
