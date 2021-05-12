<?php
include 'includes/common.php';
session_start();

if(isset($_SESSION['email'])){
    header('location: Index.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/Index.css">
</head>
<style>
    .margin-top{
        margin-top: 5%;
    }
</style>
<body>
<?php
  include 'includes/header.php';
  ?>
    <div class="container margin-top">
        <h1 >Sign up</h1>
        <?php
                    if(isset($_POST['submit'])){
                      $name 		    = $_POST['name'];
                      $email 		    = $_POST['email'];
                      $password 		= $_POST['password'];
                      $contact    	= $_POST['contact'];
                      $city 		    = $_POST['city'];
                      $address    	= $_POST['address'];
                      
                      $sql = "INSERT INTO users (name, email, password, contact, city, address) VALUES(?,?,?,?,?,?)";
                      $stmtinsert = $db->prepare($sql);
                      $result = $stmtinsert->execute([$name, $email, $password, $contact, $city, $address]);
                      if($result){
                        echo ' 
                              <div class="alert alert-success" role="alert">
                                Registered Successfully 
                              </div> 
                      ';
                      }else{
                        echo '
                        <div class="alert alert-danger" role="alert">
                          Error while  inserting data.
                        </div> 
                        '
                        ;
                      }
                    }else{
                    echo '
                        <div class="alert alert-danger" role="alert">
                        Login to make a purchase.
                        </div> 
                    ';
                    }
                  ?>
<form action="Signup.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="true">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="true">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="true">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact" required="true">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="city" id="city" placeholder="City" required="true">
        </div>
        <div class="form-group">
            <input type="text-area" class="form-control" name="address" id="address" placeholder="Address" required="true">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

    </div>
<br>
<footer class="footer" >
    <div class="container">
        Copyright © Lifestyle Store. All Rights Reserved” ​and ​“Contact Us: +91 90000 00000
    </div>
</footer>
</body>
</html>