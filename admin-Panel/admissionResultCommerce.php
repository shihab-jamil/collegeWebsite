<?php
    include('../config.php');

    $result = $_POST['editor16'];
    $query = "UPDATE `admission_result` SET result='$result' WHERE dept='commerce'";
    
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
       header('location:../adminPanel.php');
    }
    



?>