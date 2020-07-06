<?php
    include('../config.php');

    $details = $_POST['editor23'];
    $query = "UPDATE `academic` SET details='$details' WHERE category='academic_calender'";

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
       header('location:../adminPanel.php');
    }

?>