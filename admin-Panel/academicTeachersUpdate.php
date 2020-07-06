<?php
    include('../config.php');

    $id = $_POST['teacherId'];
    $name = $_POST['teacherName'];
    $position = $_POST['teacherPosition'];
    $subject = $_POST['teacherSubject'];
    $phone_number = $_POST['teacherMobile'];
    $email = $_POST['teacherEmail'];
    $nid = $_POST['teacherNID'];

    if ($_FILES['teacherImage']['tmp_name']) {
        $image = addslashes(file_get_contents($_FILES['teacherImage']['tmp_name']));
        $query = "UPDATE teachers SET name='$name', position='$position', subject='$subject', phone_number='$phone_number', email='$email', image='$image' WHERE id='$id'";
    } else {
        $query = "UPDATE teachers SET name='$name', position='$position', subject='$subject', phone_number='$phone_number', email='$email' WHERE id='$id'";
        $image = false;
    }

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }

?>