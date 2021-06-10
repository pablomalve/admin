<?php

class UsuariosController{
  // ----------------------------------------
	// LOGIN DE USUARIOS
	// ----------------------------------------
  static public function LoginUsuario(){
    if(isset($_POST['ingUser'])){
      if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingUser']) && preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingClave'])){
        $tabla = "usuarios";
        $campo = "usuario";
        $valor = $_POST['ingUser'];

        $respuesta = UsuariosModel::Mostrar($tabla, $campo, $valor);

        if($respuesta['usuario'] == $_POST['ingUser']){
          $_SESSION['iniciarSesion']="ok";
          echo '<script> window.location = "content"; </script>';
        }else{
          echo '<div class="alert alert-danger">Error de ingreso. Comprobar</div>';
        }
      }
    }
  }

  // ----------------------------------------
	// REGISTRO DE NUEVOS USUARIOS
	// ----------------------------------------
	static public function CreateUsuario(){
		if(isset($_POST["altaNombreUser"])){
			if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ, ]+$/', $_POST["altaNombreUser"]) &&
			   preg_match('/^[a-zA-Z]+$/', $_POST["altaUser"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["altaClaveUser"])){
				$encriptar = crypt($_POST["altaClaveUser"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
				$table = "usuarios";
				$data = array("nombre_usuario" 			 => $_POST["altaNombreUser"],
											"usuario"        			 => $_POST["altaUser"],
											"clave"          			 => $_POST["altaClaveUser"],
											"perfil_usuario" 			 => $_POST["altaPerfilUser"],
											"estado_usuario"  		 => 0, 
											"foto_usuario"         => $_POST["altaFotoUser"],
											"ultimo_login_usuario" => "0000-00-00 00:00:00");
				$respuesta = UsuariosModel::Create($table, $data);
				if($respuesta == "ok"){
					echo '<script>
									Swal.fire({
										type: "success",
										title: "¡Registro guardado correctamente!",
										icon: "success",
										showConfirmButton: true,
										confirmButtonText: "Aceptar"
									}).then(function(result){ 
										if(result.value){ window.location = "usuarios";	}
									});
								</script>';
				}
			}else{
				echo '<script>
								Swal.fire({
									type: "error",
									title: "¡Los datos a ingresar no pueden contener caracteres especiales!",
									icon: "error",
									showConfirmButton: true,
									confirmButtonText: "Cerrar"
								}).then(function(result){
									if(result.value){ window.location = "usuarios"; }
								});
							</script>';			
			}
		}
	}

	/*---------------------------------------------
	MOSTRAR USUARIO
	---------------------------------------------*/
	static public function Mostrar($campo, $valor){
		$table = "usuarios";
		$respuesta = UsuariosModel::Mostrar($table, $campo, $valor);
		return $respuesta;
	}

	/*---------------------------------------------
	EDITAR USUARIO
	---------------------------------------------*/

	// static public function ctrEditarUsuario(){

	// 	if(isset($_POST["editarUsuario"])){

	// 		if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])){



	// 			$tabla = "usuarios";

	// 			if($_POST["editarPassword"] != ""){

	// 				if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPassword"])){

	// 					$encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

	// 				}else{

	// 					echo'<script>

	// 							swal({
	// 								  type: "error",
	// 								  title: "¡La contraseña no puede ir vacía o llevar caracteres especiales!",
	// 								  showConfirmButton: true,
	// 								  confirmButtonText: "Cerrar"
	// 								  }).then(function(result) {
	// 									if (result.value) {

	// 									window.location = "usuarios";

	// 									}
	// 								})

	// 					  	</script>';

	// 					  	return;

	// 				}

	// 			}else{

	// 				$encriptar = $_POST["passwordActual"];

	// 			}

	// 			$datos = array("nombre" => $_POST["editarNombre"],
	// 						   "usuario" => $_POST["editarUsuario"],
	// 						   "password" => $encriptar,
	// 						   "perfil" => $_POST["editarPerfil"],
	// 						   "foto" => $ruta);

	// 			$respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);

	// 			if($respuesta == "ok"){

	// 				echo'<script>

	// 				swal({
	// 					  type: "success",
	// 					  title: "El usuario ha sido editado correctamente",
	// 					  showConfirmButton: true,
	// 					  confirmButtonText: "Cerrar"
	// 					  }).then(function(result) {
	// 								if (result.value) {

	// 								window.location = "usuarios";

	// 								}
	// 							})

	// 				</script>';

	// 			}


	// 		}else{

	// 			echo'<script>

	// 				swal({
	// 					  type: "error",
	// 					  title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
	// 					  showConfirmButton: true,
	// 					  confirmButtonText: "Cerrar"
	// 					  }).then(function(result) {
	// 						if (result.value) {

	// 						window.location = "usuarios";

	// 						}
	// 					})

	// 		  	</script>';

	// 		}

	// 	}

	// }


}