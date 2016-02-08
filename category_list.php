
<?php

include("global.php");

?>

<?php
$res = mysqli_query($connection,"select * from categories");
?>

<div class="row">
	<div class ="grid_12">
<table>
<tr><td>Title</td></br>
	<td>Category</td></tr>

<a href="product_list.php?category_id=7">Electronics</a>
</br>
<a href="product_list.php?category_id=7">Clothing</a>


<?php
while ($row = mysqli_fetch_assoc($res)) { 

}
?>

	<tr>
	<td> <?php echo $row["title"];?></td></br>
	<td> <?php echo $row["category"];?></td></br>
	</tr>
</div>
	</div>

</table>

<?php 
include("footer.php");
?>


