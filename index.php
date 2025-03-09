<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conoveralla</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="css\slideshow.css">
    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@400;700&family=Tienne:wght@400;700;900&family=Tilt+Prism&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">

</head>
<?php
$pageTitle = "Home Page";
include 'header.php';
?>
<body>
    <main>
        <div class="container">
            <div class="section-background">
                <h1 class="section-1-welcome">Welcome to</h1>
                <h1 class="section-1-title">CONOVERELLA</h1>
                <div class="section-1-description">
                    <p class="description-part-1">Discover a world of luxury fashion at your fingertips. At Conoverella, we bring you premium, stylish, and effortlessly chic clothing designed for those who want to dress fast and shine instantly. Whether you're looking for timeless elegance or modern sophistication, we have the perfect pieces to elevate your wardrobe.
                    </p>
                    <p class="description-part-2">Shop now and become the best version of yourself!</p>
                </div>
                <button class="shop-now">SHOP NOW!</button>
            </div>
            <div class="policies"> 
                <div class="policy">
                    <img src="pic\header pics\delivery.png">
                    <div class="policy-text">
                        <p class="policy-title">FREE SHIPPING</p>
                        <p class="policy-description">FREE SHIPPING TO ALL PH ORDER OR ORDER ABOVE $150</p>
                    </div>
                </div>
                <div class="policy">
                    <img src="pic\home pics\return.png">
                    <div class="policy-text">
                        <p class="policy-title">30 DAYS RETURN</p>
                        <p class="policy-description">SIMPLY RETURN IT WITHIN 30 DAYS FOR AN EXCHANGE</p>
                    </div>
                </div>
                <div class="policy">
                    <img src="pic\home pics\padlock.png">
                    <div class="policy-text">
                        <p class="policy-title">100% PAYMENT SECURITY</p>
                        <p class="policy-description">We guarantee safe transactions, secure checkout, and fraud protection, giving you peace of mind while you shop.</p>
                    </div>
                </div>
            </div>
                <div class="slideshow-container">
                    <div class="slides">
                        <div class="slides-pic">
                            <div class="left">
                                <img class="item1" src="pic\slide pics\women shoe 1.png">
                                <img class="item2" src="pic\slide pics\menswear 1.png">
                            </div>
                            <div class="right">
                                <img class="item3" src="pic\slide pics\sunglasses women.jpg">
                            </div>
                        </div>
                    </div>
                        <button>&#10094;</button>
                        <button>&#10095;</button>
                </div>       
            </div>
        </div>
    </main>  
</body>
<?php include 'footer.php'; ?>
</html>