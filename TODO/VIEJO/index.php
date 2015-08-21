<? include("seguridad.php"); ?>




<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="index_style.css" type="text/css"/>
        <meta charset="UTF-8">
        <title>portada</title>
        
        <meta name="viewport" content="width=device-width">
         
    </head>
    <body>
   
        <div id="topbar">
            <div id="izq">
                
                <img src="thebastgamer.png"/>   
                <input type="text" id="buscarTXT" />
                <a href="" ><input type="button" value="Buscar" id="Bbuscar" class="botonesB "/> </a>
                
            </div>

            <div id="der">
			
	
			 
                <a href="logearse.php#toregister"> <input type="submit" class="botonesB" value="Registrate"  /> </a>
                
                <a href="logearse.php#tologin" > <input type="submit" class="botonesB" value="Logeate" /> </a>

          
            </div>
            
        </div>
            <div id="ultimos">
			
				<?php if( $_SESSION["autentica"] === "SIP")
				{ 	require("conexionBD.php"); 
					echo "Bienvenido  " . $_SESSION["usuarioactual"] . "<br />"; 
				?>
                
                <?php 
					}
					else
					{
					echo "Usuarios";
				}
				?>
                
            </div>
            
            <div id="top_juegos">
                
                <div class="categorias" id="Shooters">
                    <img class="iconos" src="iconos/shooters.png">
                    <p class="titulos" >Shooters</p>
                </div>
                <div class="categorias" id="Accion">
                    <img class="iconos" src="iconos/accion.png">
                    <p class="titulos" >Acción</p>
                </div>
                <a href="registro.php"  ><div  class="categorias" id="Aventura">
                    <img class="iconos" src="iconos/aventura.png">
                    <p class="titulos" >Aventura</p>
                </div> </a>
                <a href="registrojuego.php" ><div class="categorias" id="Deportivos">
                    <img class="iconos" src="iconos/deportivos.png">
                    <p class="titulos" >Deportivos</p>
                </div> </a>
                    
                <div class="categorias" id="Carreras">
                    <img class="iconos" src="iconos/carreras.png">
                    <p class="titulos" >Carreras</p>
                </div>
                <div class="categorias" id="Otros">
                    <img class="iconos" src="iconos/otros.png">
                    <p class="titulos" >Otros</p>
                </div>

            </div>
            <div id="publicaciones">
			
			
			
			</div>

            
        
</body>
</html>
