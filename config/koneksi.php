<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "weblf";

	try{
		$koneksi = new PDO(	"mysql:host=$host;dbname=$db", "$user", "$pass");
		}
		
	catch(PDOException $test)
		{
			echo $test->getMessage();
		}
		
		
?>