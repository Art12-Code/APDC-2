<?php
session_start();
extract($_REQUEST);
extract($_POST);  
extract($_SESSION);  
extract($_COOKIE);  

// echo "<br>Name : ".$_SESSION['uuid'] . "<br>";
// echo "<br>Email : ".$_SESSION['uem'] . "<br>";
echo "<br>Your Current Account Type is : ".$_SESSION['acctyp'] . "<br>";
echo "<br>Phone : ".$_SESSION['phone'] . "<br>";
echo "<br>Bio : ".$_SESSION['bio'] . "<br>";
echo "<br>Photo : ".$_SESSION['photo']  . "<br>";
echo "<br>Facebook : ".$_SESSION['fb'] . "<br>";
echo "<br>Whatsapp : ".$_SESSION['whp'] . "<br>";
echo "<br>Free Mentor : ".$_SESSION['mtor1'] . "<br>";

echo "Login Success<br><br>";

echo "<a href='session_logout.php'> Logout</a> "; 
// for welcome loading page
      if(!isset($_SESSION['uuid'])) // check If session is not set then redirect to Login Page
       {
           header("Location:index.php");  
       }
?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.9.18, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.18, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/28782656-2-96x38.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>mtee</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Lexend:100,200,300,400,500,600,700,800,900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend:100,200,300,400,500,600,700,800,900&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css?v=XtZQyH"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css?v=XtZQyH" type="text/css">

  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu2 cid-ukGFW9Q3k7" once="menu" id="menu2-1">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    
                        <a href="../index.html"><img src="assets/images/28782656-2-96x38.png" alt="APDC" style="height: 3rem;"></a>
                    
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-4" href="../index.html">MENTOR SPACE BY APDC</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black text-primary display-7" href="../index.html">Home</a></li>
                    
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-7" href="../index.html">Pricing</a>
                    </li></ul>
                
                    <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="../index.html">

Contacts</a>
</div>
                <div class="navbar-buttons mbr-section-btn">
                    <a class="btn btn-danger-outline display-4" href='session_logout.php'> Logout</a>
                   
                    </div>

            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="header11 cid-ukGFWapmSJ" id="header11-2">

    

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 image-wrapper">
                <img class="w-100" src="assets/images/mbr.jpeg" alt="Mobirise Website Builder">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1">
                        <strong>
</strong><div><span style="font-size: 1.8rem;">Hi, I'm</span><strong style="font-size: 1.8rem;"> <?php echo $_SESSION['uuid'] ;?> </strong><span style="font-size: 1.8rem;">I'm a</span><strong style="font-size: 1.8rem;"> Mentee</strong><br></div></h1>
                    <p class="mbr-text mbr-fonts-style display-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada non magna eget mollis. Quisque vehicula, lorem quis sollicitudin mollis, elit enim aliquet lorem.&nbsp;</p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-warning display-7" href="mtee.html#form4-8"><span class="mbri-edit mbr-iconfont mbr-iconfont-btn"></span>edit</a> <a class="btn btn-success display-7" href="mtee.html#form4-8"><span class="mobi-mbri mobi-mbri-upload mbr-iconfont mbr-iconfont-btn"></span>upgrade account</a> <a class="btn btn-danger-outline display-7" href="mtee.html#form4-8"><span class="socicon socicon-mail mbr-iconfont mbr-iconfont-btn"></span>Reach Me</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features12 cid-ukGFWb0Re6" id="features13-3">

    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-box align-left">
                        <h4 class="card-title mbr-fonts-style mb-4 display-1"><strong>My Desires &amp; Ideas</strong></h4>
                        <p class="mbr-text mbr-fonts-style mb-4 display-7">
                            Use Mobirise website building software to create multiple sites for commercial and non-profit projects.</p>
                        <div class="mbr-section-btn"><a class="btn btn-danger-outline display-4">See my Jobs</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-globe-2 mobi-mbri"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-4">
                            <strong>Web Design</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada non magna eget mollis. Quisque vehicula, lorem quis sollicitudin mollis, elit enim aliquet lorem,&nbsp;</h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-idea mobi-mbri"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-4">
                            <strong>Art Design</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada non magna eget mollis. Quisque vehicula, lorem quis sollicitudin mollis, elit enim aliquet lorem,&nbsp;</h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-photo mobi-mbri"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-4"><strong>Polygraphic Design</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada non magna eget mollis. Quisque vehicula, lorem quis sollicitudin mollis, elit enim aliquet lorem,&nbsp;</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="people5 mbr-embla cid-ukRsvPWoot" id="people5-12">

    

    
    

    <div class="position-relative text-center">
        <h3 class="mb-4 mbr-fonts-style display-2">
            <strong>My Mentors</strong></h3>

        <div class="embla" data-skip-snaps="true" data-align="center" data-loop="true" data-auto-play="true" data-auto-play-interval="2" data-draggable="true">
            <div class="embla__viewport container">
                <div class="embla__container">
                    <div class="embla__slide slider-image item" style="margin-left: 4rem; margin-right: 4rem;">
                        <div class="user">
                            <div class="user_image">
                                <div class="item-wrapper position-relative">
                                    <img src="assets/images/team3.jpg" alt="Mobirise Website Builder">
                                </div>
                            </div>
                            <div class="user_text mb-4">
                                <p class="mbr-fonts-style display-7">
                                    Themes in the Mobirise website builder offer multiple blocks: intros, sliders, galleries, forms, articles, and so on. Start a project and click on the red plus buttons to see the blocks available for your theme.
                                </p>
                            </div>
                            <div class="user_name mbr-fonts-style mb-2 display-5">
                                <strong>Alexa</strong>
                            </div>
                            <div class="user_desk mbr-fonts-style display-7">
                                DESIGNER
                            </div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 4rem; margin-right: 4rem;">
                        <div class="user">
                            <div class="user_image">
                                <div class="item-wrapper position-relative">
                                    <img src="assets/images/team2.jpg" alt="Mobirise Website Builder">
                                </div>
                            </div>
                            <div class="user_text mb-4">
                                <p class="mbr-fonts-style display-7">
                                    Themes in the Mobirise website builder offer multiple blocks: intros, sliders, galleries, forms, articles, and so on. Start a project and click on the red plus buttons to see the blocks available for your theme.
                                </p>
                            </div>
                            <div class="user_name mbr-fonts-style mb-2 display-5">
                                <strong>Linda</strong>
                            </div>
                            <div class="user_desk mbr-fonts-style display-7">
                                DEVELOPER
                            </div>
                        </div>
                    </div>
                    <div class="embla__slide slider-image item" style="margin-left: 4rem; margin-right: 4rem;">
                        <div class="user">
                            <div class="user_image">
                                <div class="item-wrapper position-relative">
                                    <img src="assets/images/team1.jpg" alt="Mobirise Website Builder">
                                </div>
                            </div>
                            <div class="user_text mb-4">
                                <p class="mbr-fonts-style display-7">
                                    Themes in the Mobirise website builder offer multiple blocks: intros, sliders, galleries, forms, articles, and so on. Start a project and click on the red plus buttons to see the blocks available for your theme.
                                </p>
                            </div>
                            <div class="user_name mbr-fonts-style mb-2 display-5">
                                <strong>Herbert</strong>
                            </div>
                            <div class="user_desk mbr-fonts-style display-7">
                                DEVELOPER
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="embla__button embla__button--prev">
                <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Previous</span>
            </button>
            <button class="embla__button embla__button--next">
                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form4 cid-ukGFWfNyRw" id="form4-8">

    

    

    <div class="container">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-4 offset-lg-1 mbr-form" data-form-type="formoid">
