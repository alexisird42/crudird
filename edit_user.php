<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$name = $_POST['name'];
$lastname = $_POST['color'];
$username = $_POST['marca'];
$password = $_POST['numero'];
$email = $_POST['material'];

$sql="UPDATE users SET name='$name', color='$color', marca='$marca', numero='$numero', material='$material' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>