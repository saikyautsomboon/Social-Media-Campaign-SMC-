</main>

<?php

$directoryUri = $_SERVER['REQUEST_URI'];

$path=parse_url($directoryUri,PHP_URL_PATH);

$compoment = explode( '/' ,$path);

$page =$compoment[2];
// var_dump($page);
?>

<div class="container footer col-12">

    <footer class="py-3 my-3">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item
            <?php
                if($page == "index.php"){
                    echo "nav_page active";
                }else{
                    echo "nav_page";
                }
            ?>"><a href="index.php" class="nav-link px-2 text-light">Home</a>
            </li>

            <li class="nav-item
            <?php
                if($page == "information.php"){
                    echo "nav_page active";
                }else{
                    echo "nav_page";
                }
            ?>"><a href="information.php" class="nav-link px-2 text-light">Information</a>
            </li>

            <li class="nav-item
            <?php
                if($page == "popular.php"){
                    echo "nav_page active";
                }else{
                    echo "nav_page";
                }
            ?>"><a href="popular.php" class="nav-link px-2 text-light">Popular</a>
            </li>

            <li class="nav-item 
            <?php
            if($page == "parents.php"){
              echo "nav_page active";
            }else{
              echo "nav_page";
            }
            ?> 
            "><a href="parents.php" class="nav-link px-2 text-light">How Parents</a>
            </li>

            <li class="nav-item
            <?php
            if($page == "livestream.php"){
              echo "nav_page active";
            }else{
              echo "nav_page";
            }
            ?>
            "><a href="livestream.php" class="nav-link px-2 text-light">Livestream</a>
            </li>

            <li class="nav-item
            <?php
            if($page == "legal.php"){
              echo "nav_page active";
            }else{
              echo "nav_page";
            }
            ?> 
            "><a href="legal.php" class="nav-link px-2 text-light">legal & Guide</a>
            </li>

            <li class="nav-item
            <?php
            if($page == "contact.php"){
              echo "nav_page active";
            }else{
              echo "nav_page";
            }
            ?>
            "><a href="contact.php" class="nav-link px-2 text-light">Contact</a>
            </li>

            <li class="nav-item <?php
                      if($page == "search.php"){
                        echo "nav_page active";
                      }else{
                        echo "nav_page";
                      }
                    ?>">
                <a class="nav-link px-2 text-light" href="search.php">Search</a>
            </li>


        </ul>
        <div class="footer_icon">
            <a href="https://www.facebook.com/"><img src="img/Facebook.png" alt=""></a>
            <a href="https://www.instagram.com/"><img src="img/Instagram.png" alt=""></a>
            <a href="https://x.com/?lang=en"><img src="img/twitter.jpg" alt=""></a>
            <a href="https://web.telegram.org/k/"><img src="img/telegram.png" alt=""></a>
            <a href="https://www.youtube.com/"><img src="img/Youtube.png" alt=""></a>
            <a href="https://vk.com/feed"><img src="img/VK.png" alt=""></a>
        </div>
        <p class="text-center text-light">© 2024 Company, Inc</p>
    </footer>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
AOS.init({
    duration: 800,
    offset: 150,
});
</script>
</body>

</html>