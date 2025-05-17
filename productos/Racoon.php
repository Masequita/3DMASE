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
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="icon" href="../img/Servicios/logo.ico">


</head>
<body class="no-margin">
    
<!--#### NAVBAR ####-->
    <header class="header">
        <nav class="navbar navbar-expand-lg c-bg navbar-dark ">
    <div class="container-fluid">
        <a href="../index.php"> 
            <picture class="navbar-brand">
                <source loading="lazy"  srcset="../img/Servicios/logo.webp" type="image/webp">
                <img loading="lazy" src="../img/Servicios/logo.jpg" alt="logo"  class="c-logo"> 
            </picture>
        </a>
        <a class="navbar-brand c-logoText" href="../index.php">MASE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../index.php">Inicio</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="../contacto.php">Contacto</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="../nosotros.php">Nosotros</a>
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
<div class="c-10X">
    
</div>
<h1 class="c-centrado">Raccoon Flexi</h1>
<div class="c-10">
    
</div>
<div class="c-container">
<div class="producto-imagen">


<div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active c-producto">
      <img src="../img/productos/RaccoonFlexi/img1.jpg" class="d-block w-100 c-imgP" alt="...">
    </div>
    <div class="carousel-item c-producto">
      <img src="../img/productos/RaccoonFlexi/img2.jpg" class="d-block w-100 c-imgP" alt="...">
    </div>
    <div class="carousel-item c-producto">
      <img src="../img/productos/RaccoonFlexi/img3.jpg" class="d-block w-100 c-imgP" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--#### CAROUSEL PRINCIPAL ####-->
    <!-- Aquí puedes agregar más detalles si lo deseas -->
  </div>
  <div class="informacion">
    <h1 class="c-centrado">Precio: $50.00</h1>
    <div class="c-10x"></div>
    <p>
    Descubre al adorable Racoon, un juguete que captura la esencia traviesa y curiosa de este simpático animal. Con su característico pelaje gris y blanco y sus grandes ojos brillantes, este mapache es mucho más que un simple juguete. Su diseño realista y detalles meticulosamente cuidados lo convierten en una pieza ideal tanto para los amantes de la naturaleza como para los más pequeños que buscan un amigo para sus aventuras imaginarias.

    </p>
    <button class="btn btn-dark" onclick="window.location.href='pagina-de-compra.html'">Comprar ahora</button>
  </div>
</div>

</body>
<footer>
  <div class="c-5"></div>
  <p><h5>Pagina creada por Enrique Ruiz</h5></p>
  <p>Pagina creada usando Bootstrap 5 y Sweetalert2 </p>
  
</footer>
</html>
