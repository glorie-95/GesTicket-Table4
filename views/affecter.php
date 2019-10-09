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

<?php
include_once('../controlleurs/db_connect.php');
$query = $pdo->query("SELECT * FROM session");
$sessions= $query->fetchAll(); 
$query = $pdo->query("SELECT * FROM referentiel");
$referentiels= $query->fetchAll();       
?>
    <div class="div1">  
        <img class="img-logo" src="../public/img/100x116.png" alt=""> 
        <div>
            <FORM action ="../controlleurs/affecter.php" method="post">
                <P>
                    <LABEL class="label" for="session">Session </LABEL> 
                      <select class="select" name="session">
                        <option value=""> </option> 
                        <?php 
                    foreach ($sessions as $key => $session) {  
                    ?>
                       <option value="<?php echo $session['id'];?>"><?php echo $session['Nom'];?></option> 
                    <?php
                     
                        }
                    ?>
                      </select><BR><BR>
                    <LABEL class="label" for="referentiel">Référentiel</LABEL>
                        <select class="select" name="referentiel">
                        <option value=""> </option> 
                        <?php 
                    foreach ($referentiels as $key => $referentiel) {  
                    ?>
                       <option value="<?php echo $referentiel['id'];?>"><?php echo $referentiel['Nom'];?></option> 
                    <?php
                     
                        }
                    ?>
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

