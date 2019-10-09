<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTicketSA</title>
    <link rel="stylesheet" type="text/css" href=../public/css/creerref.css>
</head>

<body>
    <div style="border: 6px solid darkcyan;height: 600px;width: 1000px;margin-left: 200px;
    margin-top: 80px; background-image:url('../public/img/bj1.jpg');background-repeat: no-repeat;background-size: auto 100%;">  
        <img class="img-logo" src="../public/img/100x116.png" alt="" style="margin-top: 30px;margin-left: 30px;"> 
        <h1 style="position:absolute; margin-left:300px;margin-top:100px;">AJOUTER UN REFERENTIEL</h1>
        <div>
            <FORM action ="../controlleurs/creerref.php" method="post">
                <P>
                    <LABEL for="text">Nom </LABEL>
                    <input type="text" name="nom" style="margin-left:80px;"><BR><BR>
                    <LABEL for="date">Année de création</LABEL>
                    <INPUT type="date" name="datecreation" style="margin-left:30px;"><BR><BR>
                    <button type="reset" style="background-color: coral; height: 40px; width: 140px;margin-left: 70px;
                    margin-top: 50px;"><a href="creerref.php">Annuler</button>
                    <button type="submit" style="background-color:#40B573; height: 40px; width: 140px;margin-left: 50px;">Ajouter</button>
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

