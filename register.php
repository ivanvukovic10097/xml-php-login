<html>
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<style>
		body{
			padding:0px;
			margin:0px;
			background-image:url('bg.jpg');
			background-repeat: no-repeat;
			background-size:cover;
			background-position:center center;
			background-attachment: fixed;
		}

		body>a{
			margin-top:5px;
			margin-left:5px;
			padding: 20px;
			border-radius: 4px;
			text-align: center;
			display: inline-block;
			color:#383736;
			text-decoration: none;
			padding-left: 20px;
			padding-right: 20px;
			font-family:Helvetica, sans-serif;
			position: relative;
			font-weight: 700;
			font-size: 15px;
			letter-spacing: 2px;
			background-color:#b2b2b2;
			border: 2px #383736 solid;
			text-transform: uppercase;
			outline: 0;
			overflow:hidden;
			z-index: 1;
			cursor: pointer;
			transition:         0.08s ease-in;
			-o-transition:      0.08s ease-in;
			-ms-transition:     0.08s ease-in;
			-moz-transition:    0.08s ease-in;
			-webkit-transition: 0.08s ease-in;
		}

		body>a:hover{
			color:white;
			background-color:rgba(255, 0, 0, 0);
			}

		form{
			margin:140px auto;
			width:100%;
			text-align: center;
		}

		::placeholder {
			color: #383736;
		}

		input{
			margin-bottom: 2px;
			padding: 20px;
			border-radius: 4px;
			text-align: center;
			display: inline-block;
			color:#383736;
			text-decoration: none;
			padding-left: 20px;
			padding-right: 20px;
			font-family:Helvetica, sans-serif;
			position: relative;
			font-weight: 700;
			font-size: 15px;
			letter-spacing: 2px;
			background-color:#b2b2b2;
			border: 2px #383736 solid;
			text-transform: uppercase;
			outline: 0;
			overflow:hidden;
			z-index: 1;
			cursor: pointer;
			transition:         0.08s ease-in;
			-o-transition:      0.08s ease-in;
			-ms-transition:     0.08s ease-in;
			-moz-transition:    0.08s ease-in;
			-webkit-transition: 0.08s ease-in;
		}

		input:hover{
			color:white;
			background-color:rgba(255, 0, 0, 0);
		}
	</style>
</head>
<body>
	<a href="next.php">back</a>
	<form method="POST" action="">
		<input type="text" placeholder="username" id="userText" size="30" name="username" required>
						<br>
		<input type="email" placeholder="email"size="30" name="email" required>
						<br>
		<input type="password" placeholder="password" size="30" name="password" required>
						<br>
		<input type="password" placeholder="confirm password" size="30" name="c_password" required>
						<br><br>
		<input type="submit" value="Register" name="register">
	</form>
</body>
</html>
<?php 
	$blank=array();
	if(isset($_POST['register'])){
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$c_password = $_POST["c_password"];
		if(strlen($username) < 8 && strlen($password)< 8 && strlen($c_password)){
			$blank[] = 'Username and/or password must be longer';
		}
		if($password != $c_password){
			$blank[] = 'Password do not match';
		}
		if(count($blank) == 0){
			$xmlFile = simplexml_load_file("users.xml");
			$xmlLocalCopy = new SimpleXMLElement($xmlFile->asXML());
			$newAcct = $xmlLocalCopy->addChild("Accounts");	
			$newAcct->addChild("username", $username);
			$newAcct->addChild("email", $email);
			$newAcct->addChild("password", $password);
					
			$dom = new DOMDocument('1.0');
			$dom->preserveWhiteSpace = false;
			$dom->formatOutput = true;
			$dom->loadXML($xmlLocalCopy->asXML());
			$dom->save("users.xml");
				
			session_start();
			$_SESSION['username']=$name;
			header('Location:greeting.php');
			die;
		}
		else{
			foreach($blank as $i){
				echo "<script type='text/javascript'>alert('$i');</script>";
			}
		}
	}	
?>