<?php include("lib/layouts/header.php"); ?>
<link rel="stylesheet" href="css/style.css">

<div class="container">
    <div class="login-content">
        <div class="title">
        <i class="fab fa-facebook-messenger"></i> Online Chatting
        </div>
        <hr>
        <div class="body">
            <?php 
                include("lib/function/function.php");
                if(isset($_POST['login'])){
                    $result = login_user($_POST['username'], md5($_POST['password']));
                    echo $result;
                }
            ?>
            <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                <label for="username">Username : </label> <br>
                <input type="text" name="username" id="username" placeholder="Username"> <br>

                <label for="password">Password : </label> <br>
                <input type="password" name="password" id="password" placeholder="Password"> <br>
            
                <button type="submit" class="login-btn" name="login">
                   <i class="fas fa-user-alt"></i> &nbsp;&nbsp; login
                </button>
            </form>
            <a href="lib/views/forget_pass.php">Forget Password ? </a> <br>
            Don't have an Account ? <a href="lib/views/reg.php">Create One</a>
        </div>
        <hr>
    </div>
</div>

<script src="js/style.js"></script>
