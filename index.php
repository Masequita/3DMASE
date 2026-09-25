<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3DMASE</title>
    <meta name="description" content="Página web Cafetería">

    <!-- Prefetch -->
    <link rel="prefetch" href="nosotros.php" as="document">

    <!-- Preload -->
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"  crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preload" href="css/estilos.css" as="style">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="img/Servicios/logo.ico">


</head>
<body class="no-margin">
    
<!--#### NAVBAR ####-->
    <header class="header">
        <nav class="navbar navbar-expand-lg c-bg navbar-dark ">
    <div class="container-fluid">
        <a href="index.php"> 
            <picture class="navbar-brand">
                <source loading="lazy"  srcset="img/Servicios/logo.webp" type="image/webp">
                <img loading="lazy" src="img/Servicios/logo.jpg" alt="logo"  class="c-logo"> 
            </picture>
        </a>
        <a class="navbar-brand c-logoText" href="index.php">MASE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="contacto.php">Contacto</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="nosotros.php">Nosotros</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <a class="bi bi-search" type="submit">
            <picture class="navbar-brand">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
            </picture>
        </a>
        </form>
        </div>
    </div>
    </nav>
    </header>
<!--#### NAVBAR ####-->

<!--#### CAROUSEL PRINCIPAL ####-->
    <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active c-item" data-bs-interval="10000">
            <img src="img/Servicios/blog1.jpg" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>De lo Digital a lo Real</h1>
                <p>Transformamos tus archivos 3D en objetos físicos listos para usar o exhibir.</p>
            </div>
        </div>
        <div class="carousel-item c-item" data-bs-interval="2000">
            <img src="img/Servicios/blog2.jpg" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Calidad que se Siente</h1>
                <p>Impresiones 3D duraderas y profesionales, ideales para prototipos, decoración o repuestos.</p>
            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="img/Servicios/blog3.jpg" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Diseño a tu Medida</h1>
                <p>Creamos piezas personalizadas según tus ideas o necesidades, con máxima precisión y detalle.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
<!--#### CAROUSEL PRINCIPAL ####-->
<div class="container c-align">
<h1 class="c-h1">Impresiones 3D al día con las tendencias actuales</h1>
<div class="row row-cols-1 row-cols-md-4 g-4 c-row c-grid">
  <?php 
            include ("productos.php");
          ?>

  <div class="col-12 col-md-6 col-lg-4">
    <a href="productos/tralalero.php">
    <div class="card h-100">
      <img src="img/productos/Tralalero/img1.jpg" class="card-img-top " alt="...">
      <div class="card-body">
      <div class="c-cardT">
          <div>
          <h5 class="card-title">Tralalero tralala</h5>
          </div>
          <div>
          <h5 class="card-title">$500.00</h5>
          </div>
        </div>
        
        <p class="card-text">
          Este juguete articulado te permite moverlo en todas direcciones, creando infinitas poses y movimientos.
        </p>
      </div>
    </div>
    </a>
  </div>

</div>
</div>
<div class="c-200"></div>
</body>
<footer>
  <div class="c-5"></div>
  <p><h5>Pagina creada por Enrique Ruiz</h5></p>
  <p>Pagina creada usando Bootstrap 5 y Sweetalert2 </p>
  
</footer>
</html>