<?php
    include('../config.php');

    $id = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM fourth_grade_stuffs WHERE id=(SELECT MAX(id) FROM fourth_grade_stuffs)"));
     $id = substr($id['id'], 2);
     $id = (int)$id;
     $id++;
     $id = "fg".strval($id);

    $name = $_POST['fgStuffNameAdd'];
    $position = $_POST['fgStuffPositionAdd'];
    $phone_number = $_POST['fgStuffMobileAdd'];
    $image = addslashes(file_get_contents($_FILES['fgStuffImageAdd']['tmp_name']));


    $query = "INSERT INTO `fourth_grade_stuffs`(`id`, `name`, `position`,  `phone_number`,  `image`) VALUES ('$id','$name','$position','$phone_number','$image')";

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }

?>