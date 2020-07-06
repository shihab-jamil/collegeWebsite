<?php 
    include('../config.php');

    $id = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM gallery WHERE id=(SELECT MAX(id) FROM gallery)"));
    $id = substr($id['id'], 3);
    $id = (int)$id;
    $id++;
    $id = "img".strval($id);

    $image = addslashes(file_get_contents($_FILES['galleryImageAdd']['tmp_name']));
    $details= $_POST['galleryImageDetailsAdd'];
    
    $query = "INSERT INTO `gallery`(`id`, `image`, `details`) VALUES ('$id', '$image', '$details')";

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }

?>