<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
//var_dump($_POST); die();
if(!empty($_POST['session']) and !empty($_POST['referentiel']) and !empty($_POST['effectif'])) {
        //var_dump($referentiel); die();
        $session= $_POST['session'];
        $referentiel= $_POST['referentiel'];
        $effectif= $_POST['effectif'];
        //echo $session;
        //echo $referentiel;
        //echo $effectif;
    //3-Traitement => Connexion dans une BD
            include_once('db_connect.php');
            //var_dump("INSERT INTO `affecter` VALUES ($session,$referentiel,$effectif)"); die();
            // $sql="INSERT INTO `affecter` VALUES (?,?,?)";
            // $req=$pdo->prepare($sql);
            // $req->execute(array($session,$referentiel,$effectif));
            var_dump("INSERT INTO `affecter` VALUES ($session,$referentiel,$effectif)");die();
            $req = $pdo->exec("INSERT INTO `affecter` VALUES ($session,$referentiel,$effectif)");   
            
            header("Location: ../views/listeReferents.php");
        }
    else{
            header("Location: ../views/affecter.php?erreur=champs invalides");
        }
?>