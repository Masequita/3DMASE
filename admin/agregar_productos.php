<?php
include("config/config.php");

if (
    isset($_POST['nombre'], $_POST['descripcion_corta'], $_POST['descripcion_larga'], $_POST['precio'], $_POST['cantidad'])
) {
    $nombre = $_POST['nombre'];
    $descripcion_corta = $_POST['descripcion_corta'];
    $descripcion_larga = $_POST['descripcion_larga'];
    $precio = floatval($_POST['precio']);
    $cantidad = intval($_POST['cantidad']);

    $stmt = $conexion->prepare("INSERT INTO productos (nombre, descripcion_corta, descripcion_larga, precio, cantidad) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssdi", $nombre, $descripcion_corta, $descripcion_larga, $precio, $cantidad);

    if ($stmt->execute()) {
        $producto_id = $conexion->insert_id;
        echo "✅ Producto agregado correctamente.<br>";

        // Crear carpeta para el producto
        $directorio_producto = "../img/productos/$producto_id";
        if (!file_exists($directorio_producto)) {
            mkdir($directorio_producto, 0777, true); // crea carpeta con permisos y recursividad
        }

        // Subir imagen si hay
        if (!empty($_FILES['imagen']['name'])) {
            $extension = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);

            // Obtener imágenes ya existentes en la carpeta, sin importar extensión
            $archivos_existentes = glob($directorio_producto . "/img*.*");
            $numero_imagen = count($archivos_existentes) + 1;

            // Renombrar imagen como img1.jpg, img2.png, etc.
            $imagen_nombre = "img" . $numero_imagen . "." . $extension;
            $imagen_tmp = $_FILES['imagen']['tmp_name'];
            $ruta_destino = $directorio_producto . "/" . $imagen_nombre;

            if (move_uploaded_file($imagen_tmp, $ruta_destino)) {
                $stmtImg = $conexion->prepare("INSERT INTO imagenes (producto_id, imagen_1) VALUES (?, ?)");
                $stmtImg->bind_param("is", $producto_id, $imagen_nombre);

                if ($stmtImg->execute()) {
                    echo "✅ Imagen subida y guardada correctamente como $imagen_nombre.";
                } else {
                    echo "❌ Error al registrar la imagen: " . $stmtImg->error;
                }

                $stmtImg->close();
            } else {
                echo "❌ Error al mover la imagen al servidor.";
            }
        } else {
            echo "ℹ️ Producto guardado sin imagen.";
        }
    } else {
        echo "❌ Error al insertar producto: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
    header("Location: ./");
} else {
    echo "❌ Faltan datos del formulario.";
}
?>
