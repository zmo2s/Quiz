<?php 

require 'library/bootstrap.php';
require 'library/mysql.php';
require 'questionManager.php';

/*  BDD */


$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db = new PDO('mysql:host=127.0.0.1;dbname=quiz', 'phpmyadmin', 'Password1011%');
$manager = new QuestionManager($bdd);


?>

<nav class="navbar navbar-light bg-primary">
    <a class="navbar-brand" href="#">
        <img src="public/brain.jpeg" width="30" height="30" alt="" loading="lazy"> Quiz
    </a>
</nav>


<div id="compteur1" bp="0"></div>

<div class="container py-md-5 mt-5">

<style>
@media (min-width: 1200px ) { .container{ max-width: 500px; } } 
</style>

<a class="btn btn-primary" href="#" role="button" id="ques">Question n°1</a>


<?php 



/* question n 1*/
$arrayReponse=$manager->listQuestion(1);




foreach($arrayReponse as $question)
{

?>

<a class="btn btn-primary mt-3" href="#" role="button" id="ques1"><?= $question->getPhrase() ?></a>

  <?php 
}





/* 

 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();

*/

/* fin question n 1 */


  $array=$manager->listPhrase(1);
  
 

?><div id="compteur" data="1"><div id="marche"></div> <div id="champ"> <form id="rad"> <?php 
  foreach($array as $question)
  {
    ?>
    <div class="form-check mt-5">
  
  <input class="form-check-input mt-3" type="radio" name="exampleRadios" id="exampleRadios1" value="<?=$question->getPhrase()?>">
  <label class="form-check-label" for="exampleRadios1">
  <a class="btn btn-primary" id="type1" href="#" role="button"><?= $question->getPhrase() ?></a>
  </label>
</div>
<?php
  }

  ?>
</div>
</div>
<button type="button" id="suiv" class="btn btn-secondary mt-5" onclick="loadDoc()">Suivant</button>
<div id="demo">
<script>



function loadDoc() {


  a=document.getElementById("compteur").getAttribute("data");
b=parseInt(a)+1;





// tableau reponse
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

  let myObj = JSON.parse(this.responseText);
  



trouve=0;
  for(i=0;i< myObj.length;i++)
{
  if(String(myObj[i].phrase) == String($('#avec input:radio:checked').val()))
{
trouve =1;
  alert("bonne réponse");
  bp=parseInt(document.getElementById("compteur1").getAttribute("bp"))+1;
  document.getElementById("compteur1").setAttribute("bp",bp);
}

else if(String(myObj[i].phrase) == String($('#rad input:radio:checked').val()))
{
  trouve =1;
  alert("bonne réponse");
  bp=parseInt(document.getElementById("compteur1").getAttribute("bp"))+1;
  document.getElementById("compteur1").setAttribute("bp",bp);
}
     }   //  console.log(myObj);
     a=document.getElementById("compteur").getAttribute("data");
b=parseInt(a)+1;
     if(trouve ==0 && b<4)
     {
       alert("mauvaise reponse");
     }
    }
  };
  xhttp.open("GET", "fonction/reponseTableau.php", true);
  xhttp.send();


 


  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let myObj = JSON.parse(this.responseText);



   $('#suppr').remove();
   $('#champ').remove();
  $('#avec').remove();
  $('#ques').remove();
  $('#ques1').remove();

if(b<=3)
{

  var elementAjoute = document.createElement("div");

  elementAjoute.setAttribute("id","avec");

  document.getElementById("marche").appendChild(elementAjoute);

  var elementAjoute5 = document.createElement("a");
  elementAjoute5.setAttribute("class","btn btn-primary");
  elementAjoute5.setAttribute("href","#");
  elementAjoute5.setAttribute("id","met");
  elementAjoute5.setAttribute("role","button");
  a=parseInt(document.getElementById("compteur").getAttribute("data"))+1;
  elementAjoute5.innerHTML="la question n°"+a;
  document.getElementById("avec").appendChild(elementAjoute5);


  var elementAjoute78 = document.createElement("a");
  elementAjoute78.setAttribute("class","btn btn-primary ml-3");
  elementAjoute78.setAttribute("href","#");
  elementAjoute78.setAttribute("id","met1");
  elementAjoute78.setAttribute("role","button");
  



  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

  let myObj = JSON.parse(this.responseText);
  

  
  elementAjoute78.innerHTML=myObj[0].phrase;


  console.log(myObj[0].phrase);
    }
  };
  a=document.getElementById("compteur").getAttribute("data");
  xhttp.open("GET", "fonction/questionList.php?nb="+a, true);
  xhttp.send();


  document.getElementById("avec").appendChild(elementAjoute78);

}
else { document.getElementById("suiv").innerHTML="voir le score"; }


max=0;





for(i=0;i< myObj.length;i++)
{
  var elementAjoute = document.createElement("div");
  elementAjoute.setAttribute("class","form-check mt-5");
  elementAjoute.setAttribute("id","suppr"+i);

  document.getElementById("avec").appendChild(elementAjoute);
  var elementAjouteInput = document.createElement("input");
  elementAjouteInput.setAttribute("class","form-check-input mt-3");
  elementAjouteInput.setAttribute("type","radio");
  elementAjouteInput.setAttribute("name","exampleRadios");
  elementAjouteInput.setAttribute("value",""+myObj[i].phrase+"");
  document.getElementById("suppr"+i).appendChild(elementAjouteInput);
  var elementAjouteA = document.createElement("a");
  elementAjouteA.setAttribute("class","btn btn-primary");
  elementAjouteA.setAttribute("href","#");
  elementAjouteA.setAttribute("role","button");
  elementAjouteA.setAttribute("id","type"+i);
  elementAjouteA.setAttribute("value",myObj[i].phrase);
  elementAjouteA.innerHTML= myObj[i].phrase;
  document.getElementById("suppr"+i).appendChild(elementAjouteA);

if(max <= myObj[i].numero)
{
max=myObj[i].numero;
}


}
a=document.getElementById("compteur").getAttribute("data");
b=parseInt(a)+1;
document.getElementById("compteur").setAttribute("data",b);
//console.log(max);
max=parseInt(max)+1;
//console.log(max);

//' 4 = max idéalement ok choisit quatre le max cool ok clear pour cette fonction








//mysql il max(numero == data stop quizz)
//$('#suiv').remove();
/*
$rep104 = $bdd->query('SELECT * FROM question');
  $rep104 = $rep104->fetch();
if($rep104==b)
{ confirmation fonction voila ok check
}
*/




    }
  };
  a=document.getElementById("compteur").getAttribute("data");
  
  xhttp.open("GET", "fonction/phraseList.php?nb="+a, true);
  xhttp.send();


loadDoc1();
// incrémente a


if(b ==5)
{
  alert("test reussie félicitations votre score est de "+document.getElementById("compteur1").getAttribute("bp")+" points");
  $('#suiv').remove();
        $('#ques').remove();
        $('#ques1').remove();
        $('#marche').remove();
}


}


function loadDoc1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let myObj = JSON.parse(this.responseText);

      if(document.getElementById("compteur").getAttribute("data")==this.responseText+1)
      {
        $('#suiv').remove();
        $('#ques').remove();
        $('#ques').remove();

        $('#marche').remove();
 
      }
    }
  };
  xhttp.open("GET", "teste1.php", true);
  xhttp.send();
}

</script>

