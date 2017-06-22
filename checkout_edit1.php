<?php
          
          $db = mysqli_connect("localhost","root","","hotelieur_lucban");

		  if(isset($_GET['edit'])){
		  $Checkout_code = $_POST['Checkout_code'];
          $sql = "SELECT * FROM `checkouts` WHERE `Checkout_code`='$Checkout_code'";
          $query = mysqli_query($db, $sql);	
		  $checkouts = mysqli_fetch_assoc($query);
		  }
		  
		  if(isset($_POST['newRoom_no'])){
		  	$newRoom_no = $_POST['newRoom_no'];
			$Checkout_code = $_POST['Checkout_code'];
			$sql_room = "UPDATE `checkouts` SET `Room_no`='$newRoom_no' WHERE `Checkout_code`='$Checkout_code'";
			mysqli_query($db, $sql_room);
		  }	  
		  if(isset($_POST['newCheckin_time'])){
		  	$newCheckin_time = $_POST['newCheckin_time'];
			$Checkout_code = $_POST['Checkout_code'];
			$sql_citime = "UPDATE `checkouts` SET `Checkin_time`='$newCheckin_time' WHERE `Checkout_code`='$Checkout_code'";
			mysqli_query($db, $sql_citime);
		  }	  
		  if(isset($_POST['newCheckout_price'])){
		  	$newCheckout_price = $_POST['newCheckout_price'];
			$Checkout_code = $_POST['Checkout_code'];
			$sql_cocode = "UPDATE `checkouts` SET `Checkout_price`='$newCheckout_price' WHERE `Checkout_code`='$Checkout_code'";
			mysqli_query($db, $sql_cocode);
		  }
		  header('Location:checkout_list.php');
		  ?>