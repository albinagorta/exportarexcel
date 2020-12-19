<?php 
require_once 'conexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		table{padding: 20px; }
		th,td{padding: 10px;}
		a{padding: 10px; text-decoration: none;}

	</style>
</head>
<body>

<div >
	<table>
		<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>PRECIO</th>
		<th>STOCK</th>
		<th>ESTADO</th>
		</tr>
<?php 

$productos=Conexion::consultas('productos');
foreach ($productos as $key => $val) {
	echo "<tr>
			<td>".$val['id']."</td>
			<td>".$val['nombre']."</td>
			<td>".$val['precio']."</td>
			<td>".$val['stock']."</td>
			<td>".$val['estado']."</td>
		</tr>";
}
 ?>

		

	</table>
	<a href="productosExcel.php" >Exportar Excel</a>
</div>

	
</body>
</html>