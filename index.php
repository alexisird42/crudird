<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>CRUD</title>
</head>

<body>
    <div class="users-form">
        <h1>AGREGAR SNEAKERS</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="name" placeholder="name">
            <input type="text" name="color" placeholder="color">
            <input type="text" name="marca" placeholder="Marca">
            <input type="text" name="numero" placeholder="Numero">
            <input type="text" name="material" placeholder="Material">

            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Color</th>
                    <th>Marca</th>
                    <th>Numero</th>
                    <th>Material</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['color'] ?></th>
                        <th><?= $row['marca'] ?></th>
                        <th><?= $row['numero'] ?></th>
                        <th><?= $row['material'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>