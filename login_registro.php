<?php
include("conexion.php");

$nombre = $_POST["usuario"];
$pass  = $_POST ['pass'];


if(isset($_POST["ingresar"])) 
{
$query= mysqli_query($conn,"SELECT * FROM ingreso WHERE usuario = '$nombre' AND passwor = '$pass'");
$nr =mysqli_num_rows($query);

if($nr==1)
{
    echo"<script> alert('Bienvenido $nombre'); window.location ='index.php' </script>";
}
else
{
    echo"<script> alert('Usuario no existe'); window.location='index.html'</script>"; 
}
}
?>