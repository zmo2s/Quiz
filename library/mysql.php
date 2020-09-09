<?php
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=quiz;charset=utf8', 'phpmyadmin', 'Password1011%');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>