
<?php

include("global.php");
include("header.php");

?>


<a href="menu_form.php"><center><h1>Enter Item:</h1></center></a><br />

<?
$res = mysqli_query($connection,"select * from items");
?>

<div class="row">
	<div class ="grid_12">
<table>
<tr><td>Title</td><td>Description</td><td>Category</td></tr>

<?php
while ($row = mysqli_fetch_assoc($res)) { ?>

	<tr>
	<td> <?php echo $row["title"];?></td>
	<td> <?php echo $row["description"];?></td>
	<td> <?php echo $row["category"];?></td>
	<td> <a href='admin_menu_edit.php?id= <?php echo $row["id"];?>'> Edit</a>
		<a href='admin_menu_delete.php?id=<?php echo $row["id"];?>' onclick="return confirm ('You are about to DELETE this item <?php echo $row["title"];?> . press OK to continue.');"> Delete</a>
	</td>
	</tr>
</div>
	</div>

<?php } ?>


<?php

if ($_SESSION["id"] != "") { //user is logged in

  echo "Welcome, " . $_SESSION["email"] . "<br />";
  echo "<a href='admin_logout.php'>logout</a><br /><br />";
 
} else {
  echo "You are not logged in<br />";
  echo "<a href='login_form.php'>Login</a><br /><br />";


}

 ?>

</table>

<?php include("footer.php");

?>


