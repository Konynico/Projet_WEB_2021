<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <title>Site Laser Gun</title>

  <link rel="stylesheet" href="style.css">
</head>

<body background="img/fond2.jpg">>
  <?php include("include/body2.php") ?>
</body>

    <section class="containerA">
      <div class="itemA">
        <h2 class="title3">LES DIFFÉRENTES ARMES, MAPS ET ÉQUIPES</h2>

        <p>Au Laser Gun, vous aurez la possibilité de choisir parmis 3 armes différentes, qui ont chacune leur propore particularités. Vous aurez le choix entre une <strong style="color: #CF4612">mitraillette</strong>, un <strong style="color: #CF4612">fusil à pompe</strong> ou un <strong style="color: #CF4612">fusil d'assaut</strong>.</br>
        Aussi, lors de votre réservation, vous pourrez choirir<strong style="color: #CF4612"> la map</strong> dans laquelle vous allez vous battre. Donc choisissez bien votre arme pour être performant dans toutes les situations...</br>
        Et enfin, vous incarnerez une des <strong style="color: #CF4612">3 équipes</strong> du Laser Gun, chacune possèdant ses caractéristiques.

        </p>
      </div>

      <div class="containerA">
      <div class="itemA">
      <div class="mySlides fade">
        <img id="imgArme1" src="img/arme1.png">
          <div class="itemA">
          <h2>La Falcon</h2>
          Tout droit sortie du futur, la Falcon est l'arme la plus basique. Offrant une bonne cadence de tir, elle peut soutenir l'avancée des alliés sur le terrain.</br>Petite mais efficace, sa prise en main est très facile, et sa maniabilité est sans égale.<br/>
          <strong>Idéale pour les combats en moyenne portée (ruelle).</strong>
          </div>
      </div>

      <div class="mySlides fade">
        <img id="imgArme2" src="img/arme2.png">
          <div class="itemA">
          <h2>Le Peacekeeper</h2>
          Designé spécialement pour semer la terreur, le Peacekeeper est un fusil à pompe lourd conçu pour des combats rapprochés.</br> Avec son tir de dispersion, il est capable de toucher plusieurs cibles en un seul coup, au profit de sa cadence de tir.
          <strong>Idéal pour les combats en très courte portée (bâtiment).</strong>
          </div>
        </div>

        <div class="mySlides fade">
          <img id="imgArme3" src="img/arme3.png">
          <div class="itemA">
          <h2>La Commando</h2>
          Créée pour les forces d'intervention Rainbow, la Commando est dotée d'un lance-grenade laser, capable de toucher les cibles qui ne sont pas à couvert.</br>Cependant elle n'est disponible qu'en tir unique, ce qui la rend vulnérable dans les bâtiments.<br/>
          <strong>Idéale pour les combats en longue portée (rue).</strong>
          </div>
        </div>

        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
    </div>
    </div>
</section>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
  function Launch() {
    $("#dialog").dialog();
             
  }
</script>

<section class="container5">
        <div class="item5">
          <br/>
          <img id="imgMap1" src="img/map1.png">
            <H2><a href=javascript:Launch()>Nuketown</a></H2>
            Battez-vous dans la plus grande map que Laser Gun peut vous proposer. Située dans le Nevada, cette grande ville a été conçue pour tester les bombes nucléaires.</br>
            Elle compte 2 grandes maisons et de nombreux véhicules, offrant une très bonne protection pour tenir une contre attaque.
            <strong>Grands axes, combats en moyenne et longue portée.</strong>
            <br/>
        </div>
        <div class="item5">       
          <img id="imgMap2" src="img/map2.png">
            <H2><a href=javascript:Launch()>USS Tigris</a></H2>
            Embarquez à bord du super destroyer de l'UNSA stationné en horbite autour de la Terre.</br>
            Situé dans un hangar à chasseur, les combats sont extrêmement rapporchés. De nombreuses caisses peuvent offrir de nombreuses ambuscades à l'ennemi.
            <strong>Un seul grand axe, combats en courte et moyenne portée.</strong>
        </div> 
     </section>
      <section class="container5">




<section class="containerE">
  <div class="itemE">
      <div class="mySlides2 fade2">
        <img id="imgEquipe1" src="img/rainbow.png">
        <div class="itemE">
        <h2>L'équipe Rainbow</h2>
        Team Rainbow (également connu sous le nom RAINBOW) est une unité d'élite antiterroriste internationale placée sous la supervision directe de l'OTAN.</br>L’unité a été créée pour lutter plus efficacement contre les actions terroristes dans le monde entier en rassemblant une équipe d’unités antiterroristes de pays du monde entier.<br/>
        <strong>FORTIOR COLLECTI UBIQUE FORTIOR</strong>
        </div>
      </div>

      <div class="mySlides2 fade2">
        <img id="imgEquipe2" src="img/apex.png">
          <div class="itemE">
          <h2>L'équipe Apex</h2>
          Regroupant tous les plus grands soldats du système solaire, la Team Apex a été créée pour défendre les valeurs les colonies.</br>Mais depuis la guerre, elle n'est composée que de mercenaires agissant dans leur propre intérêt. Ils sèment la terreur dans tout les mondes civilisés.
          <strong>SEMPER FIDELIS</strong>
          </div>
        </div>

        <div class="mySlides2 fade2">
          <img id="imgEquipe3" src="img/predator.png">
          <div class="itemE">
          <h2>L'équipe Prédator</h2>
          N'étant composé que de chasseur, la Team Prédator est très aggressive. N'opérant que dans les lieux forestier, il est très difficile de voir un Prédator.</br>Ils n'ont pas d'alliés, mais leur technologie est clairement suppérieure à celle des humains.</br>
          <strong>PREYA PROSPECT</strong>
          </div>
        </div>
  </div>
  </div>
</section>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  // On initialise i
  var i;

  // On initialise la variable "slides" en allant chercher tous les enfants ayant un nom de classe nommé "mySlides"
  var slides = document.getElementsByClassName("mySlides");

  // On initialise la variable "dots" en allant chercher tous les enfants ayant un nom de classe nommé "dot"
  var dots = document.getElementsByClassName("dot");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";    
  // ^^ Boucle sur les diapositives définissant l’affichage à zéro, en masquant toutes les diapositives
  }
  slideIndex++;                                                        
  if (slideIndex > slides.length) {slideIndex = 1}
  // ^^ Si l'index est supérieur à la longueur, on règle l'index sur ne nombre total de diapositive

  for (i = 0; i < dots.length; i++) {                                  
    dots[i].className = dots[i].className.replace(" active", "");  
  // ^^ Tant que la longueur max de la diapositive n'est pas atteinte, le style des points est actif, puis incrémentation     
  }
  slides[slideIndex-1].style.display = "block";   
  // ^^ Afficher la diapositive à l’index actuel de la diapositive, en soustraire l’index de 1    

  dots[slideIndex-1].className += " active";
  // ^^ Style actif des points en dessous des images

  setTimeout(showSlides, 3000); 
  // ^^ Défilement autimatique : toute les 3s                                       
}
</script>
    
</main>
<?php include("include/footer.php") ?>
<div id="dialog" style="display:none">Your non-modal dialog</div>
</body>
</html>