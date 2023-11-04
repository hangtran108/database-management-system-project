<?php

$fname1 = $_POST["fname1"];
$fname2 = $_POST["fname2"];
$fname3 = $_POST["fname3"];

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



if ($fname1 == null && $fname2 == null && $fname3== null) echo "<h2 style='text-align: center; color:black;'> Error: Try again!</h2>";
else {
		$sql = "select * from customer where customer_id like '%$fname1%' and name like '%$fname2%' and customer_phone like '%$fname3%'";
		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
		}

		echo "<table border='1'>
		<tr>
		<th>customer_id</th>
		<th>name</th>
		<th>dob</th>
		<th>type</th>
		<th>point</th>
		<th>year</th>
		<th>customer_address</th>
		<th>city</th>
		<th>customer_phone</th>
		<th>customer_email</th>
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

mysqli_free_result($result);
}

/////////////////////////////////////////////////////////////////////////////////
// close connection 
mysqli_close($con);
?>