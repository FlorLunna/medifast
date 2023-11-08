<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta lang="es"> <!--Idioma de la página-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MEDIFAST+</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/as.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
            <?php
       $rolusu=null;
        session_start();

        if (!isset($_SESSION["usuarioAutenticado"])){
            //Si el usuario no esta autenticado no ocurre nada
        }else {
            //Si el usuario esta autenticado el usuario se guarda su nombre y su rol (IMPORTANTE ESO)
            $usuario_nombre_index= $_SESSION["usuarioAutenticado"];
            $rolusu=$_SESSION["rolusuario"];
            //Se valida desde la pagina de proceso el inicio de sesión. Unicamente se entra aqui despues de iniciar ses
             ?>
                <script type="text/javascript">
                    alert("Has iniciado sesión, te damos la bienvenida.");
                </script>
            <?php
                //Se detecta el rol del usuario y depende del rol se dirige a una pagina u otra
                if ($rolusu=='Cliente') {
                    //NADA
                } elseif ($rolusu=='administrador') {
                    header("Location: =menu.php");
                } 
            
        } ?>
        <?php
// include database configuration file
include 'dbConfig.php';
?>
        <?php
        //get rows query
        $query = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
        
        ?>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                       <nav>
                        <div class="cont">
                          <label>Buscar</label>

                          <input type="search" placeholder="en esta Web" name="busqueda"title="Presione Esc para supender la búsqueda">   
                        </div>
                       </nav>
                       <li class="nav-item"><a class="nav-link" href="Ofertas2.html"><i class="fa fa-tags"></i>
                            Ofertas</a></li>
                        <li class="nav-item"><a class="nav-link" href="Botiquin2.html"> <i class="fa fa-medkit"></i>
                            Botiquín</a></li>
                        <li class="nav-item"><a class="nav-link" href="viewCart.php"> <i class="fa fa-cart-plus"></i>
                            Carrito</a></li>
                        <li class="nav-item"><a class="nav-link" href="perfil.php"><i class="fa fa-address-book"></i>
                            Perfil</a></li>
                        <li class="nav-item"><a class="nav-link" href="salir.php"><i class="fa fa-times"></i>
                            Cerrar seción</a></li>
                       
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
           <hr>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Aquí Encontraras</h2><br><br>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                             <a class="nav-link" href="#portfolio"><i class="fas fa-plus-circle fa-stack-1x fa-inverse"></i></a>
                        </span>
                         <h4 class="my-3">ANALGÉSICOS</h4>
                        
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <a class="nav-link" href="#portfolio_1"><i class="fas fa-heartbeat fa-stack-1x fa-inverse"></i></a>
                        </span>
                        <h4 class="my-3">MEDICAMENTOS</h4>
                       
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <a class="nav-link" href="#portfolio_2"><i class="fas fa-smile fa-stack-1x fa-inverse"></i></a>
                        </span>
                        <h4 class="my-3">VITAMINAS</h4>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
       <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Analgésicos</h2>
                    <h3 class="section-subheading text-muted"><a class="nav-link" href="#services">Volver al inicio</a></h3><hr>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/1.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $row["name"]; ?></div>
                                <div class="portfolio-caption-subheading text-muted">Acetaminofeno  con codeina</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/2.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Sinalgen</div>
                                <div class="portfolio-caption-subheading text-muted">Hidrocodona con acetaminofeno </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/3.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Clorhifrato</div>
                                <div class="portfolio-caption-subheading text-muted">Morfina</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/4.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Oxicodona</div>
                                <div class="portfolio-caption-subheading text-muted">Sandoz</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/61.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paracetamol</div>
                                <div class="portfolio-caption-subheading text-muted">Acetaminofén</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/6.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Aspirina</div>
                                <div class="portfolio-caption-subheading text-muted">Oxicodona con aspirina</div>
                            </div>
                        </div>
                    </div>
                </div>
                  
              <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal7">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/7.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Hidroferol</div>
                                <div class="portfolio-caption-subheading text-muted">Hoximorfona</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal8">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/8.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Qual</div>
                                <div class="portfolio-caption-subheading text-muted">Propoxifeno </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal9">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/9.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Propoxifeno con acetaminofeno</div>
                                <div class="portfolio-caption-subheading text-muted">NaproxenoAleve</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal10">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/12.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Amidona</div>
                                <div class="portfolio-caption-subheading text-muted">Metadona</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal11">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/14.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tramadol </div>
                                <div class="portfolio-caption-subheading text-muted">Tramadol con acetaminofeno</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal12">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/71.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Aleve</div>
                                <div class="portfolio-caption-subheading text-muted">Naproxeno</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
          
     <!-- ____________________________________________________________________________________________________________-->
     <!-- ____________________________________________________________________________________________________________-->
          
        <section class="page-section bg-light" id="portfolio_1">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Medicamentos</h2>
                    <h3 class="section-subheading text-muted"><a class="nav-link" href="#services">Volver al inicio</a></h3><hr>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 13-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal13">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/13.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Ibadronato</div>
                                <div class="portfolio-caption-subheading text-muted">Alendronato</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 14-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal14">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/17.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Alendronato</div>
                                <div class="portfolio-caption-subheading text-muted">Alendronato con vitamina D</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 15-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal15">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/18.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Risendronato</div>
                                <div class="portfolio-caption-subheading text-muted">Risendronato</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 16-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal16">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/19.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Seralis</div>
                                <div class="portfolio-caption-subheading text-muted">Risendronato con clacio.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 17-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal17">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/20.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Zolnic</div>
                                <div class="portfolio-caption-subheading text-muted">Acido zoledrónico</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 18-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal18">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/21.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Miacalcic</div>
                                <div class="portfolio-caption-subheading text-muted">Calcitonina</div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 19-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal19">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/22.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Cliane</div>
                                <div class="portfolio-caption-subheading text-muted">Calcitonina(Nasal)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 20-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal20">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/23.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Estrace</div>
                                <div class="portfolio-caption-subheading text-muted">Estrogenos</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 21-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal21">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/24.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Forteo</div>
                                <div class="portfolio-caption-subheading text-muted">Paratoides</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 22-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal22">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/26.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Prolia</div>
                                <div class="portfolio-caption-subheading text-muted">Denosumab</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 23-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal23">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/25.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Raloxifeno</div>
                                <div class="portfolio-caption-subheading text-muted">Ralocifeno</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 24-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal24">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/100.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Papaverina (Atroveran)</div>
                                <div class="portfolio-caption-subheading text-muted">Photography</div>
                            </div>
                        </div>
                      </div>
                   </div>
                 </div>
          </section>
           <!-- ____________________________________________________________________________________________________________-->
     <!-- ____________________________________________________________________________________________________________-->
          
        <section class="page-section bg-light" id="portfolio_2">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Vitaminas</h2>
                    <h3 class="section-subheading text-muted"><a class="nav-link" href="#services">Volver al inicio</a></h3><hr>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 25-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal25">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/30.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Vit A</div>
                                <div class="portfolio-caption-subheading text-muted">Vitamina A</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 26-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal26">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/31.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">VitC</div>
                                <div class="portfolio-caption-subheading text-muted">Vitamina C</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 27-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal27">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/33.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Perlavite</div>
                                <div class="portfolio-caption-subheading text-muted">Vitamina E</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 28-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal28">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/35.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Benexol</div>
                                <div class="portfolio-caption-subheading text-muted">Vitamina B</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 29-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal29">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/34.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Hermosin-K</div>
                                <div class="portfolio-caption-subheading text-muted">Vitamina K</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 30-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal30">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/36.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Niacina</div>
                                <div class="portfolio-caption-subheading text-muted">Vitamina B-3</div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 31-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal31">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/37.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Vit12</div>
                                <div class="portfolio-caption-subheading text-muted">Vitamina B12</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 32-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal32">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/39.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Vitamin 2</div>
                                <div class="portfolio-caption-subheading text-muted">Vitamina 2</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 33-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal33">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-sort"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/ima/40.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Vitamina B3</div>
                                <div class="portfolio-caption-subheading text-muted">Vitamina B3</div>
                            </div>
                        </div>
            
                    
                      </div>
                   </div>
                 </div>
          </section>
          
        <!-- Contact-->
       
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Acetaminofén+Codeina Lafrancol (325+30) Caja X 10 Tabletas</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/1.jpeg" alt="..." />
                                    <p><?php echo $row["description"]; ?></p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong><?php echo '$'.$row["price"].' MXN'; ?></strong>
                                            
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Tabletas
                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <a  class="btn btn-primary btn-xl text-uppercase" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">SINALGEN® 10 TABLETAS</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/2.jpeg" alt="..." />
                                    <p>
