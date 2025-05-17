<?php
include('../config/config.php');
$id=intval($_GET['id']);

//Obtener de la base de datos el producto
// a traves del id
$stmt=$conexion->prepare("SELECT * FROM productos WHERE id=?");
$stmt->bind_param("i",$id);
$stmt->execute();

$result = $stmt->get_result();
$producto = $result->fetch_assoc();

if(!$producto) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Producto no encontrado']);
    exit;
}
$stmt->close();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Producto</title> 
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">
        <link rel="stylesheet" href="../assets/css/estilos.css" />
    </head>
</html>


<div class="container mt-5">
    <h1 class="text-center mb-4">Editar Producto</h1>
    <form id="formularioproducto" method="post" action="actualizar_producto.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $producto['nombre']; ?>" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="short_desc">Descripcion corta</label>
                    <input type="text" class="form-control" id="descripcion_corta" name="descripcion_corta" value="<?php echo $producto['descripcion_corta']; ?>" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="large_desc">Descripcion larga</label>
                    <input type="text" class="form-control" id="descripcion_larga" name="descripcion_larga" value="<?php echo $producto['descripcion_larga']; ?>" required>
                </div>
            </div>
        </div>  
        <div class="col-md-4">
            <div class="form-group">
                <label for="price">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $producto['precio']; ?> "required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="amount">Cantidad</label>
                <input type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo $producto['cantidad']; ?>" required>
            </div>
        </div>
    </div>    
    <div class="text-center">
        <a href="../index.php" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </div>
    </form>
</div>

<script>
    document.getElementById('formularioempleado').addEventListener('submit', function(event){
        event.preventDefault(); // Prevenir el envío del formulario por defecto
        var formData = new FormData(this);
        
        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if(data.success){
                Swal.fire({
                    title: '!Actualizado!',
                    text: data.message,
                    icon: 'success',
                    confirmButtonText: 'OK'
                 }).then(() => {
                    window.location.href = 
                    '../index.php'; //Redirigir a la lista de empleados
                 });
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: data.message,
                        icon:'error',
                        confirmButtonText: 'OK'
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    title:'Error',
                    text:'Ocurrió un error al actualizar el empleado.',
                    icon:'error',
                    confirmButtonText: 'OK'
                });
            });
    });
    $id = intval($_GET['id']);
</script>
</body>
<script src="../assets/js/sweetalert2.min.js"></script>

</html>