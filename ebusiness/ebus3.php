<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      
      <style type="text/css">
          
          #receipt{
                    position:fixed;
                    top:24%;
                    left:2%;
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
               
                  <a href="../homepage/homepage.html">Home</a>
                  
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
                    <button class="dropbtn">Interests</button>
                    <div class="dropdown-content" style="min-width:12.4%;">
                      <a href ="../interests/sports.html">Sports</a>
                      <a href ="../interests/travel.html">Travel</a>
                      <a href ="../interests/cloud.html">Cloud</a>
                    </div>
                  </div> 
                  
                  
                  <div class="dropdown">
                      <div class ="active">
                    <button class="dropbtn">Cloud Services
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content" style="min-width:16.25%;">
                      <a href ="#">Homepage</a>
                      <a href ="#">About</a>
                      <a href ="#">Products</a>
                    </div>
                   </div>
                  </div>
                  
                  <div class="dropdown">
                   
                    <button class="dropbtn">Ebusiness
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a class="active" href ="../ebusiness/ebus1.php">Shop</a>
                      <a href ="ebusiness/ebus2.php">Payment</a>
                    </div>
                </div>
                
              </div>
        
        <div id="receipt">
        
        <h4>RECEIPT</h4>
                
        
        
        <?php
        // Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
        
        </div>
    </body>
</html>