<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

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

                <label for="email">Email : </label> <br>
                <input type="email" name="email" id="email" placeholder="Email"> <br>

                <label for="password">Password : </label> <br>
                <input type="password" name="pass" id="pass" placeholder="Password"> <br>

                <label for="cpassword">Confirm Password : </label> <br>
                <input type="password" name="cpass" id="cpass" placeholder="Confirm Password"> <br>
            
                <button type="submit" class="login-btn" name="reg">
                   <i class="fas fa-user-alt"></i> &nbsp;&nbsp; Create Account
                </button>
            </form>
            Already have an Account ? <a href="../../index.php">Login</a>
        </div>
        <hr>
    </div>
</div>

<script src="../../js/style.js"></script>
