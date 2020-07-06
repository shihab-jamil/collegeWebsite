<?php 
    include('../config.php');
    
    $qoutes = $_POST['editor1'];
    
    $query = "UPDATE `authorities` SET qoutes='$qoutes' WHERE category='announcement'";
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
        header('location:../adminPanel.php');
    }
    
?>