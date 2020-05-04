<?php
session_start();
$password = $_POST['password'];
$name = $_POST['username'];
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "mysql";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

$sql = "SELECT * FROM register WHERE username = '$name' && password = '$password'";
$res = mysqli_query($conn, $sql);
        
$num = mysqli_num_rows($res);
        
if($num == 1){
    $_SESSION['message'] = $name;
    header('location:home.php');
} else{
    header('location:form.html');
}

mysqli_close($conn);




?>