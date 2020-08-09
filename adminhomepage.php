

<!DOCTYPE html>
<html>
<head>
    
<link rel="stylesheet" type="text/css" href="../cssst/header1.css">
<link rel="stylesheet" type="text/css" href="../cssst/footer.css">
<link rel="stylesheet" type="text/css" href="../cssst/adminhome.css">  

</head>


<body>
  <div id="divhead1">

 <center>
<img src="../assests/logo/logo.png" height="60px" width="300px">
<h1 id="h11">Salon Cilendri</h1>
<h2 id="h21">Path to your dream</h2></center> 
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
    <li><a href="booked.php">Booked App</a></li>
    <li><a href="logout.php">Logout</a></li>


</ul>
    </div>

<h3 style="color: red">Appointments</h3>

<center>

<?php
/*$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "cilendri";

$conn = new mysqli($servername, $username1, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}*/


$conn=mysqli_init(); 
mysqli_ssl_set($con, NULL, NULL, "abcd.pem", NULL, NULL);
mysqli_real_connect($conn, "saloncilendridb.mysql.database.azure.com", "saloncilendri@saloncilendridb", "Sithara1995", "cilendri" , 3306);

if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$sql = "SELECT userlogin.username,firstname,lastname,id,mobileno,email,password,date,time,a_type,status,appointment.sino
FROM userlogin,appointment
where userlogin.username=appointment.username and status='0'";

$result= mysqli_query($conn, $sql);
echo  "<table id = 'records'>"; 
echo "<tr>";
      echo  "<th>FirstName</th>";
      echo  "<th>Last Name</th>";
      echo  "<th>Treatment Type</th>";
      echo  "<th>Date</th>";
      echo  "<th>Time</th>";
       echo  "<th>Accept</th>";
      echo  "<th>Reject</th>";
    
     
  echo "</tr>";    
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
              
$username =$row['sino'];
        
        echo "<tr><td>", $row['firstname'] , "</td><td>" , $row['lastname'] , "</td><td>" , $row['a_type'] , "</td><td>" , $row['date'] , "</td><td>", $row['time'] , "</td><td><form action = 'accept.php' method = 'post'><input type = 'hidden' name = 'username' value = ", $username, "><input type = 'submit' value = 'Accept'></form>", "</td><td><form action = 'reject.php' method = 'post'><input type = 'hidden' name = 'username' value = ", $username, "><input type = 'submit' value = 'Reject'></form>"
            ,"</td></tr>";
        
  
 }
 echo "</table>";
}



                  
mysqli_close($conn);
?> 
    
</body>
</html>