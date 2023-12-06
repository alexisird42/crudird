<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
                <input type="text" name="color" placeholder="color" value="<?= $row['color']?>">
                <input type="text" name="marca" placeholder="marca" value="<?= $row['marca']?>">
                <input type="text" name="numero" placeholder="numero" value="<?= $row['numero']?>">
                <input type="text" name="material" placeholder="material" value="<?= $row['material']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>