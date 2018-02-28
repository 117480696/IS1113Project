<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
    </head>
    
    <body>
        
         <div class="topnav">
    
   
        <h1 align="center">Cirrus Services</h1>
 
        <h2 align="center">Please Enter Payment Details</h2>
        
        <div>
             
         <ul>
           <li> <a  href = "../Homepage.html">Home</a> </li>
    
           <li> <a href = "../AboutCloud.html">About Cloud</a></li>
                 
           <li> <a href = "../Cirrus.html">Cirrus Home</a></li>
           
          </ul>
         
        </div>
        
        <form action="Ebus3.php" method="POST">
            
            <label for="username" class="lblname">
                Name
                <input type="name" id="username" name="username" placeholder="Enter Your Name">
            </label>
            
            <br>
            
            <label for="useremail" class="lblemail">
                Email address
                <input type="email" id="useremail" name="useremail" placeholder="example@gmail.com">
            </label>
            
            <br>

            <label for="userpin" class="lblpin">
                PIN
                <input type="pin" id="userpin" name="userpin" placeholder="Enter PIN" maxlength="4" pattern="\d{4}">
            </label>
            
            <br>
            <br>
            
            <button class="btnvalidate" onClick="validateName()">Validate</button>
      
        </form>
        
        <br>
            <button class="btnproceed" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        
    </body>
</html>