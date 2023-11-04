<?php
$product_id = $_POST["product_id"];
$name = $_POST["name"];
$category = $_POST["category"];
$brand_name = $_POST["brand_name"];
$Arrival_date1 = $_POST["Arrival_date1"];
$Arrival_date2 = $_POST["Arrival_date2"];
$Expiry1 = $_POST["Expiry1"];
$Expiry2 = $_POST["Expiry2"];
$Price1 = $_POST["Price1"];
$Price2 = $_POST["Price2"];
$certification = $_POST["certification"];

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
$sql = "select distinct * from product where product_id like '%$product_id%' 
												and name like '%$name%' 
												and category like '%$category%'									
	and brand_name like '%$brand_name%'
	
 	and (certification like '%$certification%'";

if (($product_id != null || $name != null || $category != null || $Arrival_date1 != null ||$Arrival_date2 != null || $Expiry1!=null || $Expiry2!=null || $Price1!=null || $Price2!=null || $brand_name ==null) && $certification==null)
	$sql .= " or certification is null)";
else 	
	$sql .= ")";

if ($product_id == null && $name == null && $category == null && $Arrival_date1== null && $Arrival_date2== null && $Expiry1==null && $Expiry2==null && $Price1==null && $Price2==null && $certification==null && $brand_name ==null) 
echo "<h2 style='text-align: center; color:black;'> Error: Try again!</h2>";
else	{   	if ($Arrival_date1!= null)
			$sql .= " and date >= '$Arrival_date1'"; 
		if ($Arrival_date2 != null)
			$sql .= " and date <= '$Arrival_date2'";
		if ($Expiry1 != null)
			$sql .= " and expiry >= '$Expiry1'";
		if ($Expiry2 != null)
			$sql .= " and expiry <= '$Expiry2'";
		if ($Price1 != null)
			$sql .= " and price >'$Price1'";
		if ($Price2 != null)
			$sql .= " and price < '$Price2'";


		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
	}


		echo "<table border='1'>
		<tr>
		<th>Product ID</th>
		<th>Name</th>
		<th>Category</th>
		<th>Brand Name</th>
		<th>Arrival date</th>
		<th>Expiry</th>
		<th>Price</th>
		<th>Certification</th>
		</tr>";



		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		echo "<tr>";
		echo "<td>" . $row["product_id"] . "</td>";
		echo "<td>" . $row["name"] . "</td>";
		echo "<td>" . $row["category"] . "</td>";
		echo "<td>" . $row["brand_name"] . "</td>";
		echo "<td>" . $row["date"] . "</td>";
		echo "<td>" . $row["expiry"] . "</td>";
		echo "<td>" . $row["price"] . "</td>";
		echo "<td>" . $row["certification"] . "</td>";
		echo "</tr>";	
		}


		echo "</table>";

		mysqli_free_result($result);

}
/////////////////////////////////////////////////////////////////////////////////
// close connection 
mysqli_close($con);
?>