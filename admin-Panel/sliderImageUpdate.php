<?php
    include('../config.php');

    $id = $_POST['slideImageId'];
    $image = addslashes(file_get_contents($_FILES['slideImage']['tmp_name']));

    $query = "UPDATE slide SET image='$image' WHERE Id='$id'";

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }


?>