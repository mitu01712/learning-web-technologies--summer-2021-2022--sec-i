<html>
<head>
	<title>Signup</title>
</head>
<body>
		<form action="regCheck.php" method="post" enctype="">
			<fieldset>
				<legend>Sign Up</legend>
				<table>
					<tr>
						<td>username</td>
						<td><input type="text" name="username" value=""></td>
					</tr>
					<tr>
						<td>password</td>
						<td><input type="password" name="password" value=""></td>
					</tr>
					<tr>
						<td>email</td>
						<td><input type="email" name="email" value=""></td>
					</tr>
					<tr>
					<td>User type</td>
					<td>
                    <label for="101">  <input type="radio" name="gender" value="" id="101"> User</label>
                    <label for="102">  <input type="radio" name="gender" value="" id="102"> Admin</label></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" value="Submit">
						<a href="login.html"> Sign In </a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>