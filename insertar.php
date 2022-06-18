<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];



$sql="INSERT INTO mangas VALUES('$id','$nombre','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: mangas.php");
    
}else {
}
?>