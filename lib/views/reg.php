<?php include("lib/layouts/header.php"); ?>
<link rel="stylesheet" href="css/style.css">

<div class="container">
    <div class="login-content">
        <div class="title">
        <i class="fab fa-facebook-messenger"></i> Online Chatting
        </div>
        <hr>
        <div class="body">
            <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                <label for="username">Username : </label> <br>
                <input type="text" name="username" id="username" placeholder="Username"> <br>

                <label for="password">Password : </label> <br>
                <input type="password" name="password" id="password" placeholder="Password"> <br>
            
                <button type="submit" class="login-btn">
                   <i class="fas fa-user-alt"></i> &nbsp;&nbsp; login
                </button>
            </form>
            <a href="#">Forget Password ? </a> <br>
            Don't have an Account ? <a href="#">Create One</a>
        </div>
        <hr>
    </div>
</div>

<script src="js/style.js"></script>
