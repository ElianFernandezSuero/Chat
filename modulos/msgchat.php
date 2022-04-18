<?php
$name=$_SESSION[$tt];
$message = isset($_GET["message"]) ? $_GET["message"] : "";
file_put_contents("text.txt", $message);
$tt = "SELECT * FROM `user01` ORDER BY `user01`.`user` ASC";
$query = mysqli_query($conn,$tt);
	if($query)
	{
		header('Location: home.php');
	}
?>