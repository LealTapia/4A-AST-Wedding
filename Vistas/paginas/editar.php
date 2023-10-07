<?php
    if (!isset($_SESSION['validarIngreso'])) {
        echo
            '
                    <script>
                        window.location = "index.php?pagina=login";
                    </script>
                ';
        return;
    } else {
        if ($_SESSION['validarIngreso'] != "ok") {
            echo
                '
                        <script>
                            window.location = "index.php?pagina=login";
                        </script>
                    ';
            return;
        }
    }

    $usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);

    if (isset($_GET['id'])) {
        $item = "id";
        $valor = $_GET['id'];

        $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
    }
?>

<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            
        </div>
    </div>
</section>

<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="post">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <input type="text" class="form-control" value="<?php echo $usuario['nombre']; ?>"
                    placeholder="Escriba su nombre" id="nombre" name="actualizarNombre">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" value="<?php echo $usuario['email']; ?>"
                    placeholder="Escriba su email" id="email" name="actualizarEmail">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Escriba su password" id="pwd"
                    name="actualizarPassword">
                <input type="hidden" name="passwordActual" value="<?php echo $usuario['password']; ?>">
                <input type="hidden" name="idUsuario" value="<?php echo $usuario['id']; ?>">
            </div>
        </div>
        <?php
            $actualizar = ControladorFormularios::ctrActualizarRegistro();
            if ($actualizar == "ok") {
                echo '
                        <script>
                            if(window.history.replaceState) {
                                window.history.replaceState(null, null, window.location.href);
                            }
                        </script>
                ';
                echo '
                    <div class="alert alert-success">El usuario ha sido actualizado</div>
                    <script>
                        setTimeout(function(){
                            window.location = "index.php?pagina=home";
                        }, 1600);
                    </script>
                ';
            }
        ?>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>