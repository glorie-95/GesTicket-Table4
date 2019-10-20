<!DOCTYPE html>
<html lang="fr">
<head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTicketSA</title>
    <link rel="stylesheet" type="text/css" href=../public/css/listeutilisateurs.css/>
    <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
</head>
<body>
<?php include_once('./include/menu.php') ?> 
    <div style="border: 6px solid darkcyan;height: 600px;width: 1000px;margin-left: 200px;
    margin-top: 80px; background-image:url('../public/img/bj1.jpg');background-repeat: no-repeat;background-size: auto 100%;">  
        <h1 style="position:absolute; margin-left:230px;margin-top:100px;">LISTE DES UTILISATEURS</h1>
        <img class="img-logo" src="../public/img/100x116.png" alt="" style="margin-top: 30px;margin-left: 30px;"> 
      
           
    <div style="margin-left: 500px;">
           

    <div>
    
    <?php
     include_once('../controlleurs/db_connect.php');
           $query = $pdo->query("SELECT * FROM `user` ");
           $user= $query->fetchAll();
          // var_dump($users) ;
         ?>
        <table style=border:1px;border-collapse;collapse;position:absolute;margin-top:50px;margin-left:-250px;>
                <thead>
                <tr>
                     <th style="border: 1px solid #000; padding:20px;">Nom</th>
                     <th style="border: 1px solid #000; padding:20px;">Prenom</th>
                     <th style="border: 1px solid #000; padding:20px;">Login</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($user as $key => $user) {
                   
                ?>
                    <tr>
                       <td style="border: 1px solid #000; padding:20px;"><?php echo $user['Nom'];?></td>
                       <td style="border: 1px solid #000; padding:20px;"><?php echo $user['Prenoms'];?></td>
                       <td style="border: 1px solid #000; padding:20px;"><?php echo $user['Login'];?></td>
                    </tr>
                <?php
                     
                    }
                 ?>
                </tbody>
        </table>
    </div>
    </div>
</div>
</body>
</html>