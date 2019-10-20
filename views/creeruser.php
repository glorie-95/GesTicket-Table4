<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTicketSA</title>
    <link rel="stylesheet" type="text/css" href=../public/css/creeruser.css/>
    <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
</head>
<body>
<?php include_once('./include/menu.php') ?>
    <div class="div1">  
        <img class="img-logo" src="../public/img/100x116.png" alt=""> 
        <h1>CRÉER UN UTILISATEUR</h1>
        <div>
            <FORM action ="../controlleurs/creeruser.php" method="post">
                <P>
                    <LABEL for="">Nom </LABEL>
                    <input type="text" name="nom" class="input1"><BR><BR>
                    <LABEL for="">Prénoms </LABEL>
                    <INPUT type="text" name="prenom" class="input2"><BR><BR>
                    <LABEL for="">Profil </LABEL>
                    <select name="profil" class="select1">
                      <option value=""> </option>
                      <option value="admin">Admin</option>
                      <option value="simpleuser">Utilisateur simple</option>
                    </select><BR><BR>
                    <LABEL for="">Login </LABEL>
                    <INPUT type="text" name="login"class="input3"><BR><BR>
                    <LABEL for="">Mot de passe </LABEL>
                    <INPUT type="password" name="motdepasse"class="input4"><BR><BR>
                    <label for="">Confirmer mot de passe</label> 
                    <input type="password" name="confirmer" value="" class="input5"><BR><BR> 
                    <button type='reset' class="btn1">Annuler</button>
                    <button type='submit' class="btn2">Créer</button>
                </P>
                <?php
                if(isset($_GET['erreur'])){
                echo $_GET['erreur'];}
                ?>
            </FORM>
        </div>
    </div>  
</body>
</html>
