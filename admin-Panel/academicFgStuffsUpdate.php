<?php
    include('../config.php');

    $id = $_POST['fgStuffId'];
    $name = $_POST['fgStuffName'];
    $position = $_POST['fgStuffPosition'];
    $phone_number = $_POST['fgStuffMobile'];

    if ($_FILES['fgStuffImage']['tmp_name']) {
        $image = addslashes(file_get_contents($_FILES['fgStuffImage']['tmp_name']));
        $query = "UPDATE fourth_grade_stuffs SET name='$name', position='$position',  phone_number='$phone_number', image='$image' WHERE id='$id'";
    } else {
        $query = "UPDATE fourth_grade_stuffs SET name='$name', position='$position', phone_number='$phone_number' WHERE id='$id'";
        $image = false;
    }

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }
    

?>