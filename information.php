<?php 
require "header.php";
?>
<div class="container home" id="home" data-aos="fade-up" data-aos-delay="450">
    <img src="img/underesting_social_media.jpg" alt="" class="home_img">
</div>

<div class="mobile_img" data-aos="fade-up" data-aos-delay="450">
    <img src="img/underesting_social_media.jpg" alt="" class="home_img">
</div>

<div class="container information">
    <div class="row">
        <div id="box" class="box col-12 col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="350">
            <img src="img/understand_social.jfif" alt="">
            
            <div class="infotext">
                <span>
                    Underestand Social
                </span>
                <p>
                    Social media has become an integral part of our daily lives...
                </p>
                <a href="#understand-social" class="readmore_icon">
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="box col-12 col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="550">
            
            <div class=" locked
                <?php
                        if(isset($_SESSION['login_user'])){
                    ?>
                    <?php } else { ?>
                        locked-background 
                    <?php } ?>
                ">

                    <img src="img/priavte.jfif" alt="">
            
                    <div class="infotext">
                        <span>
                            Privacy and Security
                        </span>
                        <p>
                        Privacy and security are paramount when it comes to social media use...
                        </p>
                        <a href="#privacy" class="readmore_icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
            </div>
            <?php  
                if(isset($_SESSION['login_user'])){
            
            ?>
            <?php } else {?>
                <div class="padlock">
                    <a href="login.php">
                        <img src="img/lock.png" alt="">
                    </a>
                </div>
            <?php } ?>
            
        </div>

        <div class="box col-12 col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="700">
            <div class=" locked
                <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
                ">

                    <img src="img/cbuilling.jfif" alt="">
            
                    <div class="infotext">
                        <span>
                            Cyberbullying
                        </span>
                        <p>
                        Cyberbullying and online harassment are serious issues that can ..
                        </p>
                        <a href="#cyberbully" class="readmore_icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
            
            </div>
            <?php  
                if(isset($_SESSION['login_user'])){
            
            ?>
            <?php } else {?>
                <div class="padlock">
                    <a href="login.php">
                        <img src="img/lock.png" alt="">
                    </a>
                </div>
            <?php } ?>
        </div>

        <div class="box col-12 col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="950">
            <div class=" locked
                <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
                ">
                <img src="img/well_being.webp" alt="">
                
                <div class="infotext">
                    <span>
                        Digital Well-being
                    </span>
                    <p>
                    Balancing screen time and maintaining a healthy relationship ...
                    </p>
                    <a href="#well_be" class="readmore_icon">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
        
            </div>

            <?php  
                if(isset($_SESSION['login_user'])){
            
            ?>
            <?php } else {?>
                <div class="padlock">
                    <a href="login.php">
                        <img src="img/lock.png" alt="">
                    </a>
                </div>
            <?php } ?>
            
        </div>

        <div class="box col-12 col-lg-3 col-md-6 col-sm-12"  data-aos="fade-up" data-aos-delay="350">
            <div class="locked
                <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
            ">
                <img src="img/resources.webp" alt="">
            
                <div class="infotext">
                    <span>
                        Resources for Parents 
                    </span>
                    <p>
                    Parents and educators play a vital role in guiding teenagers...
                    </p>
                    <a href="#resources" class="readmore_icon">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <?php  
                if(isset($_SESSION['login_user'])){
            
            ?>
            <?php } else {?>
                <div class="padlock">
                    <a href="login.php">
                        <img src="img/lock.png" alt="">
                    </a>
                </div>
            <?php } ?>

        </div>
    </div>
</div>

<!-- Underestanding Social Media  -->

<div class="understand_social" id="understand-social">
        <h3 data-aos="fade-up" data-aos-delay="350">Understanding Social Media Safety</h3>

        <div class="container under_container">

            <div class="row" data-aos="fade-up" data-aos-delay="350">
                    <div class="under_text col-12 col-lg-16 col-md-6 col-sm-12">
                        <p>
                            Social media has become an integral part of our daily lives, offering countless opportunities for connection, creativity, and learning.
                            However, it also presents a range of challenges and risks, particularly for teenagers.
                        </p>
                    
                    </div>
                    <div class="under_img col-12 col-lg-16 col-md-6 col-sm-12">
                        <img src="img/social_media_integral.webp" alt="">
                    </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="550">
                <div class="under_text col-12 col-lg-6 col-md-6 col-sm-12">
                    <p>
                    At SMC, we believe that understanding these risks is the first step towards creating a safer online environment. Our resources cover topics such as privacy settings, recognizing and avoiding online predators, and managing digital footprints.
                    By educating teenagers about these issues, we aim to empower them to make informed decisions and stay safe online.
                    </p>
                </div>
                <div class="under_img col-12 col-lg-6 col-md-6 col-sm-12">
                    <img src="img/underest_social.webp" alt="">
                </div>
            </div>
        </div>
</div>

