 <?php
 require_once 'Conexion.php';
   public function guardar(){
      $conexion = new Conexion();
	  public function getNombre() {
		return $this->nombre;
	 }
	 public function getNick() {
		return $this->nick;
	 }
	 public function getApellidos() {
		return $this->apellidos;
	 }
	 public function getEmail() {
		return $this->email;
	 }
	 public function getPassword() {
		return $this->password;
	 }
	 public function getImagen() {
		return $this->imagen;
	 }
	 /******/
	 public function setNombre($nombre) {
		$this->nombre = $nombre;
	 }
	 public function setNick($nick) {
		$this->nick = $nick;
	 }
	 public function setApellidos($apellidos) {
		$this->apellidos = $apellidos;
	 }
	 public function setEmail($email) {
		$this->email = $email;
	 }
	 public function setPassword($password) {
		$this->password = $password;
	 }
	 public function setImagen($imagen) {
		$this->imagen = $imagen;
	 }
	 public function __construct($nombre, $imagen, $nick, $apellidos, $email, $password) {
		$this->nombre = $nombre;
		$this->imagen = $imagen;
		$this->nick = $nick;
		$this->apellidos = $apellidos;
		$this->email = $email;
		$this->password = $password;
	 }

	 public function guardar(){
		$conexion = new Conexion();
      if($this->id) /*Modifica*/ {
         $consulta = $conexion->prepare('UPDATE ' . self::TABLA .
		 ' SET nombre = :nombre, nick = :nick, apellidos = :apellidos, email = :email,
		  password = :password, imagen = :imagen');
         $consulta->bindParam(':nick', $this->nick);
		 $consulta->bindParam(':nombre', $this->nombre);
		 $consulta->bindParam(':apellidos', $this->apellidos);
         $consulta->bindParam(':email', $this->email);
         $consulta->bindParam(':password', $this->password);
		 $extensiones = array(0=>'imagen/jpg',1=>'imagen/jpeg',2=>'imagen/png');
		$max_tamanyo = 1024 * 1024 * 8;
		if ( in_array($_FILES['imagen1']['type'], $extensiones) ) {
			echo 'Es una imagen';
			if ( $_FILES['imagen1']['size']< $max_tamanyo ) {
				echo 'Pesa menos de 1 MB';
			}
		};
         $consulta->execute();
      }else /*Inserta*/ {
         $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .
		 ' (nombre, nick, apellidos, email, password, imagen) VALUES(:nombre, :nick, :apellidos, :email, :password, :imagen)');
         $consulta->bindParam(':nick', $this->nick);
		 $consulta->bindParam(':nombre', $this->nombre);
         $consulta->bindParam(':apellidos', $this->apellidos);
		 $consulta->bindParam(':email', $this->email);
         $consulta->bindParam(':password', $this->password);
		 $consulta->bindParam(':imagen', $this->imagen);
         $consulta->execute();
         $this->id = $conexion->lastInsertId();
      }
      $conexion = null;
   }
 }
?>

	
	
</body>
</html>