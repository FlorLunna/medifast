<html>
<head>
  <meta charset="utf-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    <meta name="description" content="">    <meta name="author" content="">    <title>Iniciar sesion</title>    <!-- Custom fonts for this template-->    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">    <link        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"        rel="stylesheet">    <!-- Custom styles for this template-->    <link href="sb-admin-2.min.css" rel="stylesheet">

</head>
<body class="bg-gradient-primary">      
<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                          <div class="col-lg-6 d-none d-lg-block"> <img class="img-fluid"    src="assets/img/fondos/login.png"/></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                   <div class="text-center">
                                      <h1 class="h4 text-gray-900 mb-4">Inicia Sesion.</h1>
                                    </div>
   <?php if (isset($_GET["errorusuario"]) && ($_GET["errorusuario"]=="si")){
			?>
		
		<span style="color:ffffff"><b>Datos incorrectos</b></span>
		<?php }else{?>
		<span bgcolor=#cccccc>  Introduce tu clave de acceso
		<?php }?></td>
<form action="control2.php" method="GET" name="formulario">
	

	<div class="form-group">
	<input type="Text" class="form-control form-control-user" name="usuario" size="8" placeholder="Ingresa tu nombre">
	</div>
	<div class="form-group">
	<input type="password" class="form-control form-control-user" name="contrasena" size="8"  placeholder="Contraseña"></div>
	
	
	
        <input type="hidden" name="formulario" value="login"><input type="Submit" value="Entrar" class="btn btn-primary btn-              user btn-block"><br>

	
		
        
		<center>¿Aún no eres usuario?</center>
		<a href="registrar.php"> <input type="button" name="registro" value="Registrate"  class="btn btn-primary btn-user                 btn-block"> </a>
        <td colspan="2" align="center">
        
    
        </td>
        <br><center>Volver al inicio</center>
        <a href="index.html"> <input type="button"  value="Volver"  class="btn btn-primary btn-user                 btn-block"> </a>
        <td colspan="2" align="center">
        
    
        </td>
                    </form>
                          </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
      
      
<script src="vendor/jquery/jquery.min.js"></script>    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>    <!-- Core plugin JavaScript-->    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>    <!-- Custom scripts for all pages-->    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>