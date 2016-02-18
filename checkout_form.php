<?php
  include("global.php");
  include("header.php");

  if ($errormessage !="") {
  echo $errormessage;
}


?>
    <form action="checkout_process.php" method="POST">
      First Name: <input type="text" name="firstname" value="<?php echo htmlspecialchars($_POST["firstname"], ENT_QUOTES);?>"><br>
      Address: <input type="text" name="address" value="<?php echo htmlspecialchars($_POST["address"], ENT_QUOTES);?>"><br><br>
      City: <input type="text" name="city" value="<?php echo htmlspecialchars($_POST["city"], ENT_QUOTES);?>"><br><br>
      State: <input type="text" name="state" value="<?php echo htmlspecialchars($_POST["state"], ENT_QUOTES);?>"><br><br>
      ZIP: <input type="text" name="zip" value="<?php echo htmlspecialchars($_POST["zip"], ENT_QUOTES);?>"><br><br>

      
       <input type="checkout" value="Checkout">
    </form>

<?php
  include("footer.php");
?>