<!--Formbuilder Form-->
<form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="t//kMXdTFokbjz9raLIQ8fVfUdKTWqTLGCEgKzJetZyrnddbjQsgeIa3pAXoIZP2D/D1sqt0oPevq05LeDI8Y/hyen0MShbriZaadpDKVorco2U2ygZEuxKwDpnP+xwL">
<div class="row">
<div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
<div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some problem!</div>
</div>
<div class="dragArea row">
<div class="col-lg-12 col-md-12 col-sm-12">
<h1 class="mbr-section-title mb-4 display-2"><strong>Contact Me</strong></h1>
</div>
<div class="col-lg-12 col-md-12 col-sm-12">
<p class="mbr-text mbr-fonts-style mb-4 display-7"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada non magna eget mollis.</p>
</div>
<div data-for="name" class="col-lg-12 col-md col-12 form-group mb-3">
<input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control display-7" value="" id="name-form4-8">
</div>
<div data-for="email" class="col-lg-12 col-md col-12 form-group mb-3">
<input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control display-7" value="" id="email-form4-8">
</div>
<div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="textarea">
<textarea name="textarea" placeholder="Message" data-form-field="textarea" class="form-control display-7" id="textarea-form4-8"></textarea>
</div>
<div class="col-12 col-md-auto mbr-section-btn"><button type="submit" class="btn btn-success display-4">Send Message</button></div>
</div>
</form><!--Formbuilder Form-->
</div>
            <div class="col-lg-6 offset-lg-1 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="assets/images/mbr-2.jpeg" alt="Mobirise Website Builder">
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="contacts2 cid-ukGFWgvvVg" id="contacts2-9">
    <!---->
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>My Contacts</strong>
            </h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-phone mobi-mbri" style="color: rgb(232, 90, 79); fill: rgb(232, 90, 79);"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Phone</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <a href="tel:+2347039776024" class="text-danger text-primary">+234 703 977 6024</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-letter mobi-mbri" style="color: rgb(232, 90, 79); fill: rgb(232, 90, 79);"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Email</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7"><a href="mailto:<?php echo $_SESSION['uem']?>" class="text-danger text-primary"><?php echo $_SESSION['uem']?></a></p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-globe mobi-mbri" style="color: rgb(232, 90, 79); fill: rgb(232, 90, 79);"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Address</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            4100 Ross Street, Okawville, IL
                        </p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-bulleted-list mobi-mbri" style="color: rgb(232, 90, 79); fill: rgb(232, 90, 79);"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Working Hours</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            9:00 - 18:00
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="share3 cid-ukGFWhlJqz" id="share3-a">
    
     
    
    
    

    <div class="container">
        <div class="media-container-row">
            <div class="col-12">
                <h3 class="mbr-section-title align-center mb-3 mbr-fonts-style display-2">
                    <strong>Follow Us!</strong>
                </h3>
                <div class="social-list align-center">
                   
                    <a class="iconfont-wrapper bg-facebook m-2 " target="_blank" href="https://mobiri.se">
                            <span class="socicon-facebook socicon"></span>
                        </a>
                        <a class="iconfont-wrapper bg-twitter m-2" href="https://mobiri.se" target="_blank">
                            <span class="socicon-twitter socicon"></span>
                        </a>
                        <a class="iconfont-wrapper bg-instagram m-2" href="https://mobiri.se" target="_blank">
                            <span class="socicon-instagram socicon"></span>
                        </a>
                        
                        
                        
                        
                        
                        
                        
                        
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer7 cid-ukGFWidq4V" once="footers" id="footer7-b">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-4">
                    © Copyright 2025 African Project Development Centre- All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7">&#8204;</p><a style="z-index:1" href="https://mobirise.com/builder/ai-website-maker.html">AI Website Maker</a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/embla/embla.min.js"></script>  <script src="assets/embla/script.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>