<html>

<head>  <title> test php </title>  </head>

<body> 

    <h1> logout </h1>


   
   <?php
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');
 
if (!isset($_GET['code'])) {
 $authUrl = "https://login.windows.net/bf2c51f4-3849-44a5-9c2f-7b002ca9a168/oauth2/logout?";
 $authUrl .= "post_logout_redirect_uri=https%3A%2F%2Fwebservercilendri.azurewebsites.net%2F";
 
 header('Location: '.$authUrl);
 exit;
 
} 
 
?>
    
    </body>



</html>

