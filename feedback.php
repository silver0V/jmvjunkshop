<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
	<title>JMV Junkshop</title>
</head>
<body>
	<nav>
	<img src="images/jmvlogo.png">
		<label class="logo">JMV Junkshop</label>
		
		<ul>
			<li><a class="active" href="index.php">Home</a></li>
			<li><a href="#">Recycle Guide</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="feedback.php">Feedback</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	</nav>
	
	<br>
	<h2>Feedback Page</h2>
    <hr style="height:1px;background-color:black">
    <form action="send.php" method="POST">
        Name <br>
        <input type="text" size="50" name="name" value=""> <br>
        <br>
        Email Address <br>
        <input type="email" size="50" name="email" value=""> <br>
        <br>
        Message <br>
        <textarea id="freeform" name="message" rows="4" cols="50"></textarea><br>
        <br>
        <hr style="height:1px;background-color:black">
        <button type="submit" name="send">Send E-mail</button>
    </form>
</body>
</html>