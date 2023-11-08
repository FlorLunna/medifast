<?php
include 'funcionesBD.php';
$conn = conecta();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

	<form action="buscador.php"name="buscar" method="get">
		<input type="text" name="busqueda"> <br>
		<input type="hidden" name="buscar" value="si">
		<input type="submit" name="enviar" value="Buscar">

	 </form>

	 <br><br><br>
<table>
     <?php

     if(isset($_GET['buscar'])) {
     	$nombre_producto=$_GET["busqueda"];
     	$consulta="SELECT * FROM producto where Nombre like'%$nombre_producto%'";

} else{$consulta="SELECT * FROM producto ";}

     	
     	$resultado=mysqli_query($conn,$consulta);
     	while ($b1 = $resultado -> fetch_array()) {
                            
                            $c1 = $b1["Clave_producto"];
                            $c2 = $b1["Nombre"];
                            $c3 = $b1["Precio"];
                            $c4 = $b1["Tipo"];
                            $c5 = $b1["Descripcion"];
                            

                     echo "<tr>";
                            
                            echo "<td>".$c1.""."</td>";
                            echo "<td>".$c2.""."</td>";
                            echo "<td>".$c3.""."</td>";
                            echo "<td>".$c4.""."</td>";
                            echo "<td>".$c5.""."</td>";
                            
                            echo "</tr>";
                    
                    }
    ?>
</table>
</body>
</html>    