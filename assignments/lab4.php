<?php
	echo "<html><head><title>lab4.php</title>
    <style>
    h2 {font-weight:normal; padding:0px; margin:0px;}
    #gender {font-weight:bold;}
    br {line-height:1px;}
    value {
        font-weight:bold;}
        }
    </style>
    
    
    </head><body>";
	echo "<h1>Thank you for taking the survey</h1>";
	echo "<h2>Below are your answers to the survey questions:</h2>";
	echo "<h1>1. Demographic Information:</h1>";
	echo "<h2>Your gender: <b>" . $_POST["gender"] . "</b></h2><br>"."<h2>Your age: <b>" . $_POST["age"] . "</b></h2><br>";
	echo "<h2>Your level: <b>" . $_POST["level"] . "</b></h2><br>";
	echo "<h2>Your School: <b>" . $_POST["school"] . "</b></h2><br>";

	echo "<h1>2. How do you evaluate your security knowledge:</h1>";
	echo "<h2>You chose: <b>" . $_POST["sat"] . "</b></h2><br>";
	echo "<h1>3. Have your computers been afected by virus before:</h1>";
    echo "<h2>You responded: <b>" . $_POST["yes"] . "</b></h2><br>";

    echo "<h1>4. What anti virus software do you usually use:</h1>";
    if (isset($_POST["Norton"]) && $_POST["Norton"] == "yes"){
	echo "<h2><b>Norton </b></h2><br>";}
	if (isset($_POST["McAfee"]) && $_POST["McAfee"] == "yes"){
	echo "<h2><b>McAfee </b></h2><br>";}
	if (isset($_POST["Kasperski"]) && $_POST["Kasperski"] == "yes"){
	echo "<h2><b>Kasperski </b></h2><br>";}
	if (isset($_POST["AVG"]) && $_POST["AVG"] == "yes"){
	echo "<h2><b>AVG </b></h2><br>";}
    if (isset($_POST["Malwarebytes"]) && $_POST["Malwarebytes"] == "yes"){
	echo "<h2><b>Malwarebytes </b></h2><br>";}
    if (isset($_POST["Avast"]) && $_POST["Avast"] == "yes"){
	echo "<h2><b>Avast </b></h2><br>";}
    if (isset($_POST["Bitdefender"]) && $_POST["Bitdefender"] == "yes"){
	echo "<h2><b>Bitdefender </b></h2><br>";}
    if (isset($_POST["Trendmicro"]) && $_POST["Trendmicro"] == "yes"){
	echo "<h2><b>Trend Micro </b></h2><br>";}
    if (isset($_POST["Webroot"]) && $_POST["Webroot"] == "yes"){
	echo "<h2><b>Webroot </b></h2><br>";}

    echo "<h1>5. You rated:</h1>";
    echo "<h2>I know how to create a strong password: <b>" . $_POST["q1"] . "</b></h2><br>";
    echo "<h2>I know how to remove viruses from my computer: <b>" . $_POST["q2"] . "</b></h2><br>";
    echo "<h2>I know how to remove spyware from my computer: <b>" . $_POST["q3"] . "</b></h2><br>";
    echo "<h2>I know how to secure my wireless network at home: <b>" . $_POST["q4"] . "</b></h2><br>";
    echo "<h2>I know how to protect my personal information when surfing on the internet: <b>" . $_POST["q5"] . "</b></h2><br>";
	
	
	
	
	echo "</body></html>";
	?>