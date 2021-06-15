<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from cust_det where sno=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from cust_det where sno=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient Balance.
    else if($amount > $sql1['Balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Sorry! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newBalance = $sql1['Balance'] - $amount;
                $sql = "UPDATE cust_det set Balance=$newBalance where sno=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newBalance = $sql2['Balance'] + $amount;
                $sql = "UPDATE cust_det set Balance=$newBalance where sno=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO trans_his(`sender`, `receiver`, `amount`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>";
                    
                }

                $newBalance= 0;
                $amount =0;
        }
    
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Potato Bank</title>
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="css/homepage.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
  
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Roboto:wght@300&display=swap');
  </style>
  </head>
  <body class="bod">
    <!-- Navbar -->
    <header class="p-3 bg-dark text-white">
		<div class="container">
		  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
			<a href="index.html" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
				<img src="images/logo.png" alt="logo" width="200" height="50">
			</a>
	
			<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
			  <li><a href="index.html" class="nav-link px-2 text-white">Home</a></li>
			  <li><a href="customerdetails.php" class="nav-link px-2 text-white">Customer Details</a></li>
			  <li><a href="customerdetails.php" class="nav-link px-2 text-secondary">Transfer Money</a></li>
			  <li><a href="transactionhistory.php" class="nav-link px-2 text-white">Transaction History</a></li>
			  <li><a href="#contact" class="nav-link px-2 text-white">Contact</a></li>
			</ul>
	
			<a href="customerdetails.php"><button type="button" class="btn btn-outline-light">Transfer Money</button></a>
	
		
		  </div>
		</div>
	  </header>
<!-- End Navbar -->

  <!-- Table -->
  <div class="container">
        <h2 class="text-center pt-4" >Transaction</h2>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  cust_det where sno=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-hover">
                

                <tr style="color : white;" class="table-dark">
                            <th scope="col" class="text-center py-2">Sno</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Phone NO</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            </tr>
                        
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['sno'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['Email']?></td>
                        <td class="py-2"><?php echo $rows['Phone No']?></td>
                        <td class="py-2"><?php echo $rows['Balance']?></td>
                        </tr>
            </table>
        </div>
        <br><br><br>
        <label style="color : white;"><b>Transfer To:</b></label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM cust_det where sno!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['sno'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['Balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label style="color : white;"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div style="color: #ffffff;text-align: center; class="text-center" >
                <button class="btn btn-outline-light" name="submit" type="submit" id="myBtn" >Transfer</button>
            </div>
        </form>
    </div>
<!-- End Table  -->

    <!-- Footer -->
  
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
  <!-- End Footer -->
  </body>
</html>
