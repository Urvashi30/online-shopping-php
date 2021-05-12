<?php
include 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/Index.css">
</head>
<body>
<?php
  include 'includes/header.php';
  ?>
    <nav class="navbar navbar-inverse">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">LifestyleStore</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="Cart page.html"> <i class="glyphicon glyphicon-shopping-cart"></i> Cart</a></li>
              <li><a href="Settings.html"> <i class="glyphicon glyphicon-user"></i> Settings</a></li>
              <li><a href="Login.html"> <i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <table class="table ">
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                
                <tr class="bg-light">
                    <td scope="row"></td>
                    <td>Total</td>
                    <td>Rs 0</td>
                    <td></td>
                    <td><a href="success.php" class="btn btn-primary btn-lg">Confirm order</a></td>
                </tr>
                
                
            </tbody>
        </table>
     
    </div>
    <footer class="footer">
        <div class="container">
            Copyright © Lifestyle Store. All Rights Reserved” ​and ​“Contact Us: +91 90000 00000
        </div>
    </footer>
</body>
</html>