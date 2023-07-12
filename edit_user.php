<?php 
include('connection.php');

$con = connection();
$id = $_POST['Id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$edad = $_POST['edad'];

$sql = "UPDATE usuarios SET Nombre='$name', Apellido='$lastname', DNI='$dni', Correo='$email', Edad='$edad' WHERE ID='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};
?>