<?php
	echo "<h2>"."Registered Candidates"."</h2>";
	echo "<br>";
$db = mysqli_connect("localhost", "root", "password", "test");
$result = mysqli_query($db, "SELECT * FROM reg");
while($data = mysqli_fetch_array($result))
{	
	echo "Name = ".$data['name']."<br>";
	echo "Password = ".$data['password']."<br>";

} 

?>