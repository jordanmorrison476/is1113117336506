<!DOCTYPE html>
<html lang="en-US">
    <head>
      
        <!-- Please refer to my homepage/homepage.html file for the majority of this project's comments. However, any unique features to my project will be commented
             throughout. This is to minimise repetition. -->
             
        <title>Cloud Services | Products</title>
        
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      
        <link rel="icon" href="favicon.ico" type="image/x-icon">
      
      <!-- Using embedded CSS to style html page -->
      
      <style type="text/css">
      
          #marquee{
                     position:fixed;
                     left:0%;
                     top:24%;
                     width:100%;
                     padding:5px;
                     font-family:arial;
                     font-weight:bold;
                     background-color:rgb(50, 145, 144);
                     background-color:rgba(50, 145, 144, 0.8);
                     font-size:12pt;
                     text-shadow: 1px 1px black;
                     z-index:5;
                     color:white;
                     
                
            }
          
          #products{
                    position:fixed;
                    top:29%;
                    left:25%;
                    z-index:1;
                    color:white;
                    background-color:rgb(0,0,0);
                    background-color:rgba(0,0,0,0.6);
                    padding:1%;
                    width:45%;
                   font-size:12pt;
                   font-family:helvetica, verdana;
                   
                   
          }
          
          #header{
                  position:fixed;
                  left:20%;
            
          }
          
          
      </style>

    </head>
    
    <body>
        
      <div class="background-image">
          <img src="img-apeiron-background.jpeg" alt="aperion background" height=1000 width=2000>
      </div> 
      
      <div class="apeiron-logo">
        <img src="apeiron-logo-invert.png" alt="apeiron logo">
      </div>
      
       <!-- Adding a marquee used for call to actions/promos on my website -->
                
                <div id="marquee">
       <!-- Setting the scrolling speed of the marquee to 8 -->
                       <marquee scrollamount="8">Save up to 5% on all cloud service packages! Offer ends 20th of March. </marquee>
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
              
            <div id="products">
          
              <h3><font style="position:fixed;top:32%;left:41%;font-weight:bold;font-size:20pt;text-decoration:underline;font-family:helvetica,verdana;">Select a Product</font></h3><br><br>
          
            
            <form method="POST" action="ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
               <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
              </label>
              
              <br/>
             
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
              </label>
              
              <br/>
             
              
              <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
              <br>
              <br>
              
              <label for="subtotal">
                Sub Total:
                <input type="text" id="subtotal" value="0.00" readonly style="width:100px;position:fixed;left:41%;text-align:right;"/>
              </label>
              
              <br>
              <br>
              
              <label for="discount">
                Discount @ 5%: 
                <input type="text" id="discount" value="0.00" readonly style="width:100px;position:fixed;left:41%;text-align:right;"/>
              </label>
              
              <br>
              <br>
              
               <label for="vat">
                VAT @ 10%: 
                <input type="text" id="vat" value="0.00" readonly style="width:100px;position:fixed;left:41%;text-align:right;"/>
              </label>
              
              <br>
              <br>
              
              
              
              <label for="total">
                Total: 
                <input type="text" id="total" name="total" value="0.00" readonly style="width:100px;position:fixed;left:41%;text-align:right;"/>
              </label>
    
              <br>
              <br>
              <br>
              
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" id="btnProceed" disabled style="background-color:#6a6c70;border-size:1px;border-radius:12px;border-color:#6a6c70;font-size:13pt;color:white;padding:1%;"><font style="font-family:verdana,helvetica;text-shadow: -0.5px 0 black, 0 0.5px black, 0.5px 0 black, 0 -0.5px black;font-weight:bold;">Add to Shopping Cart</font></button>
            
            </form>
            
            <br/>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onClick="calcSub()" style="background-color:#1924ef;border-size:1px;border-radius:12px;border-color:#1924ef;width:225px;font-size:13pt;color:white;padding:1%;"><font style="font-family:verdana,helvetica;text-shadow: -0.5px 0 black, 0 0.5px black, 0.5px 0 black, 0 -0.5px black;font-weight:bold;">Calculate Cost</font></button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <a role="button" href="ebus1.php" style="background-color:#ef1a4f;border:0.7px solid #ef1a4f;border-radius:12px;border-color:#ef1a4f;font-size:13pt;color:white;padding:1%;text-decoration:none;"><font style="font-family:verdana, helvetica;font-weight:bold;text-shadow: -0.5px 0 black, 0 0.5px black, 0.5px 0 black, 0 -0.5px black;">Clear Choice</font></a>
            
           
        </div>
        
        
    
    </body>
</html>