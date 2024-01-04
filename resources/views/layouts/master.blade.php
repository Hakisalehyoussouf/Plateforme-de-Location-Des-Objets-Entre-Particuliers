<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>-->

    <style>
      body {
        background-color:#F7F5F2;
      }
    </style>

    
  </head>

  <body class="bg-tertiary">

    <nav class="navbar navbar-expand-lg bg-secondary">
      <div class="container-md">

        <a class="navbar-brand" href="#">
          <img src="#" alt="#" width="30" height="24" class="d-inline-block align-text-top">
            CompanyName
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item me-3">
              <a class="nav-link active" aria-current="page" href="#">Services</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Aide</a>
            </li>
          </ul>

          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Connexion
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Connecter</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>

    </nav>


    

    <!--<div class="container-fluid bg-dark">-->
      
      <div class="container-md overflow-hidden text-center pt-3">
        <div class="card shadow">
          <div class="card-body">

            <form action="{{ route('/search') }}" method="post">
            @csrf
              <div class="row gx-5">
                <div class="col">
                  <!--<form action="{{ route('/searchByChoice') }}" method="post">-->
                     <!--@csrf-->
                    <div class="form-group">
                      <input class="form-control form-control-lg mb-3" type="text" name="query" placeholder="Recherche..." aria-label=".form-control-lg example">
                    </div>
                    <!--<button type="submit" class="btn btn-primary">Recherche</button>-->
                  <!--</form>-->
                </div>


                <div class="col">
                  <!--<form action="{{ route('/searchByCategorie') }}" method="post">-->
                    <!--@csrf-->
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="categorie">
                      <option selected>Choisir une catégorie</option>
                      <option value="Electronic">Electronic</option>
                      <option value="Hotel">Hotel</option>
                      <option value="Immobilier">Immobilier</option>
                    </select>
                  <!--<button type="submit" class="btn btn-primary">Recherche</button>-->
                  <!--</form>-->
                </div>
                
                <div class="col">  
                  <!--<form action="{{ route('/searchByCity') }}" method="post">-->
                     <!--@csrf-->
                    <div class="input-group">
                      <span class="input-group-text">
                        <i class="bi bi-geo-alt"></i>
                      </span>
                      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="city">
                        <option selected>Choisir une ville</option>
                        <option value="Tetouan">Tetouan</option>
                        <option value="Tanger">Tanger</option>
                        <option value="Rabat">Rabat</option>
                      </select>
                    </div>
                    <!--<button type="submit" class="btn btn-primary">Recherche</button>-->
                  <!--</form>-->
                </div>

                
              </div>
              <button type="submit" class="btn btn-primary" >Recherche</button>
            </form>
          </div>
        </div>
      </div>



    <!--</div>-->
   



    @yield('contenu');



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>


