<?php
require_once "header.php";
require_once "restricted.php";

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $available = $_POST['available'];
    $category = $_POST['cate'];
    $brand = $_POST['brand'];
    $image = "";
    //Confirm the user has chosen the image and doesn't let the size's image equal 0
    if (isset($_FILES['image']) && $_FILES['image']['size'] != 0) {
        //Step 1: Declare the variable which stores image into Temporary path
        $temp_name = $_FILES['image']['tmp_name'];
        //Step 2: Declare the variable which stores image's name
        $image_name = $_FILES['image']['name'];
        //Step 3: Split the name's file follow to dot "."
        $parts = explode(".", $image_name);
        //Step 4: Find out the last index of array $part
        $lastIndex = count($parts) - 1;
        //Step 5: Take out the last index of image
        $extension = $parts[$lastIndex];
        //Step 6: Set new name for the image
        $image = "product$id" . "_" . $available . "." . $extension;
        //Step 7: Set new path for the image 
        $image_folder = "images/";
        $destination = $image_folder . $image;
        //Step 8: Move the image from the temporary path to  new path
        move_uploaded_file($temp_name, $destination);
    }
    //Create new command to query the database in order to add new data into database
    $sql12 = "INSERT INTO product(productName, productImage, price, brand, productAvailable, categoryID) VALUES ('$name', '$image', '$price', '$brand', '$available', '$category')";
    $result12 = $connection->query($sql12);
    if ($result12) { ?>
        <script>
            alert("Added new product successfully !");
            window.location.href = "manage_product.php";
        </script>
    <?php } else { ?>
        <script>
            alert("Add new product failed !");
            window.location.href = "add_product.php";
        </script>
<?php }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
</head>
<br><br>

<body>
    <div id="wrapAdd">
        <br>
        <div id="backgroundAdd">
            <div id="formAdd">
                <form action="" method="POST" enctype="multipart/form-data">
                    <br>
                    <h1 style="text-align: center">Add New Product</h1>
                    <br>
                    <div>
                        <br>
                        <label id="lbl" for="addCategory" style="text-align: left">Category :</label>
                        <select id="addCategory" name="cate">
                            <?php
                            //Query to the table category
                            $sql2 = "SELECT * FROM category";
                            $run2 = $connection->query($sql2);
                            while ($cate = mysqli_fetch_array($run2)) { ?>
                                <option value="<?= $cate[0] ?>"><?= $cate[1] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div>
                        <h3 style="text-align: left">Product Name :</h3>
                        <input class="addtype" type="text" name="name" required maxlength="50">
                    </div>
                    <br>
                    <div id="wrapPrAv">
                        <div>
                            <h3 style="text-align: left">Price :</h3>
                            <input id="price" type="text" name="price" maxlength="10" required> $ <br>
                        </div>
                        <div>
                            <h3 style="text-align: left">Available :</h3>
                            <input id="avail" type="number" name="available" maxlength="3" requird><br>
                        </div>
                    </div>
                    <br>
                    <div>
                        <h3 style="text-align: left">Brand :</h3>
                        <input class="addtype" class="" type="text" name="brand" maxlength="10" required><br>
                    </div>
                    <br>
                    <div>
                        <h3 style="text-align: left">Product Image :</h3>
                        <input type="file" name="image" accept="image/*" required>
                    </div>
                    <br>
                    <center>
                        <div>
                            <input id="addBtn" type="submit" name="add" value="ADD">
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>

</html>