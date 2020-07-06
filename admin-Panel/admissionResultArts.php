<?php
    include('../config.php');

    $result = $_POST['editor15'];
    $query = "UPDATE `admission_result` SET result='$result' WHERE dept='arts'";
    
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
       header('location:../adminPanel.php');
    }
    



?>