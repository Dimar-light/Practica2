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
            <i class="ti ti-paw me-2"></i>
            Registro de Mascotas
        </h4>
    </div>

    <div class="card-body">
        <div class="card-body">
            <?php
            if (isset($_POST["MensajeExito"]))
                echo '<div class="alert alert-success">' . $_POST["MensajeExito"] . '</div>';
            if (isset($_POST["MensajeError"]))
                echo '<div class="alert alert-danger">' . $_POST["MensajeError"] . '</div>';
            ?>
            <form action="" method="post" id="formRegistroMascota">
                <div class="mb-3">
                    <label class="form-label">Cédula del Cliente (Dueño)</label>
                    <input type="text" name="cedula" class="form-control" placeholder="Ingrese cédula registrada">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nombre de la Mascota</label>
                    <input type="text" name="nombre" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Especie</label>
                    <input type="text" name="especie" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Raza</label>
                    <input type="text" name="raza" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Peso</label>
                    <input type="text" name="peso" class="form-control">
                </div>
                <button type="submit" name="btnRegistrarMascota" class="btn btn-success w-100">Guardar Mascota</button>
            </form>
        </div>

    </div>

    <?php Footer(); ?>
    <?php ImportJS(); ?>

    <script src="../js/practica.js"></script>

</html>