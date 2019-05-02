<?php
session_start();

include '../dbConnection.php';
$dbConn = getDatabaseConnection("puppyLyv");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin
                 WHERE username = :username 
                 AND  password = :password ";                 
$np = array();
$np[':username'] = $username;
$np[':password'] = $password;

$stmt = $dbConn->prepare($sql);
$stmt->execute($np);
$record = $stmt->fetch(PDO::FETCH_ASSOC); //we're expecting just one record

print_r($record);

if (empty($record)) {
    
    echo "Wrong username or password!!";
} else {
   
  $_SESSION['adminFullName'] = $record['firstName'] .  "   "  . $record['lastName'];
  header('Location: adminDashboard.php'); //redirects to another program
    
}


?>