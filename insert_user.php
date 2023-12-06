<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['color'];
$username = $_POST['marca'];
$password = $_POST['numero'];
$email = $_POST['material'];

$sql = "INSERT INTO users VALUES('$id','$name','$color','$marca','$numero','$material')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>