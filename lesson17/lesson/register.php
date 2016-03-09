<html>
	<head>
		<link href="css/main.css" rel='stylesheet'/>
	</head>
	
	<body>
		
		<h1> Please Register here</h1>
		
		<form method="post" action="register_db.php">
			
			<label>
				<span>Username:</span>
				<input type="text" name="username" >
			</label>
			
			<label>
				<span>Password: </span>
				<input type="password" name="password" >
			</label>
			
			<label>
				<span>Repeat Password:</span>
				<input type="password" name="password_2" >
			</label>
			
			<label>
				<span>Email: </span>
				<input type="email" name="email" >
			</label>
			
			<label>
				<span>First name:</span>
				<input type="text" name="first_name" >
			</label>
			
			<label>
				<span>Last name:</span>
				<input type="text" name="last_name" >
			</label>
			
			
			<label>
				<span>Gender: </span>
				<select  name="gender" >
					<option value="0" selected>Male</option>
					<option value="1" >Female</option>
					<option value="2" >Other</option>
				</select>
			</label>
			
			
			
			<input type="submit" value="register now!">
		</form>
		
	</body>
	
</html>