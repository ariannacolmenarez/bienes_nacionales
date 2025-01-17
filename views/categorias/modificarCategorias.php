<?php require_once('assets/components/header.php'); ?>

    <!-- Main Content -->
    <div id="content">

        <?php require_once('assets/components/navbar.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Titulo -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Modificar Categorias SIGECOF</h1>
                <a href="<?= BASE_URL; ?>categorias" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-undo fa-sm text-white-50"></i>
                    Volver
                </a>
            </div>

            <!-- Tabla Datos -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Rellene todos los datos del formulario*</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?= BASE_URL; ?>categorias/actualizar?c=<?=$_GET['c']?>" id="form_categoria">
                    <?php $p=new categoriasModel; $r=$p->obtener($_GET['c']); ?>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="codigos"><b>Codigo</b></label>
                                <input type="text" class="form-control bg-light" name="codigos" value="<?=$r->getcodigo()?>" placeholder="Codigo Generado" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="presupuestaria"><b>Presupuestaria</b></label>
                                <input type="text" class="form-control bg-light" name="presupuestaria" id="presupuestaria" value="<?=$r->getpresupuestaria()?>" placeholder="Escriba la presupuestaria">
                            </div>
                            <div class="form-group col-md-6 col-lg-4">
                                <label for="clasificacion" ><b>Clasificación</b></label>
                                <select class="form-control bg-light" name="clasificacion"  id="clasificacion">
                                    <?= categorias::select_clasificacion(0); ?>
                                </select>
                                <span class="error"></span>
                            </div>
                            <div class="form-group col-md-6 col-lg-4">
                                <label for="denominacion" ><b>Denominacion</b></label>
                                <select class="form-control bg-light" name="denominacion" id="denominacion">
                                    <?= categorias::select_denominacion(0); ?>
                                </select>
                                <span class="error"></span>
                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-primary mt-2 mr-2">Guardar</button>
                        <button type="reset" class="btn btn-danger mt-2">Borrar</button>
                    </form>
                </div>
            </div>
         
        </div>
    </div>
    <!-- End of Main Content -->


    <?php require_once('assets/components/footer.php'); ?>

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php require_once('assets/components/modals.php'); ?>
    <?php require_once('assets/components/scripts.php'); ?>
    <script src="<?= media(); ?>/js/validation/categoria.js"></script>

</body>
</html>