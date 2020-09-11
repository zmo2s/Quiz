<?php

require 'library/bootstrap.php';
require 'library/mysql.php';
require 'questionManager.php';

/*  BDD */


$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$db = new PDO('mysql:host=127.0.0.1;dbname=quiz', 'phpmyadmin', 'Password1011%');
$manager = new QuestionManager($bdd);


?>

<nav class="navbar navbar-light bg-primary">
  <a class="navbar-brand" href="#">
    <img src="public/brain.png" width="30" height="30" alt="" loading="lazy"> Quiz
  </a>
</nav>


<div id="compteur1" bp="0"></div>

<div class="container py-md-5 mt-5">

  <style>
    @media (min-width: 1200px) {
      .container {
        max-width: 500px;
      }
    }
  </style>
  <a  role="button" id="size"></a>
  <a class="btn btn-primary"  role="button" id="ques">Question n°1</a>



  <script>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {


        taille = this.responseText;



        document.getElementById("size").setAttribute("taille", this.responseText);
        //document.getElementById("ques").getAttribute("taille");

     //   document.getElementById("quesScore").innerHTML="le score est de "+document.getElementById("compteur1").getAttribute("bp")+"/"+document.getElementById("size").getAttribute("taille");


      }
    };
    xhttp.open("GET", "teste1.php", true);
    xhttp.send();
  </script>

  <?php



  /* question n 1*/
  //$arrayReponse=$manager->listQuestion(1);




  //foreach($arrayReponse as $question)
  //{

  ?>

  <a class="btn btn-primary mt-3" role="button" id="ques1">test</a>

  <?php
  //}



  ?>

  <script>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        let myObj = JSON.parse(this.responseText);
        document.getElementById("ques1").innerHTML = myObj[0].phrase;
        //    console.log(myObj[0].phrase);
      }
    };
    xhttp.open("GET", "fonction/questionList.php?nb=0", true);
    xhttp.send();



    /* fin question n 1 */
  </script>
  <?php

  // $array=$manager->listPhrase(1);



  ?><div id="compteur" data="1">
    <div id="marche"></div>
    <div id="champ">
      <form id="rad" name="vol"> <?php
                      //foreach($array as $question)
                      //{
                      ?>
        <!--    <div class="form-check mt-5">
  
  <input class="form-check-input mt-3" type="radio" name="exampleRadios" id="exampleRadios1" value="">
  <label class="form-check-label" for="exampleRadios1">
  <a class="btn btn-primary" id="type1" href="#" role="button"></a>
  </label>


  -->



        <script>
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              let myObj = JSON.parse(this.responseText);
           //   document.getElementById("ques1").innerHTML = myObj[0].phrase;
              // console.log(myObj[0].phrase);

              for (l = 0; l < myObj.length; l++) {




                var elementAjoute = document.createElement("div");
                elementAjoute.setAttribute("class", "form-check mt-5");
                elementAjoute.setAttribute("id", "testew" + l);

                document.getElementById("rad").appendChild(elementAjoute);




                var elementAjouteInput = document.createElement("input");
                elementAjouteInput.setAttribute("class", "form-check-input mt-3");
                elementAjouteInput.setAttribute("type", "radio");
                elementAjouteInput.setAttribute("name", "exampleRadios");
                elementAjouteInput.setAttribute("value", myObj[l].phrase);
                document.getElementById("testew" + l).appendChild(elementAjouteInput);



                var elementAjouteA = document.createElement("a");
                elementAjouteA.setAttribute("class", "btn btn-primary");
              
                elementAjouteA.setAttribute("role", "button");
                elementAjouteA.setAttribute("name", "coche");
                elementAjouteA.setAttribute("id", "type1");
                elementAjouteA.setAttribute("value", myObj[l].phrase);
                elementAjouteA.innerHTML = myObj[l].phrase;
                document.getElementById("testew" + l).appendChild(elementAjouteA);
              }
            }
          };
          xhttp.open("GET", "fonction/phraseList.php?nb=0", true);
          xhttp.send();
        </script>
</form>

    </div>
  </div>
  <button type="button" id="suiv" class="btn btn-secondary mt-5" onclick="checkRadio()">Suivant</button>
  <div id="demo">

  <a class="btn btn-primary mt-3" role="button" id="quesScore">votre score est de 0/3 </a>
    <script>

//document.getElementById("quesScore").innerHTML="le score est de "+document.getElementById("size").getAttribute("taille");

