<?php
	$db = mysqli_connect("localhost","root","","hotelieur_lucban");
	if(isset($_GET['del'])){
		$Checkin_code = $_GET['del'];
		$sql = "DELETE FROM `checkins` WHERE Checkin_code='$Checkin_code'";
		$query = mysqli_query($db, $sql);
	}

		header('Location: checkin_list.php');
?>