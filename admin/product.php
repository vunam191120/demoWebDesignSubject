<?php
require_once "header.php";
session_start();
$sql = "SELECT * FROM product";
$categoryID = $_GET['categoryID'];
//Category
if (isset($categoryID)) {
    $sql = $sql . " where categoryID = '$categoryID'";
}
$result = $connection->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>
    <div id="category">
        <?php
        $sqlGetCate = "SELECT * FROM category";
        $run = $connection->query($sqlGetCate);
        while ($cate = mysqli_fetch_array($run)) { ?>
            <a href="product.php?categoryID=<?= $cate[0] ?>">
                <h2><?= $cate[1] ?></h2>
            </a>
        <?php } ?>
    </div>
    <br>
    <?php
    while ($pro = mysqli_fetch_array($result)) { ?>
        <div id="bodyProduct">
            <div class="leftPage">
                <img class="imgLeft" src="images/<?= $pro[2] ?>">
            </div>
            <div class="rightPage">
                <form action="" method="POST">
                    <h1><?= $pro[1] ?></h1>
                    <br>
                    <img src="images/rate.png" width="120px">
                    <br><br><br>
                    <p>"Describe the product"</p>
                    <h3>Available : <?= $pro[5] ?></h3>
                    <h3><?= $pro[3] ?>$</h3>
                    <br>
                </form>
            </div>
        </div>
    <?php } ?>
</body>

</html>

<?php
require_once "footer.php";
?>