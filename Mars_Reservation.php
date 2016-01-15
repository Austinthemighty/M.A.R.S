<!DOCTYPE html>
<html>
<head>
	<style>
		#tripType{
			margin-left: 50px;
		}
	</style>
    <meta charset="UTF-8">
    <title>Reservation</title>
	<link rel="icon" type="image/jpg" href="images/img3.jpg">
    <link rel="stylesheet" href="Mars_Reservation2.css">
    <link rel="stylesheet" href="dropDown.css">
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "Mars_reservation";
	?>
<div class="nav">
<ul id="menu">
    <li><a href="index.php">Home</a></li>
    <li>
        <a href="news.php">News</a>
    </li>
    
    <li><a href="Mars_Reservation.php">Reservation ￬</a>
        <ul class="hidden">
            <li><a href="#">Make Reservation</a></li>
            <li><a href="#">Edit Reservation</a></li>
        </ul>
    </li>
    <li><a href="contact.php">Contact</a></li>
    <li>
        <a href="About.php">About</a>

    </li>
</ul>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
	<div id="tripType"><input type="button" id="tripTypeR" size="20" value="Round Trip"></div>

	
</div></div>
</body>
</html>