<?php 
include('connection.php');

$con = connection();
$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE Id = '$id'";
$query = mysqli_query($con, $sql);

// Verificar si se obtuvo un resultado de la consulta
if ($query && mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_array($query);
} else {
    // Manejar el caso en el que no se encontró el ID o la consulta falló
    echo "Hubo un error en la consulta.";
    exit; 
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Editar usuarios</title>
</head>
<body>
<div id= "contenedor">
  

  <div id="Actualizar">
      <form action="edit_user.php" method = "POST">
            <h2>Actualizacion de Registro</h2>
                <input type="hidden" name="Id" value="<?= $row['Id'] ?>">
                <input type="text" name ="name" placeholder="Nombre" value ="<?= $row['Nombre']?>">
                <input type="text" name ="lastname" placeholder="Apellido" value ="<?= $row['Apellido']?>">
                <input type="text" name ="dni" placeholder="DNI" value ="<?= $row['DNI']?>">
                <input type="text" name ="email" placeholder="Correo" value ="<?= $row['Correo']?>">
                <input type="text" name ="edad" placeholder="Edad" value ="<?= $row['Edad']?>">
                <button id="Btn_Actualizar">Actualizar informacion</button>
                
      </form>
                <th><a href="index.php"><button id="Btn_cerrar_2">Cerrar</button></a></th>
                <script src="script.js"></script>
  </div>
  
</div>

</body>
</html>
