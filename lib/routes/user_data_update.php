<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<?php 
    include("../function/function.php");

    if(empty($_SESSION['LoginSession'])){
        header("location:../../index.php");
    }

?>

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
                                   <button class="user-info-btn">Update Information</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



<script src="../../js/style.js"></script>

