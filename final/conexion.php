<?php
session_start();
$con= mysqli_connect('localhost','root','','usuario');
if($con->connect_error)
die("conexion fallida".$con->connect_error);
?>