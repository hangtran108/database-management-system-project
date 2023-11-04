<?php
$fname4 = $_POST["fname4"];
$fname5 = $_POST["fname5"];
$fname6 = $_POST["fname6"];
$fname7 = $_POST["fname7"];
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

if ($fname4 == null && $fname5 == null && $fname6== null && $fname7== null) echo "<h2 style='text-align: center; color:black;'> Error: Try again!</h2>";
else {
		$sql = "select * from supplier where supplier_id like '%$fname4%' and name like '%$fname5%' and city like '%$fname6%' and standard like '%$fname7%'";
		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
		}

		echo "<table border='1'>
		<tr>
		<th>supplier_id</th>
		<th>name</th>
		<th>type</th>
		<th>supplier_address</th>
		<th>city</th>
		<th>postcode</th>
		<th>supplier_phone</th>
		<th>supplier_email</th>
		<th>standard</th>
		<th>year</th>
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

/////////////////////////////////////////////////////////////////////////////////
// close connection 
mysqli_close($con);
?>