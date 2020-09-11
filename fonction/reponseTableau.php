<?php 

require '../questionManager.php';
require '../library/mysql.php';
//$db = new PDO('mysql:host=127.0.0.1;dbname=quiz', 'phpmyadmin', 'Password1011%');

$manager = new QuestionManager($bdd);

$array=$manager->tableauReponse();





  //print_r($rows);
$a =json_encode($array);
//echo $rep104['nom'];
echo $a;
