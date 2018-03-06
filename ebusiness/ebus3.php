<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <!-- Please refer to my homepage/homepage.html file for the majority of this project's comments. However, any unique features to my project will be commented
             throughout. This is to minimise repetition. -->
             
        <title>Cloud Services | Products</title>
        
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      
       <link rel="icon" href="favicon.ico" type="image/x-icon">
       
       <!-- Using embedded CSS to style html page -->
      
        <style type="text/css">
            
            #receipt{
                      position:fixed;
                      top:35%;
                      left:33%;
                      z-index:1;
                      color:white;
                      background-color:rgb(0,0,0);
                      background-color:rgba(0,0,0,0.7);
                      padding:1%;
                      padding-left:3%;
                      padding-right:3%;
                      font-size:16pt;
                      
                     
                
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
               
                  <a href="../homepage/homepage.html" style="border-radius:4px;">Home</a>
                  
                  <div class="dropdown">
                    <button class="dropbtn" onclick="location.href='../cv/cv_page1.html'" style="border-radius:4px;">Curriculum Vitae</button>
                    <div class="dropdown-content">
                      <a href ="../cv/cv_page1.html">Personal Details</a>
                      <a href ="../cv/cv_page2.html">Education</a>
                      <a href ="../cv/cv_page3.html">Work-Experience</a>
                    </div>
                  </div> 
                  
                  <div class="dropdown">
                    <button class="dropbtn" onclick="location.href='../interests/sports.html'" style="border-radius:4px;">Interests</button>
                    <div class="dropdown-content" style="min-width:12.4%;">
                      <a href ="../interests/sports.html">Sports</a>
                      <a href ="../interests/travel.html">Travel</a>
                      <a href ="../interests/cloud.html">Cloud</a>
                    </div>
                  </div> 
                  
                  
                  <div class="dropdown">
                      <div class ="active">
                    <button class="dropbtn" onclick="location.href='../cloud_services/homepage_2.html'" style="border-radius:4px;">Cloud Services</button>
                    <div class="dropdown-content" style="min-width:16.25%;">
                      <a href ="../cloud_services/homepage_2.html">Homepage</a>
                      <a href ="../cloud_services/about.html">About</a>
                      <a href ="#" style="background-color:rgba(12, 73, 173, 1);">Products</a>
                    </div>
                   </div>
                  </div>
                
              </div>

        <div id="receipt">
          
          <h4 style="text-align:center;font-size:20pt;border-bottom:1px white solid;padding-bottom:1%">Purchase Receipt:</h4>
          
          <!-- Set session variables -->
          
          <?php
          $_SESSION["user_name"] = $_POST["user_name"];
          $_SESSION["user_email"] = $_POST["user_email"];
          ?>
          
          
          <?php
          echo "Name: " . $_SESSION["user_name"];
          ?>
          
          <br/><br/>
          
          <?php
          echo "Email: " . $_SESSION["user_email"];
          ?>
          
          <br/><br/>
          
          <?php
          echo "Total Price: " . "$" . $_SESSION["total"];
          ?>
          
          <br/><br/>
        
        </div>
        
        </div>
    </body>
</html>