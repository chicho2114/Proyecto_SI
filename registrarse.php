        <?php
        /* @var $_POST type */
        $nombre = $_POST['nombre']; 
		$apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $correo = $_POST['correo'];
        /* @var $password type */
        $password = $_POST['password'];
		$repassword = $_POST['repassword'];
	 echo $nombre. $apellido . $password . $edad . $correo .'<br />';
	$reqlen   = strlen($_POST['correo']) * strlen($_POST['password']) * strlen($_POST['repassword']);
	if ($reqlen > 0) {
		if ($_POST['password'] === $_POST['repassword']) {
			require("conexionBD.php");
			/*$password = md5($password);*/
                        $sql = "INSERT INTO usuarios(nombre, apellido, edad, correo, password) VALUES ('$nombre', '$apellido' , '$edad' , '$correo' , '$password' )";
			mysql_query($sql);
			mysql_close($link);


			echo 'Se ha registrado exitosamente.';
			
			echo '	<form action="index.php" id="formulario">
						<input type="submit" value="Volver" />
					</form>';
                        echo 'Se han modificado ' . mysql_affected_rows() . ' filas';
                        /*echo $nombre. $apellido . $password . '<br />';*/
		} else {
			echo 'Por favor, introduzca dos contraseñas identicas.';
		}
	} else {
		echo 'Por favor, rellene todos los campos requeridos.';
        }
        ?>