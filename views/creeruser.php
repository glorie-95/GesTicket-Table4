<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTicketSA</title>
    <link rel="stylesheet" type="text/css" href=../public/css/creeruser.css/>
</head>
<body>
    <div style="border: 6px solid darkcyan;height: 600px;width: 1000px;margin-left: 200px;
    margin-top: 80px; background-image:url('../public/img/bj1.jpg');background-repeat: no-repeat;background-size: auto 100%;">  
        <img class="img-logo" src="../public/img/100x116.png" alt="" style="margin-top: 30px;margin-left: 30px;"> 
        <h1 style="position:absolute; margin-left:300px;margin-top:-50px;">CRÉER UN UTILISATEUR</h1>
        <select name="Sessions" id=""style="position: absolute;
        margin-top: 30px;
        margin-left: 300px;
        background-color: #EB7D06; " >
            <option value="">+Session</option>
            <option value="">Liste des Sessions</option>
        </select>
         <select name="Sessions" id="" style="margin-left: 1200px;
         position: absolute;
         margin-top: 30px;
         margin-left: 500px;
         background-color: #40B573;" >
             <option value="">+Utilisateur</option>
             <option value="">Liste des Utilisateurs</option>
         </select>
        <div>
            <FORM action ="../controlleurs/creeruser.php" method="post" style="margin-left:250px;">
                <P>
                    <LABEL for="">Nom </LABEL>
                    <input type="text" name="nom" style="margin-left:165px;"><BR><BR>
                    <LABEL for="">Prénoms </LABEL>
                    <INPUT type="text" name="prenom" style="margin-left:133px;"><BR><BR>
                    <LABEL for="">Profil </LABEL>
                    <select name="profil" style="margin-left:160px;">
                      <option value=""> </option>
                      <option value="admin">Admin</option>
                      <option value="simpleuser">Utilisateur simple</option>
                    </select><BR><BR>
                    <LABEL for="">Login </LABEL>
                    <INPUT type="text" name="login"style="margin-left:159px;"><BR><BR>
                    <LABEL for="">Mot de passe </LABEL>
                    <INPUT type="password" name="motdepasse"style="margin-left:100px;margin-top:-2px;"><BR><BR>
                    <label for="">Confirmer mot de passe</label> 
                    <input type="password" name="confirmer" value="" style="margin-left:14px;margin-top:-2px;"><BR><BR> 
                    <button type='reset' style="background-color: coral; height: 40px; width: 140px;margin-left: 180px;
                    margin-top: 50px;">Annuler</button>
                    <button type='submit' style="background-color:#40B573; height: 40px; width: 140px;margin-left: 50px;">Créer</button>
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
