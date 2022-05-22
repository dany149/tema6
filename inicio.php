<?php
session_start();
require_once("conexion.php");

//VERIFICACION DE ESCRITURA DE DATOS EN EL FORM
			if ( !isset($_POST['email'], $_POST['password']) )
            {
			
			exit('Por favor, rellene los campos de correo electrónico y contraseña!');
			} 

//  CONSULTA DE EXISTENCIA DEL USUARIO 
if ($stmt = $conn->prepare('SELECT nick, clave FROM usuarios WHERE usuario = ?'))
 {
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result();
     
     // SI EL USUARIO EXISTE EN LA TABLA SE EXTRAE 
     if ($stmt->num_rows > 0)
      {
		$stmt->bind_result($nick, $clave);
		$stmt->fetch();
        
    // VERIFICA SI LA CLAVE QUE SE EXTRAJO DE LA TABLA
    if(password_verify( $_POST['password'],$clave))
        {
            // SI COINICIDEN AMBAS CONTRASEÑAS SE INICIA LA SESION Y SE LE DA LA BIENCENIDA 
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['nick'] = $nick;
            //
            header('Location: perfil.php');
            
        } 
    
            // SI EL USUARIO EXISTE PERO EL PASSWORD NO COINCIDE IMPRIMIR EN PANTALLA PASSWORD INCORRECTO

                else { echo "  <p> </p>   <p style=text-align:center;> <img src=https://previews.123rf.com/images/liorpt/liorpt1512/liorpt151200010/49922779-notificaci%C3%B3n-contrase%C3%B1a-incorrecta-frente-a-un-c%C3%B3digo-de-fondo-verde.jpg style=width:200px;height:220px;></p>
                <p> </p>     <table border=1 cellspacing=0 cellpading=0 align=center BORDER BGCOLOR=#16DFDF>
                <tr align=center > <td ><font color=red><h2>¡PASSWORD INCORRECTO !</h2>  <a href='exit.php' >SALIR</a>  </td>    </tr>
                </table>"; }
}  


            // SI EL USUARIO NO EXISTE MOSTRAR USUARIO INCORRECTO
                else { echo "  <p> </p>   <p style=text-align:center;> <img src=https://img.myloview.es/posters/olvide-mi-nombre-de-usuario-mensaje-significa-id-de-usuario-incorrecto-introducido-ilustracion-3d-400-153162068.jpg style=width:200px;height:220px;></p>
                <p> </p>     <table border=1 cellspacing=0 cellpading=0 align=center BORDER BGCOLOR=#16DFDF>
                <tr align=center > <td ><font color=red><h2>¡USUARIO INCORRECTO !</h2>  <a href='exit.php' >SALIR</a>  </td>    </tr>
                </table>"; }

	$stmt->close();
}



/*captcha*/

if ($_POST['g-recaptcha-response'] == '') {
echo "Captcha invalido";
} else {
$obj = new stdClass();
$obj->secret = "6LfRSNISAAAAACKaHw2e-JvgeG-3src_dRGpL-Ql";
$obj->response = $_POST['g-recaptcha-response'];
$obj->remoteip = $_SERVER['REMOTE_ADDR'];
$url = 'https://www.google.com/recaptcha/api/siteverify';

$options = array(
'http' => array(
'header' => "Content-type: application/x-www-form-urlencoded\r\n",
'method' => 'POST',
'content' => http_build_query($obj)
)
);
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

$validar = json_decode($result);

/* FIN DE CAPTCHA */

if ($validar->success) {
$email = trim($_POST['email']);
$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
$nick = trim($_POST['nick']);
$password = trim($_POST['password']);

$consulta = "E-mail: " . $email . " Nombre: " . $nombre . " Apellido: " . $apellido .
 "password: " . $password;

mail("ejemplo@gmail.com", "Contacto desde Formulario", $consulta);
} else {
echo "Captcha invalido";
}
}
?>