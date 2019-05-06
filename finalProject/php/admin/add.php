<?php

  session_start();
  
    include '../../dbConnection.php';
    $conn = getDatabaseConnection("puppyLyv");
    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $pass = $_POST['password'];
        
        $sql = "INSERT INTO user_login (user_id, name, username, password) VALUES ('', '$name', '$username', '$pass');";
        $stmt = $conn->prepare($sql);
        $response = $stmt->execute();
        
        echo json_encode($response);
        exit(0);
    }

?>