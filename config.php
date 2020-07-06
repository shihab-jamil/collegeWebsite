<?php
    $database_name = 'isrc';
    $host_name = 'localhost';
    $database_username = 'root';
    $database_password = '';

    $con = mysqli_connect($host_name , $database_username , $database_password , $database_name) or die("Could not connect to the database");
    mysqlI_set_charset($con ,'UTF8');

?>