<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_REQUEST["action"])) {
        if ($_REQUEST["action"]=="connexion") {
            echo "traiter le formulaire de conexion";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"]=="GET") {
    if (isset($_REQUEST["action"])) {
        if(is_connect() == null) { 
            header("location:".WEB_ROOT);
            exit();
        }
        if ($_REQUEST["action"]=="accueil") {    
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
        }
        if($_REQUEST["action"]=='liste.question'){
            listequestion();
        }
        if($_REQUEST["action"]=='creer.admin'){
            creeradmin();
        }
        if($_REQUEST["action"]=='liste.Joueur'){
            listeJoueur();
        }
        if($_REQUEST["action"]=='creer.Question'){
            creeQuestion();
        }
    }  
}

function   listequestion(){
      ob_start();
      require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."liste.question.html.php");
      $affiche=ob_get_clean();
      require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."accueil.html.php");

}

function creeradmin(){
    ob_start();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."creation.adm.html.php");
    $affiche=ob_get_clean();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."accueil.html.php");

}

/* function  listeJoueur(){
    ob_start();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."liste.joueur.html.php");
    $affiche=ob_get_clean();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."accueil.html.php");

} */
function  listeJoueur(){
    ob_start();
    $joueurs = afficheRole('Role_JOUEUR');
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."liste.joueur.html.php");
    $affiche=ob_get_clean();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."accueil.html.php");
}

function  creeQuestion (){
    ob_start();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."creation.question.html.php");
    $affiche=ob_get_clean();
    require_once(PATH_VIEWS.'user'.DIRECTORY_SEPARATOR."accueil.html.php");

}