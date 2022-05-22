 <?php

// Conectando, seleccionando la base de datos

$link = mysql_connect('localhost', 'root', 'usbw')

    or die('No se pudo conectar: ' . mysql_error());


mysql_select_db('mi pequeño blog') or die('No se pudo seleccionar la base de datos');



// lista
$query = 'SELECT Nick, nombre, apellidos, Email, imagen, password FROM registro';

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

?>

<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>Nick</th>
			<th>NOMBRE</th>
			<th>Apellidos</th>
			<th>Email</th>
			<th>password</th>
			<th>imagen</th>
		</tr>
		</thead>
<?php while ($row = mysql_fetch_array($result)){?>
	<td><?php $row['Nick'] ?></td>
    <td><?php $row['nombre'] ?></td>
    <td><?php $row['apellidos'] ?></td>
    <td><?php $row['Email'] ?></td>
    <td><?php $row['imagen'] ?></td>
    <td><?php $row['password'] ?></td>
	
<?php} ?>
</table>