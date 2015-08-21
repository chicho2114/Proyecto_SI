<?
include("seguridad.php");
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>The bast gamers</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" lang = "es"/>
<link rel="stylesheet" href="css/style.css" type="text/css"  />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="iecss.css" /><![endif]-->
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
<script type="text/javascript" src="js/boxOver.js"></script>


</head>
<body>
<!-- Shell -->
<div class="shell">
  <!-- Header -->
  <div id="header">
    <h1 id="logo"><a href="#">THE BAST GAMERS </a></h1>
    <!-- Cart -->
	<?php if(isset($_SESSION["usuarioactual"])){  ?>
	 
	
	
	<div id="cart"> <a href="#" class="cart-link">Carrito de compra</a>
    <div class="cl">&nbsp;</div>
    <span>Cantidad: <strong>4</strong></span> &nbsp;&nbsp; <span>Costo: <strong>$250.99</strong></span> </div>
	 
	   
	   <?php  } else{  ?> 
	   
	<div id="cart"> <strong>Bienvenido!</strong>
    <div class="cl">&nbsp;</div>
    <span><a href="registro.php" class="cart-link">Deseas registrarte? </a> </span> &nbsp;&nbsp; </div>
	   
	   <?php } ?>
    <!-- End Cart -->
    <!-- Navigation -->
    <div id="navigation">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="soporte.php">Soporte</a></li>
        <li><a href="login.php" class="active">Mi cuenta</a></li>
        <li><a href="tienda.php">Tienda</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </div>
    <!-- End Navigation -->
  </div>
  <!-- End Header -->
  <!-- Main -->
  <div id="main">
    <div class="cl">&nbsp;</div>
    <!-- Content -->
    <div id="content">
      <!-- Content Slider -->
      <div id="slider" class="box">
        <div id="slider-holder">
          <ul>
            <li><a href="index.php"><img src="css/images/banner1.jpg" alt="" /></a></li>
            <li><a href="index.php"><img src="css/images/banner2.jpg" alt="" /></a></li>
            <li><a href="index.php"><img src="css/images/banner3.jpg" alt="" /></a></li>
            <li><a href="index.php"><img src="css/images/banner4.jpg" alt="" /></a></li>
          </ul>
        </div>
        <div id="slider-nav"> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> </div>
      </div>
      <!-- End Content Slider -->
      <!-- Products -->
      <div class="products">
        <div class="cl">&nbsp;</div>
        <ul>
		
        

		      <div class="center_title_bar">Iniciar sesión</div>
			   <div class="center_prod_box_big">
				<div class="contact_form">
				  <form id="form1" name="form1" method="post" action="logearse.php">
				    <div class="form_row">
					<p>
				      <label for="textfield" class= "contact">Correo:</label>
				      <input type="text" name="idusuario" id="textfield" />
			        </p>
					</div>
					<div class="form_row">
				    <p>
				      <label for="password" class= "contact">Contraseña:</label>
                      <input name="pass" type="password" required="required" id="password" />
				    </p>
					</div>
					<div class="form_row">
				    <p>
				      <input type="reset" name="reset" id="reset" value="Restablecer" />
                      <input type="submit" name="submit" id="submit" value="Enviar" />
				    </p>
					</div>
				  </form>
				  
				  <a href="registro.php">No estas registrado? Registrate.</a> 
				
				 
				

				</div>
				<div class="botones"> <a href="index.php" class="prod_buy">Inicio</a> </div>
				</div>
				
					
					<!-- end of center content -->
          
        </ul>
        <div class="cl">&nbsp;</div>
      </div>
      <!-- End Products -->
    </div>
    <!-- End Content -->
    <!-- Sidebar -->
    <div id="sidebar">
      <!-- Search -->
      <div class="box search">
        <h2>Buscar juego <span></span></h2>
        <div class="box-content">
          <form action="consultas.php?opcion=t" method="post">
            <label>Titulo</label>
            <input type="text" class="field" />
            <label>Categoria</label>
            <select class="field">
              <option value="">-- Seleccionar categoria --</option>
            <option value="">Acci�n</option>
            <option value="">Aventura</option>
			<option value="">Deportivos</option>
			<option value="">Carreras</option>
			<option value="">Infantiles</option>
			<option value="">educativos</option>
			<option value="">Rol & RPG</option>
			<option value="">Estrategia</option>
			<option value="">Terror</option>
			<option value="">Shooters</option>
			<option value="">Combate</option>
			<option value="">Simulacion</option>
			<option value="">Otros</option>
            </select>
            <div class="inline-field">
              <label>Precio</label>
              <select class="field small-field">
                <option value="">Bs.250</option>
				<option value="">Bs.500</option>
                <option value="">Bs.750</option>
                <option value="">Bs.1000</option>
                <option value="">Bs.1250</option>
              </select>
              <label>hasta:</label>
              <select class="field small-field">
                <option value="">Bs.500</option>
                <option value="">Bs.750</option>
                <option value="">Bs.1000</option>
                <option value="">Bs.1250</option>
                <option value="">Bs.1500</option>
              </select>
            </div>
            <input type="submit" class="search-submit" value="Buscar" />
            <p> <a href="#" class="bul">Busqueda avanzada</a><br />
              <a href="#" class="bul">Contactar atencion al cliente</a> </p>
          </form>
        </div>
      </div>
      <!-- End Search -->
      <!-- Categories -->
      <div class="box categories">
        <h2>Categorias <span></span></h2>
        <div class="box-content">
          <ul>
            <li><a href="#">Acci�n</a></li>
            <li><a href="#">Aventura</a></li>
            <li><a href="#">Deportivos</a></li>
            <li><a href="#">Carreras</a></li>
            <li><a href="#">Infantiles</a></li>
            <li><a href="#">Educativos</a></li>
            <li><a href="#">Rol & RPG</a></li>
            <li><a href="#">Estrategia</a></li>
            <li><a href="#">Terror</a></li>
            <li><a href="#">Shooters</a></li>
            <li><a href="#">Combate</a></li>
            <li><a href="#">Simulaci�n</a></li>
            <li class="last"><a href="#">Otros</a></li>
          </ul>
        </div>
      </div>
      <!-- End Categories -->
    </div>
    <!-- End Sidebar -->
    <div class="cl">&nbsp;</div>
  </div>
  <!-- End Main -->
  <!-- Side Full -->
  <div class="side-full">
    <!-- More Products -->
    <div class="more-products">
      <div class="more-products-holder">
        <ul>
          <li><a href="#"><img src="css/images/Estrategia.png" alt="" /></a></li>
          <li><a href="#"><img src="css/images/simulacion.png" alt="" /></a></li>
          <li><a href="#"><img src="css/images/combate.png" alt="" /></a></li>
          <li><a href="#"><img src="css/images/infantiles.png" alt="" /></a></li>
          <li><a href="#"><img src="css/images/terror.png" alt="" /></a></li>
          <li><a href="#"><img src="css/images/accion.png" alt="" /></a></li>
          <li><a href="#"><img src="css/images/aventura.png" alt="" /></a></li>
          <li><a href="#"><img src="css/images/carreras.png" alt="" /></a></li>
          <li><a href="#"><img src="css/images/deportivos.png" alt="" /></a></li>
          <li class="last"><a href="#"><img src="css/images/shooters.png" alt="" /></a></li>
        </ul>
      </div>
      <div class="more-nav"> <a href="#" class="prev">Anterior</a> <a href="#" class="next">Siguiente</a> </div>
    </div>
    <!-- End More Products -->
    <!-- Text Cols -->
    <div class="cols">
      <div class="cl">&nbsp;</div>
      <div class="col">
        <h3 class="ico ico1">Envio internacional</h3>
        <p>Si gustas, puedes hacer una compra y hacer un envio internacional. Debes consultar la informacion al respecto y saber sobre la gestion de pago.</p>
        <p class="more"><a href="#" class="bul">Leer mas...</a></p>
      </div>
      <div class="col">
        <h3 class="ico ico2">Atencion en linea</h3>
        <p>Si tienes alguna duda o inquietud con respecto a algun servicio, puedes comunicarte con la atencion al cliente en linea.</p>
        <p class="more"><a href="#" class="bul">Leer mas...</a></p>
      </div>
      <div class="col">
        <h3 class="ico ico3">Realiza un regalo</h3>
        <p>Mediante nuestro sistema puedes dar obsequios a quien quieras. Solo debes de llenar un formulario con los datos pertinentes.</p>
        <p class="more"><a href="#" class="bul">Leer mas...</a></p>
      </div>
      <div class="col col-last">
        <h3 class="ico ico4">Carrito de compra</h3>
        <p>Si no quieres o puedes comprar aun, pero estas interesado en algun producto, puedes almacenarlo en el carrito de compra.</p>
        <p class="more"><a href="#" class="bul">Leer mas...</a></p>
      </div>
      <div class="cl">&nbsp;</div>
    </div>
    <!-- End Text Cols -->
  </div>
  <!-- End Side Full -->
  <!-- Footer -->
  <div id="footer">
    <p class="left"> <a href="index.php">Inicio</a> <span>|</span> <a href="#">Soporte</a> <span>|</span> <a href="#">Mi cuenta</a> <span>|</span> <a href="#">Tienda</a> <span>|</span> <a href="#">Contacto</a> </p>
    <p class="right"> &copy; 2014 The Bast Gamers. Elaborado por:  Argenis Garc�a | Benito Camejo</p>
  </div>
  <!-- End Footer -->
</div>
<!-- End Shell -->
<div align=center><a href="#"></a></div></body>
</html>
