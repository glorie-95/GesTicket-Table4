<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTicketSA</title>
    <link rel="stylesheet" type="text/css" href=../public/css/creersession.css>
</head>

<body>
    <div style="border: 6px solid darkcyan;height: 600px;width: 1000px;margin-left: 200px;
    margin-top: 80px; background-image:url('../public/img/bj1.jpg');background-repeat: no-repeat;background-size: auto 100%;">  
        <img class="img-logo" src="../public/img/100x116.png" alt="" style="margin-top: 30px;margin-left: 30px;"> 
        <h1 style="position:absolute; margin-left:300px;margin-top:100px;">CRÉER UNE SESSION</h1>
        <select name="Sessions" id=""style="position: absolute;
        margin-top: 30px;
        margin-left: 430px;
        background-color: #EB7D06; ">
            <option value="">+Session</option>
            <option value="">Liste des Sessions</option>
        </select>
         <select name="Sessions" id="" style="margin-left: 1200px;
         position: absolute;
         margin-top: 30px;
         margin-left: 630px;
         background-color: #40B573;" >
             <option value="">+Utilisateur</option>
             <option value="">Liste des Utilisateurs</option>
         </select>
        <div>
            <FORM action ="../controlleurs/creersession.php" method="post">
                <P>
                    <LABEL for="text">Nom </LABEL>
                    <input type="text" name="nom" style="margin-left:80px;"><BR><BR>
                    <LABEL for="nom">Année </LABEL>
                    <INPUT type="varchar" name="annee" style="margin-left:67px;"><BR><BR>
                    <LABEL for="date">Date début </LABEL>
                    <INPUT type="date" name="datedebut" style="margin-left:30px;"><BR><BR>
                    <LABEL for="date">Date fin </LABEL>
                    <INPUT type="date" name="datefin"style="margin-left:56px;"><BR><BR>
                    <LABEL for="integer">Effectif total </LABEL>
                    <INPUT type="text" name="effectif"style="margin-left:22px;margin-top:-2px;"><BR><BR>
                    <button type="reset" style="background-color: coral; height: 40px; width: 140px;margin-left: 70px;
                    margin-top: 50px;"><a href="creersession.php">Annuler</button>
                    <button type="submit" style="background-color:#40B573; height: 40px; width: 140px;margin-left: 50px;">Créer</button>
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

