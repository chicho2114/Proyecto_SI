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
        <title>registro</title>
        
        <meta name="viewport" content="width=device-width">
        
    </head>
    <body>

        <style>
                *{
                    font-size: 14px;
                    font-family: sans-serif;
                }
                form.registro{
                    background: none repeat scroll 0 0 #F1F1F1;
                    border: 1px solid #DDDDDD;
                    margin: 0 auto;
                    padding: 25px;
                    width: 290px;
                    box-shadow:0px 0px 20px black; 
                    border-radius:10px; 
                    position:relative;
                    top:30px;
                }
                form.registro div {
                    margin-bottom: 15px;
                    overflow: hidden;
                }
                form.registro div label {
                    display: block;
                    float: left;
                    line-height: 25px;
                }
                form.registro div input[type="text"], form.registro div input[type="password"] {
                    border: 1px solid #DCDCDC;
                    float: right;
                    padding: 4px;
                }
                form.registro div input[type="submit"] {
                    background: none repeat scroll 0 0 #DEDEDE;
                    border: 1px solid #C6C6C6;
                    float: right;
                    font-weight: bold;
                    padding: 4px 20px;
                }
                
                form.registro div input[type="button"] {
                    background: none repeat scroll 0 0 #DEDEDE;
                    border: 1px solid #C6C6C6;
                    float: right;
                    font-weight: bold;
                    padding: 4px 20px;
                }
                .error{
                    color: red;
                    font-weight: bold;
                    margin: 10px;
                    text-align: center;
                }
        </style>
        
        <div id="topbar">
            <div id="izq">
                
                <img src="thebastgamer.png"/>   
                <input type="text" id="buscarTXT" />
                <a href="" ><input type="button" value="Buscar" id="Bbuscar" class="botonesB "/> </a>
                
            </div>

            <div id="der">
                <a href="login.html#toregister">
                <input type="button" class="botonesB" value="Registrate" />
                </a>
                <a href="login.html#tologin">
                <input type="button" class="botonesB" value="Logeate"  />
                </a>
            </div>
            
        </div>
        


    <form action="registrarse.php" method="post" class="registro">
    <div><b><u>Registrate</u></b></div>
    <div><label>Nombre:</label>
    <input type="text" name="nombre"></div>
    <div><label>Apellido:</label>
    <input type="text" name="apellido"></div>
    <div><label>Edad:</label>
    <input type="text" name="edad"></div>
    <div><label>Correo:</label>
    <input type="text" name="correo"></div>
    <div><label>Contraseña:</label>
    <input type="password" name="password"></div>
    <div><label>Repetir contraseña:</label>
    <input type="password" name="repassword"></div>
    <div>
    <input type="submit" name="enviar" value="Registrar"></div>
    <div> <a href="index.php" ><input type="button" name="regresar" value="Cancelar"> </a></div>
    <b></b>
    
    </form> 


        
</body>
</html>
