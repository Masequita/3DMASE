<?php
include("config/config.php");
include("admin/acciones/lista_de_productos.php");
?>

            <?php 
            $n=1;
            $productos = obtenerProductos($conexion);
            foreach($productos as $producto) { ?>
                  <div class="col-12 col-md-6 col-lg-4">
                    <a href="producto.php?id=<?php echo $producto['id']; ?>">
                    <div class="card h-100">
                    <img src="img/productos/<?php echo $producto['id']; ?>/img1.jpg" class="card-img-top c-img-card" alt="...">
                    <div class="card-body">
                        <div class="c-cardT">
                        <div>
                        <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>
                        </div>
                        <div>
                        <h5 class="card-title"><?php echo $producto['precio']; ?>$</h5>
                        </div>
                        </div>
                        
                        <p class="card-text">
                        <?php echo $producto['descripcion_corta']; ?>
                        </p>
                    </div>
                    </div>
                    </a>
                </div>
           <?php } ?>



  
<script src="assets/css/sweetalert2.min.css"></script>
<script>
function confirmarEliminacion(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminarlo!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch('acciones/eliminar.php?id=' + id)
            .then(response => response.text())
            .then(data => {
                // Assuming the response contains a success message
                Swal.fire({
                    title: '¡Eliminado!',
                    text: 'El registro ha sido eliminado correctamente.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    // Remove the row from the table
                    document.getElementById('producto-' + id).remove();
                });
            })
            .catch(error => {
                Swal.fire({
                    title: 'Error',
                    text: 'Ocurrió un error al eliminar el registro.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        }
    });
}
</script>



