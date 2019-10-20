<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTicketSA</title>
    <link rel="stylesheet" type="text/css" href=../public/css/creermenu.css>
    <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
</head>

<body>
<?php include_once('./include/menu.php') ?>
    <div class="div1">  
        <img class="img-logo" src="../public/img/100x116.png" alt=""> 
        <h1>CRÉER UN MENU</h1>
        <div>
            <FORM action ="../controlleurs/creermenu.php" method="post">
                <P>
                    <LABEL for="date">Jour</LABEL>
                    <INPUT type="date" name="datecreation" class="input1"><BR><BR>
                    <LABEL for="text">Nom du plat 1</LABEL>
                    <input type="text" name="nom" class="input2"><BR><BR>
                    <LABEL for="text">Nom du plat 2</LABEL>
                    <input type="text" name="nom" class="input3"><BR><BR>
                    <LABEL for="text">Nom du plat 3</LABEL>
                    <input type="text" name="nom" class="input4"><BR><BR>
                    <LABEL for="text">Nom du plat 4</LABEL>
                    <input type="text" name="nom" class="input5"><BR><BR>
                    <button type="reset" class="btn1"><a href="creermenu.php">Annuler</button>
                    <button type="submit" class="btn2">Créer</button>
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


