<?php
	$db = mysqli_connect("localhost","root","","hotelieur_lucban");

$Guest_name = $_POST['Guest_name'];
$Guest_address = $_POST['Guest_address'];
$Room_number = $_POST['Room_number'];
$Room_type = $_POST['Room_type'];
$Res_code = $_POST['Res_code'];

$sql = "INSERT INTO `checkins`(`Checkin_code`, `Guest_name`, `Guest_address`, `Room_number`, `Room_type`, `Checkin_time`, `Res_code`) VALUES (NULL,'$Guest_name','$Guest_address','$Room_number','$Room_type',NULL,'$Res_code')";
$query = mysqli_query($db, $sql);
		header('Location: checkin_list.php');
?>