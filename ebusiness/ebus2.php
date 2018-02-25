<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      
      <style type="text/css">
          
          #payment-details{
                    position:fixed;
                    top:30%;
                    left:20%;
                    z-index:1;
                    color:white;
                   
              
          }
          
          
      </style>
        
    </head>
    <body>
        
        <div class="background-image">
               <img src="main background.jpg">
        </div> 
        
        <div class="navbar">
               
                  <a href="#">Home</a>
                  
                  <div class="dropdown">
                    <button class="dropbtn">Curriculum Vitae
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href ="../cv/cv_page1.html">Personal Details</a>
                      <a href ="../cv/cv_page2.html">Education</a>
                      <a href ="../cv/cv_page3.html">Work-Experience</a>
                    </div>
                  </div> 
                  
                  <div class="dropdown">
                    <button class="dropbtn">Interests
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href ="../interests/sports.html">Sports</a>
                      <a href ="../interests/travel.html">Travel</a>
                      <a href ="../interests/cloud.html">Cloud</a>
                    </div>
                  </div> 
                  
                  
                  <div class="dropdown">
                    <button class="dropbtn">Cloud Services
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href ="#">Homepage</a>
                      <a href ="#">About</a>
                    </div>
                  </div>
                  
                  <div class="dropdown">
                   <div class ="active">
                    <button class="dropbtn">Ebusiness
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href ="../ebusiness/ebus1.php">Shop</a>
                      <a class="active" href ="ebusiness/ebus2.php">Payment</a>
                    </div>
                  </div>
                </div>
                
              </div>
              
              <div id="payment-details">
                <h4>Please enter your payment details</h4>
                
                
                    <form action="ebus3.php" method="POST">
        
                            <label for="user_pin">PIN</label>
                            
                            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
        
                        <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                      
                    </form>
                    
                    <br/>
                    <button onClick="validateDetails()">Validate</button>
                    
                </div>   
                    
                    <?php
                    // Set session variables
                    $_SESSION["total"] = $_POST["total"];
                    ?>
                
    </body>
</html>