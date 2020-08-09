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


$username=$_POST['username'];


.
$sql = "UPDATE appointment SET view ='1' WHERE sino='$username' ";

if ($conn->query($sql) === TRUE) {
   echo "<script>alert('You have viewed your Appoinment .');window.location.href='makeapp.php';</script>"; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    
 