<?php
$product_id = $_POST["product_id"];
$supplier_id = $_POST["supplier_id"];
$name = $_POST["name"];
$category = $_POST["category"];
$brand_id = $_POST["brand_id"];
$brand_name = $_POST["brand_name"];
$date = $_POST["date"];
$expiry = $_POST["expiry"];
$price = $_POST["price"];
$stock = $_POST["stock"];
$net_weight = $_POST["net_weight"];
$certification = $_POST["certification"];
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
if ($product_id) {
	$sql .="product_id ";
	$count++;
}

if ($supplier_id) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" supplier_id ";
}

if ($name) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" name ";
}

if ($category) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" category ";
}

if ($brand_id) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" brand_id ";
}

if ($brand_name) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" brand_name ";
}

if ($date) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" date ";
}

if ($expiry) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" expiry ";
}

if ($price) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" price ";
}

if ($stock) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" stock ";
}

if ($net_weight) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" net_weight ";
}

if ($certification) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" certification ";
}

$sql .= " from product";
if (!($result = mysqli_query($con,$sql))) {
	echo "Failed to get data. <br/>";
}
echo "<table border='1'>
	<tr>";
	if ($product_id)
	    echo "<th>Product ID</th>";
    if ($supplier_id)
	    echo "<th>Supplier ID</th>";
	if ($name)
	    echo "<th>Supplier Name</th>";
    if ($category)
		echo "<th>Category</th>";
	if ($brand_id)
		echo "<th>Brand ID</th>";
	if ($brand_name)
		echo "<th>Brand Name</th>";
	if ($date)
		echo "<th>Date </th>";
	if ($expiry)
		echo "<th>Expiry</th>";
	if ($price)
		echo "<th>Price</th>";
    if ($stock)
		echo "<th>Stock</th>";
	if ($net_weight)
		echo "<th>Net Weight</th>";
	if ($certification)
		echo "<th>Certification</th>";

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		echo "<tr>";
		if ($product_id) { 
            echo "<td>" . $row["product_id"] . "</td>";
        }
		if ($supplier_id) {
            echo "<td>" . $row["supplier_id"] . "</td>";
        }
		if ($name) {
            echo "<td>" . $row["name"] . "</td>";
        }
		if ($category) {
            echo "<td>" . $row["category"] . "</td>";
        }
		if ($brand_id) {
            echo "<td>" . $row["brand_id"] . "</td>";
        }
		if ($brand_name) {
            echo "<td>" . $row["brand_name"] . "</td>";
        }
		if ($date) {
            echo "<td>" . $row["date"] . "</td>";
        }
		if ($expiry) {
            echo "<td>" . $row["expiry"] . "</td>";
        }
		if ($price) {
            echo "<td>" . $row["price"] . "</td>";
        }
		if ($stock) {
            echo "<td>" . $row["stock"] . "</td>";
        }
		if ($net_weight) {
            echo "<td>" . $row["net_weight"] . "</td>";
        }
		if ($certification) {
            echo "<td>" . $row["certification"] . "</td>";
        }
		echo "</tr>";	
		}

		echo "</table>";

		mysqli_free_result($result);
// close connection
mysqli_close($con);
?>