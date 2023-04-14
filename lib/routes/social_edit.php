<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<?php 
    include("../function/function.php");

    if(empty($_SESSION['LoginSession'])){
        header("location:../../index.php");
    }

?>


<div class="user-content">
    <div class="container">
        <div class="update-info">
            <a href="user.php"><button class="bck-btn">Back</button></a>

            <?php 
                if(isset($_POST['update_social'])){
                    $result = social_links_add($_POST['facebook'],$_POST['whatsapp'],$_POST['linkedin'],$_POST['gitHub'],$_POST['instagram']);
                    echo $result;
                }
            ?>

            <div class="social-media">
                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            Facebook :  <br>
                            <input type="text" class="dash-input" name="facebook"> <br><br>                    
                        </div>
                        <div class="col-md-6">
                            Whatsapp :  <br>
                            <input type="text" class="dash-input" name="whatsapp"> <br><br>     
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Linkedin :  <br>
                            <input type="text" class="dash-input" name="linkedin"> <br><br>                    
                        </div>
                        <div class="col-md-6">
                            GitHub :  <br>
                            <input type="text" class="dash-input" name="gitHub"> <br><br>     
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Instagram :  <br>
                            <input type="text" class="dash-input" name="instagram"> <br><br>   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Update Information" name="update_social" class="user-info-btn">   
                        </div>
                    </div>
                </form>
            </div>
            <br>

        </div>
    </div>
</div>


<script src="../../js/style.js"></script>

