

    <!-- As a heading -->

    <!-- bannière du planning avec le logo du planning inclut dedans -->
<nav class="navbar navbar-light bg-primary">
    <a class="navbar-brand" href="#">
        <img src="public/logo.jpg" width="30" height="30" alt="" loading="lazy"> PAGE DE CONNEXION
    </a>
</nav>

<!-- definition du container  -->
<!--https://getbootstrap.com/docs/4.1/layout/overview/ -->

<div class="container py-md-5">

<style>
@media (min-width: 1200px ) { .container{ max-width: 500px; } } 
</style>


<!-- envoie les infromation mot de passe et email via un post -->
    <form class="m-5" method="post" action="pageGuarde">

            <div class="form-group">
                <label for="email">Adresse Email</label>
                <input type="email" name="email" placeholder="email" class="form-control" id="Jemail">
            
            </div>
            <div class="form-group">
                <label for="mot de passe">Mot de passe</label>
                <input type="password" name="pass" class="form-control" placeholder="mot de passe" id="Jpass" pattern=^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$ title="Au moins 1 charactère spécial 1 chiffre et 1 majuscule et 8 charactère ">
            </div>
            
            <button type="submit" class="md-5 btn btn-primary">Envoyer</button>
    
    </form>
    <p id="affiche"></p>
</div>

<?php
if (isset($_GET['error']) AND htmlspecialchars($_GET['error'])=="email")
 {
    ?>
  <script>
  document.getElementById("Jemail").classList.add('is-invalid');



  var node = document.createElement("div");   
  node.className = "invalid-feedback";
 // node.className = ('valid-feedback');           // Create a <li> node
var textnode = document.createTextNode("email invalide");         // Create a text node
node.appendChild(textnode);                              // Append the text to <li>
document.getElementById("Jemail").appendChild(node);     // Append <li> to <ul> with id="myList"
//document.getElementById("Jemail").value="email invalide";
var paragraph = document.getElementById("affiche");

paragraph.textContent += "email invalide";
document.getElementById("affiche").setAttribute("style","color:red");
document.getElementById("affiche").setAttribute("class","mt-5");

 </script>
  <?php
 }

 ?>

<?php
if (isset($_GET['error']) AND htmlspecialchars($_GET['error'])=="mdp")
 {
   ?>
  <script>
  document.getElementById("Jpass").classList.add('is-invalid');



  var node = document.createElement("div");   
  node.className = "invalid-feedback";
 // node.className = ('valid-feedback');           // Create a <li> node
var textnode = document.createTextNode("mdp invalide");         // Create a text node
node.appendChild(textnode);                              // Append the text to <li>
document.getElementById("Jpass").appendChild(node);     // Append <li> to <ul> with id="myList"
//document.getElementById("Jemail").value="email invalide";
var paragraph = document.getElementById("affiche");

paragraph.textContent += "mdp invalide";
document.getElementById("affiche").setAttribute("style","color:red");
document.getElementById("affiche").setAttribute("class","mt-5");

 </script>
  <?php
 }

 ?>