<?php
    include("config.php");

    use FTP\Connection;

    session_start();

    function reg_user($username, $email, $pass, $cpass){
        $con = Connection();

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Email Error</strong> &nbsp; Check Again Your Email
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
        }
        elseif(empty($username)){
            return "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Username : </strong> Connot be Empty...!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        }
        elseif(empty($email)){
            return "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Email : </strong> Connot be Empty...!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        }
        elseif(empty($pass)){
            return "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Password : </strong> Connot be Empty...!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        }
        elseif(empty($cpass)){
            return "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Confirm Password : </strong> Connot be Empty...!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        }
        elseif(empty($username)){
            return "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Password and Confirm Password : </strong> not Match...!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        }
        
    }


?>