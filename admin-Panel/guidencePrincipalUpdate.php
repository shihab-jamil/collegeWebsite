<?php 
    include('../config.php');
    
    $qoutes = $_POST['editor9'];
    
    $query = "UPDATE `authorities` SET qoutes='$qoutes' WHERE category='guidence_principal'";
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
        header('location:../adminPanel.php');
    }
    
?>