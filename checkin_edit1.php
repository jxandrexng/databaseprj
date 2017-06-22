<?php
          
          $db = mysqli_connect("localhost","root","","hotelieur_lucban");

		  if(isset($_GET['edit'])){
		  $Checkin_code = $_POST['Checkin_code'];
          $sql = "SELECT * FROM `checkins` WHERE `Checkin_code`='$Checkin_code'";
          $query = mysqli_query($db, $sql);	
		  $checkins = mysqli_fetch_assoc($query);
		  }
		  if(isset($_POST['newGuest_name'])){
		  	$newGuest_name = $_POST['newGuest_name'];
			$Checkin_code = $_POST['Checkin_code'];
			$sql_name = "UPDATE `checkins` SET `Guest_name`='$newGuest_name' WHERE `Checkin_code`='$Checkin_code'";
			mysqli_query($db, $sql_name);
		  }
		  if(isset($_POST['newGuest_address'])){
		  	$newGuest_address = $_POST['newGuest_address'];
			$Checkin_code = $_POST['Checkin_code'];
			$sql_address = "UPDATE `checkins` SET `Guest_address`='$newGuest_address' WHERE `Checkin_code`='$Checkin_code'";
			mysqli_query($db, $sql_address);
		  }
		  if(isset($_POST['newRoom_number'])){
		  	$newRoom_number = $_POST['newRoom_number'];
			$Checkin_code = $_POST['Checkin_code'];
			$sql_rm = "UPDATE `checkins` SET `Room_number`='$newRoom_number' WHERE `Checkin_code`='$Checkin_code'";
			mysqli_query($db, $sql_rm);
		  }
		  if(isset($_POST['newRoom_type'])){
		  	$newRoom_type = $_POST['newRoom_type'];
			$Checkin_code = $_POST['Checkin_code'];
			$sql_rt = "UPDATE `checkins` SET `Room_type`='$newRoom_type' WHERE `Checkin_code`='$Checkin_code'";
			mysqli_query($db, $sql_rt);
		  }
		  if(isset($_POST['newRes_code'])){
		  	$newRes_code = $_POST['newRes_code'];
			$Checkin_code = $_POST['Checkin_code'];
			$sql_rc = "UPDATE `checkins` SET `Res_code`='$newRes_code' WHERE `Checkin_code`='$Checkin_code'";
			mysqli_query($db, $sql_rc);
		  }
		  header('Location:checkin_list.php');

?> 