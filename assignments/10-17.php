<?php
	echo "<html><head><title>10-17.php</title></head><body>";
	echo "<h1>Thank you for your registration!</h1>";
	echo "<h2>Your personal information:</h2>";
	echo "Your student ID:" . $_POST["sid"] . "<br>";
	echo "Your email:" . $_POST["eml"] . "<br>";
	echo "Your level:" . $_POST["lv"] . "<br>";
	echo "<h2>Your IT preferences:</h2>";
	if (isset($_POST["ocpt"]) && $_POST["ocpt"] == "yes"){
	echo "You own a computer.<br>"; }
	echo "You use computer" . $_POST["time"] . " a day.<br>";
	echo "Your favorite web browser:<br>";
	if (isset($_POST["b1"]) && $_POST["b1"] == "yes"){
	echo "b1 ";}
	if (isset($_POST["b2"]) && $_POST["b2"] == "yes"){
	echo "b2 ";}
	if (isset($_POST["b3"]) && $_POST["b3"] == "yes"){
	echo "b3 ";}
	if (isset($_POST["b4"]) && $_POST["b4"] == "yes"){
	echo "b4 ";}
	echo "<br>";
	echo "Your Major Concentration:" . $_POST["major"] . "<br>";
	echo "<h2>Your Other Preferences</h2>";
	echo "Your Least Favorite Color:" . $_POST["1color"] . "<br>";
	echo "Your Satisfaction:" . $_POST["sat"] . "<br>";
	echo "</body></html>";
	?>
	