<?php
    include('../config.php');

    $details = $_POST['editor18'];
    $query = "UPDATE `admission` SET details='$details' WHERE category='requirment'";
    
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
       header('location:../adminPanel.php');
    }
    



?>