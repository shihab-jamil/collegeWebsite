<?php 
    include('../config.php');
    
    $qoutes = $_POST['editor5'];
    if ($_FILES['academicSupportImage']['tmp_name']) {
        $image = addslashes(file_get_contents($_FILES['academicSupportImage']['tmp_name']));
        $query = "UPDATE `authorities` SET qoutes='$qoutes', image='$image'  WHERE category='academic_support'";
    } else {
        $query = "UPDATE `authorities` SET qoutes='$qoutes' WHERE category='academic_support'";
        $image = false;
    }
  
    
    
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }
    
?>