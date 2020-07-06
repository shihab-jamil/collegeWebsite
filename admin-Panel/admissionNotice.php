<?php
    include('../config.php');

    $details = $_POST['editor19'];
    $query = "UPDATE `admission` SET details='$details' WHERE category='notice'";
    
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
       header('location:../adminPanel.php');
    }
    



?>