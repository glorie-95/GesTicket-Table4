<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
 
if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['profil']) and !empty($_POST['login'])  and !empty($_POST['motdepasse']) and !empty($_POST['confirmer'])){
                if($_POST['motdepasse'] != $_POST['confirmer']){
                    header("Location: ../views/creeruser.php?erreur=mot de passe différent de confirmer");
                }
                else{
                    $nom= $_POST['nom'];
                    $prenom= $_POST['prenom'];
                    $profil=$_POST['profil'];
                    $login=$_POST['login'];
                    $password=$_POST['motdepasse'];
                //3-Traitement => Connexion dans une BD
                        include_once('./db_connect.php');
                        $req = $pdo->exec("INSERT INTO `user` (`id`, `Nom`, `Prenoms`, `Profil`, `Login`, `Motdepasse`) VALUES (NULL, '$nom', '$prenom', '$profil', '$login', '$password');");
                        header("Location: ../views/listeutilisateurs.php"); 
                    }
}else{
    header("Location: ../views/creeruser.php?erreur=champs obligatoires"); 
}

?>