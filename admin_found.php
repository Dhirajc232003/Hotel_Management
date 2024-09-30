<!DOCTYPE html>
<html>

<head>
	<title>Admin Found</title>
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
		border: 4px solid #000000;
		padding-top: 30px;
		padding-bottom: 30px;
		border-radius: 20px;
	}

	body {
		background-image: url(admin.jpg);
		background-position: right top;
		background-attachment: fixed;
		background-size: contain;
	}
	#ed{
		background-color: rgb(255, 255, 255);
		opacity: .8;
	}
</style>

<body>
	<div id="ed">
		<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from temp";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_row($result);
			$sql = "DELETE from temp";
			mysqli_query($conn, $sql);
			echo "Your password is: ".$row[0];
		?>
		<br><br>
		<a href="admin_login.php">Redirect to Admin Login</a>
	</div>
</body>

</html>