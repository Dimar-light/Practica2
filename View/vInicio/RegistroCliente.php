<?php
   include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/Controller/MascotaController.php';
   include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/View/LayoutInterno.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php ImportCSS(); ?>
<body>
    <?php Navbar(); Sidebar(); ?>

    <main id="content" class="content py-10">
        <div class="container-fluid">
            <div class="card mx-auto shadow-sm" style="max-width: 600px;">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Registro de Clientes</h5>
                </div>
                <div class="card-body">
                    <?php
                        if(isset($_POST["MensajeExito"])) echo '<div class="alert alert-success">'.$_POST["MensajeExito"].'</div>';
                        if(isset($_POST["MensajeError"])) echo '<div class="alert alert-danger">'.$_POST["MensajeError"].'</div>';
                    ?>
                    <form action="" method="post" id="formRegistroCliente">
                        <div class="mb-3">
                            <label class="form-label">Cédula</label>
                            <input type="text" name="cedula" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Correo Electrónico</label>
                            <input type="text" name="correo" class="form-control">
                        </div>
                        <button type="submit" name="btnRegistrarCliente" class="btn btn-primary w-100">Guardar Cliente</button>
                    </form>
                </div>
            </div>
            <?php Footer(); ?>
        </div>
    </main>

    <?php 
        ImportJS(); 
    ?>
    <script src="../js/practica.js"></script>
</body>
</html>