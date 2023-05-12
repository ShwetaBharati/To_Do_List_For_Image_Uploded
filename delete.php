<?php
	require_once 'conn.php';
	
	if($_GET['imageid']){
		$imageid = $_GET['imageid'];
		
		$conn->query("DELETE FROM `imageupload` WHERE `id` = $imageid") or die(mysqli_errno());
		header("location: index.php");
	}	
?>