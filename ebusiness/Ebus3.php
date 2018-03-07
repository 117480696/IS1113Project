<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
        
         </head>
     
              
         <body>
          <div class="topnav">
    
    
             <h1 align="center">Cirrus Services</h1>
 
         
         <div>
             
         <ul>
           
        <li> <a href = "../Cirrus.html">Cirrus Home</a></li>  
        
        <li> <a href = "../AboutCloud.html">About Cloud</a></li>
           
        <li> <a  href = "../Homepage.html">Home</a> </li>
           
           
        </ul>
        
        </div>
        
        <?php  
        // Set session variables
          $_SESSION["username"] = $_POST["username"];
          $_SESSION["useremail"] = $_POST["useremail"];
        ?>
        
        <p class="ebus3name">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Name: " . $_SESSION["username"] . ".";
            ?>
        </p>
        
        <p class="ebus3email">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Email: " . $_SESSION["useremail"] . ".";
            ?>
        </p>
        
        <p class="ebus3total">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Total:&euro;" . $_SESSION["total"] . ".";
            ?>
        </p>
        </div>

    </body>
       
</html>