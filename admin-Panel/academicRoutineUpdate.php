<?php
    include('../config.php');

    $details = $_POST['editor22'];
    $query = "UPDATE `academic` SET details='$details' WHERE category='routine'";

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
       header('location:../adminPanel.php');
    }

?>