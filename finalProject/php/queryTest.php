<?php
include '../dbConnection.php';
$conn = getDatabaseConnection("puppyLyv");
$password=sha1(0);
$user='pdahl@csumb.edu';
$query = "SELECT * FROM user_login WHERE username = '$user' and password='$password'";
    echo $query;
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $response = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<br>";
    echo count($response);
    echo "<br>";
    print_r($response);
    