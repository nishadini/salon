
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cilendri";

$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//initializing attributes
$username=$_POST['username'];



$sql = "UPDATE appointment SET status='1' WHERE sino='$username'";

if ($conn->query($sql) === TRUE) {
   echo "<script>alert('Appointment Accepted.');window.location.href='adminhomepage.php';</script>"; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    
   
mysqli_close($conn);

?>