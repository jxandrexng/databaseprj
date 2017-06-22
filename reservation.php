<?php

$db = mysqli_connect("localhost","root","","hotelieur_lucban");

$Guest_lname = $_POST['Guest_lname'];
$Guest_fname = $_POST['Guest_fname'];
$Guest_minit = $_POST['Guest_minit'];
$Guest_name = $Guest_lname.", ".$Guest_fname." ".$Guest_minit.".";
$email_address = $_POST['email_address'];
$No_of_guests = $_POST['No_of_guests'];
$Room_type = $_POST['Room_type'];
$Arrival_month = $_POST['Arrival_month'];
$Arrival_day = $_POST['Arrival_day'];
$Arrival_year = $_POST['Arrival_year'];
$Arrival_date = $Arrival_month."/".$Arrival_day."/".$Arrival_year;
$Arrival_hour = $_POST['Arrival_hour'];
$Arrival_minute = $_POST['Arrival_minute'];
$Arrival_ampm = $_POST['Arrival_ampm'];
$Arrival_time = $Arrival_hour.":".$Arrival_minute.$Arrival_ampm;
$Depart_month = $_POST['Depart_month'];
$Depart_day = $_POST['Depart_day'];
$Depart_year = $_POST['Depart_year'];
$Depart_date = $Depart_month."/".$Depart_day."/".$Depart_year;
$Pickup_status = $_POST['Pickup_status'];
$Spec_requests = $_POST['Spec_requests'];

$sql = "INSERT INTO reservations(Res_code, Guest_name, email_address, No_of_guests, Room_type, Arrival_date, Arrival_time, Depart_date, Pickup_status, Spec_requests) VALUES (NULL, '$Guest_name', '$email_address', '$No_of_guests', '$Room_type', '$Arrival_date', '$Arrival_time', '$Depart_date', '$Pickup_status', '$Spec_requests')";
$query = mysqli_query($db, $sql);
		header('Location: index.html');
?>