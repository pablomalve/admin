<?php

require_once "ConexionModel.php";

class UsuariosModel{
  static public function Mostrar($tabla, $campo, $valor){
		if($campo!=null){
			$stmt = ConexionModel::cnx()->prepare("SELECT * FROM $tabla WHERE $campo = :$campo");
			$stmt -> bindParam(":".$campo, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt->fetch();	
		}else{
			$stmt = ConexionModel::cnx()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt->fetchAll();	
		}
    // $stmt -> close();
    $stmt = null;
  }

  /*=============================================
	REGISTRO DE USUARIO
	=============================================*/
	static public function Create($table, $data){
		$stmt = ConexionModel::cnx()->prepare("INSERT INTO $table(nombre_usuario, usuario, clave, perfil_usuario, estado_usuario, ultimo_login_usuario, foto_usuario) VALUES (:nombre_usuario, :usuario, :clave, :perfil_usuario, :estado_usuario, :ultimo_login_usuario, :foto_usuario)");
		$stmt->bindParam(":nombre_usuario",       $data["nombre_usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario",              $data["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":clave",                $data["clave"], PDO::PARAM_STR);
		$stmt->bindParam(":perfil_usuario",       $data["perfil_usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":foto_usuario",         $data["foto_usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":estado_usuario",       $data["estado_usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":ultimo_login_usuario", $data["ultimo_login_usuario"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "ok";	
		}else{
			return "error";
		}
		// $stmt -> close();
		$stmt = null;
	}
}