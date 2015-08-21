<?php 
	include("subir_imagen.php");
	if(isset($_POST["k"])){
				extract($_POST);
				
				$tmp= $_FILES['file']['tmp_name']; /* la imagen que se paso por formulario. no cambiar */
				$foto_name= $_FILES['file']['name']; /* el nombre original de la imagen.  no cambiar  */
				$num=2;	/* es un numero inicial que cuenta las imagenes subidas, colocar 1*/	
				$ruta= "imagenes/"; /*si no existe la crea */
				$id= 1;		
				$imagen= new s_imagen($ruta,$tmp,$foto_name); /* se crea un nuevo objeto s_imagen */
				$imagen->subir_imagen($num, $id,2); /* se aplica el procedimiento subir_imagen. el tercer parametro puede ser 1 ó 2. 1: genera imagen normal. 2: genera 2 imagenes, una pequeña y otra grande */
	}
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
  <link rel="stylesheet" href="css/jquery-ui.css"id="theme">
    <link rel="stylesheet" href="js/jquery.fileupload-ui.css">
    <script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script  src="js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="js/jquery.fileupload.js"></script>
    <script src="js/jquery.fileupload-ui.js"></script>
    <style>
		.file_upload {
		 -moz-border-radius: 3px;
		  -webkit-border-radius: 3px;
		  border-radius: 3px;		  
		   width:147px;
		   height: 50px;
		   background-color:transparent;
		 }
		
	</style>
     <table id="files" align="center" style="margin:0 auto">
        <tr valign="baseline">
            <td colspan="2">
            </td>
        </tr>
    </table>
	<form id="file_upload" action="imagen_test.php"  method="POST" enctype="multipart/form-data" >
             	 	<input type="file" name="file" multiple  onChange="subm();" title="Haz click para elegir la imagen">
           		<div><img  src="img/upload_img.gif" width="150" height="50" /></div><br>
					<input name="j" id="j" style="display:none" type="submit"> <input name="k" id="k" type="hidden" value="">
         				  
     </form>

	 <script>
        /*global $ */
		function subm(){
			 $('#j').click();
			
		}
        $(function () {
            $('#file_upload').fileUploadUI({
                uploadTable: $('#files'),
                downloadTable: $('#files'),
                buildUploadRow: function (files, index) {
                    return $('<tr><td>' + files[index].name + '<\/td>' +
                    '<td class="file_upload_progress"><div><\/div><\/td>' +
                    '<td class="file_upload_cancel">' +
                    '<button class="ui-state-default ui-corner-all" title="Cancel">' +
                    '<span class="ui-icon ui-icon-cancel">Cancel<\/span>' +
                    '<\/button><\/td><\/tr>');
                },
                buildDownloadRow: function (file) {
                    return $('<tr><td nowrap align="right" class="texto" style="padding-top: 6px;"><b>Imagen:</b><\/td>' +
                                            '<td>' + file.name + '</td>' +
                                            '<\/tr></table>');
                }
            });
        });
</script>
</body>
</html>