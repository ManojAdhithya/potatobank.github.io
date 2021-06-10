<!DOCTYPE html>
<html>
<head>
    <style>
        table{
			text-align: center;
			border:4px solid black;
			border-collapse: collapse;
			width: 100%;
			height: 100px;
		}
		th{
			border-collapse: collapse;
			border: 4px solid black;
			font-family:'Roboto', sans-serif ;
			font-weight: 35px;
			font-size: 45px;
			height: 45px;
			width: 60px;

		}
		th:hover{
			background-color: black;
		}
		td{
			border-collapse: collapse;
			border: 4px solid black;
			width: 60px;
			height: 45px;
			font-size:20px;
			font-weight:67px;
			font-family: oblique;	 
			color:	#A00000 ;

		}
		td:hover{
			background-color:#F08080;
		}
        </style>
	<link rel="stylesheet" href="css/homepage.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
    <title>Customer Details</title>
</head>
<body>
<div class="header">

<div class="navbar">
    <a class="navlogo" href="index.html" style="padding:0px; " target="_self">
        <img src="images/logo.svg" alt="logo" width="100" height="50">
      </a>
    <a class = "navicons" href="#contact">Contact</a>
    <a class = "navicons" href="#transac">Transaction History</a>
    <a class = "navicons" href="trans.php">Transfer Money</a>
    <a class = "navicons" href="customerdetails.php">Customer Details</a>
    <a class = "navicons" href="index.html">Home</a>
    
</div>
</div>
<div class="heading">
<h1 >WELCOME TO TRANSACTION HISTORY</h1>
</div>
<div class="Mar">
 <marquee direction="right" >Customer Privacy Is Our Main Aim!!!</marquee>
 </div>

<?php
$host="localhost";
$user="root";
$password="";
$dbname="customer detail";
$con=mysqli_connect($host,$user,$password,$dbname);
if($con==false)
	{
		die("ERROR:Could not Connect.".mysqli_connect_error());
	}
	$sql="select * from trans_his";
	$query=mysqli_query($con,$sql);
	if(!$query)
	{
		die("ERROR:Could not Connect.".mysqli_connect_error());
	}
    echo  " <br> 
    <table>
	<tr>
<th>Sender</th>
<th>Receiver</th>
<th>Amount</th>
<th>Date</th>
</tr>";
while ($row=mysqli_fetch_array($query)) {
	
	echo "<tr>
	<td>".$row['from_user']."</td>
	<td>".$row['to_user']."</td>
	<td>".$row['amount']."</td>
	<td>".$row['date']."</td>
    </td>
	</tr>";
}
mysqli_close($con);
?>


</body>
</html>