<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM mangas  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: mangas.php");
    }
?>
