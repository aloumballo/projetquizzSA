<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>

<div class="entete">
  <h1>Creer et Parametrer vos Quizz</h1>
  <button><a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>">Deconnexion</a></button>
</div>

<div id="conteneur"> 
  <div class="gauche">
    <div class="tof">
      <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."téléchargement.jpg" ?>" alt="" height="19%">
    </div>
    <div class="liste">
      <div class="lisquestion"> <a href="<?=WEB_ROOT."?controller=user&action=liste.question"?>"> Liste question</a>  <div> <a href="<?=WEB_ROOT."?controller=user&action=liste.question"?>"><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste-active.png" ?>" alt="" height="69%" > </a></div> </div>
      <div class="creer"> <a href="<?=WEB_ROOT."?controller=user&action=creer.admin"?>"> Creer admin</a>  <div> <a href="<?=WEB_ROOT."?controller=user&action=creer.admin"?>"> <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png" ?>" alt="" height="69%"></a> </div>  </div>
      <div class="lisJoueur"> <a href="<?=WEB_ROOT."?controller=user&action=liste.Joueur"?>"> Liste joueurs</a> <div> <a href="<?=WEB_ROOT."?controller=user&action=liste.Joueur"?>"> <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste.png" ?>" alt="" height="69%"></a></div> </div>
      <div class="creerQuest"> <a href="<?=WEB_ROOT."?controller=user&action=creer.Question"?>"> Creer Questions</a>  <div> <a href="<?=WEB_ROOT."?controller=user&action=creer.Question"?>"> <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png" ?>" alt="" height="69%"></a> </div> </div>
    </div>
  </div>
  <div class="droite">
    <?=$affiche?>
  </div>
</div>
<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>