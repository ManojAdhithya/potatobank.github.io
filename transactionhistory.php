<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/homepage.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">
  <title>Potato Bank</title>
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/table.css">

  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Roboto:wght@300&display=swap');
  </style>
</head>

<body>
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
          <li><a href="customerdetails.php" class="nav-link px-2 text-white">Transfer Money</a></li>
          <li><a href="transactionhistory.php" class="nav-link px-2 text-secondary">Transaction History</a></li>
          <li><a href="#contact" class="nav-link px-2 text-white">Contact</a></li>
        </ul>

        <a href="customerdetails.php"><button type="button" class="btn btn-outline-light">Transfer Money</button></a>


      </div>
    </div>
  </header>
  <!-- End Navbar -->

  <!-- Table -->
  <div class="container">
    <h2 style="color: #ffffff; text-align: center; class=" text-center pt-4">Transaction History</h2>

    <br>


    <div class="table-responsive-sm">
      <table class="table table-hover table-striped">
        <thead style="color : white;" class="table-dark">
          <tr>
            <th class="text-center">Sender</th>
            <th class="text-center">Receiver</th>
            <th class="text-center">Amount</th>
            <th class="text-center">Date & Time</th>
          </tr>
        </thead>
        <tbody>
          <?php

          include 'config.php';

          $sql = "select * from trans_his";

          $query = mysqli_query($conn, $sql);

          while ($rows = mysqli_fetch_assoc($query)) {
          ?>
            <tr style="color : black;">
              <td class="py-2"><?php echo $rows['sender']; ?></td>
              <td class="py-2"><?php echo $rows['receiver']; ?></td>
              <td class="py-2"><?php echo $rows['amount']; ?> </td>
              <td class="py-2"><?php echo $rows['date']; ?> </td>

            <?php
          }

            ?>
        </tbody>
      </table>

    </div>
  </div>
  <!-- End Table -->

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
</body>

</html>

<!-- End Footer -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>