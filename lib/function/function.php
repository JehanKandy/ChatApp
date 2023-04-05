<?php
    include("config.php");

    use FTP\Connection;

    session_start();

    function reg_user($username, $email, $pass, $cpass){
        $con = Connection();

        if(empty($username)){
            return "Empty Username";
        }
        
    }


?>