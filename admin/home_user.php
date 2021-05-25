<?php
require_once "header.php";
session_start();
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=l, initial-scale=1.0">
    <title>User Home</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div id="bestSeller">
        <center>
            <section>
                <img id="imgbag" src="images/best_seller_home1.jpg">
            </section>
            <img id="namebag" src="images/bag_home.png"><br>
        </center>
        <p class="viewBS"><a href="product.php">VIEW DINONYSUS</a></p>
    </div>
    <br>
    <div id="quickProduct">
        <div class="title_saleproduct">
            <h2>Featured Product</h2>
        </div>
        <div class="detail_product">
            <div class="product_ex">
                <img class="imgDetail" src="images/product1.jpeg">
                <h4>Silk Viscose Faille Maxi Shirt</h4>
                <h3>$4999</h3>
            </div>
            <div class="product_ex">
                <img class="imgDetail" src="images/product4_2.jpg">
                <h4>Cotton Hat with Interlocking G</h4>
                <h3>$899</h3>
            </div>
            <div class="product_ex">
                <img class="imgDetail" src="images/product5.jpg">
                <h4>GG Running Gold Single Earring</h4>
                <h3>$600</h3>
            </div>
            <div class="product_ex">
                <img class="imgDetail" src="images/product2.jpg">
                <h4>Women's Leather Ballet Flat with Horsebit</h4>
                <h3>$3999</h3>
            </div>
        </div>
    </div>
    <br>
    <div id="about">
        <div id="imgAbout">
            <img src="images/about_us.png">
        </div>
        <div id="txtAbout">
            <h1>More about us</h1>
            <br><br>
            <h2>A life of fashion</h2>
            <br><br>
            <p>Shopping online has never been more rewarding. Our selection of fashion goods includes stunning pieces for every occasion, size or budget. Our retail experts go far and beyond to create our breathtaking, creative collections, and our customer service team will make sure that your expectations are not just met, but exceeded. </p>
            <br>
            <p>Thanks to our innovative and service-oriented approach, Pluuuu has been highly successful since day one. Browse our site and get in touch if you need any assistance. Happy shopping!</p>
            <br><br>
            <h2 id="contact"><a href="#footer">Contact</a></h2>
        </div>
    </div>
</body>

<?php
require_once "footer.php";
?>

</html>