<?php
require_once "header.php";
require_once "restricted.php";
//Create the variable to get the data form form
if (isset($_POST['update'])) {
    $id = $_POST['id']; //Get id from manage_product.php
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $available = $_POST['available'];
    $old_image = $_POST['old_image'];
    $category = $_POST['cate'];
    $image = "";
    //Confirm the user did set image and not size of image equal 0 
    if (isset($_FILES['image']) && $_FILES['image']['size'] != 0) {
        //Step 1: Declare the variable which stores image into temparory path
        $temp_name = $_FILES['image']['tmp_name'];
        //Step 2: Declare the variable which stores name's image
        $image_name = $_FILES['image']['name'];
        //Step 3: Spit the name's image by using dot
        $parts = explode(".", $image_name);
        //Step 4: Find out the last index of $parts array
        $lastIndex = count($parts) - 1;
        //Step 5: Take out the last index
        $extension = $parts[$lastIndex];
        //Step 6: Set newname for image
        $image = "productupdate$id" . "_" . $available . "." . $extension;
        //Step 7: Set new path for image
        $image_folder = "images/";
        $destination = $image_folder . $image;
        //Step 8: Move the image from temporary path to new path
        move_uploaded_file($temp_name, $destination);
    } else {
        $image = $old_image;
    }
    //Create the command to query the database
    $sql1 = "UPDATE product SET productName = '$name', productImage = '$image', price = '$price', brand = '$brand', productAvailable = '$available' , categoryID = '$category' WHERE productID = '$id'";
    $result1 = $connection->query($sql1);
    if ($result1) { ?>
        <script>
            alert("Updated product in successfully !");
            window.location.href = "manage_product.php";
        </script>
    <?php } else { ?>
        <script>
            alert("Update procduct failed !");
            window.location.href = "manage_product.php";
        </script>
<?php }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>

<body>
    <div id="wrapUpdate">
        <br>
        <div id="bgUpdate">
            <div id="formUpdate">
                <form action="" method="POST" enctype="multipart/form-data">
                    <?php
                    //Create the variable to get the id form from manage_product.php 
                    $id = $_POST['id'];
                    //Query to database in order to get data
                    $sql = "SELECT * FROM product WHERE productID = '$id'";
                    $result = $connection->query($sql);
                    $pro = mysqli_fetch_array($result);
                    ?>
                    <br>
                    <h1 style="text-align: center">Update Product</h1>
                    <br>
                    <div>
                        <h3 style="text-align: left">Product Name :<?php $id ?></h3>
                        <input class="updatetype" type="text" name="name" required maxlength="50" value="<?= $pro[1] ?>">
                    </div>
                    <br>
                    <div>
                        <h3 style="text-align: left">Image</h3>
                        <img id="imgUpdate" src="images/<?= $pro[2] ?>">
                    </div>
                    <br>
                    <div id="wrapPrAv1">
                        <div>
                            <h3 style="text-align: left">Price :</h3>
                            <input id="price" type="text" name="price" maxlength="10" required value="<?= $pro[3] ?>"> $ <br>
                        </div>
                        <div>
                            <h3 style="text-align: left">Available :</h3>
                            <input id="avail" type="number" name="available" maxlength="3" requird value="<?= $pro[5] ?>"><br>
                        </div>
                    </div>
                    <br>
                    <div>
                        <h3 style="text-align: left">Brand :</h3>
                        <input class="updatetype" class="" type="text" name="brand" maxlength="10" required value="<?= $pro[4] ?>"><br>
                    </div>
                    <div>
                        <h3 style="text-align: left">Category :</h3>
                        <select name="cate">
                            <?php
                            $sql2 = "SELECT * FROM category";
                            $run2 = $connection->query($sql2);
                            while ($cate = mysqli_fetch_array($run2)) {
                                if ($cate[0] == $pro[6]) { ?>
                                    <option value="<?= $cate[0] ?>" selected><?= $cate[1] ?></option>
                                <?php } else { ?>
                                    <option value="<?= $cate[0] ?>"><?= $cate[1] ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                    <br>
                    <div>
                        <h3 style="text-align: left">Product Image :</h3>
                        <input id="imgUpdate" type="file" name="image" accept="image/*">
                    </div>
                    <div>
                        <input type="hidden" name="id" value="<?= $pro[0] ?>">
                        <input type="hidden" name="old_image" value="<?= $pro[2] ?>">
                    </div>
                    <br>
                    <div>
                        <input id="updateBtn" type="submit" name="update" value="UPDATE">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
require_once "footer.php";
?>