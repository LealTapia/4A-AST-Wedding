<?php 
    class ControladorFormularios{
        static public function ctrRegistro(){
            if(isset($_POST['registroNombre'])){
                if(
                    preg_match("/^[a-zA-Z]+$/", $_POST['registroNombre']) &&
                    preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})+$/', $_POST['registroEmail']) &&
                    preg_match('/^[0-9a-zA-Z]+$/', $_POST['registroPassword'])
                ){
                    $tabla = "registros";
                    $datos = array(
                        "nombre" => $_POST['registroNombre'],
                        "email" => $_POST['registroEmail'],
                        "password" => $_POST['registroPassword']
                    );
                    $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
                    return $respuesta;
                }else{
                    $respuesta = "error";
                    return $respuesta;
                }
            }
        }

        static public function ctrSeleccionarRegistros($item, $valor){
            $tabla = "registros";
            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor); 
            return $respuesta;
        }

        public function ctrIngreso(){
            if(isset($_POST['ingresoEmail'])){
                $tabla = "registros";
                $item = "email";
                $valor = $_POST['ingresoEmail'];

                $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

                if(is_array($respuesta)){
                    if($respuesta['email'] == $_POST['ingresoEmail'] && $respuesta['password'] == $_POST['ingresoPassword']){
                        $_SESSION['validarIngreso'] = "ok";
                        echo
                        '
                            <script>
                                if(window.history.replaceState){
                                    window.history.replaceState(null, null, window.location.href);
                                }
                                window.location = "index.php?pagina=home";
                            </script>
                        ';
                    }else{
                        echo
                        '
                            <script>
                                if(window.history.replaceState){
                                    window.history.replaceState(null, null, window.location.href);
                                }
                            </script>
                        ';
                        echo 
                        '
                            <div class="alert alert-danger">Error al ingresar al sistema, el email o la contraseña no coinciden</div>
                        ';
                    }
                }else{
                    echo
                    '
                        <script>
                            if(window.history.replaceState){
                                window.history.replaceState(null, null, window.location.href);
                            }
                        </script>
                    ';
                    echo 
                    '
                        <div class="alert alert-danger">Error al ingresar al sistema, el email o la contraseña no coinciden</div>
                    ';
                }
            }
        }

        static public function ctrActualizarRegistro(){
            if(isset($_POST['actualizarNombre'])){
                if($_POST['actualizarPassword'] != ""){
                    $password = $_POST['actualizarPassword'];
                }else{
                    $password = $_POST['passwordActual'];
                }

                $tabla = "registros";
                $datos = array(
                    "id" => $_POST['idUsuario'],
                    "nombre" => $_POST['actualizarNombre'],
                    "email" => $_POST['actualizarEmail'],
                    "password" => $password
                );
                $respuesta = ModeloFormularios::mdlActualizarRegistros($tabla, $datos);

                return $respuesta;
            }
        }

        public function ctrEliminarRegistro(){
            if(isset($_POST['eliminarRegistro'])){
                $tabla = "registros";
                $valor = $_POST['eliminarRegistro'];

                $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

                if($respuesta = "ok"){
                    echo
                    '
                        <script>
                            if(window.history.replaceState){
                                window.history.replaceState(null, null, window.location.href);
                            }
                            window.location = "index.php?pagina=registros";
                        </script>
                    ';
                }
            }
        }
    }
?>