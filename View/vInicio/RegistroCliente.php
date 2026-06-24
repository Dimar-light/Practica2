<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/Controller/MascotaController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Practica2/View/LayoutInterno.php';
?>

<!DOCTYPE html>
<html lang="es">

<?php ImportCSS(); ?>

<?php Navbar();
Sidebar(); ?>

<div class="card">
    <div class="card-header">
        <h4 class="mb-0">
            <i class="ti ti-user-plus me-2"></i>
            Registro de Clientes
        </h4>
    </div>

    <div class="card-body">

        <?php
        if (isset($_POST["MensajeExito"]))
            echo '<div class="alert alert-success">' . $_POST["MensajeExito"] . '</div>';

        if (isset($_POST["MensajeError"]))
            echo '<div class="alert alert-danger">' . $_POST["MensajeError"] . '</div>';
        ?>

        <form action="" method="post" id="formRegistroCliente">

            <div class="mb-3">
                <label class="form-label">Cédula</label>
                <input type="text" name="cedula" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Correo Electrónico</label>
                <input type="text" name="correo" class="form-control" required>
            </div>

            <button type="submit" name="btnRegistrarCliente" class="btn btn-primary w-100">
                Guardar Cliente
            </button>

        </form>

    </div>
</div>

<?php Footer(); ?>
<?php ImportJS(); ?>

<script src="../js/practica.js"></script>

</html>