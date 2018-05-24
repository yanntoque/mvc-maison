<?php
/**
 * Created by PhpStorm.
 * User: toque
 * Date: 24/05/2018
 * Time: 22:55
 */
?>
<div class="form-group">
    <h1>Espace Connexion :</h1>
    <br>
    <form action="index.php?root=login" method="post">
        <label >Je m'appelle :</label>
        <input class="form-control"  type="text" name="nom" placeholder="Sacha" required/>
        <label>Mon mot de passe :</label>
        <input class="form-control" type="password" name="mdp" required/></br>
        <input class="form-control btn btn-success" type="submit" value="Inscription">
    </form>
</div>


