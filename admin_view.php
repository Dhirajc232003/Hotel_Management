<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<style>
	body {
	  margin: 0;
	  background-image: url(admin.jpg);
	  background-size: contain;
	}
	table {
		font-size: 22px;
	}
	td {
		text-align: center;
	}
	#td1
	{
		background-color: rgba(0, 0, 0, 0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
	}
	.basic_box {
		border: 1px solid #ccc;
		background-color: black;
		opacity: .8;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	th {
		font-weight: bold;
		padding-left: 15px;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: rgba(0, 2, 5, 0.9);
		opacity: .8;
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}

	li a.active {
	  	background-color: #e6b800;
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
	}
	#co{
		color: white;
	}
</style>
<body>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; display: inline;">ELITE</p> HOTEL</td>
		</tr>
	</table>
	<ul>
		<li><a href="admin_view.php" class="active">Rooms Info</a></li>
		<li><a href="add_room_admin.php">Add Room</a></li>
		<li><a href="remove_room_admin.php">Remove Rooms</a></li>
		<li><a href="admin_room_status.php">Booking Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from rooms_count";
			$result=mysqli_query($conn,$sql); ?>
		  	<table class="basic_box">
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Rooms Info</p></th>
				</tr>
				<tr>
					<th id="co">Room Type</th>
					<th id="co">Available Rooms</th>
					<th id="co">Occupied Rooms</th>
					<th id="co">Price</th>
				</tr>
			<?php 
			while ($row=mysqli_fetch_row($result))
    		{	?>	
				<tr>
					<td id="co"><?php echo $row[0]; ?></td>
					<td id="co"><?php echo $row[1]; ?></td>
					<td id="co"><?php echo $row[2]; ?></td>
					<td id="co"><?php echo $row[3]; 
			} ?></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>			
	</div>
</body>
</html>