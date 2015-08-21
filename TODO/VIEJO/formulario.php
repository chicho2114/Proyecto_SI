<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>



<body>
<form action="recibido.php" id="form1" name="form1" method="post">
  <p>
    <label for="textfield">nombre:</label>
    <input type="text" name="nombre" id="textfield">
  </p>
  <p>
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" id="apellido">
  </p>
  <p>
    <label for="edad">Edad:</label>
    <input type="text" name="edad" id="edad">
  </p>
  <p>
    <label for="correo">correo:</label>
    <input type="text" name="correo" id="correo">
  </p>
  <p>
    <label for="password">contraseña:</label>
    <input type="text" name="password" id="password">
  </p>
  <p>
    <label for="repassword">Repetir contraseña:</label>
    <input type="text" name="repassword" id="repassword">
  </p>
  <ul>
    <li>
      <input type="submit" name="submit" id="submit" value="Enviar">
      <input type="button" name="button" id="button" value="Cancelar">
    </li>
  </ul>

</form>

<?php 
	/*if(isset($_POST['submit']))
	{
		require("recibido.php");
	}*/
?>



</body>
</html>