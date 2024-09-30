<!DOCTYPE html>
<html>
<head>
	<title>Admin Room History</title>
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
	.basic_box {
		border: 1px solid rgb(8, 0, 0);
		background-color: black;
		opacity: .8;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	#td1
	{
		background-color: rgba(0, 0, 0, 0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
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
	  	background-color: rgba(0, 0, 0, 0.9);
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
<script>
    function submitForm(action)
    {
        document.getElementById('columnarForm').action = action;
        document.getElementById('columnarForm').submit();
    }
</script>
<body>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; display: inline;">DELUXE</p> HOTEL</td>
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
			$bid = $_POST["book_id"];
			$sql = "SELECT * FROM booked_hist WHERE book_id='$bid'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_row($result);
		?>
			<table class="basic_box">
				<tr>
					<th id="co" colspan="2">Booking History</th>
				</tr>
				<tr>
					<td id="co">Booking ID: </td>
					<td id="co"><?php echo $row[14]; ?></td>	
				</tr>
				<tr>
					<td id="co">Name: </td>
					<td id="co"><?php echo $row[1]; ?></td>	
				</tr>
				<tr>
					<td id="co">Room Type: </td>
					<td id="co"><?php echo $row[3]; ?></td>	
				</tr>
				<tr>
					<td id="co">Check In Date: </td>
					<td id="co"><?php echo $row[4]; ?></td>	
				</tr>
				<tr>
					<td id="co">Check Out Date: </td>
					<td id="co"><?php echo $row[5]; ?></td>	
				</tr>
				<tr>
					<td id="co">Days of Stay: </td>
					<td id="co"><?php echo $row[6]; ?></td>	
				</tr>
				<tr>
					<td id="co">Total Bill Amount: </td>
					<td id="co"><?php echo $row[13]; ?></td>	
				</tr>
				<tr>
					<td id="co">AC: </td>
					<td id="co"><?php if(strcmp($row[7], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td id="co">Breakfast: </td>
					<td id="co"><?php if(strcmp($row[8], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td id="co">Lunch: </td>
					<td id="co"><?php if(strcmp($row[9], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td id="co">Snacks: </td>
					<td id="co"><?php if(strcmp($row[10], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td id="co">Dinner: </td>
					<td id="co"><?php if(strcmp($row[11], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td id="co">Swimming: </td>
					<td id="co"><?php if(strcmp($row[12], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>	
				</tr>
				<tr>
					<td  colspan="2"><a href="booking_history.php">Back</a></td>
				</tr>
			</table>
		</div>
	</body>
</html>