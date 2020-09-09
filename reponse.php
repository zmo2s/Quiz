<?php 

require 'questionManager.php';
$db = new PDO('mysql:host=127.0.0.1;dbname=quiz', 'phpmyadmin', 'Password1011%');

$manager = new QuestionManager($db);

$array=$manager->listReponse($_GET['nb']+1);





  //print_r($rows);
$a =json_encode($array);
//echo $rep104['nom'];
echo $a;