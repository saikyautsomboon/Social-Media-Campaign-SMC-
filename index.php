<?php 
require "header.php";
?>

<div class="container home" id="home" data-aos="fade-up" data-aos-delay="450">
    <img src="img/bg.jpg" alt="" class="home_img">
</div>

<div class="mobile_img" data-aos="fade-up" data-aos-delay="450">
    <img src="img/bg.jpg" alt="" class="home_img">
</div>


<div class="container aboutvideo" id="aboutvideo">

        <div class="video_container col-12 col-sm-12" id="video_container" data-aos="fade-right" data-aos-delay="300">
            <video src="img/about-vid-1.mp4" muted autoplay loop class="videoshow" ></video>
            <div class="controls">
                <span class="video_btn" data-src="img/about-vid-1.mp4"></span>
                <span class="video_btn" data-src="img/about-vid-2.mp4"></span>
                <span class="video_btn" data-src="img/about-vid-3.mp4"></span>
            </div> 
        </div>

        <div class="content" id="content" data-aos="fade-left" data-aos-delay="600">
            <span id="content_span">why choose us?</span>
            <h3 id="content_title">Welcome to Social Media Campaign</h3>
            <p id="content_text">
            At SMC, we are dedicated to helping teenagers navigate the complex world of social media safely and responsibly.

            </p>
            <a href="#" class="btn btn-outline-primary btnread">read more</a>
        </div>   
        
</div>

<div class="container destination d-flex flex-column align-self-center text-center" id="destination">
    <div class="heading" data-aos="fade-up" data-aos-delay="150">
        <span>Our Destination</span>
        <h1>make your Destination</h1>
    </div>

    <div class="row box-container g-3 mx-2">

        <div class="box col-lg-4 col-md-4 col-sm-6 my-4" data-aos="fade-up" data-aos-delay="300">
            <div class="images w-10">
                <img src="img/trav.webp" alt="">
            </div>
            <div class="context">
                <span class="desttitle">Travel Blogger</span>
                <p>
                A travel blogger shares their journeys and experiences from around the world...
                </p>
                <a href="" class="readmore">Read More <i class="fas fa-angle-right"></i></a>
            </div>

        </div>

        <div class="box col-lg-4 col-md-4 col-sm-6 my-4" data-aos="fade-up" data-aos-delay="400">
            <div class="images w-10">
                <img src="img/Social.webp" alt="">
            </div>
            <div class="context">
                <span>Social Media Manager</span>
                <p>
                social media manager curates and oversees content across various social platforms...
                </p>
                <a href="" class="readmore">Read More <i class="fas fa-angle-right"></i></a>
            </div>

        </div>

        <div class="box col-lg-4 col-md-4 col-sm-6 my-4" data-aos="fade-up" data-aos-delay="550">
            <div class="images w-10">
                <img src="img/Digital_Marketing_Specialist.jpg" alt="">
            </div>
            <div class="context">
                <span>Digital Marketing Specialist</span>
                <p>
                    A digital marketing specialist develops and implements online marketing strategies...
                </p>
                <a href="" class="readmore">Read More <i class="fas fa-angle-right"></i></a>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 my-4" data-aos="fade-up" data-aos-delay="750">
            <div class="
            <?php
                if(isset($_SESSION['login_user'])){
            ?>
            <?php } else { ?>
                locked-background 
            <?php } ?>
            ">
                <div class="box">  
                    <div class="images w-10">
                        <img src="img/cybersecurity-analyst.jpg" alt="">
                    </div>
                    <div class="context">
                        <span>Cybersecurity Analyst</span>
                        <p>
                            Monitor and protect against online threats
                        </p>
                        <a href="" class="readmore">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
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
        
        <div class="col-lg-4 col-md-4 col-sm-6 my-4" data-aos="fade-up" data-aos-delay="850">
            <div class="
            <?php
                if(isset($_SESSION['login_user'])){
            ?>
            <?php } else { ?>
                locked-background 
            <?php } ?>
            ">
                <div class="box">
                    <div class="images w-10">
                        <img src="img/Content_Moderator.jpg" alt="">
                    </div>
                    <div class="context">
                        <span>Content Moderator</span>
                        <p>
                            Review and moderate user-generated content on social media platforms
                        </p>
                        <a href="" class="readmore">Read More <i class="fas fa-angle-right"></i></a>
                    </div>

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

        <div class="col-lg-4 col-md-4 col-sm-6 my-4" data-aos="fade-up" data-aos-delay="950">
            <div class="
            <?php
                if(isset($_SESSION['login_user'])){
            ?>
            <?php } else { ?>
                locked-background 
            <?php } ?>
            ">

                <div class="box">
                    <div class="images w-10">
                        <img src="img/Digital-Literacy.jpg" alt="">
                    </div>
                    <div class="context">
                        <span>Digital Literacy Educator</span>
                        <p>Teach students about safe and responsible internet use</p>
                        <a href="" class="readmore">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
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

        <div class="col-lg-4 col-md-4 col-sm-6 my-4" data-aos="fade-up" data-aos-delay="1150">
            <div class="
            <?php
                if(isset($_SESSION['login_user'])){
            ?>
            <?php } else { ?>
                locked-background 
            <?php } ?>
            ">
                <div class="box">
                    <div class="images w-10">
                        <img src="img/Public_Relations.jpg" alt="">
                    </div>
                    <div class="context">
                        <span>Public Relations Specialist</sp>
                        <p>Manage the public image of individuals or organizations on social media</p>
                        <a href="" class="readmore">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
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

        <div class="col-lg-4 col-md-4 col-sm-6 my-4" data-aos="fade-up" data-aos-delay="350">
            <div class="
            <?php
                if(isset($_SESSION['login_user'])){
            ?>
            <?php } else { ?>
                locked-background 
            <?php } ?>
            ">
                <div class="box">
                    <div class="images w-10">
                        <img src="img/Youth_Counselor_Social_Worker.jpg" alt="">
                    </div>
                    <div class="context">
                        <span>Youth Counselor or Social Worker</span>
                        <p>Provide support and guidance to teenagers facing online safety issues</p>
                        <a href="" class="readmore">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
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

        <div class="col-lg-4 col-md-4 col-sm-6 my-4" data-aos="fade-up" data-aos-delay="450">
            <div class="
            <?php
                if(isset($_SESSION['login_user'])){
            ?>
            <?php } else { ?>
                locked-background 
            <?php } ?>
            ">
                <div class="box">
                    <div class="images w-10">
                        <img src="img/e-commear-manager.png" alt="">
                    </div>
                    <div class="context">
                        <span>E-commerce Manager</span>
                        <p>Oversee online sales platforms and social media marketing efforts</p>
                        <a href="" class="readmore">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
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

        <div class="col-lg-4 col-md-4 col-sm-6 my-4" data-aos="fade-up" data-aos-delay="550">
            <div class="
                <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
            ">
                <div class="box">
                    <div class="images w-10">
                        <img src="img/Social_Media_Manager_625x417.png" alt="">
                    </div>
                    <div class="context">
                        <span>Community Manager</span>
                        <p>Build and nurture online communities around a brand or cause</p>
                        <a href="" class="readmore">Read More <i class="fas fa-angle-right"></i></a>
                    </div>

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

        <div class="col-lg-4 col-md-4 col-sm-6 my-4" data-aos="fade-up" data-aos-delay="650">
            <div class="
            <?php
                if(isset($_SESSION['login_user'])){
            ?>
            <?php } else { ?>
                locked-background 
            <?php } ?>
            ">
                <div class="box">
                    <div class="images w-10">
                        <img src="img/Influences.png" alt="">
                    </div>
                    <div class="context">
                        <span>Influencer</span>
                        <p>Manage relationships with social media influencers</p>
                        <a href="" class="readmore">Read More <i class="fas fa-angle-right"></i></a>
                    </div>
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

