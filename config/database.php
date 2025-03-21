<?php
    //config conection
    $host       = "localhost";
    $port       = "5432";
    $dbname     = "schoolar";
    $user       = "postgres";
    $password   = "1251";

    //create connection

    $conn = pg_connect("
            host=$host
            port=$port
            dbname=$dbname
            user=$user
            password=$password

    
    "); 

    if (!$conn){
        die("connection error: ". pg_last_error());
    }else {
        echo "success connection";
    }
    


?>