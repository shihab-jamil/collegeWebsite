<?php 
    include('../config.php');
    
    $qoutes = $_POST['editor7'];
    
    $query = "UPDATE `authorities` SET qoutes='$qoutes' WHERE category='whyChoose'";
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
        header('location:../adminPanel.php');
    }
    
?>