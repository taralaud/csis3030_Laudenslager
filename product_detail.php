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
      
    echo "<input type='text' name='product_name' size='3'>";

		echo $row["product_name"] . "<br />";
		echo "<img src='images/" . $row["image"] . "'><br /><br />";

		}

    	?>
      <input type="submit" value="Submit">

    </form>


    <script>
      $(document).ready(function() {
        $('.checkout_form').css('border','1px solid blue');
        $('#item').keyup(function() {
          console.log("item is" + $('#item').val())
          $.ajax({
            url: 'product_quantity.php',
            data: {'item': $('#item').val()},
            method: 'POST',
            dataType: 'json',

            success: function(data) {
              if (data.success==true) {
                $('#item_error').html('');
              }else {
                $('#item_error').html('Please enter an amount');
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


