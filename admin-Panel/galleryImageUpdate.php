<?php 
    include('../config.php');

    $id = $_POST['galleryImageId'];
    $details= $_POST['galleryImageDetails'];
    
    if ($_FILES['galleryImage']['tmp_name']) {
         $image = addslashes(file_get_contents($_FILES['galleryImage']['tmp_name']));
         $query = "UPDATE gallery SET image='$image', details='$details' WHERE id='$id'";
    }else{
         $query = "UPDATE gallery SET  details='$details' WHERE id='$id'";    
    }

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }

?>