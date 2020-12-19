<?php

class Conexion{

	static public function conectar(){	

		$link = new PDO("mysql:host=localhost;dbname=exportarexcel;charset=utf8mb4",
						"root",
						"",array(PDO::ATTR_EMULATE_PREPARES => false,
								PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}

		//CONSULTAS DE 2 A MAS REGISTROS COMO RESULTADO
		static public function consultas($tabla,$where='',$select='*'){

			
				$stmt =Conexion::conectar()->prepare(" SELECT $select FROM $tabla WHERE 1=1 $where ");

				$stmt -> execute();

				return $stmt -> fetchAll();


				$stmt -> close();
				
				$stmt = null;
			
		}

	
 
}
