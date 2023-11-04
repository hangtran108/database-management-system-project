<?php

$type = $_POST["f_from"];

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





if ($type == 'Customer'){ 
		$sql = "select * from customer ";
		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
		}

		echo "<table border='1'>
		<tr>
		<th>Customer_id</th>
		<th>Name</th>
		<th>DOB</th>
		<th>Type</th>
		<th>Point</th>
		<th>Year</th>
		<th>Address</th>
		<th>City</th>
		<th>Phone</th>
		<th>Email</th>
		</tr>";

		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		echo "<tr>";
		echo "<td>" . $row["customer_id"] . "</td>";
		echo "<td>" . $row["name"] . "</td>";
		echo "<td>" . $row["dob"] . "</td>";
		echo "<td>" . $row["type"] . "</td>";
		echo "<td>" . $row["point"] . "</td>";
		echo "<td>" . $row["year"] . "</td>";
		echo "<td>" . $row["customer_address"] . "</td>";
		echo "<td>" . $row["city"] . "</td>";
		echo "<td>" . $row["customer_phone"] . "</td>";
		echo "<td>" . $row["customer_email"] . "</td>";
		echo "</tr>";	
		}

		echo "</table>";

		mysqli_free_result($result); }	


if ($type == 'Product'){
		$sql = "select * from product ";
		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
		}



		echo "<table border='1'>
		<tr>
		<th>Product ID</th>
		<th>Supplier ID</th>
		<th>Name</th>
		<th>Category</th>
		<th>Brand ID</th>
		<th>Brand Name</th>
		<th>Arrival Date</th>
		<th>Expiry</th>
		<th>Price</th>
		<th>Stock</th>
		<th>Net Weight</th>
		<th>Certification</th>
		</tr>";



		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		echo "<tr>";
		echo "<td>" . $row["product_id"] . "</td>";
		echo "<td>" . $row["supplier_id"] . "</td>";
		echo "<td>" . $row["name"] . "</td>";
		echo "<td>" . $row["category"] . "</td>";
		echo "<td>" . $row["brand_id"] . "</td>";
		echo "<td>" . $row["brand_name"] . "</td>";
		echo "<td>" . $row["date"] . "</td>";
		echo "<td>" . $row["expiry"] . "</td>";
		echo "<td>" . $row["price"] . "</td>";
		echo "<td>" . $row["stock"] . "</td>";
		echo "<td>" . $row["net_weight"] . "</td>";
		echo "<td>" . $row["certification"] . "</td>";
		echo "</tr>";	
		}


		echo "</table>";

		mysqli_free_result($result);
}	


if ($type == 'Supplier'){ 
		$sql = "select * from supplier ";
		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
		}



		echo "<table border='1'>
		<tr>
		<th>Supplier ID</th>
		<th>Name</th>
		<th>Type</th>
		<th>Address</th>
		<th>City</th>
		<th>Postcode</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Standard</th>
		<th>Year</th>
		</tr>";



		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		echo "<tr>";
		echo "<td>" . $row["supplier_id"] . "</td>";
		echo "<td>" . $row["name"] . "</td>";
		echo "<td>" . $row["type"] . "</td>";
		echo "<td>" . $row["supplier_address"] . "</td>";
		echo "<td>" . $row["city"] . "</td>";
		echo "<td>" . $row["postcode"] . "</td>";
		echo "<td>" . $row["supplier_phone"] . "</td>";
		echo "<td>" . $row["supplier_email"] . "</td>";
		echo "<td>" . $row["standard"] . "</td>";
		echo "<td>" . $row["year"] . "</td>";
		echo "</tr>";	
		}


		echo "</table>";

		mysqli_free_result($result);
}	

if ($type == 'Transaction'){ 
		$sql = "select * from transaction ";
		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
		}

		echo "<table border='1'>
		<tr>
		<th>Transaction ID</th>
		<th>Customer ID</th>
		<th>Date</th>
		<th>Time</th>
		<th>Product</th>
		<th>Quantity</th>
		<th>Payment Method</th>
		<th>Discount</th>
		<th>Price per unit</th>
		<th>Total price</th>
		</tr>";



		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		echo "<tr>";
		echo "<td>" . $row["transaction_id"] . "</td>";
		echo "<td>" . $row["customer_id"] . "</td>";
		echo "<td>" . $row["date"] . "</td>";
		echo "<td>" . $row["time"] . "</td>";
		echo "<td>" . $row["product"] . "</td>";
		echo "<td>" . $row["quantity"] . "</td>";
		echo "<td>" . $row["payment_method"] . "</td>";
		echo "<td>" . $row["discount"] . "</td>";
		echo "<td>" . $row["price_per_unit"] . "</td>";
		echo "<td>" . $row["total_price"] . "</td>";
		echo "</tr>";	
		}


		echo "</table>";

		mysqli_free_result($result);
}	

// close connection 
mysqli_close($con);
?>