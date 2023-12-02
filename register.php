<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "fooddelivery";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $sql = "INSERT INTO users (`uid`, `name`, `mobile` , `password`) VALUES ('$username', '$name','$mobile', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
