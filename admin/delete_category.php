<?php
require_once "header.php";
$id = $_POST['id'];
$sql = "DELETE FROM category WHERE categoryID = '$id'";
$result = $connection->query($sql);
if ($result) { ?>
    <script>
        alert("Deleted category in successfully !");
        window.location.href = "manage_category.php";
    </script>
<?php } else { ?>
    <script>
        alert("Delete category failed !");
        window.location.href = "manage_category.php";
    </script>
<?php }
?>