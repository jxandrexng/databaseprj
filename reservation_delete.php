<?php
	$db = mysqli_connect("localhost","root","","hotelieur_lucban");
	if(isset($_GET['del'])){
		$Res_code = $_GET['del'];
		$sql = "DELETE FROM `reservations` WHERE Res_code='$Res_code'";
		$query = mysqli_query($db, $sql);
	}

		header('Location: reservation_list.php');
?>