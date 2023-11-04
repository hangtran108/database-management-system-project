<?php

echo "<style>
body{

background:url(207.jpg);

background-size:100%;

}
</style>";

$Customer_id = $_POST["Customer_id"];
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

$Supplier_id = $_POST["Supplier_id"];
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

$con = mysqli_connect("localhost","group1","group1");
if (mysqli_connect_error()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//use database
$db_selected = mysqli_select_db($con, "team1");
if (!$db_selected) {
echo "Failed to select DB. <br/>";
}
////////////////////////////////////////////////////////////////////////////////
$count = 0;
$sql = "select ";
if ($Customer_id){
	$count ++;
	if ($count > 1) $sql .= " , ";
	$sql.= " customer.Customer_id ";
}
if ($CName){
	$count ++;
	if ($count > 1) $sql.= ", ";
	$sql.= " CName ";
}
if ($DOB){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " DOB ";
}
if ($CType){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " CType ";
}
if ($Point){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Point ";
}
if ($CYear){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " CYear ";
}
if ($CAddress){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " CAddress ";
}
if ($CCity){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " CCity ";
}
if ($CPhone){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " CPhone ";
}
if ($CEmail){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " CEmail ";
}
if ($Product_id){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " product.Product_id ";
}
if ($Supplier_id){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Supplier_id ";
}
if ($PName){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " PName ";
}
if ($Category){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Category ";
}
if ($Brand_id){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Brand_id ";
}
if ($Brand_name){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Brand_name ";
}
if ($PDate){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " PDate ";
}
if ($Expiry){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Expiry ";
}
if ($Price){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Price ";
}
if ($Stock){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Stock ";
}
if ($Net_weight){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Net_weight ";
}
if ($Certification){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Certification ";
}
if ($Supplier_id){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " supplier.Supplier_id ";
}
if ($SName){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " SName ";
}
if ($SType){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " SType ";
}
if ($SAddress){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " SAddress ";
}
if ($SCity){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " SCity ";
}
if ($Postcode){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Postcode ";
}
if ($SPhone){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " SPhone ";
}
if ($SEmail){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " SEmail ";
}
if ($Standard){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Standard ";
}
if ($SYear){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " SYear ";
}
if ($Transaction_id){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " transaction.Transaction_id ";
}
if ($Customer_id){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Customer_id ";
}
if ($TDate){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " TDate ";
}
if ($time){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " time ";
}
if ($Product){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Product ";
}
if ($Quantity){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Quantity ";
}
if ($Payment_method){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Payment_method ";
}
if ($Discount){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Discount ";
}
if ($Price_per_unit){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Price_per_unit ";
}
if ($Total_price){
	$count ++;
	if ($count > 1) $sql.= " , ";
	$sql.= " Total_price ";
}


$sql.=  "select * from customer, product, supplier, transaction where supplier.Supplier_id = product.Supplier_id and product.PName = transaction.Product and product.Price = transaction.Price_per_unit and transaction.Customer_id = customer.Customer_id ";
 
 
if (!($result = mysqli_query($con,$sql))) {
		echo "Failed to get data.<br/>";
		}

		echo "<table border='1'>
		<tr>";
		if ($Customer_id) echo "<th>Customer_id</th>";
		if ($CName) echo "<th>CName</th>";
		if ($DOB) echo "<th>DOB</th>";
		if ($CType) echo "<th>CType</th>";
		if ($Point) echo "<th>Point</th>";
		if ($CYear) echo "<th>CYear</th>";
		if ($CAddress) echo "<th>CAddress</th>";
		if ($CCity) echo "<th>CCity</th>";
		if ($CPhone) echo "<th>CPhone</th>";
		if ($CEmail) echo "<th>CEmail</th>";
		

		if ($Product_id) echo "<th>Product_id</th>";
		if ($Supplier_id) echo "<th>Supplier_id</th>";
		if ($PName) echo "<th>PName</th>";
		if ($Category) echo "<th>Category</th>";
		if ($Brand_id) echo "<th>Brand_id</th>";
		if ($Brand_name) echo "<th>Brand_name</th>";
		if ($PDate) echo "<th>PDate</th>";
		if ($Expiry) echo "<th>Expiry</th>";
		if ($Price) echo "<th>Price</th>";
		if ($Stock) echo "<th>Stock</th>";
		if ($Net_weight) echo "<th>Net_weight</th>";
		if ($Certification) echo "<th>Certification</th>";
		
		
		if ($Supplier_id) echo "<th>Supplier_id</th>";
		if ($SName) echo "<th>SName</th>";
		if ($SType) echo "<th>SType</th>";
		if ($SAddress) echo "<th>SAddress</th>";
		if ($SCity) echo "<th>SCity</th>";
		if ($Postcode) echo "<th>Postcode</th>";
		if ($SPhone) echo "<th>SPhone</th>";
		if ($SEmail) echo "<th>SEmail</th>";
		if ($Standard) echo "<th>Standard</th>";
		if ($SYear) echo "<th>SYear</th>";
		
		
		if ($Transaction_id) echo "<th>Transaction_id</th>";
		if ($Customer_id) echo "<th>Customer_id</th>";
		if ($TDate) echo "<th>TDate</th>";
		if ($Time) echo "<th>Time</th>";
		if ($Product) echo "<th>Product</th>";
		if ($Quantity) echo "<th>Quantity</th>";
		if ($Payment_method) echo "<th>Payment_method</th>";
		if ($Discount) echo "<th>Discount</th>";
		if ($Price_per_unit) echo "<th>Price_per_unit</th>";
		if ($Total_price) echo "<th>Total_price</th>";
		echo "</tr>";


		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		echo "<tr>";
		if ($Customer_id) echo "<td>" . $row["Customer_id"] . "</td>";
		if ($CName) echo "<td>" . $row["CName"] . "</td>";
		if ($DOB) echo "<td>" . $row["DOB"] . "</td>";
		if ($CType) echo "<td>" . $row["CType"] . "</td>";
		if ($Point) echo "<td>" . $row["Point"] . "</td>";
		if ($CYear) echo "<td>" . $row["CYear"] . "</td>";
		if ($CAddress) echo "<td>" . $row["CAddress"] . "</td>";
		if ($CCity) echo "<td>" . $row["CCity"] . "</td>";
		if ($CPhone) echo "<td>" . $row["CPhone"] . "</td>";
		if ($CEmail) echo "<td>" . $row["CEmail"] . "</td>";
		
		
		if ($Product_id) echo "<td>" . $row["Product_id"] . "</td>";
		if ($Supplier_id) echo "<td>" . $row["Supplier_id"] . "</td>";
		if ($PName) echo "<td>" . $row["PName"] . "</td>";
		if ($Category) echo "<td>" . $row["Category"] . "</td>";
		if ($Brand_id) echo "<td>" . $row["Brand_id"] . "</td>";
		if ($Brand_name) echo "<td>" . $row["Brand_name"] . "</td>";
		if ($PDate) echo "<td>" . $row["PDate"] . "</td>";
		if ($Expiry) echo "<td>" . $row["Expiry"] . "</td>";
		if ($Price) echo "<td>" . $row["Price"] . "</td>";
		if ($Stock) echo "<td>" . $row["Stock"] . "</td>";
		if ($Net_weight) echo "<td>" . $row["Net_weight"] . "</td>";
		if ($Certification) echo "<td>" . $row["Certification"] . "</td>";
		
		
		if ($Supplier_id) echo "<td>" . $row["Supplier_id"] . "</td>";
		if ($SName) echo "<td>" . $row["SName"] . "</td>";
		if ($SType) echo "<td>" . $row["SType"] . "</td>";
		if ($SAddress) echo "<td>" . $row["SAddress"] . "</td>";
		if ($SCity) echo "<td>" . $row["SCity"] . "</td>";
		if ($Postcode) echo "<td>" . $row["Postcode"] . "</td>";
		if ($SPhone) echo "<td>" . $row["SPhone"] . "</td>";
		if ($SEmail) echo "<td>" . $row["SEmail"] . "</td>";
		if ($Standard) echo "<td>" . $row["Standard"] . "</td>";
		if ($SYear) echo "<td>" . $row["SYear"] . "</td>";
		
		
		if ($Transaction_id) echo "<td>" . $row["Transaction_id"] . "</td>";
		if ($Customer_id) echo "<td>" . $row["Customer_id"] . "</td>";
		if ($TDate) echo "<td>" . $row["TDate"] . "</td>";
		if ($Time) echo "<td>" . $row["Time"] . "</td>";
		if ($Product) echo "<td>" . $row["Product"] . "</td>";
		if ($Quantity) echo "<td>" . $row["Quantity"] . "</td>";
		if ($Payment_method) echo "<td>" . $row["Payment_method"] . "</td>";
		if ($Discount) echo "<td>" . $row["Discount"] . "</td>";
		if ($Price_per_unit) echo "<td>" . $row["Price_per_unit"] . "</td>";
		if ($Total_price) echo "<td>" . $row["Total_price"] . "</td>";
		
		echo "</tr>";
		}


		echo "</table>";

		mysqli_free_result($result);

/////////////////////////////////////////////////////////////////////////////////
// close connection 
mysqli_close($con);
?>