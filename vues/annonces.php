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
        echo '<td><span class="glyphicon glyphicon-ruble">' . $k[3];
        if (!($id == $k[0])) {
            echo '<br>';
            echo '<form action="index.php?root=annonces" method="post">';
            echo '<input class="form-control form-control-lg" name="prix"  type="hidden">';
            echo '<input  type="hidden" name="idDresseur" value="' . $k[0] . '">';
            echo '<input  type="hidden" name="idAcheteur" value="' . $id . '">';
            echo '<input  type="hidden" name="idPokemon" value="' . $k[1] . '">';
            echo '<input  type="hidden" name="debit" value="' . $k[3] . '">';
            echo '<input  type="hidden" name="idInventaire" value="' . $k[5] . '">';
            echo '<input  class="btn btn-success" type="submit" value="Acheter !">';
            echo '</form>';
        } else {
            echo '<div> Vous ne pouvez pas acheter ce pokémon, c\'est vous qui l`avez mis en vente ! </div>';
        }
        echo '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>
