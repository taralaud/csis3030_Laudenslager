<?php

include("global.php");
include("header.php");
include("product_detail.php");

$category_id = intval($_GET["category_id"]);
$product_id = intval($_GET["product_id"]);
$result = mysqli_query($connection,"select * from products where category_id = $category_id order by product_name");

while ($row = mysqli_fetch_assoc($result)) {

	echo $row["product_name"] . "<br />";
	echo "<img src='images/" . $row["image"] . "'><br /><br />";

}

include("footer.php"); 


?>