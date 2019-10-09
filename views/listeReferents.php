<!DOCTYPE html>
<html lang="fr">
<head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../public/css/us2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<body> 
       <div class="bloc">

          <title>liste Des Referentiels</title>
       
    <div class="contenu">
           
<img class="img-logo" src="../public/img/100x116.png" alt="" > 
<br>
<br>
<br>
      <h1>Liste des Referentiels</h1>
<div class="colonne">
<?php
           include_once('../controlleurs/db_connect.php');
          $query = $pdo->query("SELECT * FROM referentiel ");
          $referentiels= $query->fetchAll();
         // var_dump($users) ;
        ?>
<table>
    <thead>
<tr>
<th>NOM</th>
<th>ANNEE DE CREATION</th>
<th>ACTION</th>
</tr>
</thead>
<tbody>
<?php 
foreach ($referentiels as $key => $referentiel) {  
 ?>
  <tr>
        <th><?php echo $referentiel['Nom'];?></th>
        <th><?php echo $referentiel['Anneecreation'];?></th>
        <th>
            <button> <i class="fa fa-edit"></i></button>
            <button> <i class="fa fa-trash-o"></i></button>
        </th> 
    </tr>
  <?php
    }?>        
</tbody>
</div>
</div>
</table>
</div>
</body>

