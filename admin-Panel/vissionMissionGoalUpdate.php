<?php 
    include('../config.php');
    
    $qoutes = $_POST['editor6'];
    
    $query = "UPDATE `authorities` SET qoutes='$qoutes' WHERE category='vissionMissionGoal'";
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
        header('location:../adminPanel.php');
    }
    
?>