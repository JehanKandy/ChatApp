<?php include("../layouts/header.php") ?>
<link rel="stylesheet" href="../../css/style.css">

<?php 
    include("../function/function.php");

    if(empty($_SESSION['LoginSession'])){
        header("location:../../index.php");
    }

?>


<div class="user-content">
    <div class="container">
        <a href="../views/logout.php"><button class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</button></a>
        <div class="info">
            <img src="../../images/cover.jpg" alt="" class="cover-img">
            <img src="../../images/user-pimg.png" alt="" class="user-pimg">
            <div class="name-info">
                <div class="user-name">Jehan Weerasuriya</div>
                <div class="post">University Student</div>
            </div>
        </div>

        <div class="main-grid">
            
            <div class="row gx-3">
                <div class="col-md-4 ">
                    <div class="p-3 social-info">
                        <div class="title">Stay Updated</div>
                        <div class="body">
                            <span style="color:#3b5998;"><i class="fab fa-facebook"></i> Facebook </span> <a href="<?php view_facebook(); ?>" target="_blank"><?php view_username(); ?>.facebook</a><br>
                            <span style="color:#25D366;"><i class="fab fa-whatsapp"></i> Whatsapp </span>  <a href="<?php view_whats(); ?>" target="_blank"><?php view_username(); ?>.Whatsapp</a><br>
                            <span style="color:#0072b1;"><i class="fab fa-linkedin"></i> Linkedin </span> <a href="<?php view_linkedin(); ?>" target="_blank"><?php view_username(); ?>.Linkedin</a><br>
                            <span style="color:#171515;"><i class="fab fa-github"></i> GitHub </span> <a href="<?php view_github(); ?>" target="_blank"><?php view_username(); ?>.GitHub</a><br>
                            <span style="color:#E1306C;"><i class="fab fa-instagram"></i> Instagram </span> <a href="<?php view_inster(); ?>" target="_blank"><?php view_username(); ?>.Instagram</a><br>

                            <a href="social_edit.php"><button class="social-btn">Update Information</button></a>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 user-info">
                        <div class="title">My Info</div>                        
                        <div class="body">
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Username : </span>  <input type="text" class="dash-input" value="" disabled><br><br>
                                </div>
                                <div class="col-md-6">
                                   <span>First Name : </span>  <input type="text" class="dash-input" value="" disabled><br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <span>Email : </span>  <input type="email" class="dash-input" value="" disabled><br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Last Name : </span>  <input type="text" class="dash-input" value="" disabled><br><br>
                                </div>
                                <div class="col-md-6">
                                   <span>Role : </span>  <input type="text" class="dash-input" value="" disabled><br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <span>Address : </span>  <input type="text" class="dash-input" value="" disabled><br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Mobile Number : </span>  <input type="text" class="dash-input" value="" disabled><br><br>
                                </div>
                                <div class="col-md-6">
                                   <span>Data of Birth : </span>  <input type="text" class="dash-input" value="" disabled><br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="user_data_update.php"><button class="user-info-btn">Update Information</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <?php include("../layouts/loged_footer.php");?>
    </div>
</div>



<script src="../../js/style.js"></script>


