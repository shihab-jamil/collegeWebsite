<?php
    include('../config.php');

    $details = $_POST['editor20'];
    $query = "UPDATE `admission` SET details='$details' WHERE category='procedure'";
    
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
       header('location:../adminPanel.php');
    }
    



?>