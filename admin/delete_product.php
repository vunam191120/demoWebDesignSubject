<?php
require_once "header.php";
//Create the variable to get the data form from manage_product.php
$id = $_POST['id'];
//Create the comand to query the database
$sql = "DELETE FROM product WHERE productID = '$id'";
$result = $connection->query($sql);
if ($result) { ?>
    <script>
        alert("Deleted product in successfully !");
        window.location.href = "manage_product.php";
    </script>
<?php } else { ?>
    <script>
        alert("Delete product failed !");
        window.location.href = "manage_product.php";
    </script>
<?php }
?>