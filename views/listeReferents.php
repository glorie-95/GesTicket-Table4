<!DOCTYPE html>
<html lang="fr">
<head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../public/css/listeReferents.css">
    <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body> 
<?php include_once('./include/menu.php') ?>
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
         // var_dump($referentiels) ;
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
            <button> <a href="modifRef.php?id=<?php echo $referentiel['id'];?>&Nom=<?php echo $referentiel['Nom'];?>&Anneecreation=<?php echo $referentiel['Anneecreation'];?>"><i class="fa fa-edit"></i> </a></button>
            <button> <a href="supprimeRef.php?id=<?php echo $referentiel['id'];?>"><i class="fa fa-trash-o"></i> </a></button>
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

