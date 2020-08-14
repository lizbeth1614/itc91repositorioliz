<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Conocenos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Galeria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contactanos</a>
      </li>
    </ul>
  </div>
</nav>
<br>

<div class="container">
  <h3>Mobiliario de Palets</h3>
</div>
<style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
    </style>
  </head>
  <body>

  <div id="demo" class="carousel slide" data-ride="carousel">


    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{url ('/carpeta/palets1.jpg')}}" alt="Los Angeles" width= "50px" height="50px">

      </div>
      <div class="carousel-item">
        <img src="{{url ('/carpeta/palets2.jpeg')}}" alt="Chicago" width="100" height="50">
      </div>
      <div class="carousel-item">
        <img src="{{url ('/carpeta/palets3.jpg')}}" alt="New York" width="100" height="50">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <footer class="navbar bg-dark navbar-dark">
    <h5S>Author: Hege Refsnes<br>
    <a href="mailto:hege@example.com">hege@example.com</a></p>
  </footer>
</body>
</html>
