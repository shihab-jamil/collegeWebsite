<?php 
    include('../config.php');
    
    $qoutes = $_POST['editor12'];
    $name = $_POST['principalNameAuth'];
    $phone_number = $_POST['principalPhoneNumberAuth'];
    $email = $_POST['principalEmailAuth'];

    if ($_FILES['principalImageAuth']['tmp_name']) {
        $image = addslashes(file_get_contents($_FILES['principalImageAuth']['tmp_name']));
        $query = "UPDATE `authorities` SET qoutes='$qoutes', name='$name', phone_number='$phone_number', email='$email', image='$image'  WHERE category='principal'";
    } else {
        $query = "UPDATE `authorities` SET qoutes='$qoutes', name='$name', phone_number='$phone_number', email='$email' WHERE category='principal'";
        $image = false;
    }
    
  
   // echo $query;
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }
    
?>