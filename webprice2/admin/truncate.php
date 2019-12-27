<?php
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1="TRUNCATE TABLE questions";
mysqli_query($conn, $sql1);
$sql2="TRUNCATE TABLE options";
mysqli_query($conn, $sql2);
header('Location: questions_data.php');