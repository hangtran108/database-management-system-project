<?php
$type = $_POST["f_from"];
$id = $_POST["id"];

echo "<style>
body{

background:url(95620.jpg);

background-size:100%;

}

table{
    margin-left: auto;
    margin-right: auto;
}

h1{
	font-family:sans-serif;
	font-size:40px;
	color: #665517;
	text-align: center;
	vertical-align:center;
	height:50px;
}

</style>";

echo"<br><h1 style='text-align: center; color:green;'>
        HERE IS YOUR RESULT
    </h1>";

$con = mysqli_connect("localhost","tanle","tanle");
if (mysqli_connect_error()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//use database
$db_selected = mysqli_select_db($con, "team1");
if (!$db_selected) {
echo "Failed to select DB. <br/>";
}


if ($type == 'customer'){
	if ($id == null) echo "<h2 style='text-align: center; color:black;'> Error: Try again!</h2>";
	else {
		$sql = "delete from customer where customer_id = '$id' ";
		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
	}
	echo "<h2 style='text-align: center; color:black;'> Successfully Deleted</h2>";
	echo "<h2 style='text-align: center; color:black;'> Please go back to the search site to check</h2>";
}
}

if ($type == 'product'){
	if ($id == null) echo "<h2 style='text-align: center; color:black;'> Error: Try again!</h2>";
	else {
		$sql = "delete from product where product_id = '$id' ";
		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
	}
	echo "<h2 style='text-align: center; color:black;'> Successfully Deleted</h2>";
	echo "<h2 style='text-align: center; color:black;'> Please go back to the search site to check</h2>";
}
}

if ($type == 'supplier'){ 
	if ($id == null) echo "<h2 style='text-align: center; color:black;'> Error: Try again!</h2>";
	else {
		$sql = "delete from supplier where supplier_id = '$id' ";
		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
	}
	echo "<h2 style='text-align: center; color:black;'> Successfully Deleted</h2>";
	echo "<h2 style='text-align: center; color:black;'> Please go back to the search site to check</h2>";
}
}

if ($type == 'transaction'){ 
	if ($id == null) echo "<h2 style='text-align: center; color:black;'> Error: Try again!</h2>";
	else {
		$sql = "delete from transaction where transaction_id = '$id' ";
		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
	}
	echo "<h2 style='text-align: center; color:black;'> Successfully Deleted</h2>";
	echo "<h2 style='text-align: center; color:black;'> Please go back to the search site to check</h2>";
}
}

// close connection 
mysqli_close($con);
?>