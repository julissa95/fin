<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./favicon.ico">

    <title>Trabajo Practico</title>

    <link href="bootstrap.min.css" rel="stylesheet">

    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>

    <header>

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="index.php">Julissa JOSEPH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

           <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
              <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
            </li>
           </ul>
         
      </nav>
    </header>

<div class="container">
  <form action="hacerregistro.php" novalidate>
      
      <div class="form-group">
    <label for="nombre">nombre</label>
    <input type="text" class="form-control" name="Usuario" id="nombre" aria-describedby="Tunombre" placeholder="Tu nombre" value="">
    <small id="emailHelp" class="form-text text-muted">Tu nombre es requerido.</small>
  </div>
  <div class="form-group">
    <label for="apellido">Clave</label>
   <input type="Password" name="Contrasena" value=""  class="form-control" aria-describedby="Apellido" placeholder="Tu apellido">
  </div>
  <button type="submit" class="btn btn-primary" type="submit">Submit</button>

   <?php 
                    if (isset($_GET['usuarioExistente']))
                    {
                      echo '<p style="color:yellow">El usuario ya existe</p>';
                      echo '<p style="color:white">Intente nuevamente con otro</p>';
                    }
                  ?>
  
</form>
</div>
<!-- 
    <main role="main" class="container">
      
    <h1>Registro</h1>
      <form action="hacerregistro.php">
        Nombre:<br>
        <input type="text" name="Nombre" value="">
        <br>
        Apellido:<br>
        <input type="text" name="Apellido" value="">
        <br><br>
        <input type="submit" value="Submit">
      </form>
    </main> -->

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Por favor cree un usuario.</span>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
  </body>
</html>
