<?php
require 'library/mysql.php';


$rep104 = $bdd->query('SELECT MAX(numero) FROM sentance');
  $rep104 = $rep104->fetch();


$a= $rep104[0][0];

echo $a;

