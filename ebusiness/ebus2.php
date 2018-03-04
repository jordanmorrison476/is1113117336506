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
                 <img src="img-apeiron-background.jpeg" height=1000 width=2000>
        </div> 
        
        <div class="apeiron-logo">
        <img src="apeiron-logo-invert.png">
      </div>
        
        <div class="navbar">
               
                  <a href="../homepage/homepage.html">Home</a>
                  
                  <div class="dropdown">
                    <button class="dropbtn" onclick="location.href='../cv/cv_page1.html'">Curriculum Vitae</button>
                    <div class="dropdown-content">
                      <a href ="../cv/cv_page1.html">Personal Details</a>
                      <a href ="../cv/cv_page2.html">Education</a>
                      <a href ="../cv/cv_page3.html">Work-Experience</a>
                    </div>
                  </div> 
                  
                  <div class="dropdown">
                    <button class="dropbtn" onclick="location.href='../interests/sports.html'">Interests</button>
                    <div class="dropdown-content" style="min-width:12.4%;">
                      <a href ="../interests/sports.html">Sports</a>
                      <a href ="../interests/travel.html">Travel</a>
                      <a href ="../interests/cloud.html">Cloud</a>
                    </div>
                  </div> 
                  
                  
                  <div class="dropdown">
                    <div class ="active">
                    <button class="dropbtn" onclick="location.href='../cloud_services/homepage_2.html'">Cloud Services</button>
                    <div class="dropdown-content" style="min-width:16.25%;">
                      <a href ="../cloud_services/homepage_2.html">Homepage</a>
                      <a href ="../cloud_services/about.html">About</a>
                      <a href ="#" style="background-color:rgba(12, 73, 173, 1);">Products</a>
                    </div>
                   </div>
                  </div>
                
              </div>
              
              <div id="payment-details">
                <h4>Please enter your payment details</h4>
                
                
                    <form action="ebus3.php" method="POST">
                      
                      <label for="user_name">Name:</label> <br><br>
                      
                      <input type="text" id="user_name" name="user_name" placeholder="Joe Bloggs" maxlength="30"> <br><br><br>
                      
                      <label for="user_email">Email:</label> <br><br>
                      
                      <input type="text" id="user_email" name="user_email" placeholder="joebloggs@ucc.ie" maxlength="25"> <br><br><br>
        
                      <label for="user_pin">PIN:</label> <br><br>
                      
                      <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4"> <br><br>
  
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