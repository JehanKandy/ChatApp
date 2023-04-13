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
                            <i class="fab fa-facebook"></i> Facebook <br>
                            <i class="fab fa-whatsapp"></i> Whatsapp - +94 711758851    

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 user-info">
                        <div class="title">My Info</div>
                    </div>
                </div>
            </div>
            
        </div>

        <?php include("../layouts/loged_footer.php");?>
    </div>
</div>



<script src="../../js/style.js"></script>


