
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/Index.css">
</head>
<body>
<?php
  include 'includes/header.php';
  ?>

    <div class="container ">
      <form>
        <h1 > Old password </h1>
        <div class="form-group">
        <input type="password" name="OldPassword" id="oldpassword" class="form-control" placeholder="Old Password"  required="true">
        </div>
        <div class="form-group">
            <input type="password" name="NewPassword" id="newpassword" class="form-control" placeholder="New Password"  required="true">
        </div>
        <div class="form-group">
            <input type="password" name="Re-typeNewPassword" id="re-typeNewpassword" class="form-control" placeholder="Re-type New Password"  required="true">
        </div>
        <button type="submit" class="btn btn-primary">Change</button>
        </form>
    </div>


    <footer class="footer" >
        <div class="container">
            Copyright © Lifestyle Store. All Rights Reserved” ​and ​“Contact Us: +91 90000 00000
        </div>
    </footer>
</body>
</html>