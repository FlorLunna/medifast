<?php
require_once 'funcionesBD.php';
if ($conn=conecta()) {
	$id_borrar=$_GET['id_usuario'];

	$sql = "DELETE FROM usuario WHERE id_usuario=". $id_borrar;

	if (mysqli_query($conn, $sql)) {
		echo "Record deleted successfully";
		header ("Location: menu.php?errorBorrado=no&consultaUsuarios=si");
	} else{
		echo "Error deleting record: ". mysqli_error($conn);
		header("Location: menu.php?errorBorrado=si");
	}
	mysqli_close($conn);
}
  ?>
