<?php
session_start();
include('conexion.php');
$usuario=$_POST["nombre"];
$password=$_POST["contrasena"];
$sql="SELECT correo , usuario FROM usuarios WHERE usuario='$usuario' AND password='$password'";
$resultado=$con->query($sql);
if($fila=$resultado->fetch_assoc())
{
$_SESSION['correo']=$fila['correo'];
$_SESSION['usuario']=$fila['usuario'];
header("Location:index.php");
}
else
{
echo"datos incorrectos";
header("Location:login.html");
}
?>