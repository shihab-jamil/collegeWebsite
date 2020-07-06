<?php
    include('../config.php');

    $id = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM teachers WHERE id=(SELECT MAX(id) FROM teachers)"));
     $id = substr($id['id'], 1);
     $id = (int)$id;
     $id++;
     $id = "t".strval($id);

    $name = $_POST['teacherNameAdd'];
    $position = $_POST['teacherPositionAdd'];
    $subject = $_POST['teacherSubjectAdd'];
    $phone_number = $_POST['teacherMobileAdd'];
    $email = $_POST['teacherEmailAdd'];
    $nid = $_POST['teacherNIDAdd'];
    $image = addslashes(file_get_contents($_FILES['teacherImageAdd']['tmp_name']));


    $query = "INSERT INTO `teachers`(`id`, `nid`, `position`, `subject`, `name`, `phone_number`, `email`, `image`) VALUES ('$id','$nid','$position','$subject','$name','$phone_number','$email','$image')";

    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }

?>