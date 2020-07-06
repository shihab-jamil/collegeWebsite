<?php
    include('../config.php');

    $id = $_POST['id'];
    $date = $_POST['date'];
    $heading = $_POST['heading'];
    $details = $_POST['editor24'];

    $query = "UPDATE notice SET  heading='$heading' , details='$details' WHERE id='$id'";
    
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
       header('location:../adminPanel.php');
    }
?>