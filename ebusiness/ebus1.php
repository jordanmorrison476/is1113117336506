<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      
      <style type="text/css">
          
          #products{
                    position:fixed;
                    top:28%;
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
                    <div class ="active">
                    <button class="dropbtn">Cloud Services
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
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
                      <a class="active" href = "../ebusiness/ebus1.php">Shop</a>
                      <a href = "../ebusiness/ebus2.php">Payment</a>
                    </div>
                 
                </div>
                
              </div>
              
             <div id="products">
        
            <h4>Select a Product</h4>
            
            <br/>
            
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
              <br>
              
              <label for="subtotal">
                Sub Total:
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br>
              <br>
              
              <label for="discount">
                Discount @ 5%:
                <input type="text" id="discount" value="0.00" readonly/>
              </label>
              
              <br>
              <br>
              
               <label for="vat">
                VAT @ 10%:
                <input type="text" id="vat" value="0.00" readonly/>
              </label>
              
              <br>
              <br>
              
              
              
              <label for="total">
                Total:
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br>
              <br>
              <br>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            
            <button onClick="calcSub()">Calculate Cost</button>
            
            <a role="button" href="ebus1.php" style="color:white;">Clear Choice</a>
            
        </div>
    
    </body>
</html>