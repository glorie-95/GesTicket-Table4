<!DOCTYPE html>
<html lang="fr">
<head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTicketSA</title>
    <link rel="stylesheet" type="text/css" href=../public/css/listemenu.css/>
    <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
</head>
<body> 
<?php include_once('./include/menu.php') ?>
    <div style="border: 6px solid darkcyan;height: 600px;width: 1000px;margin-left: 200px;
    margin-top: 80px; background-image:url('../public/img/bj1.jpg');background-repeat: no-repeat;background-size: auto 100%;">  
        <h1 style="position:absolute; margin-left:300px;margin-top:100px;">CHOISIR MENUS</h1>
        <img class="img-logo" src="../public/img/100x116.png" alt="" style="margin-top: 30px;margin-left: 30px;">   
        
       
        <div style="margin-left: 500px;">        
            <div class="col">
              <form action="">
                <div class="form-group mt-1">
                  <label class = "d-inline-block mr-2"for="Referentiel">Jour</label>
                  <input type="date"><br><br>
                  <label class = "d-inline-block mr-4 mt-3 ml-1"for="Session">Plat</label>
                    <select class="form-control w-50 d-inline-block" name="" id="">
                      <option value=""> </option> 
                      <option value="">Tchiep</option>
                      <option value="">Couscous</option> 
                      <option value="">Frites</option> 
                    </select><br><br>
                  <button class="btn btn-primary float-right my-3 mx-5" type='submit'>Choisir</button>
                </div>
              </form>
              </div>
        </div>
    </div>
</body>
</html>