function checkRadio()
{

  

      
        loadDoc();
  
}


      function loadDoc() {

        document.getElementById("quesScore").innerHTML="le score est de "+document.getElementById("compteur1").getAttribute("bp")+"/"+document.getElementById("size").getAttribute("taille");



         a = document.getElementById("compteur").getAttribute("data");
         b = parseInt(a) + 1;

        // tableau reponse
         xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {

            let myObj = JSON.parse(this.responseText);




            trouve = 0;
            for (i = 0; i < myObj.length; i++) {

              if (String(myObj[i].phrase) == String($('#testew0 input:radio:checked').val())) {
                trouve = 1;
             //   alert("bonne réponse");
                bp = parseInt(document.getElementById("compteur1").getAttribute("bp")) + 1;
                document.getElementById("compteur1").setAttribute("bp", bp);
              }


              if (String(myObj[i].phrase) == String($('#avec input:radio:checked').val())) {
                trouve = 1;
           //   alert("bonne réponse");
                bp = parseInt(document.getElementById("compteur1").getAttribute("bp")) + 1;
                document.getElementById("compteur1").setAttribute("bp", bp);
                document.getElementById("quesScore").innerHTML="le score est de "+document.getElementById("compteur1").getAttribute("bp")+"/"+document.getElementById("size").getAttribute("taille");
              } if (String(myObj[i].phrase) == String($('#rad input:radio:checked').val())) {
                trouve = 1;
            //  alert("bonne réponse");
                bp = parseInt(document.getElementById("compteur1").getAttribute("bp")) + 1;
                document.getElementById("compteur1").setAttribute("bp", bp);
                document.getElementById("quesScore").innerHTML="le score est de "+document.getElementById("compteur1").getAttribute("bp")+"/"+document.getElementById("size").getAttribute("taille");
              }
            } //  console.log(myObj);
            a = document.getElementById("compteur").getAttribute("data");
            b = parseInt(a) + 1;
            if (trouve == 0 && b <= document.getElementById("size").getAttribute("taille")) {
           //   alert("mauvaise reponse");
                  
                  
                    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let myObj = JSON.parse(this.responseText);
      
    }
  };
  xhttp.open("GET", "reponseList.php", true);
  xhttp.send();
                  
                  
                

            }
          }
          trouve = 0;
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

            if (b <= 3) {

              var elementAjoute = document.createElement("div");

              elementAjoute.setAttribute("id", "avec");

              document.getElementById("marche").appendChild(elementAjoute);

              var elementAjoute5 = document.createElement("a");
              elementAjoute5.setAttribute("class", "btn btn-primary");
             
              elementAjoute5.setAttribute("id", "met");
              elementAjoute5.setAttribute("role", "button");
              a = parseInt(document.getElementById("compteur").getAttribute("data")) + 1;
              elementAjoute5.innerHTML = "la question n°" + a;
              document.getElementById("avec").appendChild(elementAjoute5);


              var elementAjoute78 = document.createElement("a");
              elementAjoute78.setAttribute("class", "btn btn-primary mt-3");
         
              elementAjoute78.setAttribute("id", "met1");
              elementAjoute78.setAttribute("role", "button");




              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                  let myObj = JSON.parse(this.responseText);



                  elementAjoute78.innerHTML = myObj[0].phrase;


                  //console.log(myObj[0].phrase);
                }
              };
              a = document.getElementById("compteur").getAttribute("data");
              xhttp.open("GET", "fonction/questionList.php?nb=" + a, true);
              xhttp.send();


              document.getElementById("avec").appendChild(elementAjoute78);

            } else {
              document.getElementById("suiv").innerHTML = "voir le score";
              $('#suiv').remove();
            }


            max = 0;





            for (i = 0; i < myObj.length; i++) {
              var elementAjoute = document.createElement("div");
              elementAjoute.setAttribute("class", "form-check mt-5");
              elementAjoute.setAttribute("id", "suppr" + i);

              document.getElementById("avec").appendChild(elementAjoute);
              var elementAjouteInput = document.createElement("input");
              elementAjouteInput.setAttribute("class", "form-check-input mt-3");
              elementAjouteInput.setAttribute("type", "radio");
              elementAjouteInput.setAttribute("name", "exampleRadios");
              elementAjouteInput.setAttribute("value", "" + myObj[i].phrase + "");
              document.getElementById("suppr" + i).appendChild(elementAjouteInput);
              var elementAjouteA = document.createElement("a");
              elementAjouteA.setAttribute("class", "btn btn-primary");
         
              elementAjouteA.setAttribute("role", "button");
              elementAjouteA.setAttribute("id", "type" + i);
              elementAjouteA.setAttribute("value", myObj[i].phrase);
              elementAjouteA.innerHTML = myObj[i].phrase;
              document.getElementById("suppr" + i).appendChild(elementAjouteA);

              if (max <= myObj[i].numero) {
                max = myObj[i].numero;
              }


            }
            a = document.getElementById("compteur").getAttribute("data");
            b = parseInt(a) + 1;
            document.getElementById("compteur").setAttribute("data", b);
            //console.log(max);
            max = parseInt(max) + 1;
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
        a = document.getElementById("compteur").getAttribute("data");

        xhttp.open("GET", "fonction/phraseList.php?nb=" + a, true);
        xhttp.send();


        loadDoc1();
        // incrémente a

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {


            taille = this.responseText;
            //   document.getElementById("demo").innerHTML = this.responseText;

            console.log(taille);

            moyenne = Math.ceil(taille / 2);

            if (b == 5) {

              if (moyenne < document.getElementById("compteur1").getAttribute("bp")) {
                alert("test reussie félicitations votre score est de " + document.getElementById("compteur1").getAttribute("bp") + "/" + taille + "la moyenne est de " + moyenne + " points");
                $('#suiv').remove();
                $('#ques').remove();
                $('#ques1').remove();
                $('#marche').remove();
              } else if (moyenne <= document.getElementById("compteur1").getAttribute("bp")) {
                alert("bien votre score est de " + document.getElementById("compteur1").getAttribute("bp") + "/" + taille);
              } else {
                alert("echec votre score est de " + document.getElementById("compteur1").getAttribute("bp") + "/" + taille);
              }
            }

          }
        };
        xhttp.open("GET", "teste1.php", true);
        xhttp.send();

      }


      function loadDoc1() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            let myObj = JSON.parse(this.responseText);
         //   document.getElementById("quesScore").innerHTML="le score est de "+document.getElementById("compteur1").getAttribute("bp")+"/"+document.getElementById("size").getAttribute("taille");

            if (document.getElementById("compteur").getAttribute("data") == this.responseText + 1) {
              $('#suiv').remove();
              $('#ques').remove();
              $('#ques').remove();

        //      $('#marche').remove();

            }
          }
        };
        xhttp.open("GET", "teste1.php", true);
        xhttp.send();

       
      }
    </script>