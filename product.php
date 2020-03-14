<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<h2>Product Form</h2>




<?php
$product_nameerr=$descriptionerr=$quantityerr="";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	if(empty($_POST["product_name"]))
	{
		$prduct_nameerr="* name requirment error!";
	}
	else
	{	
		$prduct_nameerr=$_POST["product_name"];	
	}
	if(empty($_POST["description"]))
	{
		$descriptionerr="* description requirment error!";
	}
	else
	{	
		$descriptionerr=$_POST["description"];	
	}
	if(empty($_POST["quantity"]))
	{
		$quantityerr="* quantity requirment error!";
	}
	else
	{	
		$quantityerr=$_POST["quantity"];	
	}
	
	
}

?>

<form action="productdata.php" method="post">
	
	
	<b>Product name:</b>
	<input type="text" name="product_name">
	<span style="color:black"><?php echo $product_nameerr; ?></span><br><br>
	
	<b>Description</b>
	<input type="text" name="description">
	<span style="color:black"><?php echo $descriptionerr; ?></span>
	<br><br>
	
	<b>Quantity:</b>
	<input type="number" name="quantity">
	<span style="color:black"><?php echo $quantityerr; ?></span><br><br>

	
	
	<input type="submit" value="submit">
	

</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO products (product_name, description, quantity)
VALUES (product_name,description,quantity)";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>
</html>
