<?php
include("global.php");


$firstname = mysqli_real_escape_string($connection,$_POST["firstname"]);
$address = mysqli_real_escape_string($connection,$_POST["address"]);
$city = mysqli_real_escape_string($connection,$_POST["city"]);
$state = mysqli_real_escape_string($connection,$_POST["state"]);
$zip = mysqli_real_escape_string($connection,$_POST["zip"]);

$id = intval($_POST["id"]);


if ($_POST["firstname"] == "") {
	$errormessage = $errormessage . "First Name can't be blank <br />";
}

if ($_POST["address"] == "") {
	$errormessage = $errormessage . "Address can't be blank <br />";
}
if ($_POST["city"] == "") {
	$errormessage = $errormessage . "City can't be blank <br />";
}
if ($_POST["state"] == "") {
	$errormessage = $errormessage . "State can't be blank <br />";
}
if ($_POST["zip"] == "") {
	$errormessage = $errormessage . "ZIP can't be blank <br />";
}


if ($errormessage != "") { 
	include("checkout_form.php");
	die();
}

foreach ($_POST as $cart => $quantity) {

echo "Order Summary";
echo "firstname,address,city,state,zip";
include("cart_list.php");


?>