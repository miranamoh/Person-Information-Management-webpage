<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Information</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

<div class="container">

    <h2><i class="fa-solid fa-user"></i> Person Information</h2>

    <form action="in.php" method="POST">

        <label><i class="fa-solid fa-user"></i> Name</label>
        <input type="text" name="name" placeholder="Enter your name" required>

        <label><i class="fa-solid fa-cake-candles"></i> Age</label>
        <input type="number" name="age" placeholder="Enter your age" required>

        <input type="submit" value="Submit">

    </form>

</div>

<?php

$servername = "sql110.infinityfree.com";
$username = "if0_42410772";
$password = "7ywgLtbQoXVMT";
$dbname = "if0_42410772_personinfo";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$result = $conn->query("SELECT * FROM user");

if(!$result){
    die("Query Error: ".$conn->error);
}

echo "<table>";

echo "<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Status</th>
<th>Action</th>
</tr>";

while($row = $result->fetch_assoc()){

echo "<tr>";

echo "<td>".$row['ID']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['age']."</td>";
echo "<td>".$row['status']."</td>";

echo "<td>
<a href='toggle.php?id=".$row['ID']."'>Toggle</a>
</td>";

echo "</tr>";

}

echo "</table>";

$conn->close();

?>

</body>
</html>