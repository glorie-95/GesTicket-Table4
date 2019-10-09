<?php
      $id=$_GET['id'];
      $Nom=$_GET['Nom'];
      $Annee=$_GET['Anneecreation'];
                        
      $nomR = $_POST['nom'];
      $AnneeR =$_POST['Annee'];
    if(isset($_POST['ok'])){
      include_once('../controlleurs/db_connect.php');
      $sql="UPDATE referentiel SET Nom='$nomR',Anneecreation='$AnneeR' WHERE id=$id";
      $result=$pdo->query($sql)or die("no connexion");
    header("Location: listeReferents.php");

  }
                         
 ?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../public/css/us2.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier ReferentsS</title>
</head>
<body>
    
    <div class="app-container">
  
        <!--nav class="nav">
          <a href="#" class="salogo">
           <img src="../Public/img/logo.png">

           
           
          </a>
          <h3 class="titre">
            Modifier Referent
        </h3>
          <ul class="nav__list">
            <li class="nav__list-item">
    
              <a href="#" class="nav__item-link"><img src="../Public/img/calender.png" >Session</a>
            </li>
            <li class="nav__list-item">
              <a href="#" class="nav__item-link"><img src="../Public/img/user.png" >Utilisateur</a>
            </li>
            <li class="nav__list-item">
              <a href="#" class="nav__item-link"><img src="../Public/img/ref.png" >Référentiel</a>
            </li>
          
          </ul>
        </nav-->
        
        <div class="app-view">
          
          <nav class="utility-bar">
            <div class="utility-bar__inner">
              <a href="#" class="utility-bar__account">
                  
                <span class="utility-bar__account-avatar"></span>
                <span class="utility-bar__account-name">Admin</span>
              </a>

              <a href="#" class="thumb">
               Ajouter
              </a>

              <a href="#" class="thumb">
                  Nos Référentiels
              </a>

                  
               
            

            </div>
          </nav>
          
          <main class="content">
            <h2>Modifier  ce Référentiel</h2>
            <div class="ref">
              <legend></legend>
    <div class="champ">
      
    
            <form action="" method="POST">
            <input type="hidden" name="id" value="<?php  echo $id;?>">
            <input type="text" placeholder="" name="nom" value="<?php echo htmlspecialchars($Nom);?>" />
            <input type="text" placeholder="" name="Annee" value="<?php echo htmlspecialchars($Annee);?>" />

          <input type="reset" value="Annuler" id="annuler">
          <input class="buttom" type="submit" name="ok" value="Valider">
          </form>
      </div>
            
          </main>
          
        </div>
        
      </div>


</body>
</html>