<html>
<head>
  <meta charset="utf-8"> 
	<title>Registro </title> 
	<meta lang="es"> 
	<meta title="Sitio de Medifast">
	<link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>	
		<link rel="stylesheet" type="text/css" href="cssre/sb-admin-2.css">
      <link rel="icon" type="image/x-icon" href="assets/as.png" />
<script type="text/javascript">


function validarFormulario() {
	alert("entre");
  //evento.preventDefault();
	var p1 = document.getElementById("contrasena").value;
    var p2 = document.getElementById("recontrasena").value;
    var espacios = false;
     var cont = 0;

     //alert(p1);
     //alert(p2);

while (!espacios && (cont < p1.length)) {
  if (p1.charAt(cont) == " ")
    espacios = true;
     cont++;
  }
   
if (espacios) {
  alert ("La contraseña no puede contener espacios en blanco");
  return false;
}
if (p1.length == 0 || p2.length == 0) {
  alert("Los campos de la password no pueden quedar vacios");
  return false;
}

 if (p1 != p2) {
  alert("Las passwords deben de coincidir");
  return false;
} else {
  alert("Todo esta correcto");
  return true; 
}
}
</script>

</head>
<body class="bg-gradient-primary">
       
      <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"><img class="img-fluid" src="cssre/a.jpg"/></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear una cuenta.</h1>
                            </div>
                              
 <?php if (isset($_GET["existente"]) && ($_GET["existente"]=="si")){			
 ?>	
	<span style="color:red"><b>Usuario ya existente!</b></span>
     <br>
    <a href="login.php"> <input type="button" name="login" value="Acceder" > </a>

	<?php }else if (isset($_GET["existente"]) && ($_GET["existente"]=="no")){?>
	<span style="color:blue"> <b> Registro efectuado correctamente </b> <br> </span>
    <a href="login.php"> <input type="button" name="login" value="Acceder" > </a>

	<?php }
    else if(!isset($_GET["existente"])){

	?>

  <form  name="formulario" action="control2.php" method="GET"
    onsubmit='return validarFormulario()'>
           <div class="form-group row">     
       <input type="text" name="usuario" class="form-control form-control-user" placeholder="Nombre" >
     </div>
        
        <div class="form-group row">  
          <input type="text" name="ID" class="form-control form-control-user" placeholder="Usuario">
            </div>
        
              <div class="form-group row"> 
                <input type="text" name="Edad" class="form-control form-control-user" placeholder="Edad">
                  </div>
                   
                    <div class="form-group row">
                     <input type="password" name="contrasena" id="contrasena" class="form-control form-control-user"                                 placeholder="Contraseña">
                        </div>
                              
                             <div class="form-group row">
                              <input type="password" name="recontrasena" id="recontrasena" class="form-control form-control-                                                        user"placeholder="Repetir contraseña">
                                </div>
                                     <div class="form-group row">
                                      <input type="email" name="email" class="form-control form-control-                                                             user"placeholder="Correo Electronico">
                                           </div>
                                     <div class="form-group row">
                                     <input type="text" name="Ciudad" class="form-control form-control-                                                                                   user"placeholder="Ciudad" >
                                          </div>
                                    <div class="form-group row">
                              <input type="text" name="Calle" class="form-control form-control-                                                                                   user"placeholder="Calle">
                                    </div>
                 <div class="form-group row">
                         <input type="text" name="CP" class="form-control form-control-                                                                                   user"placeholder="C.P">
                                </div>
        <div class="form-group row">
  <input type="text" name="Telefono" class="form-control form-control-                                                                                   user"placeholder="Num. Teléfono">
</div>
        
	<input type="hidden" name="formulario" value="registro" class="btn btn-primary btn-user btn-block">
	<input type="submit" name="enviar" value="Registrar" class="btn btn-primary btn-user btn-block">
  
  </form>
<?php }?>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="index.html">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>