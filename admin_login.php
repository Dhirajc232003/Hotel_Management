<!DOCTYPE html>
<html>

<head>
	<title>Admin Login</title>
</head>
<style>
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		font-size: 30px;
		padding-top: 25px;
		padding-bottom: 50px;
		box-shadow: 0 10px 20px rgba(203, 206, 10, 0.264);
		border-radius: 15px;
		color: #ffffff;
		border: 10px solid #ffffff;
		border-radius: 15px;
	}

	body {
		background: url(adminlogin.webp);
		background-position: right top;
		background-attachment: fixed;
		background-size: contain;
		font-family: sans-serif;
	}

	button,
	.button {
		background-color: #ffffff;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
	}

	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
	}

	table {
		width: 100%;
	}

	td {
		text-align: center;
	}

	button:link,
	button:visited,
	.button:link,
	.button:visited {
		text-decoration: none;
		color: white;
		text-decoration: none;
		font-size: 25px;
	}

	button:hover,
	button:active,
	.button:hover,
	.button:active {
		background-color: rgb(0, 0, 0);
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
		color: #4AB8F9;
		text-decoration: none;
		font-size: 25px;
	}

	input:hover,
	input:active {
		background-color: #8c8c8c;
		box-shadow: 2px 2px #a6a6a6;
	}

	#adbox {
		background-color: #000000;
		opacity: .8;
	}
</style>

<body>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br>
	<div id=adbox>
		<form action="admin_db.php" method="post">
			<table>
				<tr>
					<td colspan="2">
						<p style="font-size: 35px; color: #ffffff;"><b>Admin Login</b></p>
					</td>
				</tr>
				<tr>
					<td style="padding-left: 20px;">User ID:</td>
					<td><input class="input" type="text" name="adminid" placeholder="Enter user ID" value="" required>
					</td>
				</tr>
				<tr>
					<td style="padding-left: 20px;">Password:</td>
					<td><input class="input" type="password" name="password" placeholder="Enter password" value=""
							required></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td colspan="2"><input class="button" style="font-size: 25px; " type="submit" value="Login"></td>
				</tr>
			</table>
		</form>
		<table>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td style="color: #ffffff;"><b>New Admin?</b></td>
				<td style="color: #ffffff;"><b>Unable to Login</b></td>
			</tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px;"
							href="admin_signup.php">User SignUp</a></button></td>
				<td><button type="button"><a style="text-decoration: none; font-size: 25px;"
							href="admin_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table>
	</div>
</body>

</html>