<?php
//include 'includes/common.php';
session_start();
?>
<div class="navbar navbar-inverse navbar-fixed-top">     
    <div class="container">         
        <div class="navbar-header">             
            <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">                 
                <span class="icon-bar"></span>                 
                <span class="icon-bar"></span>                 
                <span class="icon-bar"></span>                                     
            </button>             
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>         
        </div>         
        <div class="collapse navbar-collapse" id="myNavbar">             
            <ul class="nav navbar-nav navbar-right">                 
                <?php                 
                                if (isset($_SESSION['email'])) 
                                {                     
                                                        
                                    echo '
                                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </a></li>                     
                                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>                         
                                    <li><a href = "includes/logout_script.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li> 
                                    ';
                
                                } 
                                else 
                                {                      
                                    echo '                        
                                    <li><a href = "login.php"><span class = "glyphicon glyphicon-login"></span> Login</a></li> 
                                    ';                  
                                }                     
                ?>             
            </ul>         
        </div>      
    </div> 
</div>                          