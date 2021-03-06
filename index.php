 <?php
require 'admin/config.php'

?>
<?php
$servername = "localhost";
$database = "mi pequeño blog";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);

    ?>  

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

/* Logo */
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


</style>
							<!--HTML-->
<body>
	
	<header id="main-header">
		
		<a id="logo-header" href="#">
			<span class="site-name"><img src="imagen/calaveras.png" alt="imagen"width="40" height="40"></span>
			<span class="site-desc">Daniel Rico Rodriguez</span>
		</a> <!-- / #logo-header -->
          <!-- barra de navegacion-->
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
                </div>
			</ul>
            
		</nav><!-- / nav -->
        

	</header><!-- / #main-header -->

	
	<section id="main-content">
	
		<article>
			<header>
				<h1>Mi primer Blog</h1>
			</header>
			
			<img src="https://www.enter.co/wp-content/uploads/2021/02/4401280-768x432.jpg" alt="Programación" />
			
			<div class="content">
				

                <p></p>
			</div>
			
		</article> <!-- /article -->
	
	</section> <!-- / #main-content -->

	
	
	
	
</body>
</html>