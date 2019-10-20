<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>

      <div class="container border border-primary w-100 h-100 mt-3">


    
<!----------------------------------------------- ENTETE ---------------------------------------------------->
          <div class="row">
             <div class="col-3">
                <img src="../public/img/100x116.png" class="img-fluid " alt="">
             </div>
             <div class="col-9">

             <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle white" href="#" 
                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Apprenant
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Nouveau</a>
                <a class="dropdown-item" href="#">Liste</a>


                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle white" href="#" 
                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                User
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Nouveau</a>
                <a class="dropdown-item" href="#">Liste</a>


                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle white" href="#" 
                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Session
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Nouveau</a>
                <a class="dropdown-item" href="#">Liste</a>
         
         
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle white" href="#" 
                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Référentiel
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Nouveau</a>
                <a class="dropdown-item" href="#">Liste</a>


                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle white" href="#" 
                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Affectation
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Nouveau</a>
                <a class="dropdown-item" href="#">Liste</a>


            </form>
        </div>      
</nav>
             </div>

          </div>

<!--------------------------------------------- FORMULAIRE ---------------------------------------------->
          <div class="row">

          <div class="col-3"></div>
          <div class="col">

          <form>
                   
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control  border-primary" id="inputPassword" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Prénom</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control  border-primary" id="inputPassword" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Date naissance</label>
                        <div class="col-sm-10">
                        <input type="date" class="form-control  border-primary" id="inputPassword" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Lieu naissance</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control  border-primary" id="inputPassword" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Adresse</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control  border-primary" id="inputPassword" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Téléphone</label>
                        <div class="col-sm-10">
                        <input type="tel" class="form-control  border-primary" id="inputPassword" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Référentiel</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control  border-primary" id="inputPassword">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Login</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control  border-primary" id="inputPassword" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Mot de passe</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control  border-primary" id="inputPassword" >
                        </div>
                    </div>
          </form>

          <input class="btn btn-primary" type="reset" value="Reset">
          <input class="btn btn-primary" type="submit" value="Submit">

          </div>
          <div class="col-2"></div>
          </div>
      </div>


       
      
<style  type="text/css">

.img-fluid {
    max-width: 50%;
    height: auto;
}
.border-primary {
    border-color: darkcyan!important;;
}
.bg-primary {
    background-color: darkcyan!important;
}

#navbarDropdown{
    color: white;
}

.btn btn-primary{
    background-color: coral!important;
}
</style>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 



</body>








</html>