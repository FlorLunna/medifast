<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Actualizar usuarios</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css admin/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <?php include 'control2.php';
        ?>
    </head>
    <body class="sb-nav-fixed">
        
            <div id="layoutSidenav_content">
                <main>

                    <!-- zona de contenidos a desplegar-->
                    <div class="card-header">
                        <i class="fas fa-user fa-fw"></i>


                    <?php
                    $usuarioAutenticado = $_SESSION['usuarioAutenticado'];
                    echo "<b>Usuario:</b> ".$usuarioAutenticado ."&nbsp;&nbsp;&nbsp;&nbsp; ";
                   



                    $id_usuario= $_GET['IDusu'];

                    if ($conn=conecta()) {
                        if (isset($_GET['actualizando'])) {
                            if (isset($_GET["nombre"])) {
                                $usu=$_GET["nombre"];
                            }
                            if (isset($_GET["usuario"])) {
                                $apellidos=$_GET["usuario"];
                            }
                            if (isset($_GET["Edad"])) {
                                $edad=$_GET["Edad"];
                            }
                            if (isset($_GET["Numero"])) {
                                $tel=$_GET["Numero"];
                            }
                            if (isset($_GET["email"])) {
                                $correo=$_GET["email"];
                            }
                            if (isset($_GET['contrasena'])) {
                                $contra=$_GET["contrasena"];
                            }
                            if (isset($_GET["rol"])) {
                                $rol=$_GET["rol"];
                            }
                        $sql = "UPDATE usuario SET nombre='$usu', apellidos='$apellidos', edad='$edad', telefono='$tel', email='$correo', password='$contra', rol='$rol' WHERE id_usuario='$id_usuario'";
                        //echo "$sql";
                        if (mysqli_query($conn, $sql)){
                            echo "<b><br>Registro actualizado correctamente</br></b>";
                        } else {
                            echo "Error al actualizar el registro: " .mysqli_error($conn);
                        }
                        }
                    $sql = "SELECT * FROM usuario WHERE Nombre=".$id_usuario;
                    $result= mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                    }
                    }
                    ?>
                <br><b><div style="color: blue;" align="center">Ingrese sus datos</b></div>
                <br>
                <form action="actualizausuario.php" method="get">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-mb-0">
                                <input class="form-control" name="nombre" id="inputFirstName" type="text" placeholder="Nombre" value="<?php echo $row["nombre"]; ?>"/>
                                <label for="inputFirstName">Nombre</label>
                            </div>
                        </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input class="form-control"name="apellidos"id="inputLastName"type="text" placeholder="Apellidos" value="<?php echo $row["apellidos"];?>"/>
                    <label for="inputLastName">Apellidos</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input class="form-control"name="edad"id="inputLastName"type="int" placeholder="Edad" value="<?php echo $row["edad"];?>"/>
                    <label for="inputLastName">Edad</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input class="form-control"name="telefono"id="inputLastName"type="int" placeholder="Teléfono" value="<?php echo $row["telefono"];?>"/>
                    <label for="inputLastName">Teléfono</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input class="form-control"name="correo"id="inputFistName"type="text" placeholder="Correo electrónico" value="<?php echo $row["email"];?>"/>
                    <label for="inputFirstName">Email</label>
                    </div>
                </div>
                </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input class="form-control"name="contrasena"id="inputLastName"type="text" placeholder="Contraseña" value="<?php echo $row["password"];?>"/>
                    <label for="inputLastName">Contraseña</label>
                    </div>
                </div>
            </div>
                <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input class="form-control" id="inputLastName" type="text" name="rol" placeholder="Rol" value="<?php echo $row["rol"];?>"/>
                        <label for="inputLastName">Rol</label> 
                    </div>
                </div>
            </div>
              


                <div class="mt-4 mb-0">
                    <div class="d-grid">
                        <input type="hidden" name="actualizando"/>
                        <input type="hidden" name="id_usuario" value="<?php echo $row["id_usuario"];?>"/>
                        <input class="btn btn-primary btn-block" id="inputPassword" type="submit" value="Actualizar">
                        
                        &nbsp;&nbsp;&nbsp;
                        <input type="hidden" name="id_usuario" value="<?php echo $row["id_usuario"];?>"/>
                        <a href='menu.php?consultaUsuarios'>
                        <input class="btn btn-primary btn-block" id="inputPassword" type="button" value="Regresar">
                        </a>
                    </div>
                </div>
            </div>
            </form>



                <!--fin de la visualización de usuarios-->
                
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; ConsulTech 2021</div>
                            <div>
                                <a href="#">Pólítica de privacidad</a>
                                &middot;
                                <a href="#">Términos y condiciones de uso</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js admin/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets admin/demo/chart-area-demo.js"></script>
        <script src="assets admin/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js admin/datatables-simple-demo.js"></script>
    </body>
</html>
