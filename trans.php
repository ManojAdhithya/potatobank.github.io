<!DOCTYPE html>
<html>
<head>
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
    <a class = "navicons" href="#history">Transaction History</a>
    <a class = "navicons" href="trans.php">Transfer Money</a>
    <a class = "navicons" href="customerdetails.php">Customer Details</a>
    <a class = "navicons" href="index.html">Home</a>
    
</div>
</div>
<div class="heading">
<h1>Transaction</h1>
</div>
<div class="Mar">
 <marquee direction="right" >Customer Privacy Is Our Main Aim!!!</marquee>
 </div>
 <form action= "action_page.php" method="POST">
  <label for="from_user">Sender name:</label>
  <input type="text" id="from_user" name="from_user"><br><br>
  <label for="to_user">Receiver name:</label>
  <input type="text" id="to_user" name="to_user"><br><br>
  <label for="amount">Enter Amount:</label>
  <input type="number" id="amount" name="amount"><br><br>
  <input type="submit" value="TRANSFER" onclick="alert('Transaction Successful !')">
</form>
</body>
</html>