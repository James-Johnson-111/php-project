<?php

    $baseURL = 'http://localhost:3000/';

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'php-eproject';

    $connection = mysqli_connect( $host, $user, $pass, $database ) or die("Connection failed : " . mysqli_connect_error());

?>