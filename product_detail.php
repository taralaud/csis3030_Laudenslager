<?php
  include("global.php");
  include("header.php");

  if ($errormessage !="") {
  echo $errormessage;
}


?>
    <form action="cart_process.php" method="POST">
    	<?php
    	$product_id = intval($_GET["product_id"]);
		$result = mysqli_query($connection,"select * from products where product_id = $product_id order by product_name");

		while ($row = mysqli_fetch_assoc($result)) {
      
      echo "<input type="text" name="product_1" size="3">";

		echo $row["product_name"] . "<br />";
		echo "<img src='images/" . $row["image"] . "'><br /><br />";

		}

    	?>

    </form>


    <script>
      $(document).ready(function() {
        $('.checkout_form').css('border','1px solid blue');
        $('#itemQuantity').keyup(function() {
          console.log("itemQuantity is" + $('#itemQuantity').val())
          $.ajax({
            url: 'product_quantity.php',
            data: {'itemQuantity': $('#itemQuantity').val()},
            method: 'POST',
            dataType: 'json',

            success: function(data) {
              if (data.success==true) {
                $('#itemQuantity_error').html('');
              }else {
                $('#itemQuantity_error').html('Please enter an amount');
              }         
              
              
            },
            error: function(data) {
              alert("Error: Please enter a smaller quantity"); 
            }
      });
    
    });
      
  });

      </script>

<?php
  include("footer.php");
?>


