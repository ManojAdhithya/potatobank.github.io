<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/homepage.css">
    <title>Transfer</title>
</head>
<body>
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
    if(isset($_POST['Transfer']))
			{
$from_user = $_POST['from_user'];
$to_user = $_POST['to_user'];
$amount = $_POST['amount'];

if($from_user!="" && $to_user!="" && $amount!="")
{
    $squery= "UPDATE cust_det SET Balance = Balance - '$amount' where Email ='$from_user'";
    $querysender=mysqli($con, $squery);
    $rquery="UPDATE cust_det SET Balance = Balance + '$amount' where Email ='$to_user'";
    $queryreceiver=mysqli($con, $rquery);
    $sql="INSERT INTO trans_his (from_user, to_user, amount) VALUES ('$from_user','$to_user','$amount')";

if (mysqli_query($con,$sql)) {
    echo '<script>alert("Transaction Successfull")</script>';
    
}
else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
}
            }
mysqli_close($con);
?>
</body>
</html>