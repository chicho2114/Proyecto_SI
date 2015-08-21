<?php
	require("conexionBD.php");
	 
	$idusuario = $_POST['idusuario'];
	$password = $_POST['pass'];
	
	/* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función 
    htmlentities para evitar inyecciones SQL. */
	 
	$myusuario = mysql_query("select correo from usuarios where correo =  '".htmlentities($idusuario)."'",$link);
								 
	$nmyusuario = mysql_num_rows($myusuario);
	 
	 echo $idusuario . $password . $nmyusuario . "<br />";
	 
     //Si existe el usuario, validamos también la contraseña ingresada...
     if($nmyusuario != 0){
          $sql = "select correo
               from usuarios
               where correo = '".htmlentities($idusuario)."' 
               and password = '".htmlentities($password)."'";
          $myclave = mysql_query($sql,$link);
          $nmyclave = mysql_num_rows($myclave);
		  
		  //echo $idusuario . $password . $nmyusuario . "<br />"; 

          //Si el usuario y clave ingresado son correctos, creamos la sesión del mismo.
          if($nmyclave != 0){
               session_start();
               //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario
               $_SESSION["autentica"] = "SIP";
               $_SESSION["usuarioactual"] = mysql_result($myclave,0,0); //nombre del usuario logueado.
               //Direccionamos a nuestra página principal del sistema.
			   echo $_SESSION["usuarioactual"];
			   echo"<script>alert('Bienvenido a The Bast Gamers.');";
               
               header ("Location: index.php");
          }
          else{
               echo"<script>alert('La contraseña del usuario no es correcta.');
               window.location.href=\"index.php\"</script>"; 
          }
     }else{
          echo"<script>alert('El usuario no existe.');window.location.href=\"index.php\"</script>";
     }
     mysql_close($link);

?>
