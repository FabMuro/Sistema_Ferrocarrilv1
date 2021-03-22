
<?php 
$NombreProducto=$_POST['NombreProducto'];
$DescripcionProducto=$_POST['DescripcionProducto'];

session_start();

include("db.php");

$consulta=" INSERT INTO producto (Nombre,Descripcion) VALUES('$NombreProducto','$DescripcionProducto') ";

$query=mysqli_query($sqlconnection,$consulta);

if($query)
{
	header("location:registrarProducto.html");	
}

mysqli_free_result($resultado);
mysqli_close($sqlconnection);

	 




