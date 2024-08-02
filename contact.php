<?php 
require "header.php";
?>

<div class="contact_to_admin">
    <section class="container contact_us">

        <div class="text-center col-12 col-lg-12 col-md-12 col-sm-12" data-aos="fade-up">
            <h1 class="heading-section">Contact Us</h1>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                <form action="#" id="contactForm" name="contactForm" class="contactForm">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-md-6 col-sm-12" data-aos="fade-right" data-aos-delay="150">
                            <div class="form-group">
                            <label class="label" for="name">Full Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-12"  data-aos="fade-left" data-aos-delay="150"> 
                            <div class="form-group">
                                <label class="label" for="email">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                        </div>
                <div class="col-12 col-lg-12 col-md-6 col-sm-12"  data-aos="fade-up" data-aos-delay="250">
                    <div class="form-group">
                        <label class="label" for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-6 col-sm-12"  data-aos="fade-up" data-aos-delay="350">
                    <div class="form-group">
                        <label class="label" for="#">Message</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" required></textarea>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="450">
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="submitbtn">
                        <div class="submitting"></div>
                    </div>
                </div>
            </div>
        </form>
            </div>
            <div class="map_contact col-12 col-lg-6 col-md-12 col-sm-12">
                <div id="map" data-aos="fade-up">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d282.8710640129651!2d99.6036479!3d21.28883390000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30d441648950a0a3%3A0x86d130434bed1e24!2sTar%20Yaw%20St%2C%20Keng%20Tung%2C%20Myanmar%20(Burma)!5e1!3m2!1sen!2sth!4v1722163068852!5m2!1sen!2sth" 
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
        
                </div>
            </div>
        </div>

    </section>

    <div class="contact_location">
        <div class="row">
            <div class="locations col-12 col-lg-3 col-md-6 col-sm-12" data-aos="fade-left" data-aos-delay="150">
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <span>
                    In front of Myanmar Commercial Bank, No.4, Keng Tung, Eastern Shan State, Myanmar.
                </span>
            </div>
            <div class="locations col-12 col-lg-3 col-md-6 col-sm-12" data-aos="fade-left" data-aos-delay="350">
                <div>
                    <i class="fa-solid fa-phone"></i>
                </div>
                <span>
                     +95 9 400 181 400
                </span>
            </div>
            <div class="locations col-12 col-lg-3 col-md-6 col-sm-12" data-aos="fade-left" data-aos-delay="450">
                <div>
                    <i class="fa-regular fa-envelope-open"></i>
                </div>
                <span>
                    <a href="mailto:primoth.prime095251007@gmail.com">primoth.prime095251007@gmail.com</a> 
                </span>
            </div>

            <div class="locations col-12 col-lg-3 col-md-6 col-sm-12" data-aos="fade-left" data-aos-delay="550">
                <div>
                    <i class="fa-solid fa-earth-americas"></i>
                </div>
                <span>
                    <a href="index.php">My Website</a>
            
                </span>
            </div>

        </div>
    </div>


</div>



<?php 
require "footer.php";
?>x