<div class="container review" id="review">

    <div class="row">
        <div class="content col-lg-6 col-md-12 col-sm-12 align-self-center" data-aos="fade-right" data-aos-delay="300">
            <span>Information</span>
            <h3>good news from our Website</h3>
            <p>
                Our website is designed to be a comprehensive resource for teenagers, parents, and educators alike.
                Here, you will find valuable information on the most popular social media apps, practical advice for safe online behavior, and tips for parents on how to support their children in the digital age. 
            </p>
        </div>

        <div class="box_container col-lg-6 col-md-12 col-sm-12" data-aos="fade-left" data-aos-delay="600">

            <div class="box" >
                <p>We also provide insights into the world of livestreaming and its potential risks and rewards.</p>
                <div class="re_info">
                    <img src="img/buildLivestream.webp" alt="">
                    <div class="info">
                        <h3>Learning</h3>
                        <span>SMC Co.</span>
                    </div>
    
                </div>
            </div>

            <div class="box" >
                <p>Join our community and stay updated with our latest news and tips by signing up for our monthly newsletter. </p>
                <div class="re_info">
                    <img src="img/hotnew.webp" alt="">
                    <div class="info">
                        <h3>Hot News</h3>
                        <span>SMC Co.</span>
                    </div>
                </div>
            </div>

            <div class="box" >
                <p>Together, we can make social media a safer place for everyone</p>
                <div class="re_info">
                    <img src="img/safetogether.jpg" alt="">
                    <div class="info">
                        <h3>Safte Together</h3>
                        <span>SMC Co.</span>
                    </div>
                </div>
            </div>

            <div class="box" >
                <p>Explore our website to learn more about how we can help you stay safe and savvy in the digital world.</p>
                <div class="re_info">
                    <img src="img/elearning.jpg" alt="">
                    <div class="info">
                        <h3>Learn Our Website</h3>
                        <span>SMC Co.</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<?php 
require "footer.php";
?>