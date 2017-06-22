<?php
	$db = mysqli_connect("localhost","root","","hotelieur_lucban");

$Room_no = $_POST['Room_no'];
$Checkin_time = $_POST['Checkin_time'];
$Checkout_price = $_POST['Checkout_price'];

$sql = "INSERT INTO `checkouts`(`Checkout_code`, `Room_no`, `Checkin_time`, `Checkout_time`, `Checkout_price`) VALUES (NULL,'$Room_no','$Checkin_time',NULL,'$Checkout_price')";
$query = mysqli_query($db, $sql);
		header('Location: checkout_list.php');
?>