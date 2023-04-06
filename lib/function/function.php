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
            $check_user_row = mysqli_fetch_assoc($check_user_result);
            $check_user_nor = mysqli_num_rows($check_user_result);

            if($check_user_nor > 0){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>User : </strong> already exists...!
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
            }
            else{
                $insert_user = "INSERT INTO user_tbl(username,email,pass,user_type,is_active,is_pending,join_date)VALUES('$username','$email','$pass','user',1,0,NOW())";
                $insert_user_result = mysqli_query($con, $insert_user);

                if($insert_user_result){
                    header("location:../../index.php");
                }
                elseif(!$check_user_result){
                    return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>ERROR : </strong> 
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                }
            }
        }
        
    }

    function login_user($username, $pass){
        $con = Connection();

        if(empty($username)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Username : </strong> Cannot be Empty...!
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }elseif(empty($pass)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Password : </strong> Cannot be Empty...!
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }
        else{
            $check_user = "SELECT * FROM user_tbl WHERE username = '$username' && pass = '$pass' && is_active = 1";
            $check_user_result = mysqli_query($con, $check_user);
            $check_user_nor = mysqli_num_rows($check_user_result);
            $check_user_row = mysqli_fetch_assoc($check_user_result);

            if($check_user_nor != 0){
                if($check_user_row['user_type'] == 'user'){
                    setcookie('login',$check_user_row['email'],time()+60*60,'/');
                    $_SESSION['LoginSession'] = $check_user_row['email'];
                    header("location:routes/user.php");  
                }
                if($check_user_row['user_type'] == 'admin'){
                    setcookie('login',$check_user_row['email'],time()+60*60,'/');
                    $_SESSION['LoginSession'] = $check_user_row['email'];
                    header("location:routes/admin.php");  
                }
            }else{
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>User : </strong> Does not exists...!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
            }
        }
    }


?>