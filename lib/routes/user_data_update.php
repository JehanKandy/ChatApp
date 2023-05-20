<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<?php 
    include("../function/function.php");

    if(empty($_SESSION['LoginSession'])){
        header("location:../../index.php");
    }

?>
            <div class="container">
                <div class="col">
                    <div class="p-3 user-info">
                        <div class="title">My Info</div> 
                        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST"></form>                       
                        <div class="body">
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Username : </span>  <input type="text" class="dash-input" value="" name="username"><br><br>
                                </div>
                                <div class="col-md-6">
                                   <span>First Name : </span>  <input type="text" class="dash-input" value="" name="fn"><br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <span>Email : </span>  <input type="email" class="dash-input" value="" name="email"><br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Last Name : </span>  <input type="text" class="dash-input" value="" name="ln"><br><br>
                                </div>
                                <div class="col-md-6">
                                   <span>Role : </span>  <input type="text" class="dash-input" value="" disabled><br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <span>Address : </span>  <input type="text" class="dash-input" value="" name="Address"><br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span>Mobile Number : </span>  <input type="text" class="dash-input" value="" name="mobile"><br><br>
                                </div>
                                <div class="col-md-6">
                                   <span>Data of Birth : </span>  <input type="text" class="dash-input" value="" disabled><br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                   <input type="submit" value="Update Information" class="user-info-btn" name="update_user">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



<script src="../../js/style.js"></script>

