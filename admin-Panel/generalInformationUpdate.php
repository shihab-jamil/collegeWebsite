<?php 
    include('../config.php');
    
    $qoutes = $_POST['editor8'];
    if ($_FILES['institutionImage_generalInfo']['tmp_name']) {
        $image = addslashes(file_get_contents($_FILES['institutionImage_generalInfo']['tmp_name']));
        $query = "UPDATE `authorities` SET qoutes='$qoutes', image='$image'  WHERE category='institution_history'";
    } else {
        $query = "UPDATE `authorities` SET qoutes='$qoutes' WHERE category='institution_history'";
        $image = false;
    }
  
    
    
    if (mysqli_query($con , $query)) {
       header('location:../adminPanel.php');
    } else {
         header('location:../adminPanel.php');
    }
    
?>