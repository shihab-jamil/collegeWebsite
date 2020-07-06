<?php 
    include('../config.php');
    
    $qoutes = $_POST['editor3'];
    $name = $_POST['principalName'];
    $email = $_POST['principalEmail'];
    $phone_number = $_POST['principalPhoneNumber'];
    if ($_FILES['principalImage']['tmp_name']) {
        $image = addslashes(file_get_contents($_FILES['principalImage']['tmp_name']));
        $query = "UPDATE `authorities` SET qoutes='$qoutes', name='$name',email='$email', phone_number='$phone_number', image='$image'  WHERE category='principal'";
    } else {
        $query = "UPDATE `authorities` SET qoutes='$qoutes' , name='$name',email='$email', phone_number='$phone_number' WHERE category='principal'";
        $image = false;
    }
  
    
    
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }
    
?>