<!DOCTYPE html>
<html>

<head>
	<style>
		table {
			text-align: center;
			border: 4px solid black;
			border-collapse: collapse;
			width: 100%;
			height: 100px;
		}

		th {
			border-collapse: collapse;
			border: 4px solid black;
			font-family: 'Roboto', sans-serif;
			font-weight: 35px;
			font-size: 30px;
			height: 45px;
			width: 60px;

		}

		th:hover {
			background-color: black;
		}

		td {
			border-collapse: collapse;
			border: 4px solid black;
			width: 60px;
			height: 45px;
			font-size: 20px;
			font-weight: 67px;
			font-family: oblique;
			color: #A00000;

		}

		td:hover {
			background-color: #F08080;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="css/homepage.css">
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
	<title>Customer Details</title>
</head>

<body>
	<header class="p-3 bg-dark text-white">
		<div class="container">
			<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
				<a href="index.html" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
					<img src="images/logo.png" alt="logo" width="200" height="50">
				</a>

				<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
					<li><a href="index.html" class="nav-link px-2 text-white">Home</a></li>
					<li><a href="customerdetails.php" class="nav-link px-2 text-secondary">Customer Details</a></li>
					<li><a href="customerdetails.php" class="nav-link px-2 text-white">Transfer Money</a></li>
					<li><a href="transactionhistory.php" class="nav-link px-2 text-white">Transaction History</a></li>
					<li><a href="#contact" class="nav-link px-2 text-white">Contact</a></li>
				</ul>

				<a href="customerdetails.php"><button type="button" class="btn btn-outline-light">Transfer Money</button></a>


			</div>
		</div>
	</header>
	<div class="headd">
		<h1>WELCOME TO CUSTOMER DETAILS PAGE</h1>
	</div>
	<div class="Mar">
		<marquee direction="right">Customer Privacy Is Our Main Aim!!!</marquee>
	</div>

	<?php
	include 'config.php';
	$sql = "SELECT * FROM cust_det";
	$result = mysqli_query($conn, $sql);
	?>

	<div class="container">
		<h2 style="text-align: center;">Transfer Money</h2>
		<br>
		<div class="row">
			<div class="col">
				<div class="table-responsive-sm">
					<table class="table table-dark table-striped">

						<tr>
							<th scope="col" class="text-center py-2">ID</th>
							<th scope="col" class="text-center py-2">Name</th>
							<th scope="col" class="text-center py-2">E-Mail</th>
							<th scope="col" class="text-center py-2">Phone NO</th>
							<th scope="col" class="text-center py-2">Balance</th>
							<th scope="col" class="text-center py-2">Operation</th>
						</tr>
						</thead>
						<tbody>
							<?php
							while ($rows = mysqli_fetch_assoc($result)) {
							?>
								<tr style="color : black;">
									<td class="py-2"><?php echo $rows['sno'] ?></td>
									<td class="py-2"><?php echo $rows['name'] ?></td>
									<td class="py-2"><?php echo $rows['Email'] ?></td>
									<td class="py-2"><?php echo $rows['Phone No'] ?></td>
									<td class="py-2"><?php echo $rows['Balance'] ?></td>
									<td><a href="userdetails.php?id= <?php echo $rows['sno']; ?>"> <button type="button" class="btn btn-outline-light">View And Transact</button></a></td>
								</tr>
							<?php
							}
							?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div id="contact">
			<div class="follow">
				<h3 style="color: white; font-family: 'Baloo Bhai 2', cursive; font-size: 25px;">Follow Us</h3>
				<div class="social">
					<a href="https://www.facebook.com/manoj.adhithya.16/" class="facebook">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#twitter" class="twitter">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="https://www.linkedin.com/in/manoj-adhithya-001330213/" class="linkedin">
						<i class="fa fa-linkedin"></i>
					</a>
					<a href="https://www.instagram.com/be.like.adhi/" class="instagram">
						<i class="fa fa-instagram"></i>
					</a>
				</div>
			</div>
		</div>
		<p class="text-copy" style="color: #ffffff;">
			Copyright &copy; 2021 All rights reserved
		</p>
	</footer>
</body>

</html>