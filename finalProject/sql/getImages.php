<?php

    include '../dbConnection.php';
    $conn = getDatabaseConnection("puppyLyv");
    
    $sql = "SELECT image_url FROM dogs";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($records);

?>