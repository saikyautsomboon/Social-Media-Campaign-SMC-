<?php
require "header.php";
?>

<!-- Login page    -->

<div class="container signin_signup col-lg-12 col-md-12 col-sm-12">
    <?php  
        if(isset($_SESSION['fail'])){

    ?>
            <div class="alert alert-warning text-center" data-aos="flip-up" id="popalert">
                <h3> <?= $_SESSION['fail']?></h3>
            </div>
        
    <?php 

          unset($_SESSION['fail']);
      }
    ?> 
    <div class="wrap" data-aos="fade-up">
        <div class="align-selfcenter" id="register_form">
            <form action="signup.php" method="POST" enctype="multipart/form-data" class="p-2">
                <h2 class="display-5 text-light text-center m-4" data-aos="zoom-in-up" data-aos-delay="100">Register</h2>

                    <div class="form-group row my-3 mx-2 input-field">
                        
                        <label for="name" class="col-sm-4 col-form-label text-light" data-aos="fade-up">Name</label>
                        <div class="col-sm-8" data-aos="fade-up">
                            <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name" require>
                        </div>
            
                    </div>

                    <div class="form-group row my-3 mx-2 input-field">
                        
                        <label for="email" class="col-sm-4 col-form-label text-light" data-aos="fade-up" data-aos-delay="300">Email</label>
                        <div class="col-sm-8" data-aos="fade-up" data-aos-delay="300" >
                            <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email" require>
                        </div>

                    
                    </div>

                    <div class="form-group row my-3 mx-2 input-field">
                        <label for="password" class="col-sm-4 col-form-label text-light" data-aos="fade-up" data-aos-delay="450">Password</label>
                        <div class="col-sm-8" data-aos="fade-up" data-aos-delay="450">
                            <input type="text" class="form-control" id="password" placeholder="Enter your Password" name="password" require>
                        </div>
                    </div>

                    <div class="form-group row my-3 mx-2 input-field">
                        <label for="cof_password" class="col-sm-4 col-form-label text-light" data-aos="fade-up" data-aos-delay="550">Confirm Password</label>
                        <div class="col-sm-8" data-aos="fade-up" data-aos-delay="550">
                            <input type="text" class="form-control" id="cof_password" placeholder="Enter your Password" name="cpassword" require>
                        </div>
                    </div>

                    <div class="form-group row my-3 mx-2 input-field">
                        <label for="phno" class="col-sm-4 col-form-label text-light" data-aos="fade-up" data-aos-delay="700">Phone number</label>
                        <div class="col-sm-8" data-aos="fade-up" data-aos-delay="700">
                            <input type="text" class="form-control" id="phno" placeholder="Enter your phone number" name="phone" require>
                        </div>
                    </div>

                    <div class="form-group row my-3 mx-2 input-field">
                        <label for="address" class="col-sm-4 col-form-label text-light" data-aos="fade-up" data-aos-delay="700">Address</label>
                        <div class="col-sm-8" data-aos="fade-up" data-aos-delay="700">
                            <textarea class="form-control" id="address" placeholder="Enter your Address" name="address" rows="4" cols="50" require></textarea>   
                        </div>
                    </div>

                    <div class="form-group row my-3 mx-2 input-photo">
                        
                        <label for="photo" class="col-sm-4 col-form-label text-light" data-aos="fade-up" data-aos-delay="700">Profile</label>
                        <div class="col-sm-8" data-aos="fade-up" data-aos-delay="700">
                            <input type="file" class="form-control" id="photo" name="photo" require>
                        </div>

                    </div>
                    
                    <div class="form-group row my-3 mx-3"  data-aos="zoom-in-up" data-aos-delay="750">
                        <button type="submit" class="register_btn btn btn-light">Register</button>
                    </div>


                    <div class="form-group row my-2 text-center" data-aos="zoom-in-up" data-aos-delay="750">
                        <div class="login_text">
                            <p class="regsiter_text text-light">Already have account / <a href="login.php" class="login_btn text-light text-decoration-none">Login</a></p>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

<?php
require "footer.php";
?>