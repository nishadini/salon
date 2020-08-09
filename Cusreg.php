<!doctype html>
<!-- customer reg form-->

<html>
<head>
<meta charset="utf-8">
<title>Home</title>

<link rel="stylesheet" type="text/css" href="../cssst/header1.css">
<link rel="stylesheet" type="text/css" href="../cssst/footer.css">
<link rel="stylesheet" type="text/css" href="../cssst/cusreg.css">  
   
     <script type="text/javascript">
              
              
                function Validateform(){
                    value=true;
     if(document.getElementById('Username').value==""){
        
        alert("You have to fill Username");
        return false;
    }
    if(document.getElementById('Fname').value==""){
        alert("You have to fill First name");
        return false;
    }
    if(document.getElementById('ID').value==""){
        alert("You have to fill ID");
        return false;
    }
    if(document.getElementById('TP').value==""){
        alert("You have to fill Telephone No");
        return false;
    }
    if(document.getElementById('email').value==""){
        alert("You have to fill email");
        return false;
    }
    if(document.getElementById('password').value==""){
        alert("You have to fill password");
        return false;
    }
    if(document.getElementById('re-password').value==""){
        alert("You have to fill re-password");
        return false;
    }else{
        checkPassword();
        
    }                
    
                  
    
}
         
         function checkPassword() {
        var pass1 = document.getElementById('password').value;
        var pass2 = document.getElementById('re-password').value;

        if(pass1 != pass2){
            alert("Password not correct");
            return false;
        }else{
            return true;
        }
    }
              
 </script>    
    
</head>
    
    <body>
        
        <div id="divhead1">

 <center>
<img src="../assests/logo/logo.png" height="60px" width="300px">
<h1 id="h11">Salon Cilendri</h1>
<h2 id="h21">Path to your dream</h2></center> 
   </div>

        
       
<ul class="main-navigation">

    <li><a href="home.php">Home</a></li>
    <li><a href="product2.php">Products</a></li> 
    <li><a href="bridal.php">Bridal</a></li>
    <li><a href="hair.php">Hair cuts</a></li>
    <li><a href="contact.php">Contacts</a></li>
    <li><a href="Appoinments.php">Appoinments</a></li>
     
</ul>
  
 
        
      
<div class="box">
    
    <img id="log" width="300px" height="300px" src="../assests/login/bridal.jpg" class="pic">

    <form method="POST" action="Usernameconfirm.php">
        <div class="bg">
            
             <div id="main">
    <h1 id="h">Create Customer Account</h1>
    </div>
            <table class="tableAlign">
                
                <tr>
                    <td>User Name </td>
                    <td><input type="text" id="Username" name="Username" ></td>

                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" id="Fname" name="Fname" ></td>

                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" id="Lname" name="Lname" ></td>

                </tr>
                <tr>
                    <td>ID</td>
                    <td><input type="text" id="ID" name="ID" ></td>
                </tr>
                
                <tr>
                    <td>Mobile No</td>
                    <td><input type="text" id="TP" name="TP"></td>

                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" id="email" name="email"></td>

                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id="password"></td>

                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="re-password" id="re-password" ></td> 
                </tr>
                <tr><td>&nbsp;</td></tr>
                
                <tr>  <td><input type="submit" value="Submit"  class="button2" onclick="return Validateform(); "></td>   </tr>
                
                    </table>
              </div>

          </form>

                
               
                

             

        

</div>
         <div id="d11g">
            
        <p>
           
        2014-2018 Salon Cilendri.<br>
		Privacy Statement Terms and Conditions
        </p>
	</div>


    
    </body>
    
</html>