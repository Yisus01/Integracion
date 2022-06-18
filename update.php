<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];


$sql="UPDATE mangas SET  nombre='$nombre',precio='$precio' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: mangas.php");
    }
?>