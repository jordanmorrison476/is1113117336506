/* global $ */

//This function calculates the subtotal based on the user's choice.

function calcSub(){
  
    // Declaring a subtotal variable  
    var argSubTotal;
    
    // Using conditional statements to determine what radio button the user selected.
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
      ('cloud9').checked = false;
    
    }
    else if(document.getElementById('cloud9').checked) {
      argSubTotal = 200;
    }
    else if(document.getElementById('aws').checked) {
      argSubTotal = 300;
    }
    else if(document.getElementById('gmail').checked) {
      argSubTotal = 400;
    }
    else {
      argSubTotal = 0;
       ('#btnProceed').prop('disabled', true);
    }
    
    // Passing the subtotal variable as an argument to the calcDisVatTotal() function.
    calcDisVatTotal(argSubTotal);
}

// This function computes the discount, vat and total price using the subtotal parameter.
function calcDisVatTotal(parmSubTotal){
    
    var subTotal, discountAmt, vatAmt, newSubTotal, totalPrice;
    
    //Using simple arithmetic to calculate the data.
    
    subTotal = parmSubTotal;
    
    discountAmt = subTotal * 0.05;
    
    newSubTotal = subTotal - discountAmt;
    
    vatAmt = newSubTotal * 0.10;
    
    totalPrice = ((subTotal + vatAmt) - discountAmt);
    
    //Each variable is sent to the display() function as arguments.
    display(subTotal, discountAmt, vatAmt, totalPrice);
    
}

//This function then displays the computed data.
function display(parm1, parm2, parm3, parm4){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("discount").value = parm2;
  document.getElementById("vat").value = parm3;
  document.getElementById("total").value = parm4;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
    // Using javascript to change the background color of the the disabled add to shopping cart button to green. 
    document.getElementById("btnProceed").style.backgroundColor = "#1faf07";
    document.getElementById("btnProceed").style.borderColor = "#1faf07";
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}