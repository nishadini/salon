

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="../cssst/header1.css">
<link rel="stylesheet" type="text/css" href="../cssst/footer.css">
<link rel="stylesheet" type="text/css" href="../cssst/appoinment.css">  

</head>
    
    <body>
        
     <div id="divhead1">

  <center>
     <center><img src="../assests/logo/logo.png" height="60px" width="300px"></center>
<h1 id="h11">Salon Cilendri</h1>
<h2 id="h21">Path to your dream</h2>
</center>
   </div>

   
<ul class="main-navigation">

    <li><a href="home.php">Home</a></li>
    <li><a href="product2.php">Products</a></li> 
    <li><a href="bridal.php">Bridal</a></li>
    <li><a href="hair.php">Hair cuts</a></li>
    <li><a href="contact.php">Contacts</a></li>
    <li><a href="Appoinments.php">Appoinments</a></li>
     <li><a href="adminlog.php">Admin login</a></li>
</ul>
    
        
       
	<h1 id="cl">Customer Login</h1>
	<p ><img class="pic" src= "../assests/login/customer.png"></p>


<div class="box1">
	<table id="tableAlign">
		<tr>
			<td id="acc">		<h3>Create an Account</h3>
						<p id="para">To make an appoinment you have to create an account</p>
                        <form action ="Cusreg.php">
						<input type="submit" class="button2" value="Create an Account" >
					    </form>
			</td>
			
			<td>
				
					<form  method="post" action="login_database.php">
						<h3 id="acc">Already Registered</h3>
						<table >
							<tr>
								<td id="acc">Username</td>
                                <td id="acc">  <input type="text" name="email"  placeholder="Username" ></td>
                            </tr>
							<tr>
                                <td id="acc">Password</td> 
                                <td id="acc">  
                                <input type="password" name="password"  placeholder="Password"></td>
                            </tr>
							<tr> 
                                <td id="acc"><input type="submit" class="button"  value="Login"></td> 
                            </tr>
						</table>
					</form>

			</td>
		</tr>
	</table>
</div>
        
         <div id="d11g">
            
        <p>
           
        2014-2018 Salon Cilendri.<br>
		Privacy Statement Terms and Conditions
        </p>
	</div>


        
    </body>
</html>

