<?php
    include('../config.php');

    $id = $_POST['stuffId'];
    $name = $_POST['stuffName'];
    $position = $_POST['stuffPosition'];
    $phone_number = $_POST['stuffMobile'];

    if ($_FILES['stuffImage']['tmp_name']) {
        $image = addslashes(file_get_contents($_FILES['stuffImage']['tmp_name']));
        $query = "UPDATE stuffs SET name='$name', position='$position',  phone_number='$phone_number', image='$image' WHERE id='$id'";
    } else {
        $query = "UPDATE stuffs SET name='$name', position='$position', phone_number='$phone_number' WHERE id='$id'";
        $image = false;
    }

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }
    

?>