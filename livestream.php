<?php 
require "header.php";
?>

<div class="container home" id="home" data-aos="fade-up" data-aos-delay="250">
    <img src="img/livestream-social.jpeg" alt="" class="home_img_live">
</div>

<div class="mobile_img" data-aos="fade-up" data-aos-delay="250">
    <img src="img/livestream-social.jpeg" alt="">
</div>


<!-- Box for LiveSTream Social Media  -->


<div class="container livestream">
    <h3 data-aos="fade-up" data-aos-delay="150">Things You Should Know Before Livestreaming</h3>
    
    <div class="row">
        <div class="box col-12 col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="350">
            <img src="img/understand_risk.jpeg" alt="">
            
            <div class="infotext">
                <span>
                Understanding the Risks
                </span>
                <p>
                Livestreaming can be an exciting way to connect with...
                </p>
                <a href="#understand-risk" class="understandrisk readmore_icon">
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="box col-12 col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="500">
            <img src="img/privacy_concerns.jpeg" alt="">
            
            <div class="infotext">
                <span>
                    Privacy Concerns
                </span>
                <p>
                    One of the most significant concerns with livestreaming is privacy...
                </p>
                <a href="#privacy_concerns" class="privacyconcern readmore_icon">
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="box col-12 col-lg-3 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="700">
            <img src="img/content-moderation.jpeg" alt="">
            
            <div class="infotext">
                <span>
                    Content Moderation
                </span>
                <p>
                    Managing the interaction with viewers is a key aspect of livestreaming...
                </p>
                <a href="#content_moderation" class="contentmoderation readmore_icon">
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
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
                <img src="img/legal-and-ethical.jpeg" alt="">
            
                <div class="infotext">
                    <span>
                        Legal and Ethical Considerations
                    </span>
                    <p>
                        Livestreamers should be aware of the legal and ethical guidelines ...
                    </p>
                    <a href="
                    <?php 
                            if(isset($_SESSION['login_user'])){
                        ?>
                            #legal_ethicals

                        <?php } else{?>
                            login.php
                        <?php }?>
                    " class="legalethical readmore_icon">
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

        <div class="box col-12 col-lg-3 col-md-6 col-sm-12"  data-aos="fade-up" data-aos-delay="500">
            
            <div class="locked
                <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
                ">
                    <img src="img/technical_setup.jpeg" alt="">
            
                    <div class="infotext">
                        <span>
                            Technical Setup
                        </span>
                        <p>
                            A successful livestream requires a reliable technical setup...
                        </p>
                        <a href="
                            <?php 
                                if(isset($_SESSION['login_user'])){
                            ?>
                                #technical_setups

                            <?php } else{?>
                                login.php
                            <?php }?>
                        " class="technicalsetup readmore_icon">
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

        <div class="box col-12 col-lg-3 col-md-6 col-sm-12"  data-aos="fade-up" data-aos-delay="500">
            <div class="locked
                <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
                ">

                <img src="img/engaging_audience.jpeg" alt="">
            
                <div class="infotext">
                    <span>
                        Audience Engagement
                    </span>
                    <p>
                        Engaging with the audience is a critical component of a...
                    </p>
                    <a href="
                        <?php 
                            if(isset($_SESSION['login_user'])){
                        ?>
                            #audiences

                        <?php } else{?>
                            login.php
                        <?php }?>
                    " class="audiences readmore_icon">
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

        <div class="box col-12 col-lg-3 col-md-6 col-sm-12"  data-aos="fade-up" data-aos-delay="650">
            <div class="locked
                <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
                ">
                    <img src="img/content-planning.jpeg" alt="">
            
                    <div class="infotext">
                        <span>
                            Content Planning
                        </span>
                        <p>
                            Having a clear plan for the livestream content helps ensure...
                        </p>
                        <a href="
                            <?php 
                                if(isset($_SESSION['login_user'])){
                            ?>
                                #content_plannings

                            <?php } else{?>
                                login.php
                            <?php }?>
                        " class="contentplanning readmore_icon">
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

        <div class="box col-12 col-lg-3 col-md-6 col-sm-12"  data-aos="fade-up" data-aos-delay="700">
            <div class="locked
                <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
                ">
                    <img src="img/safety-well-being.jpeg" alt="">
            
                    <div class="infotext">
                        <span>
                            Safety and Well-being
                        </span>
                        <p>
                            Streamers should prioritize their safety and well-being ...
                        </p>
                        <a href="
                        <?php 
                            if(isset($_SESSION['login_user'])){
                        ?>
                            #safety_well_beings

                        <?php } else{?>
                            login.php
                        <?php }?>
                        
                        " class="safetybeing readmore_icon">
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
                    <img src="img/stream-review.jpeg" alt="">
            
                    <div class="infotext">
                        <span>
                            Post-Stream Review
                        </span>
                        <p>
                            After the livestream, it’s beneficial to review the broadcas...
                        </p>
                        <a href="
                            <?php 
                                if(isset($_SESSION['login_user'])){
                            ?>
                                #post_stream_reviews

                            <?php } else{?>
                                login.php
                            <?php }?>
                        " class="poststreamreview readmore_icon">
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

