<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="logincss/demo.css" />
        <link rel="stylesheet" type="text/css" href="logincss/style.css" />
	<link rel="stylesheet" type="text/css" href="logincss/animate-custom.css" />
        <link rel="stylesheet" type="text/css" href="logincss/index_style.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
        <div id="topbar">
            <div id="izq">
                
                <img src="thebastgamer.png"/>   
                <input type="text" id="buscarTXT" />
                <a href="" ><input type="button" value="Buscar" id="Bbuscar" class="botonesB "/> </a>
                
            </div>

            <div id="der">

                <a href="index.php">
                <input type="button" class="botonesB" value="Inicio"  />
                </a>
            </div>
            
        </div><!--/ Codrops top bar -->

            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login.php" method="post" autocomplete="on" > 
                                <h1>Inicia sesion</h1> 
                                <p> 
                                    <label for="username" data-icon="u" > Correo: </label>
                                    <input id="username" name="idusuario" required type="text" placeholder="correo@ejemplo.com"/>
                                </p>
                                <p> 
                                    <label for="pass" data-icon="p"> Contraseña: </label>
                                    <input id="pass" name="pass" required type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" name="iniciar" value="Iniciar" /> 
								</p>
                                <p class="change_link">
									No te has registrado aun?
									<a href="#toregister" >Registrate</a>
								</p>
                            </form>
                            

                        </div>

                        <div id="register" class="animate form">
                            <form  action="registrarse.php" autocomplete="on" method="post" > 
                                <h1> Registrate </h1> 
                                <p> 
                                    <label for="nombre" data-icon="u">Nombre:</label>
                                    <input id="nombre" name="nombre" required type="text" placeholder="Nombre" />
                                </p>
                                <p> 
                                    <label for="apellido" data-icon="u">Apellido:</label>
                                    <input id="apellido" name="apellido" required type="text" placeholder="Apellido" />
                                </p>
                                <p> 
                                    <label for="edad" data-icon="u">Edad:</label>
                                    <input id="edad" name="edad" required type="text" placeholder="Edad" />
                                </p>
                                <p> 
                                    <label for="correo" data-icon="e" > Correo:</label>
                                    <input id="correo" name="correo" required type="text" placeholder="correo@ejemplo.com"/> 
                                </p>
                                <p> 
                                    <label for="password" data-icon="p">Contraseña:</label>
                                    <input id="password" name="password" required type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="repassword" data-icon="p">Repetir contraseña: </label>
                                    <input id="repassword" name="repassword" required type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
                                    <input type="submit" name="registrar" value="Registrar"/> 
								</p>
                                <p class="change_link">  
									Ya estas registrado?
									<a href="#tologin" class="to_register"> Inicia sesion</a>
								</p>
                            </form>
                           
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>