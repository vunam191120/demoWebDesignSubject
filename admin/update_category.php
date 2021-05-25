<?php
require_once "header.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sql = "UPDATE category SET categoryName = '$name' WHERE categoryID = '$id'";
    $result = $connection->query($sql);
    if ($result) { ?>
        <script>
            alert("Updated category in successfully !");
            window.location.href = "manage_category.php";
        </script>
    <?php } else { ?>
        <script>
            alert("Update category failed !");
            window.location.href = "manage_category.php";
        </script>
<?php }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Category</title>
</head>

<body>
    <form action="" method="POST">
        <div class="backgroundAddCate">
            <?php 
            $id = $_POST['id'];
            $sql1 = "SELECT * FROM category WHERE categoryID = '$id'";
            $result1 = $connection->query($sql1);
            $cate = mysqli_fetch_array($result1);
            ?>
            <div class="formAddCate">
                <h1> Update Category </h1>
                <h3>Category Name: </h3>
                <br>
                <input type="text" required name="name" maxlength="10" value="<?= $cate[1] ?>">
                <input type="hidden" name="id" value="<?= $cate[0] ?>">
                <br><br>
                <input type="submit" name="update" value="UPDATE">
            </div>
        </div>
    </form>
</body>

</html>

<?php
require_once "footer.php";
?>