
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="../cssst/header1.css">
<link rel="stylesheet" type="text/css" href="../cssst/footer.css">
<link rel="stylesheet" type="text/css" href="../cssst/makeapp.css"> 
    </head>
    <body>
         <div id="divhead1">
<h1 id="h11"><br>Salon Cilendri</h1>
<h2 id="h21">Path to your dream</h2>
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
    
    <img id="log" width="300px" height="300px" src="../assests/login/salon_login.jpg" class="pic">
    

        <div class="bg">
            <form action="app_database.php" method="POST">
            
             <div id="main">
    <p id = "myw"><br><br>" Make your Appoinment"</p> 
    </div>
            <table class="tableAlign">
                
                <tr>
                    <td>User Name </td>
                    <td><input type="text" id="Username" name="Username" ></td>

                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="date" name="date" id="date"></td>

                </tr>
                
                <tr>
                    <td>Time</td>
                    <td><input type="time" name="time" id="time"></td>

                </tr>
                <tr>
                    <td>Appoinmnets type</td>
                    <td><select name="type"> 
                         <option name="hairdressing" value="hairdressing" id="hairdressing">Hair dressing </option>
                         <option name="haircut" value="haircut" id="haircut">Hair cut </option>
                        <option name="Dressing" value="Dressing" id="Dressing">Dressing </option>
                        <option name="haircolor" value="haircolor" id="haircolor">Hair color </option>
                        <option name="treatment" value="treatment" id="treatment"> Face treatment </option>
                        </select>
                    </td>

                </tr>
                
                <tr><td>&nbsp;</td></tr>
               
                <tr>  <td><input type="submit" value="Submit"  class="button2" ></td>   </tr>
                
                    </table>
           
             </form>
            
              
            <form action="cusview.php" method="post">
             <table class="tableAlign1"> <tr><td colspan="2"><p id ="myw2"><br><br>" View your Appoinment status"</p> </td></tr>
                 <tr>
                     <td>User Name :</td>
                    <td><input type="text" id="Username" name="Username">&nbsp;&nbsp;<input type="submit" value="View" class="button2"></td> </tr>
                 <tr>&nbsp;</tr>    
               
                <tr><td></td></tr>
            </table>
            </form>
        
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