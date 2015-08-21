<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>

<?php 
 	$nombre = $_REQUEST['nombre']; 
	$apellido = $_REQUEST['apellido'];
    $edad = $_REQUEST['edad'];
    $correo = $_REQUEST['correo'];
    /* @var $password type */
    $password = $_REQUEST['password'];
	$repassword = $_REQUEST['repassword'];

 	echo $nombre . $apellido . $edad . $correo . $password . $repassword . '<br/n>';
	echo $_REQUEST["password"] . $_REQUEST["correo"];
	
?>

<body>
</body>
</html>