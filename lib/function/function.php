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

                $insert_social = "INSERT INTO social_tbl(email)VALUE('$email')";
                $insert_social_result = mysqli_query($con, $insert_social);

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
                    header("location:lib/routes/user.php");  
                }
                if($check_user_row['user_type'] == 'admin'){
                    setcookie('login',$check_user_row['email'],time()+60*60,'/');
                    $_SESSION['LoginSession'] = $check_user_row['email'];
                    header("location:lib/routes/admin.php");  
                }
            }else{
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>User : </strong> Does not exists...!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
            }
        }
    }

    function social_links_add($fb, $whats, $linkin, $git, $inster){
        $con = Connection();

        if(empty($fb) || empty($whats) || empty($linkin) || empty($git) || empty($inster)){
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>ERROR : </strong> At Least one input must have value...!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        }
        else{
            
            $email = strval($_SESSION['LoginSession']);

            $update_social = "UPDATE social_tbl SET facebook='$fb', Whatsapp = '$whats', Linkedin = '$linkin', GitHub = '$git', Instagram = '$inster' WHERE email = '$email'"; 
            $update_social_result = mysqli_query($con, $update_social);

            if($update_social_result){
                header("location:user.php");
            }else{
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>ERROR : </strong> Cannot Process the task...!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
            }
        }
    }

    function view_facebook(){

        $con = Connection();

        $email = strval($_SESSION['LoginSession']);

        $select_social = "SELECT * FROM social_tbl WHERE email = '$email'";
        $select_social_result = mysqli_query($con, $select_social);
        $select_social_row = mysqli_fetch_assoc($select_social_result);

        $_SESSION['allSocial'] = $select_social_row;

        $facebook = $select_social_row['facebook'];

        // $social_view_all = "";

        echo $facebook;
    }

    function view_whats(){
        
        $con = Connection();

        $email = strval($_SESSION['LoginSession']);

        $select_social = "SELECT * FROM social_tbl WHERE email = '$email'";
        $select_social_result = mysqli_query($con, $select_social);
        $select_social_row = mysqli_fetch_assoc($select_social_result);

        $_SESSION['allSocial'] = $select_social_row;

        $Whatsapp = $select_social_row['Whatsapp'];

        // $social_view_all = "";

        echo $Whatsapp;        

    }

    function view_linkedin(){
        $con = Connection();

        $email = strval($_SESSION['LoginSession']);

        $select_social = "SELECT * FROM social_tbl WHERE email = '$email'";
        $select_social_result = mysqli_query($con, $select_social);
        $select_social_row = mysqli_fetch_assoc($select_social_result);

        $_SESSION['allSocial'] = $select_social_row;

        $linkedin = $select_social_row['Linkedin'];

        // $social_view_all = "";

        echo $linkedin;     
    }

    function view_username(){
        $con = Connection();

        $email = strval($_SESSION['LoginSession']);

        $view_user = "SELECT username FROM user_tbl WHERE email = '$email'";
        $view_user_result = mysqli_query($con, $view_user);

        $view_user_row = mysqli_fetch_assoc($view_user_result);
        
        $empty_username = "SELECT * FROM social_tbl WHERE email = '$email'";
        $empty_username_result = mysqli_query($con, $empty_username);
        $empty_username_row = mysqli_fetch_assoc($empty_username_result);

        if(empty($empty_username_row['facebook'])){
            echo "add";
        }
        elseif(empty($empty_username_row['Whatsapp'])){
            echo "add";
        }
        elseif(empty($empty_username_row['Linkedin'])){
            echo "add";
        }
        elseif(empty($empty_username_row['GitHub'])){
            echo "add";
        }
        elseif(empty($empty_username_row['Instagram'])){
            echo "add";
        }
        else{
            echo $view_user_row['username'];
        }
    }


?>