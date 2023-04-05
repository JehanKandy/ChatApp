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

                <h3>Forget Password</h3>
                <p>Enter your Email Address : </p>
                <label for="email">Email : </label> <br>
                <input type="email" name="email" id="email" placeholder="Email"> <br>

                <p>The verification OTP will send to your Email Address</p>

                <button type="submit" class="login-btn" name="forget_pass">
                   <i class="fas fa-user-plus"></i> &nbsp;&nbsp; Get Verification OTP
                </button>
            </form>
            Already have an Account ? <a href="../../index.php">Login</a>
        </div>
        <hr>
    </div>
</div>

<script src="../../js/style.js"></script>
