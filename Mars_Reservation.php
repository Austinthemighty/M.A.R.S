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

    <h1>Reservation</h1>
    <p>Full Name: <input type="text" name="full-name"></p>
    <p>Email: <input type="email" name="Email"></p>
    <p id="mn">     Confirmation or Complications of your reservation will be sent to you within one week.</p>
    <br>
<a href="images/marsmap.jpg">Look at map</a>
    <p>Location:</p><p>Latitude: <input type="number" name="Location">  Longitude: <input type="number" name="Location"></p>
    <p>Reservation Date:</p><p> Start:<input type="date" name="Start date"> Return:<input type="date" name="End date"></p>
    <br>
    <br>
    
<!--Paying for reservation-->



<div class="ExpressCheckoutContent" style="overflow: hidden; display: block;">	<p class="InfoMessage Message">
		Complete the form below and then click the "Pay for Order" button to pay for your order using our secure server.
	</p>

	<p class="ErrorMessage Message" style="display: none">
		<strong>Something went wrong when processing your payment. Please review the error message and try again:</strong>
		
	</p>

	

	<form  method="post" onsubmit="return check_creditcard_payment_form()" id="braintree-cc-form">
		
		<div class="FormContainer HorizontalFormContainer">
			<dl>
				<dt><span class="Required">*</span> Credit Card Type:</dt>
				<dd>
					<select name="creditcard_cctype" id="creditcard_cctype" style="width:175px" onchange="updateCreditCardType()" class="small">
						<option value="">-- Please Choose --</option>
						<option id="CCType_AMEX" class=" requiresCVV2" value="AMEX">American Express</option>
                        <option id="CCType_DINERS" class="" value="DINERS">Diners Club</option>
                        <option id="CCType_DISCOVER" class=" requiresCVV2" value="DISCOVER">Discover</option>
                        <option id="CCType_JCB" class=" requiresCVV2" value="JCB">JCB</option>
                        <option id="CCType_MC" class=" requiresCVV2" value="MC">Mastercard</option>
                        <option id="CCType_VISA" class=" requiresCVV2" value="VISA">Visa</option>
					</select>
				</dd>

				<dt><span class="Required">*</span> Cardholder's Name:</dt>
				<dd><input type="text" class="Textbox" name="creditcard_name" id="creditcard_name" size="30"></dd>

				<dt><span class="Required">*</span> Credit Card Number:</dt>
				<dd>
					<input maxlength="16" type="text" class="Textbox" name="creditcard_ccno" id="creditcard_ccno" value="" size="30">
					
					<small class="LittleNotePassword">Numbers only, no spaces or dashes.</small>
				</dd>

				<dt class="CreditCardIssueNo" style="display: none;"><span class="Required">&nbsp;</span> Card Issue No:</dt>
				<dd class="CreditCardIssueNo" style="display: none;">
					<input class="Textbox" name="creditcard_issueno" id="creditcard_issueno" value="" size="4">
					
					<small class="LittleNotePassword">The issue number found on the front of your card under 'ISS' or 'ISSUE'Only required for cards that contain it.</small>
				</dd>

				<dt class="CreditCardIssueDate" style="display: none;"><span class="Required">&nbsp;</span> Card Issue Date:</dt>
				<dd class="CreditCardIssueDate" style="display: none;">
					<select name="creditcard_issuedatem" id="creditcard_issuedatem" class="small">
						<option value=""></option>
						<option value="01">Jan</option>
                        <option value="02">Feb</option>
                        <option value="03">Mar</option>
                        <option value="04">Apr</option>
                        <option value="05">May</option>
                        <option value="06">Jun</option>
                        <option value="07">Jul</option>
                        <option value="08">Aug</option>
                        <option value="09">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
					</select>
					<select name="creditcard_issuedatey" id="creditcard_issuedatey" class="small">
						<option value=""></option>
						<option value="15">2015</option>
                        <option value="14">2014</option>
                        <option value="13">2013</option>
                        <option value="12">2012</option>
                        <option value="11">2011</option>
					</select>
					
					<small class="LittleNotePassword">The issue date found on the front of your card.Only required for cards that contain it.</small>
				</dd>

				<dt><span class="Required">*</span> Expiration Date:</dt>
				<dd>
					<select name="creditcard_ccexpm" id="creditcard_ccexpm" class="small">
						<option value=""></option>
						<option value="01">Jan</option>
                        <option value="02">Feb</option>
                        <option value="03">Mar</option>
                        <option value="04">Apr</option>
                        <option value="05">May</option>
                        <option value="06">Jun</option>
                        <option value="07">Jul</option>
                        <option value="08">Aug</option>
                        <option value="09">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
					</select>
					<select name="creditcard_ccexpy" id="creditcard_ccexpy" class="small">
						<option value=""></option>
						<option value="15">2015</option>
                        <option value="16">2016</option>
                        <option value="17">2017</option>
                        <option value="18">2018</option>
                        <option value="19">2019</option>
                        <option value="20">2020</option>
                        <option value="21">2021</option>
                        <option value="22">2022</option>
                        <option value="23">2023</option>
                        <option value="24">2024</option>
                        <option value="25">2025</option>
                        <option value="26">2026</option>
                        <option value="27">2027</option>
                        <option value="28">2028</option>
                        <option value="29">2029</option>
                        <option value="30">2030</option>
                        <option value="31">2031</option>
                        <option value="32">2032</option>
                        <option value="33">2033</option>
                        <option value="34">2034</option>
                        <option value="35">2035</option>
					</select>
				</dd>

				<dt class="CVV2Input" style=""><span class="Required">*</span> CVV2:</dt>
				<dd class="CVV2Input" id="CardCodeInput" style="" type="number">
					<input type="text" class="Textbox" name="creditcard_cccvd" id="creditcard_cccvd" value="" size="4" maxlength="4">
				</dd>

			
			</dl>
			<p class="Submit">
				<input type="submit" value="Submit">
			</p>
		</div>
	<input type="hidden" name="device_data" id="device_data" value="{&quot;device_session_id&quot;:&quot;c1ce3d47506931682db2bbadf002f925&quot;,&quot;fraud_merchant_id&quot;:&quot;600000&quot;,&quot;correlation_id&quot;:&quot;31def76741873896796c4be3e3f4de9c&quot;}"></form>
	

<div id="braintree-container">
	
</div></div>
</body>
</html>