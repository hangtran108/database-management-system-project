<?php
$fval1 = $_POST["fval1"];
$fval2 = $_POST["fval2"];
$fval3 = $_POST["fval3"];

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

if (($fval1 == null) || ($fval1 != null && $fval3 == null)) echo "<h2 style='text-align: center; color:black;'> Error: Try again!</h2>";
else  {
	$sql = "update supplier set $fval2 = '$fval3' where supplier_id = '$fval1'";
		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
		}
		echo "<h2 style='text-align: center; color:black;'> Successfully Edited</h2>";
		echo "<h2 style='text-align: center; color:black;'> Please go back to the search site to check</h2>";
}

echo "<a href='editsupplier.html'><center><br><br>Back</br></br></center></a>";

/////////////////////////////////////////////////////////////////////////////////
// close connection 
mysqli_close($con);
?>