<div class="privacy_security 
    <?php
        if(isset($_SESSION['login_user'])){
        ?>
        <?php } else { ?>
            hides
        <?php } 
    ?>" id="privacy" >   
    <h3 data-aos="fade-up" data-aos-delay="350">Privacy and Security</h3>

    <div class="container privacy_container">

        <div class="row">
            <div class="priv_text col-lg-6 col-md-6 col-sm-12"  data-aos="fade-right" data-aos-delay="300">
                <p>
                    Privacy and security are paramount when it comes to social media use.
                    Many teenagers are unaware of the extent to which their personal information can be accessed and shared online. 
                </p>
            </div>

            <div class="priv_text col-lg-6 col-md-6 col-sm-12" data-aos="fade-left" data-aos-delay="600">
                <p>
                    Our guides provide step-by-step instructions on how to adjust privacy settings on popular social media 
                    platforms, recognize phishing attempts, and protect personal data from cyber threats.
                    We also offer advice on creating strong passwords and using two-factor authentication to enhance account
                    security.
                </p>
            </div>
        </div>
    </div>
</div>


<div class="cyberbullying 
    <?php
        if(isset($_SESSION['login_user'])){
        ?>
        <?php } else { ?>
            hides
        <?php } 
    ?>" id="cyberbully">

    <h3  data-aos="fade-up" data-aos-delay="300" >Cyberbullying and Online Harassment</h3>

    <div class="container cyber_container">
        <div class="row justify-content-center my-3">

            <div class="box col-12 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="450">
                <img src="img/cyberbullying.jfif" alt="">
    
                <div class="cybertext">
                    <p>
                        Cyberbullying and online harassment are serious issues that can have profound effects on teenagers' mental and emotional well-being.
                    </p>
                </div>
            </div>
            <div class="box col-12 col-lg-6 col-md-6 col-sm-12"  data-aos="fade-up" data-aos-delay="550">
                <img src="img/seek_help.jfif" alt="">
    
                <div class="cybertext">
                    <p>
                        Our platform offers resources to help identify the signs of cyberbullying, understand its impact, and find effective ways to cope and seek help.
                    </p>
                </div>
            </div>
            <div class="box col-12 col-lg-6 col-md-6 col-sm-12"  data-aos="fade-up" data-aos-delay="700">
                <img src="img/encourage.jfif" alt="">
    
                <div class="cybertext">
                    <p>
                        We encourage a supportive community where victims can share their experiences and access the assistance they need. 
                    </p>
                </div>
            </div>
            <div class="box col-12 col-lg-6 col-md-6 col-sm-12"  data-aos="fade-up" data-aos-delay="850">
                <img src="img/additionally.jfif" alt="">
    
                <div class="cybertext">
                    <p>
                        Additionally, we provide guidance for bystanders on how to intervene and support their peers in times of need.
                    </p>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="well_being
    <?php
        if(isset($_SESSION['login_user'])){
        ?>
        <?php } else { ?>
            hides
        <?php } 
    ?>" id="well_be">

    <div class="row well_row">
        <div class="container well_beingtext col-8 col-lg-8 col-md-8 col-sm-8" data-aos="fade-right" data-aos-delay="300" >
            <h3>Digital Well-being and Mental Health</h3>
            <p>
                Balancing screen time and maintaining a healthy relationship with social media is crucial for overall well-being. 
                Excessive use of social media can lead to issues such as anxiety, depression, and sleep disturbances. 
                At SMC, we offer practical tips and strategies for managing screen time, setting healthy boundaries, and recognizing the signs of social media addiction. 
                Our goal is to promote a balanced digital lifestyle that supports both mental and physical health.
            </p>

        </div>

        <div class="container well_img col-4 col-lg-4 col-md-4 col-sm-4" data-aos="fade-left" data-aos-delay="600">
            <div class="row">
                <!-- <div class="box col-6 col-lg-6 col-md-6 col-sm-6"> -->
                    <img src="img/balancing.webp" alt="" class="col-12 col-lg-6 col-md-6 col-sm-6">
                <!-- </div>
                <div class="box col-6 col-lg-6 col-md-6 col-sm-6"> -->
                    <img src="img/excessive.jpg" alt="" class="col-12 col-lg-6 col-md-6 col-sm-6">
                <!-- </div>
                <div class="box col-6 col-lg-6 col-md-6 col-sm-6"> -->
                    <img src="img/offer.jpg" alt="" class="col-12 col-lg-6 col-md-6 col-sm-6">
                <!-- </div>
                <div class="box col-6 col-lg-6 col-md-6 col-sm-6"> -->
                    <img src="img/goal.jpg" alt="" class="col-12 col-lg-6 col-md-6 col-sm-6">
                <!-- </div> -->
            </div>


        </div>
    </div>
    
</div>

<div class="resource 
    <?php
        if(isset($_SESSION['login_user'])){
        ?>
        <?php } else { ?>
            hides
        <?php } 
    ?>" id="resources">
    <div class="container">
        <h3 data-aos="fade-up" data-aos-delay="150">Resources for Parents and Educators</h3>
        <p data-aos="fade-up" data-aos-delay="350">
            Arents and educators play a vital role in guiding teenagers through the complexities of social media.
            We provide a range of resources designed to help adults understand the digital landscape and effectively communicate with teenagers about online safety. 
            From conversation starters to detailed guides on monitoring and supporting safe social media use, our materials are crafted to foster open, honest, and productive discussions about online behavior and safety.
        </p>
    </div>
    
</div>



<?php 
require "footer.php";
?>