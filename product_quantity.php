<?php

if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        $totalquantity = 0;
        foreach($_SESSION['cart'] AS $productId => $itemQuanity) {
            $totalquantity = $totalquantity + $itemQuanity;
        }
  }
  else {
       $totalquantity = 0;
  }
  echo $totalquantity;

  ?>