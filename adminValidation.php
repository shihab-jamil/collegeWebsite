<?php
    include('config.php');
    session_start();
    $_SESSION['adminAuth'] = false;
    $adminEmail = $_POST['adminEmail'];
    $adminPassword = $_POST['adminPassword'];

    $query = "SELECT * FROM admin WHERE email = '$adminEmail' AND password = '$adminPassword'";

    if (mysqli_num_rows(mysqli_query($con , $query)) > 0) {
        $_SESSION['adminAuth'] = true;
        header('location:adminPanel.php');
    }
    else{
        echo '<script>
            alert("Incorrect email or password");
        </script>';
        
        header('location:index.php');
    }

?>
