<?php
include("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogDeCafé</title>
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
    <link rel="preload" href="../css/estilos.css" as="style">
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
            <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="#">Ventas</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="#">Empleados</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Acciones
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Agregar Producto</a></li>
            </ul>
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

<form action="agregar_productos.php" method="POST" enctype="multipart/form-data">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Descripción corta:</label><br>
        <input type="text" name="descripcion_corta" required><br><br>

        <label>Descripción larga:</label><br>
        <textarea name="descripcion_larga" rows="4" required></textarea><br><br>

        <label>Precio:</label><br>
        <input type="number" step="0.01" name="precio" required><br><br>

        <label>Cantidad:</label><br>
        <input type="number" name="cantidad" required><br><br>

        <label>Imagen del producto:</label><br>
        <input type="file" name="imagen" accept="image/*"><br><br>

        <button type="submit" name="guardar">Guardar producto</button>
    </form>



</body>
</html>