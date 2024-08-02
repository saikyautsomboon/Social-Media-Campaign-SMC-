<?php
require "header.php";

// Initialize session variables for tracking attempts and lockout time
if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 0;
    $_SESSION['lockout_time'] = null;
}

$lockout_duration = 180; // 3 minutes in seconds

// Check if lockout time has passed
if ($_SESSION['lockout_time'] && time() - $_SESSION['lockout_time'] > $lockout_duration) {
    $_SESSION['attempts'] = 0;
    $_SESSION['lockout_time'] = null;
}
?>

<!-- Login page -->
<div class="container signin_signup col-lg-12 col-md-12 col-sm-12">
    <?php if(isset($_SESSION['resuccess'])): ?>
        <div class="alert alert-success text-center" data-aos="flip-up" id="popalert">
            <h3><?= $_SESSION['resuccess']?></h3>
        </div>
        <?php unset($_SESSION['resuccess']); ?>
    <?php endif; ?>

    <?php if(isset($_SESSION['loginfail'])): ?>
        <div class="alert alert-danger text-center" data-aos="flip-up" id="popalert">
            <h3><?= $_SESSION['loginfail']?></h3>
        </div>
        <?php unset($_SESSION['loginfail']); ?>
    <?php endif; ?>

    <div class="wrap" data-aos="fade-up">
        <div class="align-self-center" id="login_form">
            <form action="locklogin.php" method="POST" enctype="multipart/form-data" class="p-2">
                <h2 class="display-5 text-light text-center m-4" data-aos="zoom-in-up">Login</h2>

                <div class="form-group row my-3 mx-2 input-field">
                    <label for="email" class="col-sm-4 col-form-label text-light" data-aos="fade-up">Email</label>
                    <div class="col-sm-8" data-aos="fade-up">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" required>
                    </div>
                </div>

                <div class="form-group row my-3 mx-2 input-field">
                    <label for="password" class="col-sm-4 col-form-label text-light" data-aos="fade-up" data-aos-delay="300">Password</label>
                    <div class="col-sm-8" data-aos="fade-up" data-aos-delay="300">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
                    </div>
                </div>
                
                <div class="form-group row my-3 mx-3" data-aos="zoom-in-up" data-aos-delay="350">
                    <button type="submit" class="login_btn btn btn-light">Login</button>
                </div>

                <div class="form-group row my-2 text-center" data-aos="zoom-in-up" data-aos-delay="450">
                    <div class="register_text">
                        <p class="regsiter_text text-light">Don't have an account? <a href="register.php" class="btn_register text-light text-decoration-none">Register</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Disable form inputs if lockout is active
<?php if ($_SESSION['attempts'] >= 3): ?>
    document.getElementById('email').disabled = true;
    document.getElementById('password').disabled = true;
    document.querySelector('.login_btn').disabled = true;

    // Re-enable inputs after lockout duration
    setTimeout(function() {
        document.getElementById('email').disabled = false;
        document.getElementById('password').disabled = false;
        document.querySelector('.login_btn').disabled = false;
        <?php $_SESSION['attempts'] = 0; $_SESSION['lockout_time'] = null; ?>
    }, <?= $lockout_duration * 1000 ?>);
<?php endif; ?>
</script>

<?php
require "footer.php";
?>
