 

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Cabecera fija</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
      
</head>
<!-- estilo css-->
<style>
    body {
	margin: 0;
	padding: 0;
	font-family: Helvetica, Arial, sans-serif;
	color: #666;
	background: #f2f2f2; 
	font-size: 1em;
	line-height: 1.5em;
}

h1 {
	font-size: 2.3em;
	line-height: 1.3em;
	margin: 15px 0;
	text-align: center;
	font-weight: 300;
}

p {
	margin: 0 0 1.5em 0;
}

img {
	max-width: 100%;
	height: auto;
}
/*estilo a la cabecera */

#main-header {
	background: #333;
	color: white;
	height: 80px;
}	
	#main-header a {
		color: white;
	}

/*Logo
 */
#logo-header {
	float: left;
	padding: 15px 0 0 20px;
	text-decoration: none;
}
	#logo-header:hover {
		color: #0b76a6;
	}
	
	#logo-header .site-name {
		display: block;
		font-weight: 700;
		font-size: 1.2em;
	}
	
	#logo-header .site-desc {
		display: block;
		font-weight: 300;
		font-size: 0.8em;
		color: #999;
	}
	

/* Navegación */
nav {
	float: right;
}
	nav ul {
		margin: 0;
		padding: 0;
		list-style: none;
		padding-right: 20px;
	}
	
		nav ul li {
			display: inline-block;
			line-height: 80px;
		}
			
			nav ul li a {
				display: block;
				padding: 0 10px;
				text-decoration: none;
			}
			
				nav ul li a:hover {
					background: #0b76a6;
				}
/*diseño del contenido*/

#main-content {
	background: white;
	width: 90%;
	max-width: 800px;
	margin: 20px auto;
	box-shadow: 0 0 10px rgba(0,0,0,.1);
}

	#main-content header,
	#main-content .content {
		padding: 40px;
	}



/*formulario*/
.form{
    width: 450px;
    padding: 30px;
    margin: auto;
    margin-top: 100px;
    background: rgba(15, 50, 72, 0.3);
    border-radius: 5px;
}

.titulo{
    color: #1d4169;
    margin-bottom: 20px;
}
/*cajas*/
.cajas{
    width: 100%;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 2px;
    border: none;
    border-left: 10px solid #d9e4ea;
    transition: all .5s ease;
}
.cajas:hover, .cajas:focus{
    border-left: 10px solid #1a4c7e;
}
/*terminos*/
.termino1{
    text-align: center;
    color: #3b3b3b;
}
.termino2{
    color: #000000;
    text-decoration: none;
    font-weight: bold;
}
.termino2:hover{
    color: #dbdbdb;
}
/*boton para registarse*/
.btn{
    width: 100%;
    padding: 15px;
    border-radius: 2px;
    border: none;
    margin: 20px 0;
    font-size: 15px;
    background: #225677;
    color: white;
    cursor: pointer;
    transition: all .5s ease;
}
.btn:hover{
    background: #133043;
}

.tengo-cuenta{
    text-align: center;
    color: #000000;
    font-weight: bold;
    text-decoration: none;
}
.tengo-cuenta:hover{
    color: #dbdbdb;
}
/*margenes*/

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open sans';
}

</style>
							<!--HTML-->
<body>
	
	<header id="main-header">
		
		<a id="logo-header" href="#">
			<span class="site-name"><img src="imagen/calaveras.png" alt="imagen"width="40" height="40"></span>
			<span class="site-desc">Daniel Rico Rodriguez</span>
		</a> <!-- / #logo-header -->

		<nav>
			<ul>
				<li><a  href="index.php">Inicio</a></li>
				<li><a href="inicia.html">Iniciar sesion</a></li>
				<li><a  href="registros.php">Registro</a></li>
				<li><a href='URL de la red social' ><img src="imagen/facebook.png" alt="imagen"width="15" height="15"><i class="fa fa-facebook"></i></a></li>
                <li><a href='URL de la red social'  ><img src="imagen/google.png" alt="imagen"width="15" height="15"><i class="fa fa-google"></i></a></li>

                
                <div id='buscar-top'><form action='/search' id='searchthis' method='get' style='display: inline;'>
                <input  name='q' placeholder='BUSCAR' size='30' type='text'/>

                </form></div>
			</ul>
		</nav>

	</header>
	<script type="text/javascript" src="registro.php"></script>
	
	<section id="main-content">
	
	
		<form class="form">
        
			<!--TITULO-->
			<h1 class="titulo">Registrarse</h1>
			
			<!--registro-->
			<input class="cajas" type="text" placeholder="Nick" required maxlength="30">
			<input class="cajas" type="text" placeholder="Nombre" required maxlength="30">
			<input class="cajas" type="text" placeholder="Apellido" required maxlength="30">
			<input class="cajas" type="email" placeholder="Email" required maxlength="30">
			<input class="cajas" type="password" placeholder="Password" required maxlength="30">
			<form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
				<input type="file" name="imagen1" />
				<input type="submit" name="subir-imagen" value="Enviar imagen" />
			</form>
			
			<!--TERMINOS-Y-CONDICIONES-->
			<p class="termino1"><input type="checkbox">  Estoy de acuerdo con <a class="termino2" href="">Terminos y Condiciones</a></p>
			
			<!--BOTON-DE-REGISTRARSE-->
			<input type="submit" class="btn" value="REGISTRAR">
			
			<!--YA-TENGO-CUENTA-->
			<p class="tengo-cuenta"><a href="" class="tengo-cuenta">Ya tengo cuenta</a></p>
			
		</form>
	
	</section> <!-- / #main-content -->

	
	<?php

require_once("conexion.php");

if ($stmt = $conn->prepare("INSERT INTO mi_pequeño_blog 
(nick, nombre, apellido, email, clave) VALUES (?, ?, ?)"))
{
      $nick = $_POST['nick'];
      $nombre = $_POST['nombre'];
	  $apellido = $_POST['apellido'];
      $email = $_POST['email'];
	    $password = $_POST['password'];
	    $options = array("cost"=>4);
	    $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
            
      $stmt->bind_param("iss", $nick, $nombre, $apellido, $email, $hashPassword);
	    $stmt->execute();
  
 if (!$stmt->error){
   
         echo "<table border=1 cellspacing=0 cellpading=0 align=center BORDER BGCOLOR=#141318>
         <p><tr align=center > <td><font color=yellow ><div style=font-size:1.25em color:yellow> USUARIO REGISTRADO CON EXITO </div></td></tr></p>
              </table>"; 
                   }
}
?>
	
	
</body>
</html>