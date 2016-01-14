<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reservation</title>
	<link rel="icon" type="image/jpg" href="images/img3.jpg">
    <link rel="stylesheet" href="Mars_Reservation.css">
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
	<fieldset>
		<legend class="visuallyhidden">Trip type</legend>
		<h2 class="legend" aria-hidden="true">Trip type</h2>
		<div class="form-content">
			<div class="form-row">
				<div class="form-group group-type-radio toggle-buttons">
					<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="TripTypes" data-valmsg-replace="true"></span>
					<input aria-required="true" checked="checked" class="type-radio " data-val="true" data-val-required="The TripTypes field is required." id="TripTypes_rt" name="TripTypes" type="radio" value="rt">
					<label class="radio" for="TripTypes_rt">Round trip</label>
					<span aria-hidden="true" class="field-validation-valid" data-valmsg-for="TripTypes" data-valmsg-replace="true"></span>
					<input aria-required="true" class="type-radio type-radio " id="TripTypes_ow" name="TripTypes" type="radio" value="ow">
					<label class="radio" for="TripTypes_ow">One way</label>
				</div>
			</div>
		</div>
	</fieldset>

	
</div></div>
</body>
</html>