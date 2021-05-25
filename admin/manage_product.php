<?php
require_once "header.php";
require_once "restricted.php";
session_start();
?>

<!-- Create the table to manage the product -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Product</title>
</head>

<body>
    <br><br>
    <div id="wraptbl">
        <div id="tbl">
            <center>
                <table>
                    <thead>
                        <tr class="tbl-head">
                            <th class="column1">Product ID</th>
                            <th class="column2">Product Name</th>
                            <th class="column3">Product Image</th>
                            <th class="column4">Price</th>
                            <th class="column5">Brand</th>
                            <th class="column6">Available</th>
                            <th class="column7">Category</th>
                            <th class="column8">Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Take the data from database
                        $sql = "SELECT * FROM product";
                        $result = $connection->query($sql);
                        while ($pro = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td class="column1"><?= $pro[0] ?></td>
                                <td class="column2"><?= $pro[1] ?></td>
                                <td class="column3"><img src="images/<?= $pro[2] ?>" width="150" height="150"></td>
                                <td class="column4"><?= $pro[3] ?>$</td>
                                <td class="column5"><?= $pro[4] ?></td>
                                <td class="column6"><?= $pro[5] ?></td>
                                <?php
                                $sql2 = "SELECT * FROM category";
                                $run2 = $connection->query($sql2);
                                while($cate = mysqli_fetch_array($run2)){
                                    if($cate[0] == $pro[6]){
                                        $categoryName = $cate[1];
                                    }
                                }
                                ?>
                                <td class="column7"><?= $categoryName ?></td>
                                <td class="column8">
                                    <form action="update_product.php" method="POST">
                                        <input type="hidden" name="id" value="<?= $pro[0] ?>">
                                        <input class="btnManage"  type="submit" value="Update">
                                    </form>
                                    <form action="delete_product.php" method="POST" onsubmit="return confirmDelete()">
                                        <input type="hidden" name="id" value="<?= $pro[0] ?>">
                                        <input class="btnManage"  type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </center>
        </div>
    </div>
</body>
</html>
<?php
require_once "footer.php"
?>