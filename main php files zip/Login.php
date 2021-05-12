<?php
//include 'includes/login_submit.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Lifestyle Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/Index.css">
</head>
<body>
<?php
  include 'includes/header.php';
  ?>
    
    <div class="container margin-top">
        <div class="panel panel-primary">
            <div class="panel-heading">LOGIN</div>
            <div class="panel-body">
                <p class="text-danger">Login to make a purchase.</p>
                <form action="includes/login_submit.php" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </form>
            </div>
            <div class="panel-footer">Don't have an account? <a href="signup.php">Register</a></div>
        </div>
    </div>

    <footer class="footer" >
        <div class="container">
            Copyright © Lifestyle Store. All Rights Reserved ​and ​“Contact Us: +91 90000 00000
        </div>
    </footer>
</body>
</html>