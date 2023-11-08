<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">    
     <meta http-equiv="X-UA-Compatible" content="IE=edge">    
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
     <meta name="description" content="">   
     <meta name="author" content="">    
     <title>Consulta</title>    <!-- Custom fonts for this template-->    
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">   
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"                             rel="stylesheet">    <!-- Custom styles for this template-->    
     <link href="sb-admin-2.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

 <!-- PHP -->
        <?php include 'funcionesBD.php';
        ?>
 
        <?php
        //Inicio la sesión
        session_start();


        if (!isset($_SESSION["usuarioAutenticado"])){

            
          //echo "no existe";
         //  echo "si no existe, envio a la página de autentificacion";
            header("Location: login.php");
            //ademas salgo de este script
            exit();
        }else {
            //autenticado, hacemos tooodo lo que se requiere
            $usuarioAutenticado= $_SESSION["usuarioAutenticado"];
            $rol=$_SESSION["rolusuario"];
        ?>
      </head>
      <body class="bg-gradient-primary">
        <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">


                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                          <div class="col-lg-1.5 d-none d-lg-block"> <img class="img-fluid"    src="assets/img/fondos/menu.jpg"/></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                   <div class="text-center">
                                      <h2 class="h2 text-gray-900 mb-4">Bienvenido.</h2>
                                        <h5 class="h5 text-Blue-500 mb-6">Información de clientes.</h5>
                                    </div>
        
                                <table id="datatablesSimple"class="table table-bordered"idth="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Usuario</th>
                                            <th>Contraseña</th>
                                            <th>Correo</th>
                                            <th>Edad</th>
                                            <th>Ciudad</th>
                                            <th>Calle</th>
                                            <th>CP</th>
                                            <th>Telefono</th>
                                
                                    </thead>
                <!--codigo para visualizar la tabla de usuarios del sistema-->

                <?php 
                $conn = conecta();
                $sql ="SELECT * FROM usuario";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo "<br> Registro existentes en la tabla de usuario";
                    echo "<br>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                            
                            echo "<td>".$row["usuario"]."</td>";
                            echo "<td>".$row["Nombre"]."</td>";
                            echo "<td>".$row["password"]."</td>";
                            echo "<td>".$row["email"]."</td>";
                            echo "<td>".$row["Edad"]."</td>";
                            echo "<td>".$row["Ciudad"]."</td>";
                            echo "<td>".$row["Calle"]."</td>";
                            echo "<td>".$row["CP"]."</td>";
                            echo "<td>".$row["Telefono"]."</td>";

                            echo "</tr>";

                    }
                } else {
                    echo "0 results";
                }
                ?>
                </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js admin/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets admin/demo/chart-area-demo.js"></script>
        <script src="assets admin/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js admin/datatables-simple-demo.js"></script>
    <?php }?>
    </body>
</html>
