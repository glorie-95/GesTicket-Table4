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
        <h1 style="position:absolute; margin-left:300px;margin-top:100px;">LISTE DES MENUS</h1>
        <img class="img-logo" src="../public/img/100x116.png" alt="" style="margin-top: 30px;margin-left: 30px;">   
        
       
        <div style="margin-left: 500px;">
           

            <div>

                <table style=border:1px;border-collapse;collapse;position:absolute;margin-top:50px;margin-left:-250px;>
                    <thead>
                        <tr>
                            <th style="border: 1px solid #000; padding:20px;">Semaine</th>
                            <th style="border: 1px solid #000; padding:20px;">Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                       <td style="border: 1px solid #000; padding:20px;"></td>
                       <td style="border: 1px solid #000; padding:20px;"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col">
              <form action="">
                <h4 class="mt-8">Filtrer par:</h4>
                <div class="form-group mt-1">
                  <label class = "d-inline-block mr-2"for="Referentiel">Menu</label>
                    <select class="form-control w-50 d-inline-block" name="" id="">
                      <option value=""> </option> 
                      <option value="">Tchiep</option>
                      <option value="">Couscous</option> 
                      <option value="">Frites</option> 
                    </select><br>
                  <label class = "d-inline-block mr-4 mt-3 ml-1"for="Session">Semaine</label>
                    <select class="form-control w-50 d-inline-block" name="" id="">
                      <option value=""> </option> 
                      <option value="">S1</option>
                      <option value="">S2</option> 
                      <option value="">S3</option> 
                    </select><br>
                  <button class="btn btn-primary float-right my-3 mx-5" type='submit'>Trouver</button> 
                </div>
              </form>
              </div>
        </div>
    </div>
</body>
</html>
