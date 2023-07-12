<?php 
include('connection.php');

$con = connection();
$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$edad = $_POST['edad'];

$sql = "INSERT INTO  usuarios VALUES('$id','$name','$lastname','$dni','$email','$edad')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};
?>