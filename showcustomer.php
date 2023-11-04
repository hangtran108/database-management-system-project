<?php
$customer_id = $_POST["customer_id"];
$name = $_POST["name"];
$dob = $_POST["dob"];
$type = $_POST["type"];
$point = $_POST["point"];
$year = $_POST["year"];
$customer_address = $_POST["customer_address"];
$city = $_POST["city"];
$customer_phone = $_POST["customer_phone"];
$customer_email = $_POST["customer_email"];
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
if ($customer_id) {
	$sql .="customer_id ";
	$count++;
}

if ($name) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" name ";
}

if ($dob) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" dob ";
}

if ($type) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" type ";
}

if ($point) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" point ";
}

if ($year) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" year ";
}

if ($customer_address) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" customer_address ";
}

if ($city) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" city ";
}

if ($customer_phone) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" customer_phone ";
}

if ($customer_email) {
	$count++;
	if ($count >= 2)
	{
		$sql .= ",";
	}
	$sql .=" customer_email ";
}

$sql .= " from customer";
if (!($result = mysqli_query($con,$sql))) {
	echo "Failed to get data. <br/>";
}
echo "<table border='1'>
	<tr>";
	if ($customer_id)
	    echo "<th>Customer ID</th>";
    if ($name)
	    echo "<th>Customer Name</th>";
	if ($dob)
	    echo "<th>Date of Birth</th>";
    if ($type)
		echo "<th>Type</th>";
	if ($point)
		echo "<th>Point</th>";
	if ($year)
		echo "<th>Year</th>";
	if ($customer_address)
		echo "<th>Customer Address</th>";
	if ($city)
		echo "<th>City</th>";
	if ($customer_phone)
		echo "<th>Phone</th>";
    if ($customer_email)
		echo "<th>Email</th>";

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		echo "<tr>";
		if ($customer_id) { 
            echo "<td>" . $row["customer_id"] . "</td>";
        }
		if ($name) {
            echo "<td>" . $row["name"] . "</td>";
        }
		if ($dob) {
            echo "<td>" . $row["dob"] . "</td>";
        }
		if ($type) {
            echo "<td>" . $row["type"] . "</td>";
        }
		if ($point) {
            echo "<td>" . $row["point"] . "</td>";
        }
		if ($year) {
            echo "<td>" . $row["year"] . "</td>";
        }
		if ($customer_address) {
            echo "<td>" . $row["customer_address"] . "</td>";
        }
		if ($city) {
            echo "<td>" . $row["city"] . "</td>";
        }
		if ($customer_phone) {
            echo "<td>" . $row["customer_phone"] . "</td>";
        }
		if ($customer_email) {
            echo "<td>" . $row["customer_email"] . "</td>";
        }
		echo "</tr>";	
		}

		echo "</table>";

		mysqli_free_result($result);
// close connection
mysqli_close($con);
?>