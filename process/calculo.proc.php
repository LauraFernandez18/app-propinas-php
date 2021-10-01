<?php

if(isset($_POST['submit'])){
$cuenta = $_POST['cuenta'];
$servicio = $_POST['servicio'];
$personas = $_POST['personas'];
echo $cuenta;
echo "<br></br>";
echo $servicio;
echo "<br></br>";
echo $personas;
$formula=($cuenta*$servicio)/(float)$personas;
header ("Location:../index.php?res=".$formula);
} else {
    echo "fail";
    header("Location:../index.php");
}
?>