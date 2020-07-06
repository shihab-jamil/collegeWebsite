<?php
    include('../config.php');

    $id = $_POST['id'];
    $date = $_POST['date'];
    $heading = $_POST['heading'];
    $details = $_POST['editor27'];

    $query = "UPDATE newsevent SET  heading='$heading' , details='$details' WHERE id='$id'";
    
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
       header('location:../adminPanel.php');
    }
?>