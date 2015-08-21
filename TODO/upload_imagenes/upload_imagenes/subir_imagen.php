<?php 

include("registrarjuego.php");

		class s_imagen{
				var $ruta;
				var $file_tmp;
				var $file_name;
				function s_imagen($r, $f, $nf){
						$this->ruta= $r;
						$this->file_tmp=$f;
						$this->file_name=$nf;
				}
				function ver_ruta(){
					echo $this->ruta;
				}
				function ver_nombreimagen(){
					echo 	 $this->file_name;
				}
				function ver_nombretmp(){
					echo 	 $this->file_tmp;
				}
				function subir_imagen($num, $id, $opcion){ /* $num es un contador, de donde comienza la imagen, generalmente 1*/
					$uploaddir= $this->ruta;
					$tmp_name = $this->file_tmp;	
					$nombre_fichero_sin_espacios="ima".$id.$num.".jpg";      
					//ruta completa del fichero
					$uploadfile = $uploaddir . $nombre_fichero_sin_espacios; 
					//nombre del fichero   
					$file_name= 	$this->file_name;        
					if( $opcion==1 ||  $opcion==2 ){
							//compruebo si existe el directorio y si no existe lo creo
							if(!is_dir($uploaddir)){ 
								@mkdir($uploaddir, 0700); 
							}	
							/*while (file_exists($uploadfile)){
								$num++;
								 $nombre_fichero_sin_espacios="ima".$id.$num.".jpg";      
								//ruta completa del fichero
								$uploadfile = $uploaddir . $nombre_fichero_sin_espacios; 
								$file_name= 	$this->file_name;               
							} 		*/
							
							if (file_exists($uploadfile)){
								$uploadfile = $uploaddir."ima".$id.$num.".jpg";
								$file_name= $id.$num.".jpg";
							} 
							move_uploaded_file($tmp_name,$uploadfile); /*se sube la imagen */
					}
					if( $opcion==2 ){
					 	       //aquí empieza el código de creación del thumbnail
								$fuente  = $uploadfile;
								$source=$fuente; // archivo de origen
								$dest=$uploaddir."imap".$id.$num.".jpg"; // archivo de destino
								$width_d=94; // ancho de salida
								$height_d=94; // alto de salida
								list($width_s, $height_s, $type, $attr) = getimagesize($source, $info2); // obtengo información del archivo
								$gd_s = imagecreatefromjpeg($source); // crea el recurso gd para el origen
								$gd_d = imagecreatetruecolor($width_d, $height_d); // crea el recurso gd para la salida
								imagecopyresampled($gd_d, $gd_s, 0, 0, 0, 0, $width_d, $height_d, $width_s, $height_s); // redimensiona
								imagejpeg($gd_d, $dest); // graba
								// Se liberan recursos
								imagedestroy($gd_s);
								imagedestroy($gd_d);
					
					}
				}
			
		}







?>