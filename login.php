
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}

		input[type="text"], input[type="password"] {
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: none;
			box-shadow: 1px 1px 5px grey;
		}

		input[type="submit"] {
			padding: 10px;
			border-radius: 5px;
			border: none;
			box-shadow: 1px 1px 5px grey;
			cursor: pointer;
			background-color: #0095FF;
			color: white;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<form action="login.php" method="post">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" required>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" required>
		<input type="submit" value="Login">
	</form>
</body>
</html>
