<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données

if(!empty($_POST['nom']) and !empty($_POST['datecreation'])){
       
        $nom= $_POST['nom'];
        $annee= $_POST['datecreation'];
    //3-Traitement => Connexion dans une BD
            include_once('./db_connect.php');
            $req = $pdo->exec("INSERT INTO `referentiel` VALUES(NULL, '$nom','$annee',NULL)");
            header("Location: ../views/listeReferents.php");
    }
    else{
        header("Location: ../views/creerref.php?erreur=champs non valides");
        }
?>

