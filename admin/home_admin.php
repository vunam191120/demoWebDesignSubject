<?php
require_once "header.php";
require_once "restricted.php";
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
</head>

<body>
    <div id="bodyAdmin">
        <img id="img" src="images/body_admin.jpg">
    </div>
    <div id="sologanLogo">
        <center>
            <img id="img2" src="images/logo_pluuu.png">
            <i>
                <p id="sologan">"Pick your favorites" from CEO's Pluuu</p>
            </i>
        </center>
    </div>
    <br><br>
    <div id="about">
        <div id="imgAbout">
            <img src="images/about_us.png">
        </div>
        <div id="txtAbout">
            <section>
                <h1>More about us</h1>
                <br><br>
                <h2>A life of fashion</h2>
                <br><br>
                <p>Shopping online has never been more rewarding. Our selection of fashion goods includes stunning pieces for every occasion, size or budget. Our retail experts go far and beyond to create our breathtaking, creative collections, and our customer service team will make sure that your expectations are not just met, but exceeded. </p>
                <br>
                <p>Thanks to our innovative and service-oriented approach, Pluuuu has been highly successful since day one. Browse our site and get in touch if you need any assistance. Happy shopping!</p>
                <br><br>
            </section>
            <div>
                <h2 id="contact"><a href="#footer">Contact</a></h2>
            </div>
        </div>
    </div>
</body>
<?php
require_once "footer.php";
?>
</body>
</html>