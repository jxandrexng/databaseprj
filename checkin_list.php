<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>[Admin] Hotelieur Lucban | Check-In List</title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/hotelieur_lucban-style.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

  </head>
  <body>
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>

    <div class="tm-top-header">
      <div class="container">
        <div class="row">
          <div class="tm-top-header-inner">
            <div class="tm-logo-container">
              <img src="img/logo.png" alt="Logo" class="tm-site-logo">
              <h1 class="tm-site-name tm-handwriting-font">Hotelieur Lucban Grand</h1>
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
              <ul>
              	<li><a href="index.html">Home</a></li>
                <li><a href="reservation_list.php">Reservation List</a></li>
                <li><a href="checkout_list.php">Check-Out List</a></li>
                <li><a href="checkin_list.php" class="active">Check-In List</a></li>
              </ul>
            </nav>   
          </div>           
        </div>    
      </div>
    </div>
    <section class="tm-welcome-section">
      <div class="container tm-position-relative">
        <div class="tm-lights-container">
          <img src="img/light.png" alt="Light" class="light light-1">
          <img src="img/light.png" alt="Light" class="light light-2">
          <img src="img/light.png" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;The Check-In List&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Hotelieur Database</h2>
          <p class="gray-text tm-welcome-description">The Hotelieur Hotels is one of the premiere hotels in Quezon. Centered in Lucban, Hotelieur Lucban Grand Hotel is one of the finest five-star hotels in Quezon. With its rich and lush landscape, Lucban provides the perfect nature view for guests and vacation-goers, all complete with a fitting hotel viewing deck.</p>
</div>
        <img src="img/lounge.jpg" alt="Table Set" class="tm-table-set img-responsive">
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section tm-section-margin-bottom-0 row">
          <div class="col-lg-12 tm-section-header-container">
          <table border="2" cellpadding="2" cellspacing="5" align="center">
          <tr>
          <th>Check-In Code</th>
          <th>Guest Name</th>
          <th>Guest Address</th>
          <th>Room Number</th>
          <th>Room Type</th>
          <th>Check-In Time</th>
          <th>Reservation Code</th>
          <th>Action</th>
          </tr>
          <tr>
          <form action="checkin_add.php" method="POST">
          <th></th>
          <th><input type="text" name="Guest_name"></input></th>
          <th><input type="text" name="Guest_address"></input></th>
          <th><input type="number" name="Room_number"></input></th>
          <th><select name="Room_type">
          		<option value="Executive">Executive Room</option>
               <option value="Deluxe">Deluxe Room</option>
               <option value="Superior">Superior Room</option>
               <option value="Specialty">Specialty Suite </option>
               <option value="Presidential">Presidential Suite</option>
          </select>
          </input></th>
          <th></th>
          <th><input type="number" name="Res_code"></input></th>
          <th><input type="submit" value="ADD"></input></th>
          </form></tr>
          
          <?php
          
          $db = mysqli_connect("localhost","root","","hotelieur_lucban");
          $sql = "SELECT * FROM checkins";
          $query = mysqli_query($db, $sql);
          
          while($checkins=mysqli_fetch_assoc($query)){
          echo "<tr>";
          echo "<td align='center'>".$checkins['Checkin_code']."</td>";
          echo "<td align='center'>".$checkins['Guest_name']."</td>";
          echo "<td align='center'>".$checkins['Guest_address']."</td>";
          echo "<td align='center'>".$checkins['Room_number']."</td>";
          echo "<td align='center'>".$checkins['Room_type']."</td>";
          echo "<td align='center'>".$checkins['Checkin_time']."</td>";
          echo "<td align='center'>".$checkins['Res_code']."</td>";
		  echo "<td align='center'>"."<a href='checkin_delete.php?del=$checkins[Checkin_code]'>"."DELETE"."</a>"." | "."<a href='checkin_edit.php?edit=$checkins[Checkin_code]'>"."EDIT"."</a>";
          echo "</tr>";
          }
          ?>        
</table>
</div>
          <div class="col-lg-12 tm-popular-items-container"></div>
            <div class="tm-popular-item"> </div>
            <div class="tm-popular-item"> </div>
            <div class="tm-popular-item"> </div>
            <div class="tm-popular-item"> </div>
            <div class="tm-popular-item"> </div>
</div>       
        </section>
        <section class="tm-section">
          <div class="row">
            <div class="col-lg-12 tm-section-header-container"> </div>  
          </div>          
          <div class="row">
            <div class="tm-daily-menu-container margin-top-60">
              <div class="col-lg-4 col-md-4"> </div>
</div>
          </div>          
        </section>
      </div>
    </div> 
    <footer>
      <div class="tm-black-bg">
        <div class="container">
          <div class="row margin-bottom-60">
            <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
              <h3 class="tm-footer-div-title">Main Menu</h3>
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About the Hotel</a></li>
                <li><a href="luxuryrooms.html">Luxury Rooms</a></li>
                <li><a href="reservation.html">Book A Room</a></li>
                <li><a href="reservation_list.php">Reservation List</a></li>
                <li><a href="checkin_list.php">Check-In List</a></li>
                <li><a href="checkout_list.php">Check-Out List</a></li>
              </ul>
            </nav>
            <div class="col-lg-5 col-md-5 tm-footer-div">
              <h3 class="tm-footer-div-title">About Us</h3>
              <p class="margin-top-15">The Hotelieur Hotels in its name is one of the premiere hotels in Quezon. Centered in Lucban, Hotelieur Lucban Grand Hotel is one of the finest five-star hotels in Quezon. With its rich and lush landscape, Lucban provides the perfect nature view for guests and vacation-goers, all complete with a fitting hotel viewing deck.</p>
            </div>
            <div class="col-lg-4 col-md-4 tm-footer-div">
              <h3 class="tm-footer-div-title">Get Social</h3>
              <p>Please visit our pages and accounts on social networks for more information.</p>
              <div class="tm-social-icons-container">
                <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a>
              </div>
            </div>
          </div>          
        </div>  
      </div>      
      <div>
        <div class="container">
          <div class="row tm-copyright">
            <p class="col-lg-12 small copyright-text text-center text-capitalize"><strong>Copyright © 2016 Hotelieur Lucban Grand | Jayson Aguila | Jerome Ng</strong></p>
          </div>  
       </div>
     </div>
   </footer>
   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
   <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

 </body>
 </html>