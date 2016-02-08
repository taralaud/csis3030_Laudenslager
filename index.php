<?php
  include("global.php");
  include("header.php");
  include("category_list.php");
?>

<div class="row">
  <div class="grid_12">
<?php
$result = mysqli_query($connection,"select * from categories");


while ($row = mysqli_fetch_assoc($result)) {
  echo "<a href='category_list.php?category=" . $row["categoryname"] . "'> ". $row["categoryname"] . "</a>";
 
 }

?>
</div>
  </div>

   <body>
		<div class="row">
    		<div class="grid_12">

    		</div>
		</div>


<div class="clear"></div>


<?php

 include("footer.php"); 

 ?>





