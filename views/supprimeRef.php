<?php
      $id=$_GET['id'];
      echo$id;
                include_once('../controlleurs/db_connect.php');
                     
// $sql = "DELETE FROM referentiel WHERE id=$id";
    $sql="DELETE FROM `referentiel` WHERE `referentiel`.`id` = $id";
    
    $a=$pdo->exec($sql);
    if ($a) {
      echo"Bravo";
    }
    else {
      echo"Pas bon";
    }

                        
 ?>

