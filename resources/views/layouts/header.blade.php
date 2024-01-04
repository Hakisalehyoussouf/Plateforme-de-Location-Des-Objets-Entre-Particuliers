<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>productPage</title>
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>-->


    
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


    

    



    <!--</div>-->
   



    @yield('contenu');



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>