<div class="livecontainer" id="livecontainers">

    <section class="understand_risk understandrisk" id="understand-risk">

        <h3 data-aos="fade-up" data-aos-delay="350">Understanding the Risks</h3>

        <div class="container" >

            <div class="row" data-aos="fade-up" data-aos-delay="350">
                    <div class="under_text col-12 col-lg-16 col-md-6 col-sm-12">
                        <p>
                            Livestreaming can be an exciting way to connect with an audience in real-time, but it also comes with inherent risks.
                            Before starting a livestream, it's crucial to understand that anything broadcasted is immediate and permanent. 
                        </p>
                    
                    </div>
                    <div class="under_img col-12 col-lg-16 col-md-6 col-sm-12">
                        <img src="img/livestream_can.png" alt="">
                    </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="500">
                <div class="under_text col-12 col-lg-6 col-md-6 col-sm-12">
                    <p>
                        Unlike pre-recorded videos, there’s no opportunity for editing or retraction. 
                        This can lead to unintended sharing of personal information, inappropriate content, or situations that may be difficult to control.
                    </p>
                </div>
                <div class="under_img col-12 col-lg-6 col-md-6 col-sm-12">
                    <img src="img/unlike_pre_record.png" alt="">
                </div>
            </div>
        </div>

    </section>


    <section class="privacy_concern privacyconcern" id="privacy_concerns">

        <h3 data-aos="fade-up" data-aos-delay="350">Privacy Concerns</h3>

        <div class="container">

            <div class="row" data-aos="fade-up" data-aos-delay="350">
                    <div class="under_text col-12 col-lg-16 col-md-6 col-sm-12">
                        <p>
                        One of the most significant concerns with livestreaming is privacy.
                        Streamers should be cautious about sharing personal details such as their location, home environment, or any information that could identify them in real life.
                        </p>
                    
                    </div>
                    <div class="under_img col-12 col-lg-16 col-md-6 col-sm-12">
                        <img src="img/one_of_the_most.png" alt="">
                    </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="500">
                <div class="under_text col-12 col-lg-6 col-md-6 col-sm-12">
                    <p>
                    It’s essential to use privacy settings effectively, 
                    such as enabling chat moderation, restricting who can view the stream, and avoiding revealing sensitive information during the broadcast.
                    </p>
                </div>
                <div class="under_img col-12 col-lg-6 col-md-6 col-sm-12">
                    <img src="img/its_ressential.png" alt="">
                </div>
            </div>
        </div>

    </section>
    
    <section class="content_moderatio contentmoderation" id="content_moderation">

        <h3 data-aos="fade-up" data-aos-delay="350">Content Moderation</h3>

        <div class="container">

            <div class="row" data-aos="fade-up" data-aos-delay="350">
                    <div class="under_text col-12 col-lg-16 col-md-6 col-sm-12">
                        <p>
                        Managing the interaction with viewers is a key aspect of livestreaming. 
                        This includes moderating comments to prevent harassment, bullying, or inappropriate behavior. 
                        </p>
                    
                    </div>
                    <div class="under_img col-12 col-lg-16 col-md-6 col-sm-12">
                        <img src="img/content_managing.png" alt="">
                    </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="500">
                <div class="under_text col-12 col-lg-6 col-md-6 col-sm-12">
                    <p>
                    Many livestreaming platforms offer tools to help with this, such as the ability to block or 
                    report users, enable filters for offensive language, and appoint moderators to oversee the chat. Being prepared to handle negative interactions is crucial for maintaining a positive and safe streaming environment.
                    </p>
                </div>
                <div class="under_img col-12 col-lg-6 col-md-6 col-sm-12">
                    <img src="img/content_livestreaming.png" alt="">
                </div>
            </div>
        </div>

    </section>

    <section class="legal_ethical legalethical" id="legal_ethicals">

        <h3 data-aos="fade-up" data-aos-delay="350">Legal and Ethical Considerations</h3>

        <div class="container">

            <div class="row" data-aos="fade-up" data-aos-delay="350">
                    <div class="under_text col-12 col-lg-16 col-md-6 col-sm-12">
                        <p>
                        Livestreamers should be aware of the legal and ethical guidelines surrounding their content. This includes understanding copyright laws to avoid streaming copyrighted material without permission, adhering to platform guidelines, and being mindful of the ethical implications of their content. 
                        </p>
                    
                    </div>
                    <div class="under_img col-12 col-lg-16 col-md-6 col-sm-12">
                        <img src="img/legal_livestreamers.png" alt="">
                    </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="500">
                <div class="under_text col-12 col-lg-6 col-md-6 col-sm-12">
                    <p>
                    Broadcasting someone without their consent, sharing misinformation, or engaging in harmful behaviors can have legal consequences and damage the streamer’s reputation.
                    </p>
                </div>
                <div class="under_img col-12 col-lg-6 col-md-6 col-sm-12">
                    <img src="img/legal_brodcasting.png" alt="">
                </div>
            </div>
        </div>

    </section>
    
    <section class="technical_setup technicalsetup" id="technical_setups">

        <h3 data-aos="fade-up" data-aos-delay="350">Technical Setup</h3>

        <div class="container">

            <div class="row" data-aos="fade-up" data-aos-delay="350">
                    <div class="under_text col-12 col-lg-16 col-md-6 col-sm-12">
                        <p>
                        A successful livestream requires a reliable technical setup. This includes a stable internet connection, suitable hardware (such as a good quality camera and microphone), and streaming software. 
                        </p>
                    
                    </div>
                    <div class="under_img col-12 col-lg-16 col-md-6 col-sm-12">
                        <img src="img/technical_successful_livestream.png" alt="">
                    </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="500">
                <div class="under_text col-12 col-lg-6 col-md-6 col-sm-12">
                    <p>
                    It’s also important to test the setup before going live to ensure everything runs smoothly. Preparing for technical issues and knowing how to troubleshoot them can prevent disruptions during the stream.
                    </p>
                </div>
                <div class="under_img col-12 col-lg-6 col-md-6 col-sm-12">
                    <img src="img/technical_important.png" alt="">
                </div>
            </div>
        </div>

    </section>

    <section class="audience audiences" id="audiences">

        <h3 data-aos="fade-up" data-aos-delay="350">Audience Engagement</h3>

        <div class="container">

            <div class="row" data-aos="fade-up" data-aos-delay="350">
                    <div class="under_text col-12 col-lg-16 col-md-6 col-sm-12">
                        <p>
                        Engaging with the audience is a critical component of a successful livestream. Streamers should plan how they will interact with viewers, such as responding to comments, answering questions, and encouraging participation. 
                        </p>
                    
                    </div>
                    <div class="under_img col-12 col-lg-16 col-md-6 col-sm-12">
                        <img src="img/audience_engaging.png" alt="">
                    </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="500">
                <div class="under_text col-12 col-lg-6 col-md-6 col-sm-12">
                    <p>
                    Building a positive rapport with the audience can enhance the streaming experience and foster a loyal community.
                    </p>
                </div>
                <div class="under_img col-12 col-lg-6 col-md-6 col-sm-12">
                    <img src="img/audience_building.png" alt="">
                </div>
            </div>
        </div>

    </section>

    <section class="content_planning contentplanning" id="content_plannings">

        <h3 data-aos="fade-up" data-aos-delay="350">Content Planning</h3>

        <div class="container">

            <div class="row" data-aos="fade-up" data-aos-delay="350">
                    <div class="under_text col-12 col-lg-16 col-md-6 col-sm-12">
                        <p>
                        Having a clear plan for the livestream content helps ensure a smooth and engaging broadcast. 
                        </p>
                    
                    </div>
                    <div class="under_img col-12 col-lg-16 col-md-6 col-sm-12">
                        <img src="img/content_clear_plan.png" alt="">
                    </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="500">
                <div class="under_text col-12 col-lg-6 col-md-6 col-sm-12">
                    <p>
                    This includes preparing a structure or script, deciding on key topics or activities, and considering the duration of the stream. Planning helps maintain the flow of the broadcast and keeps the audience engaged from start to finish.
                    </p>
                </div>
                <div class="under_img col-12 col-lg-6 col-md-6 col-sm-12">
                    <img src="img/content_preparing.png" alt="">
                </div>
            </div>
        </div>

    </section>

    <section class="safety_well_being safetybeing" id="safety_well_beings">

        <h3 data-aos="fade-up" data-aos-delay="350">Safety and Well-being</h3>

        <div class="container">

            <div class="row" data-aos="fade-up" data-aos-delay="350">
                    <div class="under_text col-12 col-lg-16 col-md-6 col-sm-12">
                        <p>
                        Streamers should prioritize their safety and well-being while broadcasting. This includes taking breaks during long streams to avoid fatigue, setting boundaries with the audience to prevent harassment, and being mindful of their mental health.
                        </p>
                    
                    </div>
                    <div class="under_img col-12 col-lg-16 col-md-6 col-sm-12">
                        <img src="img/safety_streamers.png" alt="">
                    </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="500">
                <div class="under_text col-12 col-lg-6 col-md-6 col-sm-12">
                    <p>
                    If a streamer feels overwhelmed or uncomfortable at any point, it’s important to know that it’s okay to end the stream and seek support if needed.
                    </p>
                </div>
                <div class="under_img col-12 col-lg-6 col-md-6 col-sm-12">
                    <img src="img/safety_streamer_feels.png" alt="">
                </div>
            </div>
        </div>

    </section>

    <section class="post_stream_review poststreamreview" id="post_stream_reviews">

        <h3 data-aos="fade-up" data-aos-delay="350">Post-Stream Review</h3>

        <div class="container">

            <div class="row" data-aos="fade-up" data-aos-delay="350">
                    <div class="under_text col-12 col-lg-16 col-md-6 col-sm-12">
                        <p>
                        After the livestream, it’s beneficial to review the broadcast to identify areas for improvement. This includes analyzing viewer feedback, assessing the technical performance, and reflecting on the overall content delivery.
                        </p>
                    
                    </div>
                    <div class="under_img col-12 col-lg-16 col-md-6 col-sm-12">
                        <img src="img/social_media_integral.webp" alt="">
                    </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="500">
                <div class="under_text col-12 col-lg-6 col-md-6 col-sm-12">
                    <p>
                    Post-stream reviews can provide valuable insights for enhancing future broadcasts and improving the overall streaming experience.
                    </p>
                </div>
                <div class="under_img col-12 col-lg-6 col-md-6 col-sm-12">
                    <img src="img/underest_social.webp" alt="">
                </div>
            </div>
        </div>

    </section>
    
</div>


<?php 
require "footer.php";
?>