<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>
    <div class="entet"><h1>S'INSCRIRE</h1>
         <h5>Pour tester votre  niveau de culture general</h5>
         <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."téléchargement.jpg" ?>" alt=""class="img"> 
    </div>
    <table>
    <tr>
        <td>Prenom</td>
        <td><input type="text" placeholder="Aaaa" required></td>
    </tr>
    <tr>
        <td>Nom</td>
        <td><input type="text" placeholder="BBB" ></td>
    </tr>

    <tr>
        <td>Login</td>
        <td><input type="text" placeholder="aabbaa"></td>

    </tr>
    <tr>
       <td>Mot de passe</td>
       <td><input type="password"></td>

    </tr>
    <tr>
       <td>confirm password</td>
       <td><input type="password"></td>

    </tr>

    <tr>
         
          
            <td><input type="file"</td>
            <td><input type="submit" value="Créer compte">
    </tr>

    </table>
