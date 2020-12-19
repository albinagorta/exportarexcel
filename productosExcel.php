<?php 
require_once 'conexion.php';

	$nombre ='productos.xls';

			header('Expires: 0');
			header('Cache-control: private');
			header("Content-type: application/vnd.ms-excel;charset=iso-8859-15"); // Archivo de Excel
			header("Cache-Control: cache, must-revalidate"); 
			header('Content-Description: File Transfer');
			header('Last-Modified: '.date('D, d M Y H:i:s'));
			header("Pragma: public"); 
			header('Content-Disposition:attachment; filename="'.$nombre.'"');
			header("Content-Transfer-Encoding: binary");


	echo utf8_decode("<table border='0'> 
						<tr > 
						<td style='font-weight:bold; border:1px solid #eee;background: #3b81ff;color:white;'>ID</td> 
						<td style='font-weight:bold; border:1px solid #eee;background: #3b81ff;color:white;padding:10px;'>NOMBRE</td>
						<td style='font-weight:bold; border:1px solid #eee;background: #3b81ff;color:white;padding:10px;'>PRECIO</td>
						<td style='font-weight:bold; border:1px solid #eee;background: #3b81ff;color:white;padding:10px;'>STOCK</td>
						<td style='font-weight:bold; border:1px solid #eee;background: #3b81ff;color:white;padding:10px;'>ESTADO</td>
						</tr>");
				$reporte=conexion::consultas('productos');

				foreach ($reporte as $value) {

					 echo utf8_decode("<tr>
				 			
						<td style='border:1px solid #eee;'>".$value["id"]."</td>
						<td style='border:1px solid #eee;'>".$value["nombre"]."</td>
						<td style='border:1px solid #eee;'>".$value["precio"]."</td>
						<td style='border:1px solid #eee;'>".$value["stock"]."</td>
						<td style='border:1px solid #eee;'>".$value["estado"]."</td>

						</tr>");

				}


			echo "</table>";


			 ?>