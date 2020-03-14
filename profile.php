<?php

	$con=mysqli_connect("localhost","root","","mycompany");
	if(!$con)
	{
		die("Connection Error: ".mysqli_connect_error()."<br/>");
	}

	$sql="SELECT * FROM users";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	 {
	 	?>
	 	<table>
	 		<tr>
	 			<th> ID</th>
	 			<th>Name</th>
	 			<th>Email</th>
	 			<th>Username</th>
	 			<th></th>
	 		</tr>
	 	<?php
	 	while($row=mysqli_fetch_array($result))
	 	{
	 		echo "<tr>";
	 		echo "<td>".$row['id']."</td>";
	 		echo "<td>".$row['name']."</td>";
	 		echo "<td>".$row['email']."</td>";
	 		echo "<td>".$row['username']."</td>";
	 		echo "<td>".$row['password']."</td>";
	 		echo "</tr>";

	 	
	 	}
	 	echo "</table>";
	 }
	 else
	 {
	 	echo "No data found.<br/>";
	 }
mysqli_close($con);	