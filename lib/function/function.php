<?php
    include("config.php");

    use FTP\Connection;

    session_start();

    function reg_user($username, $email, $pass, $cpass){
        $con = Connection();


        if(empty($username)){
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
        elseif($pass != $cpass){
            return "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Password and Confirm Password : </strong> not Match...!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Email : </strong> invalid Email...!
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }else{
            $check_user = "SELECT * FROM user_tbl WHERE email = '$email'";
            $check_user_result = mysqli_query($con, $check_user);
        }
        
    }


?>