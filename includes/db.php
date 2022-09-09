<?php
    // $servername = "localhost";
    // $username = "sqluser";
    // $password = "sqlpass";
    $servername = "sql6.freesqldatabase.com";
    $username = "sql6518361";
    $password = "BA4Dgs8eij";
    $dbname = "sql6518361";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn){
        die("Connection failed" . mysqli_connect_error());
    }
    // echo "Connection successful!";

?>