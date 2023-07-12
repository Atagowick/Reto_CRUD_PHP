<?php 
include('connection.php');

$con = connection();
$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<button id="Registro">Registrarse</button>

<div id = "contenedor">
  

    <dialog id="modal">
        <form action="insert_user.php" method = "POST">
              <h2>Bienvenido al Registro</h2>
                  <input type="hidden" name ="ID" placeholder="ID">
                  <input type="text" name ="name" placeholder="Nombre">
                  <input type="text" name ="lastname" placeholder="Apellido">
                  <input type="text" name ="dni" placeholder="DNI">
                  <input type="text" name ="email" placeholder="Correo">
                  <input type="text" name ="edad" placeholder="Edad">
                  <button id="Btn_Registro">Registrarse</button>
        </form>
                  <button id="Btn_cerrar">Cerrar</button>
    </dialog>
  
</div>

<div>
  <h1>Usuarios registrados</h1>
  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>DNI</th>
        <th>Correo</th>
        <th>Edad</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_array($query)): ?>
      <tr>
      <th><?= $row['Nombre']?></th>
      <th><?= $row['Apellido']?></th>
      <th><?= $row['DNI']?></th>
      <th><?= $row['Correo']?></th>
      <th><?= $row['Edad']?></th>
      <th><a href="update.php?id=<?= $row['Id']?>">Editar</a></th>
      <th><a href="delete_user.php?id=<?= $row['Id']?>" onclick="return confirmarEliminar()">Eliminar</a></th>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>

<script src="script.js"></script>
</body>
  </html>
