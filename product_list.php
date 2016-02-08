
<?php

include("global.php");
include("header.php");
include("category_list.php");

?>

<?
$res = mysqli_query($connection,"select * from products");
?>

<div class="row">
	<div class ="grid_12">
<table>
<tr><td>Photo</td><td>Title</td><td>Description</td></tr>

<?php
while ($row = mysqli_fetch_assoc($res)) { 
	}
	?>

	<tr>
	<td> <?php echo $row["photo"];?></td>
	<td> <?php echo $row["title"];?></td>
	<td> <?php echo $row["description"];?></td>
	<td> 
	</tr>
</div>
	</div>

</table>

<?php include("footer.php");

?>


