<?php
	$db = mysqli_connect("localhost","root","","hotelieur_lucban");
	if(isset($_GET['del'])){
		$Checkout_code = $_GET['del'];
		$sql = "DELETE FROM `checkouts` WHERE Checkout_code='$Checkout_code'";
		$query = mysqli_query($db, $sql);
	}

		header('Location: checkout_list.php');
?>