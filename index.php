<?php
session_start(); // Start the session if it's not started already

// Check if the user is logged in by verifying the session variable
if (isset($_SESSION['user_data'])) {
    $loggedInUser = $_SESSION['user_data']; 
    
    $username = $loggedInUser['username'];
    $jsonString = json_encode($loggedInUser);
    $isLoggedIn = true;
    $_SESSION['isLogin'] = $isLoggedIn;
    echo "<script>alert('Welcomee! $username');</script>";
} else {
    $isLoggedIn = false;
    // If the user is not logged in, you can redirect them back to the login page or handle it accordingly
    header("Location: login.php");
    exit();
}
// Set the href attribute based on the user login status
$link = $isLoggedIn ? "user.php" : "login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPTOP FACTORY</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <div class="header">
            <div class="logo-title">
                <a href="#home"><img src="IMAGES/Logo/logo.jpg" alt="logo" id="logo"></a>
                <h2 id="title">LAPTOP FACTORY</h2>
            </div>
            <div class="search">
                <form action="">
                    <i><img src="IMAGES/Icon/search-icon.png" alt=""></i>
                    <input type="text" id="search-text" placeholder="Search">
                    <button type="submit" id="search-btn">Search</button>
                </form>
            </div>
            <button id="cart"><img src="IMAGES/Icon/icon-cart.png" alt="cart"></button>
            <div class="accounts-container">
                <a href="<?php echo $link; ?>"><img src="IMAGES/Icon/account.png" alt="account" id="account"></a>
                <span>
                    <?php if ($isLoggedIn) {
                        echo $loggedInUser['username'];
                    } ?>
                </span>
            </div>
             <!--HEADER-->
        </div>
        <div class="sidebar">
             <!--SIDEBAR-->
             <ul class="header-name">
                <li><a href="#home">Home</a></li>
                <li><a href="#main-products">Products</a></li>
                <li><a href="#main-top-sales">Top Sales</a></li>
                <li><a href="#about-us">About Us</a></li>
                <li><a href="#footer-contact-us">Contact Us</a></li>
             </ul>
        </div>
        <!--COVER PAGE-->
        <div class="cover-page" id="home">
            <div class="image-quote">
                <div class="cover-one">
                    <div class="titles">
                        <h1>LAPTOPS FACTORY</h1>
                        <h1>Innovation Hub: Crafting Next-Generation Laptops</h1>
                    </div>
                    <div class="quote">
                        <p>Crafted with precision and innovation, our laptops epitomize quality and performance. Engineered to inspire productivity and elevate your digital experience, each device from our factory represents a perfect blend of cutting-edge technology and sleek design.</p>
                    </div>
                    <a href="#main-products"><button id="shop-now">SHOW NOW</button></a>
                </div>
                <div class="cover-two">
                    <img src="IMAGES/BackGroundImage/FrontBackGround.png" alt="laptop">
                </div>
            </div>
        </div>
        <div class="main-one" id="main-products">
             <!--MAIN ONE-->
            <div class="types-container">
                <h2>Type</h2>
                <select name="option" id="types">
                    <option value="All">All</option>
                    <option value="ASUS">ASUS</option>
                    <option value="ACER">ACER</option>
                    <option value="HP">HP</option>
                </select>
                <h2>Categories</h2>
                <select name="option" id="category">
                   <!--Generated by js-->
                   <!--
                    <option value="ROG">ROG</option>
                    <option value="TUF">TUF</option>
                   -->
                </select>
            </div>
            <!--Products-->
            <div class="container">
                <!--GENERATED BY JS-->
                <!--
                    <div class="products" data-name="${item['name']}" data-category="${item['category']}">
                    <img src="Image/${item['image']}" alt="logo" class="product-image">
                    <span class="fullname">${item['fullname']}</span>
                    <button class="quick-view">Quick View</button>
                    </div>
                -->
            </div>
            <!--Details Products-->
            <div class="details">
                
                <!-- Generated by js
                <div class="image-title">
                <img src="IMAGES/Image/${quickImage}" alt="img" id="quick-view">
                <span>${quickFullname}</span>
                </div>
                <div class="details-product">
                    ${arranegDetails(quickDetails)}
                    <h2>₱${quickPrice}.00</h2>
                    <button id="add-cart">ADD CART <img src="IMAGES/Icon/cart-icon-two.png" alt="cart"></button>
                </div>
                <button id="remove">x</button>
                -->
            </div>
            <div class="successfully-add">
                <span>Successfully Add</span>
            </div>
            <!--Cart Show-->
            <div class="cart-container">
                <h2>YOUR ORDER</h2>
                <div class="container-mycart">
                    <button id="delete-item-cart"><img src="IMAGES/Icon/delete.png" alt="delete"></button>
                        <div class="cart-container-js">
                                <!--
                                        GENERATED BY JS
                                    <div class="items">
                                        <div class="image">
                                            <img src="IMAGES/Image/Acer Nitro.webp" alt="pic" class="cart-img">
                                        </div>
                                        <div class="name-price">
                                            <h3>ASUS</h3>
                                            <h1>PHP20,000</h1>
                                        </div>
                                    </div>
                                -->
                        </div>
                    <button id="remove-cart">X</button>
                </div>
                <div class="freebies">
                    <h2>Freebies</h2>
                    <div class="container-freebies">
                        <img src="IMAGES/Image/free1.jpg" alt="freebies" class="freeb">
                        <img src="IMAGES/Image/free2.jpg" alt="freebies" class="freeb">
                        <img src="IMAGES/Image/free3.jpg" alt="freebies" class="freeb">
                        <button id="check-out">Check out</button>
                    </div>
                    <div>Total Amount: ₱<span class="total-amount"></span>.00</div>
                </div>
            </div>
        </div>
        <div class="main-two" id="main-top-sales">
             <!--FOOTER-->
            <div class="container-two">
                <div class="slide-pictures">
                    <button id="left"><</button>
                    <div id="picture">
                        <!--Generated by js-->
                    </div>
                    <button id="right">></button>
                </div>
                <div class="container-top-sales">
                    <div class="top-sales">
                        <img src="IMAGES/SlideImage/slide 1.jpg" alt="">
                    </div>
                    <div class="top-sales">
                        <img src="IMAGES/SlideImage/slide 2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="main-three">
            <div class="image-processor">
                <img src="IMAGES/Image/processeor.webp" alt="processor" class="img-specs">
            </div>
            <div class="details-prosessors">
                <p>PERFORMANCE</p>
                <h1>13TH GEN INTEL® CORE™ PROCESSORS</h1>
            </div>
        </div>
        <div class="main-four">
            <div class="details-prosessors">
                <p>COOLING</p>
                <h1>AEROBLADE™ FAN TECHNOLOGY</h1>
            </div>
            <div class="image-processor">
                <img src="IMAGES/Image/fan.webp" alt="processor" class="img-specs">
            </div>
        </div>
        <div class="about-us" id="about-us">
            <div class="image-quote-about">
                <div class="cover-one">
                    <img src="IMAGES/Logo/main logo.png" alt="laptop">
                </div>
                <div class="cover-two">
                    <div class="titles">
                        <h1>About Us</h1>
                    </div>
                    <div class="quote">
                        <h2>LOOKING FOR HIGH-RANGE GAMING LAPTOP?</h2>
                        <p>Welcome to our Laptop Factory, where the pursuit of gaming excellence meets the world of cutting-edge technology. We specialize in sourcing and presenting an exclusive array of top-tier gaming laptops, meticulously selected to deliver unrivaled performance, immersive graphics, and lightning-fast speeds. Our store caters to discerning gamers, offering a curated collection of laptops equipped with the latest processors, high-resolution displays, powerful GPUs, and advanced cooling systems to ensure peak gaming experiences. With a dedicated focus on delivering superior gaming hardware, coupled with expert guidance from our team of gaming enthusiasts, we aim to elevate your gaming journey by providing access to the most advanced, high-performance laptops on the market, empowering you to conquer virtual worlds with unparalleled precision and speed.</p>
                    </div>
                    <a href="profiles.html" target="_blank"><button id="learn-more">LEARN MORE</button></a>
                </div>
            </div>
        </div>
        <div class="footer-contact-us" id="footer-contact-us">
            <div class="contact-us">
                <h1>Contact Us</h1>
                <div class="logos">
                    <i><a href=" https://www.facebook.com/profile.php?id=61554367007711&mibextid=kFxxJD" target="_blank"><img class="logo" src="IMAGES/Icon/facebook.png" alt=""></a></i>
                    <i><a href="" target="_blank"><img class="logo" src="IMAGES/Icon/gmail.png"></a></i>
                    <i><a href="" target="_blank"><img class="logo" src="IMAGES/Icon/twitter.png" alt=""></a></i>
                    <i><a href="" target="_blank"><img class="logo" src="IMAGES/Icon/instagram.png" alt=""></a></i>
                </div>
                <a href="term-condition.html" target="_blank" id="terms-condiion"><h3>Terms and Condition</h3></a>
            </div>
           <div class="footer">
                <h3>COPYRIGHT@2023 LAPTOPFACTORY INC ALL RIGHTS RESERVE </h3>
           </div>
        </div>
    </div>
</body>
<script src="Function/mainOneFunction.js"></script>
<script src="Function/mainTwoFunction.js"></script>
</html>