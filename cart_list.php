<?php
  include("global.php");
  include("header.php");

  //write query to retreive cart contents, inner join
  //name of product, product id, quantity

  if ($errormessage !="") {
  echo $errormessage;
}


?>
    <form action="cart_process.php" method="POST">
      
      <?php

        $query = sprintf("select * from cart where session_id='".session_id().);

        $result = mysql_query($query, $link);

        if ($result) {
         while($row = mysql_fetch_array($result)) {
          echo "Product Name: <input type="text" name="" value="">";
        }

        }
        else {
          echo mysql_error();
        }
      ?>

        Vape: <input type="text" name="product_2" value="1">

       <input type="update_cart" value="Update Cart">
       <input type="checkout" value="Checkout">
    </form>

<?php
  include("footer.php");
?>

