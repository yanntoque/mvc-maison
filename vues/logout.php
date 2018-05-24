<?php
/**
 * Created by PhpStorm.
 * User: toque
 * Date: 24/05/2018
 * Time: 23:58
 */
session_start();
unset($_SESSION['name']);
header("Location: index.php");
?>