<?php

/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cilendri";

$conn = new mysqli($servername, $username, $password, $dbname);*/

//check for connection
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */

$conn=mysqli_init(); 
mysqli_ssl_set($con, NULL, NULL, "abcd.pem", NULL, NULL);
mysqli_real_connect($conn, "saloncilendridb.mysql.database.azure.com", "saloncilendri@saloncilendridb", "Sithara1995", "cilendri" , 3306);

if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}



//initializing attributes
$username=$_POST['Username'];
$firstname=$_POST['Fname'];
$lastname=$_POST['Lname'];
$id=$_POST['ID'];
$mobileno=$_POST['TP'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql1 = "SELECT username FROM userlogin";
$result1 = mysqli_query($conn, $sql1);

$x=0;

//Checking for username  availability.
if (mysqli_num_rows($result1) > 0) {
    
    while($row = mysqli_fetch_assoc($result1)) {
               if($row['username']==$username){
                  
                	
                  echo "<script>alert('Username is Currently Occupied.');window.location.href='Cusreg.php';</script>";
                 $x=1;
                

           }}}

if ($x==0) {


$sql="INSERT INTO userlogin(username,firstname,lastname,id,mobileno,email,password) values('$username','$firstname','$lastname','$id','$mobileno','$email','$password')";

//executing sql-query
if ($conn->query($sql) === TRUE) {
   echo "<script>alert('New Account Created successfully.');window.location.href='Appoinments.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
mysqli_close($conn);

?>