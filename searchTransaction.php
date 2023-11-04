<?php
$transaction_id = $_POST["transaction_id"];
$customer_id = $_POST["customer_id"];
$date1 = $_POST["date1"];
$date2 = $_POST["date2"];
$time1 = $_POST["time1"];
$time2 = $_POST["time2"];

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
$sql = "select * from transaction where transaction_id like '%$transaction_id%' 												 
												  and customer_id like '%$customer_id%'";												  
////////////////////////////////////////////////////////////////////////////////
if ($transaction_id == null && $customer_id == null  && $date1== null && $date2==null && $time1==null && $time2==null) 
echo "<h2 style='text-align: center; color:black;'> Error: Try again!</h2>";
else {   if ($date1!= null)
			$sql .= " and date >= '$date1'"; 
		if ($date2 != null)
			$sql .= " and date <= '$date2'";
		if ($time1 != null)
			$sql .= " and time > '$time1'";
		if ($time2 != null)
			$sql .= " and time < '$time2'";


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
		<th>Price Per Unit</th>
		<th>Total Price</th>
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
/////////////////////////////////////////////////////////////////////////////////
// close connection 
mysqli_close($con);
?>