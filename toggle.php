<?php

$servername = "sql110.infinityfree.com";
$username = "if0_42410772";
$password = "7ywgLtbQoXVMT";
$dbname = "if0_42410772_personinfo";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$id = $_GET['id'];

$sql = "UPDATE user
SET status = IF(status=0,1,0)
WHERE ID=$id";

if(!$conn->query($sql)){
    die("Error: ".$conn->error);
}

header("Location: fo.php");
exit();

$conn->close();

?>