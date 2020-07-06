<?php 
    include('../config.php');
    
    $qoutes = $_POST['editor11'];
    $name = $_POST['chairmanName'];
    $phone_number = $_POST['chairmanPhoneNumber'];

    if ($_FILES['chairmanImage']['tmp_name']) {
        $image = addslashes(file_get_contents($_FILES['chairmanImage']['tmp_name']));
        $query = "UPDATE `authorities` SET qoutes='$qoutes', name='$name', phone_number='$phone_number', image='$image'  WHERE category='chairman'";
    } else {
        $query = "UPDATE `authorities` SET qoutes='$qoutes' , name='$name', phone_number='$phone_number' WHERE category='chairman'";
        $image = false;
    }
  
    
    
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }
    
?>

