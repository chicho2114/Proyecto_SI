<?php

        /* @var $_POST type */
        $titulo = $_REQUEST['titulo']; 
		$categoria = $_REQUEST['categoria'];
        $rating = $_REQUEST['rating'];
		$precio = $_REQUEST['precio'];
        $descripcion = $_REQUEST['descripcion'];
		
		
		
	$reqlen   = strlen($titulo) * strlen($categoria) * strlen($rating) * strlen($descripcion);
	if ($reqlen > 0) {
			require("conexionBD.php");
            $sql = "INSERT INTO videojuegos (codigo, titulo, categoria, rating, descripcion, precio) VALUES (NULL,'$titulo', '$categoria' , '$rating' , '$descripcion' , $precio);";
			mysql_query($sql);
			//mysql_close($link);
 
            $query = mysql_query($sql);

			echo 'Se ha registrado exitosamente.';
                        //echo 'Se han modificado ' . mysql_affected_rows() . ' filas';
                        //echo $titulo. $categoria . $rating . $descripcion . '<br />';
						 
			$sql = "select codigo from videojuegos where titulo = '".htmlentities($titulo)."' and categoria = '".htmlentities($categoria)."'";
			$myclave = mysql_query($sql,$link);
			$nmyclave = mysql_num_rows($myclave);

               //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario

              $codigo_imagen = mysql_result($myclave,0,0); //nombre del usuario logueado.
               //Direccionamos a nuestra página principal del sistema.
						 
			$target_path = "portadas/";
			$target_path = $target_path . $codigo_imagen . ".jpg";
			//basename( $_FILES['portada']['name']); //Nombre original de la imagen
			
			if(move_uploaded_file($_FILES['portada']['tmp_name'], $target_path))
			{ 
				header ("Location: index.php");
				
			} else{
				echo "Ha ocurrido un error, trate de nuevo!";
			}	
		
	} else {
		echo 'Por favor, rellene todos los campos requeridos.';
        }
?>

