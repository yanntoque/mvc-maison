<?php
/**
 * Created by PhpStorm.
 * User: toque
 * Date: 26/05/2018
 * Time: 13:47
 */
include("vues/fragment/navbarpokegame.html");
$lstPokemon = getAllPokemonInfo();
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
        <th>Lieu</th>
    </tr>
    </thead>
    <tbody>

    <?php
    foreach ($lstPokemon as $poke) {
        echo "<tr><td>" . $poke[0] . "</td> ";
        echo " <td>" . $poke[1] . "<br><img src='https://assets.pokemon.com/assets/cms2/img/pokedex/detail/$poke[0].png'></td>";
        echo '<td>';
        $lieuCapture = getLieuCaptureByPokemonId($poke[0]);
        foreach ($lieuCapture as $lieu) {
            echo '<form action="index.php?root=capture" method="post">';
            echo '  <select name="lieuCapture" class="form-control captureSelect" >';
            $nomLieu = array('MONTAGNE', 'PRAIRIE', 'VILLE', 'FORET', 'PLAGE');
            for ($i = 0; $i < 5; $i++) {
                if ($lieu[$i] > 0) {
                    ?>
                    <option value="<?php echo $nomLieu[$i]; ?>"><?php echo $nomLieu[$i]; ?></option>
                    <?php
                }
            }
            echo ' </select>';
            echo '<input class="btn btn-success" type="hidden" name="idPoke" value="'.$poke[0].'">';
            echo '<input class="btn btn-success" type="submit" value="Attraper">';
            echo '</form>';
        }
    }
    echo '</td>';
    ?>
    </tbody>
</table>
