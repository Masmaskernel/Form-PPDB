<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '123';
    $db   = 'psb';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        echo 'Error : ' .mysql_connect_error($conn);
    }

?>