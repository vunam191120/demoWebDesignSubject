<?php
require_once "header.php";

if (isset($_POST['addCate'])) {
    $name = $_POST['name'];
    $sql = "INSERT INTO category(categoryName) VALUES ('$name')";
    $result = $connection->query($sql);
    if ($result) { ?>
        <script>
            alert("Added category in successfully !");
            window.location.href = "manage_category.php";
        </script>
    <?php } else { ?>
        <script>
            alert("Add category failed !");
            window.location.href = "add_category.php";
        </script>
<?php }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>

<body>
    <form action="" method="POST">
        <div class="backgroundAddCate">
            <div class="formAddCate">
                <h1> Add New Category </h1>
                <h3>Category Name: </h3>
                <br>
                <input type="text" required name="name" maxlength="10">
                <br><br>
                <input type="submit" name="addCate" value="ADD">
            </div>
        </div>
    </form>
</body>

</html>

<?php

require_once "footer.php";
?>