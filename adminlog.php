
<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cilendri";

$conn = new mysqli($servername, $username, $password, $dbname);*/

  
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>

<link rel="stylesheet" type="text/css" href="../cssst/header1.css">
<link rel="stylesheet" type="text/css" href="../cssst/footer.css">
<link rel="stylesheet" type="text/css" href="../cssst/adminlog.css"> 
    </head>
    
    <body>
        
       <div id="divhead1">

  <center>
     <img src="../assests/logo/logo.png" height="60px" width="300px">
<h1 id="h11">Salon Cilendri</h1>
<h2 id="h21">Path to your dream</h2>
</center>
   </div>

         <div id="nav">  

<ul class="main-navigation">

    <li><a href="home.php">Home</a></li>
    <li><a href="product2.php">Products</a></li> 
    <li><a href="bridal.php">Bridal</a></li>
    <li><a href="hair.php">Hair cuts</a></li>
   <li><a href="contact.php">Contacts</a></li>
    <li><a href="Appoinments.php">Appoinments</a></li>
     <li><a href="adminlog.php">Admin login</a></li>
</ul>
        </div>
 
        <div class="box">
    
    <img id="log" width="300px" height="300px" src="../assests/login/bridal.jpg" class="pic">

               <div class="bg">
            
             <div id="main">
    <h1 id="h"> Admin Login </h1>
    </div>
            <table class="tableAlign">
                
               <!-- <tr>
                    <td>User Name </td>
                    <td><input type="text" id="Username" name="Username" ></td>

                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="Password" id="Password" name="Password" ></td>

                </tr>-->
                
               
                <tr>  <td><input type="button" style="margin-left:150px;background-color:pink;border-color:#FF1493;color:#C71585;font-weight:800" value="Logging" class="button2" id="btnHome" 
onClick="document.location.href='auth.php'" />   </tr>
                
                    </table>
              </div>

        

                
               
                

             

        

</div>
         <div id="d11g">
            
        <p>
           
        2014-2018 Salon Cilendri.<br>
		Privacy Statement Terms and Conditions
        </p>
	</div>


    
    </body>
    
</html>