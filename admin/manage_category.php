<?php
require_once "header.php";
require_once "restricted.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Category</title>
</head>

<body>
    <div class="wrapCate">
        <div id="tblCate">
            <table>
                <tr class="tblCate-head">
                    <th class="column1Cate">Category ID</th>
                    <th class="column2Cate">Category Name</th>
                    <th class="column3Cate">Menu</th>
                </tr>
                <?php
                $sql = "SELECT * FROM category";
                $result = $connection->query($sql);
                while ($cate = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td class="column1Cate"><?= $cate[0] ?></td>
                        <td class="column2Cate"><?= $cate[1] ?></td>
                        <td class="column3Cate">
                            <form action="update_category.php" method="POST">
                                <input type="hidden" name="id" value="<?= $cate[0] ?>">
                                <input class="btnManage" type="submit" value="Update">
                            </form>
                            <form action="delete_category.php" method="POST" onsubmit="return confirmDelete()">
                                <input type="hidden" name="id" value="<?= $cate[0] ?>">
                                <input class="btnManage" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    </div>
</body>

</html>

<?php
require_once "footer.php";

?>