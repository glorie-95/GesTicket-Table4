<!DOCTYPE html>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTicketSA</title>
    <link rel="stylesheet" type="text/css" href=/var/www/html/GesticketSA-table4/public/css/login.css/>  
    <head>
    </head>


<body>

 <div style="border: 6px solid darkcyan;
 height: 600px;
 width: 1000px;
 margin-left: 200px;
 margin-top: 80px; background-image:url('../public/img/bj1.jpg');background-repeat: no-repeat;background-size: auto 100%;">
    <h1 style="text-align: center;margin-left: 10px; ">BIENVENUE</h1>
    <img class="img-logo" src="../public/img/100x116.png" alt="" style="margin-top: 0px;margin-left: 30px;"> 
<h2 style="text-align: center;padding-left: 40px;">S'identifier</h2>
    <div class="login-box" style="margin-left: -200px;">
        
        <form action="../controlleurs/login.php" method="post" class="login-box"  style="margin-left: 600px  margin-top:200px";>
            <div class="textbox" style="margin-left: 600px";>  
                <input type="text" placeholder="E-mail" name="Login" value="" >  
            </div>
            <div class="textbox" style="margin-top: 50px;
                                        margin-left: 600px;"> 
                <input type="password" placeholder="Mot de passe" name="password" value="" > 
            </div>
            
            <input type="submit" style="background-color: coral; height: 40px; width: 140px;margin-left: 650px;
            margin-top: 50px;">
<?php
if(isset($_GET['erreur'])){
    echo $_GET['erreur'];        
}
?>


            </form>
    </div> 
</div> 
</body>

</html>