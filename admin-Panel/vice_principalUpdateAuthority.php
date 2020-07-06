<?php 
    include('../config.php');
    
    $qoutes = $_POST['editor13'];
    $name = $_POST['vice_principalNameAuth'];
    $phone_number = $_POST['vice_principalPhoneNumberAuth'];
    $email = $_POST['vice_principalEmailAuth'];

    if ($_FILES['vice_principalImageAuth']['tmp_name']) {
        $image = addslashes(file_get_contents($_FILES['vice_principalImageAuth']['tmp_name']));
        $query = "UPDATE `authorities` SET qoutes='$qoutes', name='$name', phone_number='$phone_number', email='$email', image='$image'  WHERE category='vice_principal'";
    } else {
        $query = "UPDATE `authorities` SET qoutes='$qoutes', name='$name', phone_number='$phone_number', email='$email' WHERE category='vice_principal'";
        $image = false;
    }
    
  
   // echo $query;
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }
    
?>