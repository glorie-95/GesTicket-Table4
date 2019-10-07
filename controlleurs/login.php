<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['Login']) and !empty($_POST['password'])  ){
    $login= $_POST['Login'];
    $password=$_POST['password'];
   //3-Traitement => Connexion dans une BD
         include_once('./db_connect.php');
         $query = $pdo->query("SELECT * FROM `user` WHERE Login ='$login' and Motdepasse='$password'");
         //d) Recuperer resultat
         $resultat = $query->fetch();
         if(isset($resultat['id'])){
            header("Location: ../views/listesessions.php");  
         }else{
            header("Location: ../views/login.php?erreur=Login ou Mot de passe Incorrect"); //Login ou Mot de passe Incorrect
         }
}else{
    header("Location: ../views/login.php?erreur=Login ou Mot de passe Obligatoire");  //Login ou Mot de passe Obligatoire
}


?>