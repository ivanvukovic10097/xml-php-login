<html>
<head>
	<meta charset="UTF-8">
	<title>login</title>
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
		<a href="next.php">BACK</a>	
		<form method="POST" action="login.php">
			<input type="text" placeholder="username" size="15" name="username">
							<br>
			<input type="password" placeholder="password" size="15" name="password">
							<br><br>
			<input type="submit" value="login" name="login">
		</form>
</body>
</html>
<?php 
	if(isset($_POST['login'])){
		$xmlFile = simplexml_load_file("users.xml"); 			
		$xmlLocalCopy = new SimpleXMLElement($xmlFile->asXML()); 
		$username = $_POST["username"];
		$password = $_POST["password"];
		$_check=1;
			foreach ($xmlLocalCopy as $User) { 
				$user = $User->username;
				$pass = $User->password;
				if($username == $user && $password == $pass){
					$_check=0;
					session_start();
					$_SESSION['username']=$user;
					header('Location:greeting.php');
					die;
				}	
			}
			if($_check==1){
				echo "<script type='text/javascript'>alert('User and/or password do not exist');</script>";
				die;
			}
		
	}
?>