<?php
    $dbServer = getenv('HOSTNAME');
    $username = getenv('USERNAME');
    $password = getenv('PASSWORD');
    $dbName = getenv('DBNAME');

    #$dbServer = "192.168.56.103:3306";
    #$username = "BlibliSQL";
    #$password = "teo12345";
    #$dbName = "gd4_9523_c";

    # $dbServer = "localhost";
    # $username = "root";
    # $password = "";
    # $dbName = "GD4_9523_C";

    $con = mysqli_connect($dbServer, $username, $password, $dbName);

    if(mysqli_connect_errno())
    {
        echo"failed to connect to MySQL : ". mysqli_connect_error();
    }
?>
