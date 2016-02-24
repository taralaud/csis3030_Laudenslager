<?php
  include("global.php");
  include("header.php");

  if ($errormessage !="") {
  echo $errormessage;
}


?>
    <form action="cart_process.php" method="POST">
      
      <?php

        $query = sprintf("select * from cart where session_id=.session_id(). join on products");

        $result = mysql_query($query, $link);

        if ($result) {
         while($row = mysql_fetch_array($result)) {
          echo "Product Name: <input type='text' name='product_name' value='2'>";
        }

        }
        else {
          echo mysql_error();
        }
      ?>

        Quantity: <input type="text" name="product_2" value="1">

       <input type="submit" value="Update Cart">
       <input type="submit" value="Checkout">
    </form>

<?php
  include("footer.php");
?>

