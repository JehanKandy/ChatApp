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
            <div class="row">
                <div class="col">hi</div>
                <div class="col">hi</div>
                <div class="col">hi</div>
            </div>
        </div>

        <?php include("../layouts/loged_footer.php");?>
    </div>
</div>



<script src="../../js/style.js"></script>


