<?php
    include('../config.php');

    $id = "SELECT * FROM newsevent WHERE id=(SELECT MAX(Id) FROM newsevent)";
    $id = mysqli_fetch_array(mysqli_query($con, $query));
    $id = $id['Id'];
    $id++;
    $date = $_POST['newsEventDateAdd'];
    $heading = $_POST['newsEventHeadingAdd'];
    $details = $_POST['editor26'];

    $query = "INSERT INTO `newsevent`(`Id`,`date`, `heading`, `details`) VALUES ('$id','$date','$heading','$details')";

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
       header('location:../adminPanel.php');
    }
?>