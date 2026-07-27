<?php

$servername = "sql110.infinityfree.com";
$username = "if0_42410772";
$password = "7ywgLtbQoXVMT";
$dbname = "if0_42410772_personinfo";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO user(name,age,status)
VALUES('$name','$age',0)";

if($conn->query($sql)==TRUE){

    header("Location: fo.php");
    exit();

}else{

    echo "Error: ".$conn->error;

}

$conn->close();

?>