<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// then send the form to your email
	mail( 'info@drfreakout.com', 'Contact Form Dr. Freakout', print_r($_POST,true) );
}

// otherwise, let the spammer think that they got their message through

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Feedback</title>
		<meta charset="utf-8" />
                <meta name="robots" content="noindex">
                 <link rel="icon" type="image/png" href="./images/icon.png" />
                <meta http-equiv="refresh" content="5;url=http://www.drfreakout.com/iframe.html">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
               
		<link rel="stylesheet" href="assets/css/main.css" />
		
		
	</head>
	<body>

<br> <br> <br> <br> <br> <br> 
<center><p>Vielen Dank wir haben deine Nachricht erhalten!</p></center>



	</body>
</html>