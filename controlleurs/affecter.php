<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['nom']) and !empty($_POST['annee']) and !empty($_POST['datedebut']) and !empty($_POST['datefin']) and !empty($_POST['effectif'])){
    if($_POST['datedebut'] > $_POST['datefin']){
        header("Location: ../views/creersession.php?erreur=date invalide");
    }
    else{
        $nom= $_POST['nom'];
        $annee= $_POST['annee'];
    //3-Traitement => Connexion dans une BD
            include_once('./db_connect.php');
            $req = $pdo->exec("SELECT FROM `session`(`Nom`) VALUES(NULL, '$nom','$annee' '$datedebut' '$datefin' '$effectif')");
    }
}else{
    header("Location: ../views/creersession.php?erreur=champs non valides"); 
}


?>