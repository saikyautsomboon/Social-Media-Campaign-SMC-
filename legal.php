<?php 
require "header.php";
?>

<div class="container home" id="home" data-aos="fade-up" data-aos-delay="250">
    <img src="img/legislation_guidance.png" alt="" class="home_img_legal">
</div>
<div class="mobile_img" data-aos="fade-up" data-aos-delay="250">
    <img src="img/legislation_guidance.png" alt="" class="home_img_legal">
</div>

<div class="container legislation_guidance">
    <h1> Legislation and Guidance</h1>

    <div class="understanding_legal_requirement" data-aos="fade-up" data-aos-delay="150">

        <div class="row
             <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
        ">
            <div class="container col-8 col-lg-8 col-md-12 col-sm-12 col-12" data-aos="fade-right" data-aos-delay="300" >
                <h3>Understanding Legal Requirements</h3>
                <p>
                Navigating the legal landscape of social media and online safety is essential for both teenagers and parents. Various laws are designed to protect users, especially minors, from online threats such as cyberbullying, exploitation, and privacy breaches. Familiarizing yourself with these regulations ensures compliance and promotes a safer online environment. Key legislation includes the Children's Online Privacy Protection Act (COPPA) in the United States, the General Data Protection Regulation (GDPR) in the European Union, and the Online Safety Bill in the UK.
                </p>

            </div>

            <div id="legi_img " class="container col-4 col-lg-4 col-md-12 col-sm-12 col-12" data-aos="fade-left" data-aos-delay="600">
                <img src="img/navigating.png" alt="">
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

    <div class="coppa" data-aos="fade-up" data-aos-delay="250">
        <div class="row
                <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
            ">
            <div class="container col-8 col-lg-8 col-md-12 col-sm-12 col-12" data-aos="fade-right" data-aos-delay="300" >
                <h3>COPPA (Children's Online Privacy Protection Act)</h3>
                <p>
                    COPPA is a critical piece of legislation in the United States that protects the privacy of children under 13. It requires websites and online services to obtain parental consent before collecting, using, or disclosing personal information from children. Parents should be aware of COPPA's provisions to understand their rights and the responsibilities of online platforms their children use. This knowledge can help ensure that teenagers' data is handled securely and ethically.
                </p>

            </div>

            <div class="container col-4 col-lg-4 col-md-12 col-sm-12 col-12" data-aos="fade-left" data-aos-delay="600">
                <img src="img/coppa.png" alt="">
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

    <div class="gdpr" data-aos="fade-up" data-aos-delay="150">

        <div class="row
            <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
        ">
            <div class="container col-8 col-lg-8 col-md-12 col-sm-12 col-12" data-aos="fade-right" data-aos-delay="300" >
                <h3>GDPR (General Data Protection Regulation)</h3>
                <p>
                The GDPR is a comprehensive data protection regulation in the European Union that applies to any organization processing personal data of EU residents. It grants individuals, including teenagers, rights over their personal data, such as the right to access, rectify, or delete information. Understanding GDPR helps parents and teens recognize their rights regarding data privacy and hold online platforms accountable for safeguarding their information.
                </p>

            </div>

            <div class="container col-4 col-lg-4 col-md-12 col-sm-12 col-12" data-aos="fade-left" data-aos-delay="600">
                <img src="img/gdpr.png" alt="">
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

    <div class="online_safety_bill" data-aos="fade-up" data-aos-delay="250">
        <div class="row
            <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
        ">
            <div class="container col-8 col-lg-8 col-md-12 col-sm-12 col-12" data-aos="fade-right" data-aos-delay="300" >
                <h3>Online Safety Bill (UK)</h3>
                <p>
                The UK's Online Safety Bill aims to make the internet a safer place, particularly for children and young people. It requires online platforms to take proactive measures to protect users from harmful content, including cyberbullying, harassment, and exposure to inappropriate material. Parents and teens should familiarize themselves with the provisions of this bill to understand the protections in place and the responsibilities of social media companies.
                </p>

            </div>

            <div class="container col-4 col-lg-4 col-md-12 col-sm-12 col-12" data-aos="fade-left" data-aos-delay="600">
                <img src="img/online_safety_bill.png" alt="">
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

    <div class="parental_controls" data-aos="fade-up" data-aos-delay="150">

        <div class="row
            <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
        ">
            <div class="container col-8 col-lg-8 col-md-12 col-sm-12 col-12" data-aos="fade-right" data-aos-delay="300" >
                <h3>Parental Controls and Tools</h3>
                <p>
                Various tools and settings are available to help parents monitor and manage their children's online activities. These include parental control apps, built-in device settings, and specific features within social media platforms. These tools can restrict access to certain content, limit screen time, and provide reports on online activity. Utilizing these controls can help parents enforce safe online practices and protect their children from potential online risks.
                </p>

            </div>

            <div class="container col-4 col-lg-4 col-md-12 col-sm-12 col-12" data-aos="fade-left" data-aos-delay="600">
                <img src="img/parental_controls.png" alt="">
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

    <div class="reporting_blocking" data-aos="fade-up" data-aos-delay="250">
        <div class="row
            <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
        ">
            <div class="container col-8 col-lg-8 col-md-12 col-sm-12 col-12" data-aos="fade-right" data-aos-delay="300" >
                <h3>Reporting and Blocking Features</h3>
                <p>
                Most social media platforms offer features to report and block inappropriate content or users. Encouraging teenagers to use these features empowers them to take control of their online experiences and respond to cyberbullying, harassment, or exposure to harmful material. Parents should guide their teens on how to effectively use reporting and blocking tools and emphasize the importance of speaking up about any uncomfortable online interactions.
                </p>

            </div>

            <div class="container col-4 col-lg-4 col-md-12 col-sm-12 col-12" data-aos="fade-left" data-aos-delay="600">
                <img src="img/report_block.png" alt="">
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

    <div class="online_safety_education" data-aos="fade-up" data-aos-delay="150">

        <div class="row
            <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
        ">
            <div class="container col-8 col-lg-8 col-md-12 col-sm-12 col-12" data-aos="fade-right" data-aos-delay="300" >
                <h3>Online Safety Education</h3>
                <p>
                Educating teenagers about online safety is crucial for fostering responsible and informed internet use. Schools, community organizations, and online resources offer various programs and materials that cover topics such as cyberbullying prevention, privacy protection, and digital citizenship. Parents should leverage these educational resources to enhance their teens' understanding of safe online practices and reinforce the importance of responsible digital behavior.
                </p>

            </div>

            <div class="container col-4 col-lg-4 col-md-12 col-sm-12 col-12" data-aos="fade-left" data-aos-delay="600">
                <img src="img/education_teenages.png" alt="">
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

    <div class="legal_recourse_support" data-aos="fade-up" data-aos-delay="250" >
        <div class="row
            <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
        ">
            <div class="container col-8 col-lg-8 col-md-12 col-sm-12 col-12" data-aos="fade-right" data-aos-delay="300" >
                <h3>Legal Recourse and Support</h3>
                <p>
                    In cases where teenagers experience severe online harassment, exploitation, or other illegal activities, it's important to know the legal recourse available. Parents should be aware of how to report such incidents to law enforcement and seek support from organizations specializing in online safety and mental health. Accessing legal and professional support can help address and resolve serious online safety issues effectively.In cases where teenagers experience severe online harassment, exploitation, or other illegal activities, it's important to know the legal recourse available. Parents should be aware of how to report such incidents to law enforcement and seek support from organizations specializing in online safety and mental health. Accessing legal and professional support can help address and resolve serious online safety issues effectively.
                </p>

            </div>

            <div class="container col-4 col-lg-4 col-md-12 col-sm-12 col-12" data-aos="fade-left" data-aos-delay="600">
                <img src="img/legal_recourse.png" alt="">
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

    <div class="staying_informed" data-aos="fade-up" data-aos-delay="250">

        <div class="row
            <?php
                    if(isset($_SESSION['login_user'])){
                ?>
                <?php } else { ?>
                    locked-background 
                <?php } ?>
        ">
            <div class="container col-8 col-lg-8 col-md-12 col-sm-12 col-12" data-aos="fade-right" data-aos-delay="300" >
                <h3>Staying Informed</h3>
                <p>
                The digital landscape is constantly evolving, with new platforms, features, and risks emerging regularly. Parents and teens should stay informed about the latest developments in social media and online safety legislation. Following reputable sources, participating in online safety workshops, and engaging with community discussions can help keep everyone updated on best practices and new regulations.
                </p>

            </div>

            <div class="container col-4 col-lg-4 col-md-12 col-sm-12 col-12" data-aos="fade-left" data-aos-delay="600">
                <img src="img//staying_informed.png" alt="">
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
<?php 
require "footer.php";
?>