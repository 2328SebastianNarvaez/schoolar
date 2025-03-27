<?php
        include('../config/database.php');

        $fname  = $_POST['f_name'];
        $lname  = $_POST['l_name'];
        $email  = $_POST['e_email'];
        $passwd = $_POST['passw'];

        $sql = "INSERT INTO users ( firstname, lastname, email, password)
        VALUES('$fname','$lname','$email','$passwd')
        ";

        $res = pg_query($conn, $sql);

        if ($res){
            echo "user has been created succeesfully";
        }else{
            echo "error";
        }
?>