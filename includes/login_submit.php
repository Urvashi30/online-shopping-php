<?php
                  session_start();
                  $conn     = mysqli_connect('localhost','root','');
                  mysqli_select_db($conn,'store');
                  $email    = $_POST['email'];
                  $password = $_POST['password'];
                  $_SESSION['email'] = $email;
                  $s        = "select * from users where email = '$email' && password ='$password'";
                  $result   = mysqli_query($conn, $s);
                  $num      = mysqli_num_rows($result);
                  if($num == 1){
                    header('location:../Products.php');
                  }
                  else{
                    // header('location: login.php');

                    header('location: ../Login.php');
                    header('Incorrecte Email id or Passowrd');
                    echo'Incorrecte Email id or Passowrd';

                  }
?>