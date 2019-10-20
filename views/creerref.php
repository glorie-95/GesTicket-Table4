<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTicketSA</title>
    <link rel="stylesheet" type="text/css" href=../public/css/creerref.css>
    <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
</head>

<body>
<?php include_once('./include/menu.php') ?>
    <div class="div1">  
        <img class="img-logo" src="../public/img/100x116.png" alt=""> 
        <h1>AJOUTER UN REFERENTIEL</h1>
        <div>
            <FORM action ="../controlleurs/creerref.php" method="post">
                <P>
                    <LABEL for="text">Nom </LABEL>
                    <input type="text" name="nom" class="input1"><BR><BR>
                    <LABEL for="date">Année de création</LABEL>
                    <INPUT type="date" name="datecreation" class="input2"><BR><BR>
                    <button type="reset" class="btn1"><a href="creerref.php">Annuler</button>
                    <button type="submit" class="btn2">Ajouter</button>
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

