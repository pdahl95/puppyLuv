<?php

  session_start();
  
    include '../../dbConnection.php';
    $conn = getDatabaseConnection("puppyLyv");
    
    if(isset($_POST['submit'])){
        $userId = $_POST['userId'];
        $newName = $_POST['newName']
        
        $sql = "UPDATE user_login SET name = $newName WHERE user_id = $userId;";
        $stmt = $conn->prepare($sql);
        $response = $stmt->execute();
        
        echo json_encode($response);
        exit(0);
    }

?>