<?php
    include('db.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
        <header>
            <div class="circle"></div>
            <div class="circles"></div>
            <a href="#" class="logo">Shop<span>ifty</span></a>
            <ul>
                <li><a href="admin_page.php">Home</a></li>
                <li><a href="admin_page.php">Products</a></li>
            </ul>
            <p><a href="signup.php">SignUp / SignIn</a> </header></p>

        <div class="texts">
            <h1>Online <span>Shop</span></h1>
            <p>"Welcome to Online Shop, your premier destination for the latest in mobile technology. Dive into a curated selection of smartphones, combining cutting-edge features with unbeatable prices. We pride ourselves on quality assurance, ensuring your purchase meets the highest standards. Our customer-centric approach guarantees a seamless shopping experience, backed by a dedicated support team. Explore our extensive collection, from flagship models to budget-friendly options, and stay ahead in the tech world. Join a vibrant community, share experiences, and follow our blog for insights. Elevate your mobile journey with Online Shop, where innovation, affordability, and customer satisfaction converge."
            </p>
        </div>

        <div class="background_image">
            <img src="image/bg1.png">
        </div>

        <div class="btn">
        <a href="admin_page.php">
        <p class="read">Shop now</p>
    </a>
</div>

    </section>




    <!--About Page-->

    <div class="about">
        <div class="box">
            <div class="card">
                <img src="image/Computer.png">
            </div>
            <div class="card">
                <img src="image/mobile.png">
            </div>
        </div>
        <hr>

    <!--fotter-->

    <footer class="footer">
        <div class="main">
            <div class="row">
                <div class="footer_col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                    </ul>
                </div>

                <div class="footer_col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="FAQ.html">FAQ</a></li>
                    </ul>
                </div>

                <div class="footer_col">
                    <h4>Contact us</h4>
                    <div class="social">
                        <a href="https://web.facebook.com/nsbm.lk/?_rdc=1&_rdr"><img src="image/facebook.png"></a>
                        <a href="https://twitter.com/NSBM_SriLanka"><img src="image/twitter.png"></a>
                        <a href="https://www.instagram.com/nsbmgreenuniversity/"><img src="image/instagram.png"></a>
                    </div>               
                        
                    
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>