el sinalgen es una combinacion de acetaminofen analgesico muy conocido y seguro e hidrocodona que es un opiode es decir derivado o con efecto parecido a la morfina.!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Presio:</strong>
                                            $57.50
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Tabletas

                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar.</button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Donepezilo Clorhidrato La Santé 5Mg Caja X 30 Tabletas Recubiertas</h2>
                                    <p class="item-intro text-muted"> Alter 5 mg comprimidos recubiertos con película es un inhibidor específico y reversible de la acetilcolinesterasa, la colinesterasa predominante en el cerebro. Se utiliza para el tratamiento sintomático de la enfermedad de Alzheimer de leve a moderadamente grave.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/3.jpeg" alt="..." />
                                    <p></p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Presio:</strong>
                                            $49.575
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Tabletas 
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar.
                                     <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">OXICODONA 75MG X 28 CAPSULAS / NEURIXA SANDOZ
</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/4.jpeg" alt="..." />
                                    <p>Las tableta de liberación lenta, cápsulas, y solución oral (líquido) de la oxicidina se usan para aliviar el dolor neuropático (dolor producido por los nervios dañados) que puede producirse en brazos, manos, dedos de las manos, piernas, pies, o dedos de los pies si tiene diabetes y neuralgia postherpética (PHN, por sus siglas en inglés, ardor, dolor punzante o molestias que pueden perdurar por meses o años después de un ataque de herpes zóster). Las capsulas y solución oral de pregabalina también se usa para aliviar el dolor de la neuropatía que puede occurir después de una lesión de la médula espinal y para tratar la fibromialgia (una afección de larga duración que puede provocar dolor,</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Presio:</strong>
                                            $ 40.685 

                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Capsulas
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"> Tylenol 500 mg</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/61.jpeg" alt="..." />
                                    <p>Se usa para tratar dolor o fiebre causados por muchas condiciones como dolor de cabeza, dolores musculares, artritis, dolor de espalda, dolores de muelas, dolor de garganta, resfriados, y influenza. </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio:</strong>
                                            $ 76 MXN
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Jarabe
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"> Bayer Aspirina Analgésico 100 pz</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/6.jpeg" alt="..." />
                                    <p>Se utiliza como medicamento para tratar el dolor, la fiebre y la inflamación, debido a su efecto inhibitorio, no selectivo, de la ciclooxigenasa.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio:</strong>
                                                $88.00
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Tabletas

                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Portfolio item 7 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Hidroferol Calcifediol 0,266 mg 3 Capsulas Blandas</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/7.jpeg" alt="..." />
                                    <p>Contiene una forma de vitamina D, calcifediol, que se usa para tratar la deficiencia de esta vitamina y los problemas que se derivan, cuando se necesite empezar con dosis elevadas o se requiera una administración separada en el tiempo.
</p>
                                    <ul class="list-inline">
                                      <li>
                                            <strong>Precio:</strong>
                                            $24.990
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                             Tabletas
                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Portfolio item 8 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">QUAL 200/50/2 MG ORAL 20 TABLETAS</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/8.jpeg" alt="..." />
                                    <p>medicamento que tiene 3 ingredientes activos: paracetamol, diazepam y dextropropoxifeno. Juntos ejercen un mayor efecto para el alivio del dolor severo. Qual sirve para tratar: Dolor postoperatorio.</p>
                                    <ul class="list-inline">
                                      <li>
                                            <strong>Precio:</strong>
                                            $836.00

                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Tabletas

                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Portfolio item 9 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">40 mg Caja C/ 100 Tabletas
</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/9.jpeg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio:</strong>
                                        $3,334.68
</li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Jarabe
                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Portfolio item 10 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">40 mg Caja C/ 100 Tabletas</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/12.jpeg" alt="..." />
                                    <p>Se usa para tratar y prevenir ciertos tipos graves y posiblemente mortales de arritmia ventricular (ritmo cardíaco anormal) cuando otros medicamentos no dieron resultado o el paciente no los tolera. </p>
                                    <ul class="list-inline">
                                       
                                        <li>
                                            <strong>Presio:</strong>
                                            $3,334.68
                                        </li>
                                          <li>
                                            <strong>Categoria:</strong>
                                            Tabletas
                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Portfolio item 11 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Tramadol Medimart 100 mg liberación prolongada 60 tabletas</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/14.jpeg" alt="..." />
                                    <p>Tramadol Medimart 100 mg liberación prolongada. Caja con 60 tabletas. ¡En la farmacia online de Superama.com.mx encuentra una gran variedad de medicamentos genéricos para surtir tus recetas médicas. Aprovecha los grandes descuentos, promociones y beneficios que tenemos para ti!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Category:</strong>
                                            $410.00
                               </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Jarabe

                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Portfolio item 12 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Aleve Tabletas Con Naproxeno De Sodio, 220 Mg (nsaid) AnaLGé
</p></h2>
                                    <p class="item-intro text-muted">
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/71.jpeg" alt="..." />
                                    <p>medicamento antiinflamatorio no esteroideo, no esteroideo, que puede proporcionar alivio temporal de dolores menores y dolores de una variedad de condiciones. También reduce temporalmente la fiebre.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio:</strong>
                                            $$1,256.84
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Tabletas
                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
   <!--____________________________________________________________________________________________________________-->
   <!-- ____________________________________________________________________________________________________________-->
          <div class="portfolio-modal modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Ibandronato tableta 150 mg Mk 1 und</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/13.jpeg" alt="..." />
                                    <p>se usa para prevenir y tratarla osteoporosis (una enfermedad en la que los huesos se adelgazan, debilitan y fracturan fácilmente) en mujeres posmenopáusicas (''cambio de vida'', fin de los periodos menstruales). El ibandronato pertenece a una clase de medicamentos llamados bifosfonatos. Actúa previniendo la degradación de los huesos y aumentando su densidad (grosor).</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Categoria:</strong>
                                             $57.750
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Tabletas $57.750
                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 14 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Alendronato tabletas 70 mg American Generics 4 und</h2>
                                    <p class="item-intro text-muted">.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/17.jpeg" alt="..." />
                                    <p>Se usa para tratar y prevenir la osteoporosis (afección en la que los huesos se vuelven delgados y débiles, y se fracturan con facilidad) en las mujeres posmenopáusicas (''cambio de vida'', fin de los periodos menstruales) y para tratar la osteoporosis en los hombres.</p>
                                    <ul class="list-inline">
                                         <li>
                                            <strong>Presio:</strong>
                                            $35.400
                                        </li>
                                          <li>
                                            <strong>Categoria:</strong>
                                            Tabletas
                                        </li>
                         
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar.</button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 15 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal15" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Risedronato Medimart 35 mg 4 tabletas</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/18.jpeg" alt="..." />
                                    <p>Se utiliza para reducir el riesgo de fracturas en los pacientes afectos de osteoporosis posmenopáusica. También está indicado en el tratamiento de la enfermedad de Paget</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio:</strong>
                                             $300.00
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Tabletas
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar.
                                     <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 16 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal16" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Seralis--acido Risedronico</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/19.jpeg" alt="..." />
                                    <p>Indicado para la prevención y tratamiento de osteoporosis inducida por corticosteroides, en mujeres y hombres que reciben tratamiento sistémico con corticosteroides</p>
                                    <ul class="list-inline">
                                      
                                          <li>
                                            <strong>Categoria:</strong>
                                             $782.04
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                             Tabletas.$782.04
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 17 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal17" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Zolnic ácido zoledrónico 4 mg/5ml Liomont 1 pieza</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/20.jpeg" alt="..." />
                                    <p>Regulador del metabolismo óseo. Prevención de la pérdida de masa ósea inducida por el tratamiento hormonal en pacientes con cáncer de próstata o cáncer de mama.</p>
                                    <ul class="list-inline">
                                         <li>
                                            <strong>Precio:</strong>
                                            $3,794.00.
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Inyectable.
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 18 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal18" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">MIACALCIC 100 U.I 5X1ML AMP</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/21.jpeg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Presio:</strong>
                                            $1,419.00 
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Solucion. 
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Portfolio item 19 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal19" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Tabletas Bayer 28 piezas</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/22.jpeg" alt="..." />
                                    <p>Cliane tabletas 28 pzas, estradiol/noretisterona.</p>
                                    <ul class="list-inline">
                                       <li>
                                            <strong>Category:</strong>
                                            $1,059.00
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Pastillas $1,059.00
                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Portfolio item 20 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal20" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">
Crema vaginal genérica de estradiol estrace - .01%</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/23.jpeg" alt="..." />
                                    <p>Con la disponibilidad de Estrace genérico, las mujeres que experimentan síntomas de disminución de estrógeno tienen acceso a un tratamiento asequible. El estradiol (como hemihidrato de estradiol) es el ingrediente activo de las marcas comerciales Estrace, Vagifem, Yuvafem. La marca Estrace se vende a más de $ 300. Ahorre cerca del 75% al ​​comprar Estrace genérico en MintRx. Tubo de 42,5 g.</p>
                                    <ul class="list-inline">
                                         <li>
                                            <strong>Category:</strong>
                                            $85.00
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Crema
                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Portfolio item 21 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal21" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Forteo Colter Solución Inyectable 250 mcg / mL Caja Con Pluma De 2.4 mL - RX3</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/24.jpeg" alt="..." />
                                    <p>(Teriparatida) está indicado para el tratamiento de la osteoporosis en mujeres postmenopáusicas con alto riesgo de fracturas. Esto incluye antecedentes de fractura por osteoporosis, múltiples factores de riesgo de fractura, o falla o intolerancia a los tratamientos previos de osteoporosis.</p>
                                    <ul class="list-inline">
                                         <li>
                                            <strong>Precio:</strong>
                                            $ 7,550.00
Paratoides
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Inyectable
Paratoides
                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Portfolio item 22 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal22" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"> PROLIA INYECCIÓN 1 PIEZA JERINGA</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/26.jpeg" alt="..." />
                                    <p>Es un medicamento autorizado para el tratamiento de la osteoporosis en mujeres posmenopáusicas y en varones con riesgo elevado de fracturas; para el tratamiento de la pérdida ósea asociada con la supresión hormonal en hombres con cáncer de próstata con riesgo elevado de fracturas.</p>
                                    <ul class="list-inline">
                                       <li>
                                            <strong>Precio:</strong>$9,217.00
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>Inyectable
                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Portfolio item 23 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal23" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">CLORHIDRATO DE RALOXIFENO 60 MG</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/25.jpeg" alt="..." />
                                    <p>Previene y trata la osteoporosis imitando los efectos del estrógeno (una hormona femenina que produce el cuerpo) para aumentar la densidad (grosor) del hueso. El raloxifeno disminuye el riesgo de tener cáncer de seno invasivo al bloquear la acción del estrógeno sobre el tejido mamario.</p>
                                    <ul class="list-inline">
                                       <li>
                                            <strong>Precio:</strong>
                                            $ 691.00

                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Raloxifeno

                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Portfolio item 24 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal24" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Atroveran Dip Gotas 20ml</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/100.jpeg" alt="..." />
                                    <p>El Atroveran es un antiespasmódico para el tratamiento de condiciones dolorosas abdominales y pélvicas como espamos gastrointestinales, dismenorrea, cólicos biliares y uretrales que contiene en su fórmula papaverina, antiespasmódico eficiente que actúa directamente sobre las causas del cólico, brindando alivio inmediato, además de contener componentes analgésicos y estimulantes de las funciones digestivas.

</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            $ 254.06
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Medicamentos
                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           <!--____________________________________________________________________________________________________________-->
   <!-- ____________________________________________________________________________________________________________-->
          <div class="portfolio-modal modal fade" id="portfolioModal25" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">AUXINA A+E 30 CÁPSULAS</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/30.jpeg" alt="..." />
                                    <p>Auxina A+E cápsulas es un medicamento indicado para el tratamiento de las deficiencias de vitaminas A y E . La deficiencia de estas vitaminas puede ser producida por una aportación insuficiente en la dieta o en estados de convalecencia. Estas vitaminas sirven para mejorar el estado general del organismo, ya que actúan sobre la visión, la piel, las mucosas y las defensas.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Categoria:</strong>
                                            $ 189.22 
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Vitamina 
                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 26 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal26" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Vitamina C MK 500 mg 20 uds</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/31.jpeg" alt="..." />
                                    <p>VITAMINA C LA SANTÉ® Tabletas masticables de 500 mg, en dispensadores por 100 o 144 tabletas y con deliciosos sabores a naranja, tutti frutti, chicle y mandarina.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio:</strong>
                                             $ 233.00
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                             Vitamina
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar.</button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 27 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal27" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">PERLAVIT E CAPS. 1000 UI</h2>
                                    <p class="item-intro text-muted">.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/33.jpeg" alt="..." />
                                    <p>Antioxidante.Deficiencia de vitamina E.Aumenta la capacidad de resistencia del corazón.Da mayor protección en:menopausia,embarazo, circulación sanguínea.Mejora la función sexual.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio:</strong>
                                            Vitamina E
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Vitamina 
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar.
                                     <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 28 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal28" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">BENEXOL B1 B6 B12 30 COMPRIMIDOS</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/35.jpeg" alt="..." />
                                    <p>Antineurítico. Asociación de las vitaminas B1, B6 y B12, hidrosolubles. Son cofactores de enzimas específicos y a estas dosis se utilizan para el tratamiento de estados carenciales y de los síntomas asociad</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio:</strong>
                                                $465.50
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                        Vitamina.
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 29 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal29" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Hemosin K Solución Inyectable 10 mg / 10 mg Caja Con 3 Aplicaciones </h2>
                                    <p class="item-intro text-muted">.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/34.jpeg" alt="..." />
                                    <p>
                                      es el único hemostático parietal que contiene sulfonato sódico de carbazocromo y por lo mismo es el único que ejerce una potente acción hemostática parietal, selectiva en los vasos dañados y en forma rápida, suprimiendo la resistencia capilar disminuida.</p>
                                    <ul class="list-inline">
                                       <li>
                                            <strong>Precio:</strong>
                                            $279.00 
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                             Vitamina K
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 30 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal30" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Niacina</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/36.jpeg" alt="..." />
                                    <p>Ácido nicotínico o vitamina PP, con fórmula química C₆H₅NO₂ es una vitamina hidrosoluble y que forma parte del complejo B. Actúa en el metabolismo celular formando parte del coenzima NAD y NADP. </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio:</strong>
                                            $420
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Vitamina
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Portfolio item 31 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal31" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">VIt12</h2>
                                    <p class="item-intro text-muted">.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/37.jpeg" alt="..." />
                                    <p>Comprimidos de liberación retardada, de elevada absorción y aprovechamiento. La vitamina B12 es necesaria para la normal función mental.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            $167.51
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            Vitaminas
                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Portfolio item 32 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal32" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Vitamin 2</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/39.jpg" alt="..." />
                                    <p>Una fórmula de alta potencia que contiene vitaminas, minerales, aminoácidos y extractos de plantas.
Hoy en día el ritmo de vida, el estrés diario, etc. requiere una dieta equilibrada que aporte nutrientes que ayuden a mantener el metabolismo energético. También podemos añadir un suplemento alimenticio de múltiples nutrientes junto con un estilo de vida saludable.</p>
                                    <ul class="list-inline">
                                         <li>
                                            <strong>Precio:</strong>
                                            $630.40
                                        </li>
                                          
                                        <li>
                                            <strong>Categoria:</strong>
                                            Vitamina
                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           <!-- Portfolio item 33 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal33" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Vitamina B3</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/ima/40.jpeg" alt="..." />
                                    <p>La niacina (o vitamina B3) es un micronutriente necesario para la respiración celular, ayuda en el metabolismo de los carbohidratos, las grasas y las proteínas, promueve la circulación gracias a su efecto vasodilatador e interviene en la salud de la piel.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio::</strong>
                                            $98.84
                                        </li>
                                        <li>
                                            <strong>Categoria:</strong>
                                            VItaminas
                                        </li>
                                    </ul>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Comprar
                                    </button>
                               <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Agregar al carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                  <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
        <!----------------------------------------------------------------------------------------->  
       <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Puedes contactarnos</h2>
                    <h3 class="section-subheading text-muted">Este proyecto fue elaborado por.....</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpeg" alt="..." />
                            <h4>Javier Hernández</h4>
                            <p class="text-muted">Lider del proyecto</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/luiscya.hernandez"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/ljhr_666/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpeg" alt="..." />
                            <h4>Jennifer Mercado</h4>
                            <p class="text-muted">Secretaria</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/jennifer21.hernandez"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/jenny_21her/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpeg" alt="..." />
                            <h4>Gustavo Solchaga </h4>
                            <p class="text-muted">Tester</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/gustavo.solchagavarela"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/gustavosolchaga96/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients-->
<section class="page-section bg-light" id="team">
      <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/4.jpeg" alt="..." />
                            <h4>Pablo Suarez</h4>
                            <p class="text-muted">Apollo I</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/profile.php?id=100008237944069"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/pablo.suarez.c/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/5.jpeg" alt="..." />
                            <h4>Tania Miralrio</h4>
                            <p class="text-muted">Apollo II</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/taniamonserrat.miralrio.12"><i class="fab fa-facebook-f"></i></a>
                            </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/6.jpeg" alt="..." />
                            <h4>Medifast</h4>
                            <p class="text-muted">Pagina Oficial de facebook</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/M-e-d-i-f-a-s-t-109259818136250"><i class="fab fa-facebook-f"></i></a>
                           
                        </div>
                    </div>
                  </div>
            </div>
        </section>
          
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="java/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
