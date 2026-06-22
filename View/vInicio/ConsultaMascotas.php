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
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Mascotas Registradas</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>Cédula del Cliente</th>
                                    <th>Nombre del Cliente</th>
                                    <th>Nombre de la Mascota</th>
                                    <th>Especie</th>
                                    <th>Peso</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(empty($listaMascotas)): ?>
                                    <tr><td colspan="5" class="text-center">No hay registros de mascotas.</td></tr>
                                <?php else: ?>
                                    <?php foreach($listaMascotas as $m): ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($m['CedulaCliente']); ?></td>
                                            <td><?php echo htmlspecialchars($m['NombreCliente']); ?></td>
                                            <td><?php echo htmlspecialchars($m['NombreMascota']); ?></td>
                                            <td><?php echo htmlspecialchars($m['Especie']); ?></td>
                                            <td><?php echo htmlspecialchars($m['Peso']); ?> kg</td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php Footer(); ?>
        </div>
    </main>
    <?php ImportJS(); ?>
</body>
</html>