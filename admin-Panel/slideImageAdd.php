<?php
    include('../config.php');

    $id = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM slide WHERE Id=(SELECT MAX(Id) FROM slide)"));
    $id = substr($id['Id'], 5);
    $id = (int)$id;
    $id++;
    $id = "slide".strval($id);
    $image = addslashes(file_get_contents($_FILES['sliderImageAdd']['tmp_name']));

    $query = "INSERT INTO `slide`(`Id`, `image`) VALUES ('$id','$image')";

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }


?>