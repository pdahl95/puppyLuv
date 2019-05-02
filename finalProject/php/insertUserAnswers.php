<?php
    //  inserts answers from newUserQuestions.php
    session_start();
    
    include '../dbConnection.php';
    $conn = getDatabaseConnection("puppyLyv");
    
    if(isset($_GET['user_question'])){
        
        $q1 = $_GET['q1'];
        $q2 = $_GET['q2'];
        $q3 = $_GET['q3'];
    
    $sql="INSERT INTO user_question ('', q1, q2, q3) VALUES ('', $q1', '$q2', '$q3');";
        $preparing = $conn->prepare($sql);
        $response = $preparing->execute();

       echo json_encode($response);
       
       //if you dont have an exist it wont stop properly
       exit(0);
       

}





    
?>