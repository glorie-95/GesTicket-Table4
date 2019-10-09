<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTicketSA</title>
    <link rel="stylesheet" type="text/css" href=../public/css/affecter.css>
</head>

<body>
    <div class="div1">  
        <img class="img-logo" src="../public/img/100x116.png" alt=""> 
        <div>
            <FORM action ="../controlleurs/affecter.php" method="post">
                <P>
                    <LABEL class="label" for="session">Session </LABEL> 
                      <select class="select" name="session">
                      <option value=""> </option> 
                      <option value="1">champ 1</option> 
                      <option value="2">champ 2</option> 
                      <option value="3">champ 3</option> 
                      </select><BR><BR>

                    <LABEL class="label" for="referentiel">Référentiel</LABEL>
                    
                        <select class="select" name="referentiel">
                        <option value=""> </option> 
                        <option value="1">champ 1</option> 
                        <option value="2">champ 2</option> 
                        <option value="3">champ 3</option> 
                        </select><BR><BR>

                    <LABEL class="label" for="effectif">Effectif</LABEL>
                    <INPUT type="integer" name="effectif"><BR><BR>
                    <button class="btn1" type='reset'>Annuler</button>
                    <button class="btn2" type='submit'>Créer</button>
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

