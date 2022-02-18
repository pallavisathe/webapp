<?php

$name = $_POST['name'];
$email = $_POST['email'];


$servername = "18.189.2.223";
$username = "newuser";
$password = "prisha";
$dbname = "home";

//create connection

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO people (name,email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";


}
else  {
echo "Error : " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

