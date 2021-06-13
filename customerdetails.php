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
			background-color: #F08080;
		}
        </style>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="css/homepage.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
    <title>Customer Details</title>
</head>
<body>
<div class="headd">

<div class="navbar">
    <a class="navlogo" href="index.html" style="padding:0px; " target="_self">
        <img src="images/logo.svg" alt="logo" width="100" height="50">
      </a>
      <a class = "navicons" href="index.html">Home</a>
      <a class = "navicons" href="customerdetails.php">Customer Details</a>
      <a class = "navicons" href="customerdetails.php">Transfer Money</a>
    <a class = "navicons" href="transactionhistory.php">Transaction History</a>
    <a class = "navicons" href="#contact">Contact</a>
    
</div>
</div>
<div class="headd">
<h1 >WELCOME TO CUSTOMER DETAILS PAGE</h1>
</div>
<div class="Mar">
 <marquee direction="right" >Customer Privacy Is Our Main Aim!!!</marquee>
 </div>

 <?php
    include 'config.php';
    $sql = "SELECT * FROM cust_det";
    $result = mysqli_query($conn,$sql);
?>

<div class="container">
        <h2 style="text-align: center;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table>
                       
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Phone NO</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['sno'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['Email']?></td>
                        <td class="py-2"><?php echo $rows['Phone No']?></td>
                        <td class="py-2"><?php echo $rows['Balance']?></td>
                        <td><a href="userdetails.php?id= <?php echo $rows['sno'] ;?>"> <button >View and Transact</button></a></td> 
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


</body>
</html>