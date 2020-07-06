<?php 
    include('../config.php');
    
    $qoutes = $_POST['editor10'];
    $name = $_POST['moderatorName'];
    $phone_number = $_POST['moderatorPhoneNumber'];

    if ($_FILES['moderatorImage']['tmp_name']) {
        $image = addslashes(file_get_contents($_FILES['moderatorImage']['tmp_name']));
        $query = "UPDATE `authorities` SET qoutes='$qoutes', name='$name', phone_number='$phone_number', image='$image'  WHERE category='moderator'";
    } else {
        $query = "UPDATE `authorities` SET qoutes='$qoutes' , name='$name', phone_number='$phone_number' WHERE category='moderator'";
        $image = false;
    }
  
    
    
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }
    
?>