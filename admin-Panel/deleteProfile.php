<?php
    include('../config.php');

    $tableName = $_GET['table'];
    $id = $_GET['id'];

    $query = "DELETE FROM $tableName WHERE id='$id'";

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }

?>