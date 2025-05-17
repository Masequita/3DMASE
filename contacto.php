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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link active" href="contacto.php">Contacto</a>
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
<!--#### Carrusel #### -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="img/Servicios/contacto.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Contactanos</h1>
        <p>¿Dudas? ¡No en nuestra página!</p>
      </div>
    </div>
    
  </div>
</div>
<!--#### Carrusel #### -->

<div class="container-sm">
    <h1 class="c-h1">Contacto</h1>
<div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Correo" aria-label="Recipient's username" aria-describedby="basic-addon2">
    <span class="input-group-text" id="basic-addon2">@Ejemplo.com</span>
    </div>

    <div class="input-group">
    <span class="input-group-text">Comentario</span>
    <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
    
</div>
<p class="c-10x">
    
</p>
<div class="container-sm c-derecha">
    <button type="submit" class="btn btn-dark btn-lg " onclick="mensaje()">Enviar</button>
    
  </div>
<p class="c-200">
    
</p>
</body>
<footer>
  <div class="c-5"></div>
  <p><h5>Pagina creada por Enrique Ruiz</h5></p>
  <p>Pagina creada usando Bootstrap 5 y Sweetalert2 </p>
  
</footer>
</html>
<script>
      function mensaje(){
        Swal.fire("Mensaje Enviado!");
        Swal.fire({
          title: "Mensaje Enviado!",
          confirmButtonText: "Aceptar",
          confirmButtonColor: "#212529"
        });
      }
</script>
