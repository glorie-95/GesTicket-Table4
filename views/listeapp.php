<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href=../public/css/listeapp.css>
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
                            <li class="nav-item dropdown ">
                                  <a class="nav-link dropdown-toggle white" href="#" 
                                  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Apprenant
                                  </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Nouveau</a>
                                <a class="dropdown-item" href="#">Liste</a>
                                </div>
                            </li>
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle white" href="#" 
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                User
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Nouveau</a>
                                <a class="dropdown-item" href="#">Liste</a>
                                </div>
                            </li>

                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle white" href="#" 
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Session
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Nouveau</a>
                                <a class="dropdown-item" href="#">Liste</a>
                                </div>
                            </li>
                        
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle white" href="#" 
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Référentiel
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Nouveau</a>
                                <a class="dropdown-item" href="#">Liste</a>
                                </div>
                            </li>

                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle white" href="#" 
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Affectation
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Nouveau</a>
                                <a class="dropdown-item" href="#">Liste</a>
                                </div>
                            </li>
                      </div>      
                  </nav>
                </div>
          </div>
          <div class="row">
            <div class="col"></div>
              <div class="col-6">
                <h3 class="text-center">LISTE DES APPRENANTS</h3>
                <button class="btn btn-primary float-right mb-4" type='print'>Imprimer</button>
                <table class="table table-bordered ">
                    <thead style="border-collapse: separate">
                      <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Référentiel</th>
                        <th scope="col">Session</th>
                        <th scope="col">Etat</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>BA</td>
                        <td>Ismaila</td>
                        <td>Référent digital</td>
                        <td>Promo 2</td>
                        <td>Présent</td>
                      </tr>
                      <tr>
                        <td>BA</td>
                        <td>Ismaila</td>
                        <td>Référent digital</td>
                        <td>Promo 2</td>
                        <td>Présent</td>
                      </tr>
                      <tr>
                        <td>BA</td>
                        <td>Ismaila</td>
                        <td>Référent digital</td>
                        <td>Promo 2</td>
                        <td>Présent</td>
                      </tr>
                    </tbody>
                  </table>
                  
              </div>
              <div class="col">

              <form action="">
                <h4 class="mt-8">Filtrer par:</h4>
                <div class="form-group mt-1">
                  <label class = "d-inline-block mr-2"for="Referentiel">Référentiel</label>
                    <select class="form-control w-50 d-inline-block" name="" id="">
                      <option value=""> </option> 
                      <option value="">Référent digital</option>
                      <option value="">Développement web</option> 
                      <option value="">Data Artisan</option> 
                    </select><br>
                  <label class = "d-inline-block mr-4 mt-3 ml-1"for="Session">Session</label>
                    <select class="form-control w-50 d-inline-block" name="" id="">
                      <option value=""> </option> 
                      <option value="">Promo 1</option>
                      <option value="">Promo 2</option> 
                      <option value="">Promo 3</option> 
                    </select><br>
                  <label class = "d-inline-block mr-5 mt-3 ml-2"for="Etat">État</label>
                  <select class="form-control w-50 d-inline-block" name="" id="">
                    <option value=""> </option> 
                    <option value="">Présent</option>
                    <option value="">Abandon</option> 
                  </select><br>
                  <button class="btn btn-primary float-right my-3 mx-5" type='submit'>Trouver</button> 
                </div>
              </form>
              </div>
            </div>
          </div>
            
<!--------------------------------------------- FORMULAIRE ---------------------------------------------->
          


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 



</body>








</html>