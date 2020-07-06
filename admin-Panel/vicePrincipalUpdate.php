<?php 
    include('../config.php');
    
    $qoutes = $_POST['editor4'];
    $name = $_POST['vicePrincipalName'];
    $email = $_POST['vicePrincipalEmail'];
    $phone_number = $_POST['vicePrincipalPhoneNumber'];
    if ($_FILES['vicePrincipalImage']['tmp_name']) {
        $image = addslashes(file_get_contents($_FILES['vicePrincipalImage']['tmp_name']));
        $query = "UPDATE `authorities` SET qoutes='$qoutes', name='$name', image='$image',email='$email', phone_number='$phone_number'  WHERE category='vice_principal'";
    } else {
        $query = "UPDATE `authorities` SET qoutes='$qoutes' , name='$name',email='$email', phone_number='$phone_number' WHERE category='vice_principal'";
        $image = false;
    }
  
    
    
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }
    
?>