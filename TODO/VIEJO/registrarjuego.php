<?php

        /* @var $_POST type */
        $titulo = $_REQUEST['titulo']; 
	$categoria = $_REQUEST['categoria'];
        $rating = $_REQUEST['rating'];
        $descripcion = $_REQUEST['descripcion'];
		
		
		
	$reqlen   = strlen($titulo) * strlen($categoria) * strlen($rating) * strlen($descripcion);
	if ($reqlen > 0) {
			require("conexionBD.php");
                        $sql = "INSERT INTO videojuegos (codigo, titulo, categoria, rating, descripcion) VALUES (NULL,'$titulo', '$categoria' , '$rating' , '$descripcion' );";
			mysql_query($sql);
			mysql_close($link);
 
                        $query = mysql_query($sql);

			echo 'Se ha registrado exitosamente.';
                        echo 'Se han modificado ' . mysql_affected_rows() . ' filas';
                        echo $titulo. $categoria . $rating . $descripcion . '<br />';
		 
	} else {
		echo 'Por favor, rellene todos los campos requeridos.';
        }
        ?>

