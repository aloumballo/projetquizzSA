<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
    <table>
        <h1>Liste Des joueurs PAR SCORE</h1>
        <tr>
            <th>
               Nom
            </th>
            <th> Prenom</th>
         <th>Score </th>
         </tr>

         <?php
         foreach ($joueurs as $j) { ?>
             <tr>
                 <td><?= $j['Nom'] ?></td>
                 <td><?= $j['Prenom'] ?></td>
                 <td><?= $j['score'] ?></td>
             </tr>
            
        <?php }
         
         ?>
         <input type="submit" value="Suivant">
        
    </table>
<!-- </body>
</html> -->