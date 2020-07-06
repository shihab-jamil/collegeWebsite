<?php
    include('../config.php');

    $details = $_POST['editor21'];
    $query = "UPDATE `academic` SET details='$details' WHERE category='dept'";

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
       header('location:../adminPanel.php');
    }

?>