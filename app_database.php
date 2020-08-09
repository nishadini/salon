
<?php

/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cilendri";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */

$conn=mysqli_init(); 
mysqli_ssl_set($con, NULL, NULL, "abcd.pem", NULL, NULL);
mysqli_real_connect($conn, "saloncilendridb.mysql.database.azure.com", "saloncilendri@saloncilendridb", "Sithara1995", "cilendri" , 3306);

if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$username=$_POST['Username'];
$date=$_POST['date'];
$time=$_POST['time'];
$a_type=$_POST['type'];



$sql1 = "SELECT username FROM userlogin";
$result1 = mysqli_query($conn, $sql1);

$x=0;
$status=0;
$view=0;

if (mysqli_num_rows($result1) > 0) {
    
    while($row = mysqli_fetch_assoc($result1)) {
               if($row['username']==$username){
                  

$sql="INSERT INTO appointment(username,date,time,a_type,status,view) values('$username','$date','$time','$a_type','$status','$view')";


if ($conn->query($sql) === TRUE) {
   echo "<script>alert('Appointment Request sent. View appoinment details for further informations ');window.location.href='makeapp.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
                	
              
                 $x=1;
                

           }}}


if ($x==0) {
    echo "<script>alert('Incorrect Username.');window.location.href='makeapp.php';</script>";
}
    

mysqli_close($conn);

?>