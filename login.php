<?php
	session_start();
	
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<link rel="stylesheet" type="text/css" href="system.css" media="all" />
</head>
<body>

<div class="head_area">
	<div class="company">
		<h2>AIUB</h2>
	</div>
	<div class="login">
		<p><a href="login.php">Log in</a></p>
	</div>
	<div class="regis">
		<p><a href="registration.php">Registration</a></p>
	</div>

		<div class="logout">
		<p><a href="logoute.php">Logout</a></p>
	</div>

</div><br><br>
	<form action="index.php" method="post">
		<table>
			
			<tr>
				<td><b>Email :</b></td>
				<td><input type="text" name="email"/></td>
				
			</tr>
			
			<tr>
				
				<td><b>Password :</b></td>
				<td><input type="password" name="password"/></td>
				
			</tr>
			

			<tr>
				<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
				
			</tr>
			
		</table>

		
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

		if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
		   
		  
		  $sql = "SELECT * FROM users WHERE email = '".$_POST["email"]."' and password = '".$_POST["password"]."'";
		  $result = $conn->query($sql);
		  if ($result->num_rows > 0)
		  {
			  $_SESSION["email"]=$_POST["email"];
			  header("location: home.php");
		  }
			  
		  else
			  echo "wrong email or password";
   }
	?>
	
	
	
	
	
	
	
	
</body>