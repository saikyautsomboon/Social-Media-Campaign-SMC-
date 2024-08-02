<?php  
session_start();
?>
<?php

$directoryUri = $_SERVER['REQUEST_URI'];

$path=parse_url($directoryUri,PHP_URL_PATH);

$compoment = explode( '/' ,$path);

$page =$compoment[2];


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Medi CamPaign (SMC) </title>


    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/custom.css" defer>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js" defer></script>

    <script src="js/dropdown.js" defer></script>



</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-dark header" id="headernav">

        <div class="container justify-content-around">

            <a class="navbar-brand logo" href="index.php">
                <img src="img/logo1.jfif" alt=""> <span>SMC</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse menutab" id="navbarScroll">

                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">

                    <li class="nav-item <?php
                if($page == "index.php"){
                  echo "nav_page active";
                }else{
                  echo "nav_page";
                }
              ?> " data-aos="zoom-in-left" data-aos-delay="300">
                        <a class="nav-link text-light " href="index.php">Home</a>
                    </li>

                    <li class="nav-item <?php
                if($page == "information.php"){
                  echo "nav_page active";
                }else{
                  echo "nav_page";
                }
              ?> " data-aos="zoom-in-left" data-aos-delay="450">
                        <a class="nav-link text-light" href="information.php">Information</a>
                    </li>

                    <li class="nav-item <?php
                if($page == "popular.php"){
                  echo "nav_page active";
                }else{
                  echo "nav_page";
                }
              ?> " data-aos="zoom-in-left" data-aos-delay="600">
                        <a class="nav-link text-light" href="popular.php">Popular</a>
                    </li>


                    <li class="nav-item <?php
                if($page == "parents.php"){
                  echo "nav_page active";
                }else{
                  echo "nav_page";
                }
              ?> " data-aos="zoom-in-left" data-aos-delay="750">
                        <a class="nav-link text-light" href="parents.php">How Parents</a>
                    </li>
                    <li class="nav-item <?php
                if($page == "livestream.php"){
                  echo "nav_page active";
                }else{
                  echo "nav_page";
                }
                ?> " data-aos="zoom-in-left" data-aos-delay="850">
                        <a class="nav-link text-light" href="livestream.php">Livestream</a>
                    </li>

                    <li class="nav-item <?php
                if($page == "legal.php"){
                  echo "nav_page active";
                }else{
                  echo "nav_page";
                }
                ?> " data-aos="zoom-in-left" data-aos-delay="1000">
                        <a class="nav-link text-light" href="legal.php">legal & Guide</a>
                    </li>
                    <li class="nav-item <?php
                if($page == "contact.php"){
                  echo "nav_page active";
                }else{
                  echo "nav_page";
                }
              ?> " data-aos="zoom-in-left" data-aos-delay="1150">
                        <a class="nav-link text-light" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item <?php
                      if($page == "search.php"){
                        echo "nav_page active";
                      }else{
                        echo "nav_page";
                      }
                    ?> " data-aos="zoom-in-left" data-aos-delay="1150">
                        <a class="nav-link text-light" href="search.php">Search</a>
                    </li>
                </ul>

                <div id="desktop_tab" data-aos="zoom-in-left" data-aos-delay="1250">

                    <form class="d-flex">

                        <?php 
                            if(isset($_SESSION['login_user'])){
                        ?>
                        <div class="user_dropdown">

                            <div class="user_cointainer border_color" id="">

                                <img src="<?= $_SESSION['login_user']['photo'] ?>" alt="" class="user_img">
                                <label class="user_name"><?= $_SESSION['login_user']['name']?></label>

                                <div class="drop_btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </div>

                            </div>
                            <div class="dropdown_infomation" id="userdrop_infomation">
                                <li class="userinfo"><a href="index.php">Home</a></li>
                                <li class="userinfo"><a href="signout.php">Logout</a><i
                                        class="fa-solid fa-right-from-bracket"></i></li>
                            </div>
                        </div>
                        <?php } else {?>

                        <div class="container-fluid">
                            <a href="login.php" class="btn btn-primary my-2 mx-lg-2">Login</a>
                            <a href="register.php" class="btn btn-warning ">Sign Up</a>
                        </div>

                        <?php }?>


                    </form>

                </div>


            </div>
        </div>
    </nav>
    <main class="col-12">