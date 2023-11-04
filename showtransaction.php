<?php
$transaction_id = $_POST["transaction_id"];
$customer_id = $_POST["customer_id"];
$date = $_POST["date"];
$time = $_POST["time"];
$product = $_POST["product"];
$quantity = $_POST["quantity"];
$payment_method = $_POST["payment_method"];
$discount = $_POST["discount"];
$price_per_unit = $_POST["price_per_unit"];
$total_price = $_POST["total_price"];
$count = 0;

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

$sql = "select ";
if ($transaction_id) {
	$sql .="transaction_id ";
	$count++;
}

if ($customer_id) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" customer_id ";
}

if ($date) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" date ";
}

if ($time) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" time ";
}

if ($product) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" product ";
}

if ($quantity) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" quantity ";
}

if ($payment_method) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" payment_method ";
}

if ($discount) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" discount ";
}

if ($price_per_unit) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" price_per_unit ";
}

if ($total_price) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" total_price ";
}

$sql .= " from transaction";
if (!($result = mysqli_query($con,$sql))) {
	echo "Failed to get data. <br/>";
}
echo "<table border='1'>
	<tr>";
	if ($transaction_id)
	    echo "<th>Transaction ID</th>";
    if ($customer_id)
	    echo "<th>Customer ID</th>";
	if ($date)
	    echo "<th>Date</th>";
    if ($time)
		echo "<th>Time</th>";
	if ($product)
		echo "<th>Product</th>";
	if ($quantity)
		echo "<th>Quantity</th>";
	if ($payment_method)
		echo "<th>Payment Method </th>";
	if ($discount)
		echo "<th>Discount</th>";
	if ($price_per_unit)
		echo "<th>Price Per Unit</th>";
    if ($total_price)
		echo "<th>Total Price</th>";

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		echo "<tr>";
		if ($transaction_id) { 
            echo "<td>" . $row["transaction_id"] . "</td>";
        }
		if ($customer_id) {
            echo "<td>" . $row["customer_id"] . "</td>";
        }
		if ($date) {
            echo "<td>" . $row["date"] . "</td>";
        }
		if ($time) {
            echo "<td>" . $row["time"] . "</td>";
        }
		if ($product) {
            echo "<td>" . $row["product"] . "</td>";
        }
		if ($quantity) {
            echo "<td>" . $row["quantity"] . "</td>";
        }
		if ($payment_method) {
            echo "<td>" . $row["payment_method"] . "</td>";
        }
		if ($discount) {
            echo "<td>" . $row["discount"] . "</td>";
        }
		if ($price_per_unit) {
            echo "<td>" . $row["price_per_unit"] . "</td>";
        }
		if ($total_price) {
            echo "<td>" . $row["total_price"] . "</td>";
        }
		echo "</tr>";	
		}

		echo "</table>";

		mysqli_free_result($result);
// close connection
mysqli_close($con);
?>