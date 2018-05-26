<?php
/**
 * Created by PhpStorm.
 * User: toque
 * Date: 23/05/2018
 * Time: 22:11
 */
include('vues/fragment/indexbutton.html');?>
<div class="form-group">
    <h1>Espace Inscription : Devenez un fier dresseur de pokémon</h1>
    <br>
    <form action="index.php?root=inscription" method="post">
        <label >Je m'appelle :</label>
        <input class="form-control"  type="text" name="nom" placeholder="Sacha" required/>
        <label >Mon adresse mail :</label>
        <input class="form-control"  type="email" name="email" placeholder="Sacha@bourpalette.com" required/>
        <label>Mon mot de passe :</label>
        <input class="form-control" type="password" name="mdp" required/></br>
        <label>Mon starter :</label>
<!--        <select class="selectpicker" name="starter">-->
        <?php
            require_once 'util/fonctions.php';
            $starters = getStarter();
            foreach ($starters as $k => $v ){
                echo "<label class='starter'>";
                echo " <input type='radio' name='starter' value='$k' required><img src='https://assets.pokemon.com/assets/cms2/img/pokedex/detail/$k.png'></input>";
                echo "</label>";
            }
            ?>
<!--        </select>-->
        <br>
        <input class="form-control btn btn-success" type="submit" value="Inscription">
    </form>
</div>


