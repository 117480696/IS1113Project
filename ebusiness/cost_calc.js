/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 150;
    }
    else if (document.getElementById('cloud9').checked){
      argSubTotal = 200;
    }
    else if (document.getElementById('aws').checked){
      argSubTotal = 330;
    }
    else{
      argSubTotal = 420;
    }
    
    calcDisVatTotal(argSubTotal);
}


function calcDisVatTotal(parmSubTotal){
  var subTotal = parmSubTotal
  var discountAmt;
  var vatAmt;
  var totalPrice;

  discountAmt = (parmSubTotal * 0.1);
  
  vatAmt = ((parmSubTotal - discountAmt) * 0.21);
  
  totalPrice = ((parmSubTotal + vatAmt) - discountAmt);
  
  display(subTotal, discountAmt, vatAmt, totalPrice);
}


function display(parm1, parm2, parm3, parm4){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("discount").value = parm2;
  document.getElementById("vat").value = parm3;
  document.getElementById("total").value = parm4;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}