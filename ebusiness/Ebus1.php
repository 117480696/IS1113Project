<!DOCTYPE html>
<html>
    <head>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
    </head>
    
    <body>
                <div class="topnav">
    
   
        <h1 align="center">Cirrus Services</h1>
 
        <h2 align="center">Select a Cloud Service</h2>
        
        <div>
             
         <ul>
           <li> <a  href = "../Homepage.html">Home</a> </li>
           
           <li> <a href = "../AboutCloud.html">About Cloud</a></li>
                 
           <li> <a href = "../Cirrus.html">Cirrus Home</a></li>
           
          </ul>
         
        </div>
          
        <div class="container2">
              
              
          <form method="POST" action="Ebus2.php">
            
           
            <label for="salesforce" class="lblsalesforce">
              <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
              SalesForce @ $200
            </label>
                
            <br>
            
            <label for="cloud9" class="lblcloud9">
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
               Cloud9 @ $250
            </label>
                
            <br>
                
            <label for="aws" class="lblaws">
              <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
              AWS @ $330
            </label>
                
            <br>
                
            <label for="gmail" class="lblgmail">
              <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
              Gmail @ $400
            </label>
            
            
            
            <label for="subtotal" class="lblsubtotal">
              Subtotal: 
              <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br>
            
            <label for="discount" class="lbldiscount">
              Discount @ 10%: <input type="text" id="discount" name="discount" value="0.00" readonly/>
              
              <br>
              
            </label>
                
            <br>
            
            <label for="vat" class="lblvat">
              VAT @ 21%: 
              <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
                
            <br>
                
            <label for="total" class="lbltotal">
              Total: 
              <input type="text" id="total" name="total" value="0.00" readonly/>
              <br>
            </label>
      
            <br>
            
            <div class="btnadd">   
              <button class="addbtnstyle" type="submit" id="btnProceed" disabled>Add to Basket</button>
            </div>  
              
          </form>
             
          <button class="btncal" onClick="calcSub()">Calculate Total</button>
             
          <br>
            
          
          <a class="btnclear" role="button" href="Ebus1.php">Clear</a>
        </div>
    </body>
</html>