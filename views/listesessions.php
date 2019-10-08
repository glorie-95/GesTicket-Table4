<!DOCTYPE html>
<html lang="fr">
<head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTicketSA</title>
    <link rel="stylesheet" type="text/css" href=../public/css/listesessions.css/>
</head>
<body>  
    <div style="border: 6px solid darkcyan;height: 600px;width: 1000px;margin-left: 200px;
    margin-top: 80px; background-image:url('../public/img/bj1.jpg');background-repeat: no-repeat;background-size: auto 100%;">  
        <h1 style="position:absolute; margin-left:300px;margin-top:100px;">LISTE DES SESSIONS</h1>
        <img class="img-logo" src="../public/img/100x116.png" alt="" style="margin-top: 30px;margin-left: 30px;">   
        <select name="Sessions" id=""style="position: absolute;
        margin-top: 30px;
        margin-left: 300px;
        background-color: #EB7D06; " >
            <option value>+Session</option>
            <option value=>Liste des Sessions</option>
        </select>
         <select name="Sessions" id="" style="margin-left: 1200px;
         position: absolute;
         margin-top: 30px;
         margin-left: 500px;
         background-color: #40B573;" >
             <option value>+Utilisateur</option>
             <option value>Liste des Utilisateurs</option>
         </select>
        <div style="margin-left: 500px;">
           

            <div>
            <?php
            include_once('../controlleurs/db_connect.php');
           $query = $pdo->query("SELECT * FROM `session` ");
           $session= $query->fetchAll();
          // var_dump($users) ;
         ?>
                <table style=border:1px;border-collapse;collapse;position:absolute;margin-top:50px;margin-left:-250px;>
                    <thead>
                        <tr>
                            <th style="border: 1px solid #000; padding:20px;">Nom</th>
                            <th style="border: 1px solid #000; padding:20px;">Annee</th>
                            <th style="border: 1px solid #000; padding:20px;">Date debut</th>
                            <th style="border: 1px solid #000; padding:20px;">Date fin</th>
                            <th style="border: 1px solid #000; padding:20px;">Effectif total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach ($session as $key => $session) {  
                    ?>
                        <tr>
                       <td style="border: 1px solid #000; padding:20px;"><?php echo $session['Nom'];?></td>
                       <td style="border: 1px solid #000; padding:20px;"><?php echo $session['Annee'];?></td>
                       <td style="border: 1px solid #000; padding:20px;"><?php echo $session['Datedebut'];?></td>
                       <td style="border: 1px solid #000; padding:20px;"><?php echo $session['Datefin'];?></td>
                       <td style="border: 1px solid #000; padding:20px;"><?php echo $session['Effectif'];?></td>

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
