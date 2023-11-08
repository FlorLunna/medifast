<html>
<head>
  <meta charset="UTF-8"> 	
<title>Autentificación PHP</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "id17465659_root";
$password = ">ZK>L/I@!&?6YbrP";
$dbname = "id17465659_proyecto";

$usu=null;
$contra=null;
$formularioCargado=null;
$comentario=null;

if (isset($_GET["usuario"])){
	$usu=$_GET["usuario"];	
}

if (isset($_GET["contrasena"])){
	$contra=$_GET["contrasena"];
}

if (isset($_GET["formulario"])){
   $formularioCargado=$_GET["formulario"];
 }

echo "usu: $usu <br>";
echo "contra: $contra <br>";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


//consulta para localizar a mi usuario y su contraseña
$sql = "SELECT * FROM usuario WHERE usuario='$usu' AND password='$contra'";
	//echo  $sql;
	$result2 = mysqli_query($conn, $sql);

    if ($formularioCargado=="login"){

		if (mysqli_num_rows($result2) > 0) {
		   echo" usuario localizado";
		   $row = mysqli_fetch_assoc($result2);
		   session_start();
		   $_SESSION["usuarioAutenticado"] = $row["usuario"];
		   $_SESSION["rolusuario"]=$row["rol"];
       $_SESSION["IDusu"]=$row["Nombre"];
		   header ("Location: Index1.php?inicio=si");
		}else{
		   echo "usuario inexistente";
		   header("Location: login.php?errorusuario=si");
		}	
  }
if ($formularioCargado=='registro') {

  echo("Quieres registrar un usuario");

  //Se obtienen los datos que se envían del formulario y se guardan en variables.
	
	$a=$_GET['usuario'];
  $b=$_GET['ID'];
  $c=$_GET['contrasena'];
  $d=$_GET['Edad'];
  
  $e=$_GET['Ciudad'];
  $f=$_GET['Calle'];
  $g=$_GET['CP'];

  $h=$_GET['email'];
  $i=$_GET['Telefono'];

    //Instrucción para insertar el usuario en la base de datos
      $insertar = "INSERT INTO usuario (usuario,Nombre,password,email,Edad,Ciudad,Calle,CP,Telefono) VALUES ('$a','$b','$c','$h','$d','$e','$f','$g','$i')";


        if (mysqli_query($conn, $insertar)) {
            header("Location: Index1.php?existente=no");
        } else {
            echo "Se produjo un error: " . $insertar . "<br>" . mysqli_error($conn);
          }
}
if ($formularioCargado=='comentar') {

  echo("Quieres registrar un usuario");

  //Se obtienen los datos que se envían del formulario y se guardan en variables.
  
  $a1=$_GET['comentario'];

    //Instrucción para insertar el usuario en la base de datos
      $insertar = "INSERT INTO pedido (comentario) VALUES ('$a1')";


        if (mysqli_query($conn, $insertar)) {
            header("Location: perfil.php?existente=no");
        } else {
            echo "Se produjo un error: " . $insertar . "<br>" . mysqli_error($conn);
          }
}

  ?>
</body>
</html>