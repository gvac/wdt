<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <title>Form PHP</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->

  <form class="" action="form.php" method="get">
    <!-- Todo el formulario será enviado a form.php mediante metodo GET -->

    <input type="text" name="Nombre:" value="nombre">

    <!-- Hay que relacionar el For del Label con el ID del input
         Para asociar varios input entre ellos, hay que tener el mismo name -->
    <label for="hombre">Hombre</label>
    <input type="radio" name="sexo" value="hombre" id="hombre">

    <label for="mujer">Mujer</label>
    <input type="radio" name="sexo" value="mujer" id="mujer">

    <select class="" name="year" id="year">
      <?php
   for($i = 1980 ; $i < date('Y'); $i++){
      echo "<option>$i</option>";
   }
?>
    </select>
    <input type="submit" value="Enviar">
  </form>


  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
