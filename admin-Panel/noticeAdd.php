<?php
    include('../config.php');

    $date = $_POST['dateAdd'];
    $heading = $_POST['headingAdd'];
    $details = $_POST['editor25'];

    $query = "INSERT INTO `notice`(`date`, `heading`, `details`) VALUES ('$date','$heading','$details')";

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
       header('location:../adminPanel.php');
    }
?>