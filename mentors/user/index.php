<?php
session_start();
// $nc3 = $_SESSION['n3'];

// echo $nc3;

if(isset($_SESSION['uuid'])) 
// Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:mtee.php"); 
    // extract session for profile
 }
else{

    setcookie(session_name(), '', 100);
    session_unset();
    session_destroy();
    $_SESSION = array();
    unset($_SESSION['uuid']);
    unset($_SESSION);

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
  
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="c/code.js" charset="UTF-8"></script>
  <!-- == == -->

  <title>Home</title>
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
<body onload="Timestamp(), getRndInteger(1001,9999)">
  <section data-bs-version="5.1" class="menu menu2 cid-sFF0ciwnEL" once="menu" id="menu2-0">
    
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
                        Contacts</a></div>
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="tabs content18 cid-ukGIjiYhUH" id="tabs1-t">

    

    
    
    <div class="container">
        
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-8">
                <ul class="nav nav-tabs mb-4" role="tablist">
                    <li class="nav-item first mbr-fonts-style"><a class="nav-link mbr-fonts-style show active display-4" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs1-t_tab0" aria-selected="true"><strong>Sign In</strong></a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active display-4" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs1-t_tab1" aria-selected="true"><strong>Sign UP</strong></a></li>
                    
                    
                    
                    
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p hidden class="mbr-text mbr-fonts-style display-7">
                                    Mobirise is a free offline app for Windows and Mac to easily create small/medium
                                    websites, landing pages, online resumes and portfolios. 3100+ beautiful website
                                    blocks, templates and themes help you to start easily.
                                </p>
                                
<section data-bs-version="5.1" class="form9 cid-ukGIbE3bqw" id="form9-s">
    
    <div class="mbr-overlay"></div>
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>User Sign In</strong></h3>
            <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">
               Use your Telegram Account to get OTP code
            </h4>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" >
                <form action="dp2.php" method="POST" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name">
                    <input type="hidden" name="email" data-form-email="true" value="nqQi5FFPbcleSmsOH30ZOQ5jX6MCBOVTNCYdK2u+3a6FAbMJOFlHBOapxkjJwuy4rHFDwG3XugJPT+96sNfeOkoBMz+5q+Uo+eSQmYIv6aOEya0FjhnpuYmp9lGOu2lY">
                   
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12">
                            <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">Kindly indicate your Account type.</p>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input hidden type="text" name="" placeholder="Account type drop down" data-form-field="name" class="form-control" value="" id="name-form9-s">
                           
  <select name="actype" id="actype" class="form-control">
    <optgroup label="Account Type">
    <option value="free" >Select your Account type here</option>
    <option value="free">Free Account</option>
      <option value="basic">Basic Account</option>
    </optgroup>
  </select>
                        </div>
                        <div data-for="email" class="col-lg-4 col-md-12 col-sm-12 form-group mb-3">
                            <input type="email" name="uemail" placeholder="Email / uid" data-form-field="email" class="form-control" value="" id="email-form9-s">
                        </div>

                        <div hidden class="col-lg-4 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="dm2" placeholder="" data-form-field="pass" class="form-control" value="" id="demo2-form9-s">
                        </div>
                        <div  class="col-lg-4 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="tgid" placeholder="Telegram Chat ID Here" data-form-field="pass" class="form-control" value="" id="demo-form9-s">
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 mbr-section-btn align-center"><button type="submit" class="btn btn-success display-4">Submit</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p hidden class="mbr-text mbr-fonts-style display-7">
                                    Mobile web traffic overtook desktop one in 2016 and will only grow, and that's why
                                    it's important to create websites that look good on all devices. No special actions
                                    required, all sites you make with the Builder are mobile-friendly. You don't have to
                                    create a special mobile version of your website, it will adapt automagically. </p>
                          
    <div class="container">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-3 offset-lg-1 mbr-form">
                <form action="<?php echo'sup.php';?>" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="amEzOq04IlQMRVQs5LITrhZX9GLoVdYN4st+4HuSl3G3OMXfero1P2uSz9auLgcrMXoAlvwMMTd9YnI7RRK+wYX30HctdeGmevaXo3kSHynNovgGGicSbdjYJsx+pW69">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            Oops...! some problem!
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 display-2">
                                <strong>User Sign UP</strong></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">
                                User can sign up here for free mentorship account.</p>
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="name">
                            <input required="yes" type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form4-v">
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="email">
                            <input required="yes" type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" value="" id="email-form4-v">
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="phone">
                            <input  required="yes" type="text" name="phone" placeholder="Mobile Phone Number" data-form-field="phone" class="form-control" value="" id="name-form4-v">
                        </div>
                        <div class="col-12 col-md-auto mbr-section-btn"><button type="submit" class="btn btn-warning display-4">Submit</button></div>
                    </div>
                </form>
            </div>
            <div class="col-lg-7 offset-lg-1 col-12">
                <div class="image-wrapper"><br>
                    <img class="w-100" src="assets/images/sq3.jpg" alt="African Project Development Centre">
                </div>
            </div>
        </div>
    </div>  </div>
                        </div>
                    </div>
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section hidden data-bs-version="5.1" class="content11 cid-ukLK8pyb07" id="content11-11">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-4">
                <div class="mbr-section-btn align-center"><a class="btn btn-primary display-4" href="mtee.html">Mentee</a>
                    <a class="btn btn-primary-outline display-4" href="mtor.html">Live demo - Mentor</a></div>
            </div>
        </div>
    </div>
</section>

<section hidden data-bs-version="5.1" class="form4 cid-ukKLXcHaVA" id="form4-v">

    

    

    <div class="container">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-3 offset-lg-1 mbr-form">
                <form action="<?php echo'sup.php';?>" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="amEzOq04IlQMRVQs5LITrhZX9GLoVdYN4st+4HuSl3G3OMXfero1P2uSz9auLgcrMXoAlvwMMTd9YnI7RRK+wYX30HctdeGmevaXo3kSHynNovgGGicSbdjYJsx+pW69">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            Oops...! some problem!
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 display-2">
                                <strong>User Sign UP</strong></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">
                                Fill this form and we'll get back to you soon.</p>
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="name">
                            <input required="yes" type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form4-v">
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="email">
                            <input required="yes" type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" value="" id="email-form4-v">
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="phone">
                            <input  required="yes" type="text" name="phone" placeholder="Mobile Phone Number" data-form-field="phone" class="form-control" value="" id="name-form4-v">
                        </div>
                        <div class="col-12 col-md-auto mbr-section-btn"><button type="submit" class="btn btn-warning display-4">Submit</button></div>
                    </div>
                </form>
            </div>
            <div class="col-lg-7 offset-lg-1 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="assets/images/sq3.jpg" alt="African Project Development Centre">
                </div>
            </div>
        </div>
    </div>
</section>

<section hidden data-bs-version="5.1" class="form9 cid-ukGIbE3bqw" id="form9-s">
    
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
                <form action="dp2.php" method="POST" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name">
                    <input type="hidden" name="email" data-form-email="true" value="nqQi5FFPbcleSmsOH30ZOQ5jX6MCBOVTNCYdK2u+3a6FAbMJOFlHBOapxkjJwuy4rHFDwG3XugJPT+96sNfeOkoBMz+5q+Uo+eSQmYIv6aOEya0FjhnpuYmp9lGOu2lY">
                   
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12">
                            <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">Kindly indicate your Account type.</p>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input hidden type="text" name="" placeholder="Account type drop down" data-form-field="name" class="form-control" value="" id="name-form9-s">
                           
  <select name="actype" id="actype" class="form-control">
    <optgroup label="Account Type">
    <option value="free" >Select your Account type here</option>
    <option value="free">Free Account</option>
      <option value="basic">Basic Account</option>
    </optgroup>
  </select>
                        </div>
                        <div data-for="email" class="col-lg-4 col-md-12 col-sm-12 form-group mb-3">
                            <input type="email" name="uemail" placeholder="Email / uid" data-form-field="email" class="form-control" value="" id="email-form9-s">
                        </div>

                        <div hidden class="col-lg-4 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="dm2" placeholder="" data-form-field="pass" class="form-control" value="" id="demo2-form9-s">
                        </div>
                        <div  class="col-lg-4 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="tgid" placeholder="Telegram Chat ID Here" data-form-field="pass" class="form-control" value="" id="demo-form9-s">
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 mbr-section-btn align-center"><button type="submit" class="btn btn-success display-4">Submit</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer7 cid-sFF3CYc3p7" once="footers" id="footer7-9">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-4">
                    © Copyright 2025 African Project Development Centre- All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 0rem;"><a href="https://mobiri.se/" style="flex: 1 1;height: 0rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 0rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7">&#8204;</p><a style="z-index:1" href="https://mobirise.com/builder/ai-website-maker.html"></a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/mbr-tabs/mbr-tabs.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>