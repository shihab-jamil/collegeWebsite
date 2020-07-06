<?php
    include('../config.php');

    $id = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM stuffs WHERE id=(SELECT MAX(id) FROM stuffs)"));
     $id = substr($id['id'], 1);
     $id = (int)$id;
     $id++;
     $id = "s".strval($id);

    $name = $_POST['stuffNameAdd'];
    $position = $_POST['stuffPositionAdd'];
    $phone_number = $_POST['stuffMobileAdd'];
    $image = addslashes(file_get_contents($_FILES['stuffImageAdd']['tmp_name']));


    $query = "INSERT INTO `stuffs`(`id`, `name`, `position`,  `phone_number`,  `image`) VALUES ('$id','$name','$position','$phone_number','$image')";

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }

?>