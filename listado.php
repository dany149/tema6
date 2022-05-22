<? 
include('conexion.php'); ?>

<table width="615" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="137"><strong>Usuarios</strong></td>
<td width="147"><strong>Entradas</strong></td>
<td width="331"><strong>Categorias</strong></td>
</tr>
<tr>
<td>
	 <select name="Usuarios">
	 <option>Seleccionar</option>
	 </select>
</td>
<td>
	 <select name="Entradas">
	 <option>Seleccionar</option>
	 </select>
</td>
<td>
	 <select name="Categorias">
	 <option>Seleccionar</option>
	 </select>
</td>
</tr>
</table>


<div id=”listado”>
<table width="615" border=1 cellpadding="3" cellspacing="0" >
<tr><td width="90"><b>ip</b></td>
<td width="71"><b>nick</b></td>
<td width="159"><b>nombre</b></td>
<td width="159"><b>apellidos</b></td>
<td width="159"><b>email</b></td>
<td width="159"><b>password</b></td>
<td width="150"><b>Foto</b></td>
<td colspan="2">
<div align="center">
</div></td>
</tr>



<? while($fila = mysql_fetch_array($consulta)){
foreach($fila AS $key => $value) { $fila[$key] = stripslashes($value); } ?>

<tr>
<td><img src="imagenes/<? echo $fila['foto1'] ?>" width="150" height="75" /></td>
<td width="103"><div align="center"><a href=edit.php?id=<? echo $fila['id'] ?>>Modificar</a></div></td>
</tr>
<? } ?>
</table>
</div>
<br />
<label>
<input type="submit" name="nuevo" id=”nuevo” value="Nuevo Usuario" />
</label>