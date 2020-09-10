<?php



require 'questionManager.php';
$db = new PDO('mysql:host=127.0.0.1;dbname=quiz', 'phpmyadmin', 'Password1011%');

$manager = new QuestionManager($db);

$array=$manager->taille();





  //print_r($rows);

//echo $rep104['nom'];
echo $array;
