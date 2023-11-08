<!DOCTYPE html>
<head>
  <meta charset="utf-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    <meta name="description" content="">    <meta name="author" content="">    <title>Perfil</title>    <!-- Custom fonts for this template-->    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">    <link        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"        rel="stylesheet">    <!-- Custom styles for this template-->    <link href="sb-admin-2.min.css" rel="stylesheet">

</head>
<body class="bg-gradient-primary"> 
<?php include 'funcionesBD.php';
        ?>
 
        <?php
        //Inicio la sesión
        session_start();


        if (!isset($_SESSION["usuarioAutenticado"])){

            
          //echo "no existe";
         //  echo "si no existe, envio a la página de autentificacion";
            header("Location: as.html");
            //ademas salgo de este script
            exit();
        }else {
            //autenticado, hacemos tooodo lo que se requiere
            $usuarioAutenticado= $_SESSION["usuarioAutenticado"];
            $rol=$_SESSION["rolusuario"];
            $med= $_SESSION["IDusu"];
        }
        ?>     
<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                          <div class="col-lg-1.5 d-none d-lg-block"> <img class="img-fluid"    src="assets/img/fondos/perfil.jpg"/></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                   <div class="text-center">
                                      <h2 class="h2 text-gray-900 mb-4">Bienvenido.</h2>
                                        <h5 class="h5 text-Blue-500 mb-6">Información Personal.</h5>
                                    </div>
                          <!-- inicio de la tabla -->          
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Usuario</th>
                                            <th>Nombre</th>
                                            <th>Password</th>
                                            <th>email</th>
                                            <th>Edad</th>
                                            <th>Ciudad</th>
                                            <th>Calle</th>
                                            <th>C.P.</th>
                                           <th>Telefono</th>
                                    </thead>
         <?php 
                $conn = conecta();
                $sql ="SELECT * FROM usuario WHERE Nombre='$med'";
                $resultado = mysqli_query($conn, $sql);

                    while ($b1 = $resultado -> fetch_array()) {
                            
                            $c1 = $b1["usuario"];
                            $c2 = $b1["Nombre"];
                            $c3 = $b1["password"];
                            $c4 = $b1["email"];
                            $c5 = $b1["Edad"];
                            $c6 = $b1["Ciudad"];
                            $c7 = $b1["Calle"];
                            $c8 = $b1["CP"];
                            $c9 = $b1["Telefono"];

                            

                     echo "<tr>";
                            
                            echo "<td>".$c1.""."</td>";
                            echo "<td>".$c2.""."</td>";
                            echo "<td>".$c3.""."</td>";
                            echo "<td>".$c4.""."</td>";
                            echo "<td>".$c5.""."</td>";
                            echo "<td>".$c6.""."</td>";
                            echo "<td>".$c7.""."</td>";
                            echo "<td>".$c8.""."</td>";
                            echo "<td>".$c9.""."</td>";

                            echo "</tr>";
                    }
                ?>
         </table>
		<form action="control2.php" method="GET" name="formulario" onsubmit='return validarcomentario1()'>
	

	<div class="form-group">
	<input type="Text" class="form-control form-control-user" name="comentario" size="8" placeholder="Deja tu comentario.">
	</div>
        <input type="hidden" name="formulario" value="comentar"><input type="Submit" value="Enviar" class="btn btn-primary btn-              user btn-block"><br>

		<a href="Index1.php"> <input type="button" name="volver" value="Regresar al inicio."  class="btn btn-primary btn-user                 btn-block"> </a>
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