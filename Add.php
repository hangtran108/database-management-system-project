<?php

$type = $_POST["f_from"];
$TCustomer_id = $_POST["TCustomer_id"];
$CName = $_POST["CName"];
$DOB = $_POST["DOB"];
$CType = $_POST["CType"];
$Point = $_POST["Point"];
$CYear = $_POST["CYear"];
$CAddress = $_POST["CAddress"];
$CCity = $_POST["CCity"];
$CPhone = $_POST["CPhone"];
$CEmail = $_POST["CEmail"];

$Product_id = $_POST["Product_id"];
$Supplier_id = $_POST["Supplier_id"];
$PName = $_POST["PName"];
$Category = $_POST["Category"];
$Brand_id = $_POST["Brand_id"];
$Brand_name = $_POST["Brand_name"];
$PDate = $_POST["PDate"];
$Expiry = $_POST["Expiry"];
$Price = $_POST["Price"];
$Stock = $_POST["Stock"];
$Net_weight = $_POST["Net_weight"];
$Certification = $_POST["Certification"];

$PSupplier_id = $_POST["PSupplier_id"];
$SName = $_POST["SName"];
$SType = $_POST["SType"];
$SAddress = $_POST["SAddress"];
$SCity = $_POST["SCity"];
$Postcode = $_POST["Postcode"];
$SPhone = $_POST["SPhone"];
$SEmail = $_POST["SEmail"];
$Standard = $_POST["Standard"];
$SYear = $_POST["SYear"];

$Transaction_id = $_POST["Transaction_id"];
$Customer_id = $_POST["Customer_id"];
$TDate = $_POST["TDate"];
$Time = $_POST["Time"];
$Product = $_POST["Product"];
$Quantity = $_POST["Quantity"];
$Payment_method = $_POST["Payment_method"];
$Discount = $_POST["Discount"];
$Price_per_unit = $_POST["Price_per_unit"];
$Total_price = $_POST["Total_price"];

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
	if ($TCustomer_id == null || $CName == null || $DOB == null || $CType == null || $Point == null || $CYear == null || $CAddress == null || $CCity == null || $CPhone == null || $CEmail == null)
			echo "Try again";
	else {
	$sql = "insert into customer values ($TCustomer_id, '$CName', '$DOB', '$CType', $Point, $CYear, '$CAddress', '$CCity', $CPhone, '$CEmail')";
		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
		}
		echo "<h2 style='text-align: center; color:black;'> Successfully Added</h2>";
	echo "<h2 style='text-align: center; color:black;'> Please go back to the search site to check</h2>";
}	
}

if ($type == 'product'){
	if ($Product_id == null || $Supplier_id == null || $PName == null || $Category == null || $Brand_id == null || $Brand_name == null || $PDate == null || $Expiry == null || $Price == null|| $Stock == null || $Net_weight == null || $Certification == null) 
			echo "Try again";
	else {
	$sql = "insert into product values ($Product_id, $Supplier_id, '$PName', '$Category', '$Brand_id', '$Brand_name', '$PDate', '$Expiry', $Price, $Stock, $Net_weight, '$Certification') ";
		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
		}
		echo "<h2 style='text-align: center; color:black;'> Successfully Added</h2>";
	echo "<h2 style='text-align: center; color:black;'> Please go back to the search site to check</h2>";
}
}

if ($type == 'supplier'){ 
	if ($PSupplier_id == null || $SName == null || $SType == null || $SAddress == null || $SCity == null || $Postcode == null || $SPhone == null || $SEmail == null || $Standard == null || $SYear == null) 
			echo "Try again";
	else {
	$sql = "insert into supplier values ($PSupplier_id, '$SName', '$SType', '$SAddress', '$SCity', $Postcode, $SPhone, '$SEmail', '$Standard', $SYear) ";
		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
		}
		echo "<h2 style='text-align: center; color:black;'> Successfully Added</h2>";
		echo "<h2 style='text-align: center; color:black;'> Please go back to the search site to check</h2>";
}
}

if ($type == 'transaction'){ 
	if ($Transaction_id == null || $Customer_id == null || $TDate == null || $Time == null || $Product == null || $Quantity == null || $Payment_method == null || $Discount == null || $Price_per_unit == null || $Total_price == null )
			echo "Try again";
	else {		
	$sql = " insert into transaction VALUES ($Transaction_id, '$Customer_id', '$TDate', '$Time', '$Product', $Quantity, '$Payment_method', $Discount, $Price_per_unit, $Total_price) ";
		if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
		}
		echo "<h2 style='text-align: center; color:black;'> Successfully Added</h2>";
	echo "<h2 style='text-align: center; color:black;'> Please go back to the search site to check</h2>";
}
}
/////////////////////////////////////////////////////////////////////////////////
// close connection 
mysqli_close($con);
?>