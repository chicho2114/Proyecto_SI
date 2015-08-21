<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="index_style.css" type="text/css"/>
        <link href="formularios.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        
        <title>Registro videojuego</title>
    </head>
    <body>
    
<style>
  .thumb {
    height: 75px;
    border: 1px solid #000;
    margin: 10px 5px 0 0;
  }
</style>
        
        
<div id="topbar">
            <div id="izq">
                
                <img src="thebastgamer.png"/>   
                <input type="text" id="buscarTXT" />
                <a href="" ><input type="button" value="Buscar" id="Bbuscar" class="botonesB "/> </a>
                
            </div>

            <div id="der">
                
                <a href="index.php"> <input type="submit" class="botonesB" value="Inicio"  /> </a>
                

          
  </div>
            
        </div>
        
        
    <form action="registrarjuego.php" method="post" enctype="multipart/form-data" class="registro">
        <div><b><u>Registrar videojuego</u></b></div>
        <div><label>Nombre:</label>
        <input name="nombre" type="text" required size="30"></div>
        <div>
          <label for="select">Categoria:</label>
          <select name="select" size="1" required id="select">
            <option>Otros</option>
            <option>Acción</option>
            <option>Shooters</option>
            <option>Deportivos</option>
            <option>Aventura</option>
            <option>Carreras</option>

          </select> 
      </div>
        <div><label for="fileField">Imagen:</label>
        <input name="fileField" type="file" required="required" id="files" /><br />
<output id="list-miniatura"></output>
<script>
  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object
 
    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {
 
      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }
 
      var reader = new FileReader();
 
      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['Tamaño: ', escape(theFile.size), ' bytes <br /> type: ', escape(theFile.type), '<br /><img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/><br />'].join('');
          document.getElementById('list-miniatura').insertBefore(span, null);
        };
      })(f);
 
      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }
 
  document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
       
      
      <div>
        <div><label>Descripcion:</label>
        <textarea  name="comentario" cols="33" rows="10" required="required" ></textarea></div>
        
        <input type="submit" name="enviar" value="Registrar"></div>
        <div> <a href="index.php" ><input type="button" name="regresar" value="Cancelar"> </a></div>
        <b></b>
    
    </form> 

        
    </body>
</html>
